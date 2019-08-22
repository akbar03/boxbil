<?php
/**
 * BoxBilling
 *
 */

class Payment_Adapter_PayLane implements \Box\InjectionAwareInterface
{
    private $config = array();

    protected $di;

    public function setDi($di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }
    
    public function __construct($config)
    {
        $this->config = $config;
        
        if(!function_exists('curl_exec')) {
            throw new Payment_Exception('PHP Curl extension must be enabled in order to use PayLane gateway');
        }
        
        if(!isset($this->config['email'])) {
            throw new Payment_Exception('Payment gateway "PayLane" is not configured properly. Please update configuration parameter "PayLane Email address" at "Configuration -> Payments".');
        }

        if(!isset($this->config['merchant_id'])) {
            throw new Payment_Exception('Payment gateway "PayLane" is not configured properly. Please update configuration parameter "PayLane Merchant Id" at "Configuration -> Payments".');
        }

        if(!isset($this->config['password_api'])) {
            throw new Payment_Exception('Payment gateway "PayLane" is not configured properly. Please update configuration parameter "PayLane Password API" at "Configuration -> Payments".');
        }
    }

    public static function getConfig()
    {
        return array(
            'supports_one_time_payments'   =>  true,
            'supports_subscriptions'     =>  true,
            'description'     =>  'Enter your PayLane data to start accepting payments by PayLane.',
            'form'  => array(
                'email' => array('text', array(
                            'label' => 'PayLane email address for payments',
                            'validators'=>array('EmailAddress'),
                    ),
                 ),
                'merchant_id' => array('text', array(
                            'label' => 'PayLane Merchant ID (Keep this secret)',
                    ),
                 ),
                'password_api' => array('text', array(
                            'label' => 'PayLane Password API (Keep this secret)',
                    ),
                 ),
            ),
        );
    }

    public function getHtml($api_admin, $invoice_id, $subscription)
    {
        $invoice = $api_admin->invoice_get(array('id'=>$invoice_id));

        $data = array();
        $data = $this->getOneTimePaymentFields($invoice);
       
        $url = $this->config['notify_url'];
        return $this->_generateForm($url, $data);
    }

    public function processTransaction($api_admin, $id, $data, $gateway_id){
        if (isset($_POST['sale'])) {
            $array = $data['post'];
            
            $client = new PayLaneRestClient($this->config['merchant_id'], $this->config['password_api']);

            try {
                $status = $client->cardSale($array);
            } catch (Exception $e) {
                // handle exceptions here
                 var_dump($e);
            }   

            if ($client->isSuccess()) {
                if($this->config['test_mode']) {
                    print_r(json_encode($status)); die();
                }

                $ips = $status;
                $ipn = $data['post'];

                $tx = $api_admin->invoice_transaction_get(array('id'=>$id));
                
                if(!$tx['invoice_id']) {
                    $api_admin->invoice_transaction_update(array('id'=>$id, 'invoice_id'=>$data['get']['bb_invoice_id']));
                }
                
                if(!$tx['txn_id'] && isset($ips['id_sale'])) {
                    $api_admin->invoice_transaction_update(array('id'=>$id, 'txn_id'=>$ips['id_sale']));
                }
                
                if(!$tx['txn_status'] && isset($ips['success'])) {
                    $api_admin->invoice_transaction_update(array('id'=>$id, 'txn_status'=>'success'));
                }
                
                if(!$tx['amount'] && isset($ipn['sale']['amount'])) {
                    $api_admin->invoice_transaction_update(array('id'=>$id, 'amount'=>$ipn['sale']['amount']));
                }
                
                if(!$tx['currency'] && isset($ipn['sale']['currency'])) {
                    $api_admin->invoice_transaction_update(array('id'=>$id, 'currency'=>$ipn['sale']['currency']));
                }

                $invoice = $api_admin->invoice_get(array('id'=>$data['get']['bb_invoice_id']));
                $client_id = $invoice['client']['id'];

                if($ips['success'] == true) {
                    $bd = array(
                        'id'            =>  $client_id,
                        'amount'        =>  $ipn['sale']['amount'],
                        'description'   =>  'Paylane transaction '.$ips['id_sale'],
                        'type'          =>  'Paylane',
                        'rel_id'        =>  $ips['id_sale'],
                    );
                    if ($this->isIpnDuplicate($ips)){
                        throw new Payment_Exception('IPN is duplicate');
                    }
                    $api_admin->client_balance_add_funds($bd);
                    if($tx['invoice_id']) {
                        $api_admin->invoice_pay_with_credits(array('id'=>$tx['invoice_id']));
                    }
                    $api_admin->invoice_batch_pay_with_credits(array('client_id'=>$client_id));
                }
                
                $d = array(
                    'id'        => $id, 
                    'error'     => '',
                    'error_code'=> '',
                    'status'    => 'processed',
                    'updated_at'=> date('Y-m-d H:i:s'),
                );
                $api_admin->invoice_transaction_update($d);

            } else {
                die("Error ID: {$status['error']['id_error']}, \n".
                    "Error number: {$status['error']['error_number']}, \n".
                    "Error description: {$status['error']['error_description']}");
            }
        }
        
        header("Location: ". $this->config['return_url']);
        exit;
    }

    private function moneyFormat($amount, $currency)
    {
        //HUF currency do not accept decimal values
        if($currency == 'HUF') {
            return number_format($amount, 0);
        }
        return number_format($amount, 2, '.', '');
    }
    
    /**
     * @param string $url
     */
    private function _generateForm($url, $data, $method = 'post')
    {

        $form  = '';

        $form .= '
            <style type="text/css">
                fieldset.scheduler-border {
                    border: 1px groove #ffffff !important;
                    padding: 0 1.4em 1.4em 1.4em !important;
                    margin: 0 0 1.5em 0 !important;
                    -webkit-box-shadow:  0px 0px 0px 0px #000;
                            box-shadow:  0px 0px 0px 0px #000;
                }

                legend.scheduler-border {
                  font-size: 1em !important;
                  font-weight: bold !important;
                  text-align: left !important;
                  width:auto;
                  padding:0 10px;
                  border-bottom:none;
                }
            </style>
            <form id="paylane-form"  action="'.$url.'" method="'.$method.'">
                <div class="row">
                    <div class="col-4 col-s-6">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Sale:</legend>
                            <label>Amount:</label>
                            <input type="text" required readonly name="sale[amount]" value="'.$data['amount'].'">
                            <label>Currency:</label>
                            <input type="text" required readonly name="sale[currency]" value="'.$data['currency'].'">
                            <label>Description:</label>
                            <input type="text" required readonly name="sale[description]" value="'.$data['transaction_description'].'">
                        </fieldset>
                    </div>
                    <div class="col-4 col-s-6">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Customer:</legend>
                            <label>Nama:</label>
                            <input type="text" required name="customer[name]" value="'.$data['name'].'">
                            <label>Email:</label>
                            <input type="text" required name="customer[email]" value="'.$data['email'].'">
                            <label>IP:</label>
                            <input type="text" required name="customer[ip]" value="127.0.0.1">
                            <label>Address:</label>
                            <input type="text" required name="customer[address][street_house]" value="'.$data['address'].'">
                            <label>City:</label>
                            <input type="text" required name="customer[address][city]" value="'.$data['city'].'">
                            <label>State:</label>
                            <input type="text" required name="customer[address][state]" value="'.$data['state'].'">
                            <label>Zip:</label>
                            <input type="text" required name="customer[address][zip]" value="'.$data['zip'].'">
                            <label>Country Code:</label>
                            <input type="text" required name="customer[address][country_code]" value="'.$data['country_code'].'">
                        </fieldset>
                    </div>
                    <div class="col-4 col-s-12">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Card:</legend>
                            <label>Card number:</label>
                            <input type="text" required name="card[card_number]"  value="4111111111111111"  /><br>

                            <label>Name on card:</label>
                            <input type="text" required name="card[name_on_card]"  value="John Smith" /><br>

                            <label>Expiration date:</label>
                            <input type="text" required name="card[expiration_month]" value="08" />
                            <input type="text" required name="card[expiration_year]" value="2020" /><br>

                            <label>CVV/CVC number:</label>
                            <input type="text" name="card[card_code]" value="123" /><br>
                        </fieldset>
                    </div>
                </div>
                    <input type="submit" id="paylane-submit" value="Submit" />
            </form>
        ';

        return $form;   
    }

    /**
     * @param string $txn_id
     */
    public function isIpnDuplicate(array $ipn)
    {
        $sql = 'SELECT id
                FROM transaction
                WHERE txn_id = :transaction_id
                  AND txn_status = :transaction_status
                  AND type = :transaction_type
                  AND amount = :transaction_amount
                LIMIT 2';

        $bindings = array(
            ':transaction_id' => $ipn['txn_id'],
            ':transaction_status' => $ipn['payment_status'],
            ':transaction_type' => $ipn['txn_type'],
            ':transaction_amount' => $ipn['mc_gross'],
        );

        $rows = $this->di['db']->getAll($sql, $bindings);
        if (count($rows) > 1){
            return true;
        }

        return false;
    }

    public function getInvoiceTitle(array $invoice)
    {
        $p = array(
            ':id'=>sprintf('%05s', $invoice['nr']),
            ':serie'=>$invoice['serie'],
            ':title'=>$invoice['lines'][0]['title']
        );
        return __('Payment for invoice :serie:id [:title]', $p);
    }

    public function getOneTimePaymentFields(array $invoice)
    {
        $data = array();

        $data['amount']                     = $this->moneyFormat($invoice['total'], $invoice['currency']); // Regular subscription price.
        $data['currency']                   = $invoice['currency'];
        $data['transaction_description']    = $this->getInvoiceTitle($invoice);

        $buyer = $invoice['buyer'];

        $data['name']                       = $buyer['first_name'];
        $data['email']                      = $buyer['email'];
        $data['ip']                         = "127.0.0.1";
        $data['address']                    = $buyer['address'];
        $data['city']                       = $buyer['city'];
        $data['state']                      = $buyer['state'];
        $data['zip']                        = $buyer['zip'];
        $data['country_code']               = "USA";

        $data['card_number']                = "4111111111111111";
        $data['name_on_card']               = "John Smith";//$buyer['first_name'];;
        $data['expiration_month']           = "05";
        $data['expiration_year']            = "2020";
        $data['card_code']                  = "123";
        return $data;
    }
}

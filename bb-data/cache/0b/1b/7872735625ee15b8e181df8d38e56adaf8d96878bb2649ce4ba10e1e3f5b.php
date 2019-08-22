<?php

/* layout_default.phtml */
class __TwigTemplate_0b1b7872735625ee15b8e181df8d38e56adaf8d96878bb2649ce4ba10e1e3f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'head' => array($this, 'block_head'),
            'content_wide' => array($this, 'block_content_wide'),
            'left_top' => array($this, 'block_left_top'),
            'nav' => array($this, 'block_nav'),
            'left_bottom' => array($this, 'block_left_bottom'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 2
        $context["profile"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "profile_get");
        // line 3
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 4
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
        echo "</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />

    <link rel=\"shortcut icon\" href=\"favicon.ico\" />

    ";
        // line 13
        $this->env->loadTemplate("partial_bb_meta.phtml")->display($context);
        // line 14
        echo "    
    ";
        // line 15
        $this->env->loadTemplate("partial_styles.phtml")->display($context);
        // line 16
        echo "
    <script type=\"text/javascript\" src=\"js/boxbilling.min.js?v=";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/bb-admin.js?v=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\"></script>

    ";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "</head>

<body>
";
        // line 24
        if ((!(isset($context["admin"]) ? $context["admin"] : null))) {
            // line 25
            echo "<script type=\"text/javascript\">\$(function(){bb.redirect(\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/login");
            echo "\");});</script>
";
        } else {
            // line 27
            echo "<div id=\"topNav\">
    <div class=\"fixed\">
        <div class=\"wrapper\">
            <div class=\"welcome\">
                <a href=\"";
            // line 31
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/profile");
            echo "\" title=\"\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
            echo "\" /></a><span>";
            echo gettext("Hi,");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
            echo "!</span>
                ";
            // line 32
            $context["languages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_languages");
            // line 33
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
                // line 34
                echo "                <span>
                    <select name=\"lang\" class=\"language_selector\" style=\"background-color: #262b2f; color:white;\">
                        ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 37
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                    echo "\" class=\"lang_";
                    echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, gettext((isset($context["lang"]) ? $context["lang"] : null)), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    </select>
                </span>
                ";
            }
            // line 42
            echo "            </div>
            <div class=\"userNav\">
                <ul>
                    <li class=\"loading\" style=\"display:none;\"><img src=\"images/loader.gif\" alt=\"\" /><span>";
            // line 45
            echo gettext("Loading ...");
            echo "</span></li>
                    <li class=\"dd\"><span><i class=\"sprite-topnav sprite-topnav-register\" style=\"margin-right: 5px;\"></i>";
            // line 46
            echo gettext("New");
            echo "</span>
                        ";
            // line 47
            $this->env->loadTemplate("partial_menu_top.phtml")->display($context);
            // line 48
            echo "                    </li>
                    ";
            // line 49
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "system")), "method")) {
                // line 50
                echo "                    <li class=\"dd\"><span><i class=\"sprite-topnav sprite-topnav-settings\" style=\"margin-right: 5px;\"></i>";
                echo gettext("Settings");
                echo "</span>
                        <ul class=\"menu_body\">
                            <li><a href=\"";
                // line 52
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
                echo "\" title=\"\">";
                echo gettext("All settings");
                echo "</a></li>
                            <li><a href=\"";
                // line 53
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("theme");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_theme"), "code"), "html", null, true);
                echo "\" title=\"\">";
                echo gettext("Theme settings");
                echo "</a></li>
                        </ul>
                    </li>
                    ";
            }
            // line 57
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\" title=\"\" target=\"_blank\"><span><i class=\"sprite-topnav sprite-topnav-mainWebsite\" style=\"margin-right: 5px;\"></i>";
            echo gettext("Visit site");
            echo "</span></a></li>
                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/profile/logout");
            echo "\" title=\"\" class=\"api-link\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/login");
            echo "\"><span><i class=\"sprite-topnav sprite-topnav-logout\" style=\"margin-right: 5px;\"></i>";
            echo gettext("Logout");
            echo "</span></a></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>
    </div>
</div>

<div id=\"header\" class=\"wrapper\">
    <div class=\"logo\"><a href=\"";
            // line 67
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
            echo "\" title=\"\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
            echo "\" style=\"max-height: 50px;\"/></a></div>
    <div class=\"middleNav\">
        
    \t<ul>
            ";
            // line 71
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "notification")), "method") && $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "notification")), "method"))) {
                // line 72
                echo "            ";
                $context["count_notifications"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "notification_get_list", array(0 => array("per_page" => 1)), "method"), "total");
                // line 73
                echo "        \t<li class=\"iMegaphone\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("notification");
                echo "\" title=\"\"><span>";
                echo gettext("Notifications");
                echo "</span></a>";
                if ((isset($context["count_notifications"]) ? $context["count_notifications"] : null)) {
                    echo "<span class=\"numberMiddle\">";
                    echo twig_escape_filter($this->env, (isset($context["count_notifications"]) ? $context["count_notifications"] : null), "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 75
            echo "            
            ";
            // line 76
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "order")), "method")) {
                // line 77
                echo "            ";
                $context["count_orders"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_statuses"), "failed_setup");
                // line 78
                echo "        \t<li class=\"iOrders\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("status" => "failed_setup"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-basket2\"></i>";
                echo gettext("Orders");
                echo "</span></a>";
                if ((isset($context["count_orders"]) ? $context["count_orders"] : null)) {
                    echo "<span class=\"numberMiddle\">";
                    echo twig_escape_filter($this->env, (isset($context["count_orders"]) ? $context["count_orders"] : null), "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 80
            echo "            
            ";
            // line 81
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "invoice")), "method")) {
                // line 82
                echo "            ";
                $context["count_invoices"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_statuses"), "unpaid");
                // line 83
                echo "        \t<li class=\"iInvoices\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "unpaid"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-money\"></i>";
                echo gettext("Invoices");
                echo "</span></a>";
                if ((isset($context["count_invoices"]) ? $context["count_invoices"] : null)) {
                    echo "<span class=\"numberMiddle\">";
                    echo twig_escape_filter($this->env, (isset($context["count_invoices"]) ? $context["count_invoices"] : null), "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 85
            echo "            
            ";
            // line 86
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "support")), "method")) {
                // line 87
                echo "            ";
                $context["count_tickets"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses"), "open");
                // line 88
                echo "            ";
                $context["count_ptickets"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_public_ticket_get_statuses"), "open");
                // line 89
                echo "        \t<li class=\"iSpeech\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-tickets", array("status" => "open"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-speech\"></i>";
                echo gettext("Inquiries");
                echo "</span></a>";
                if ((isset($context["count_ptickets"]) ? $context["count_ptickets"] : null)) {
                    echo "<span class=\"numberMiddle\">";
                    echo twig_escape_filter($this->env, (isset($context["count_ptickets"]) ? $context["count_ptickets"] : null), "html", null, true);
                    echo "</span>";
                }
                echo "</li>
        \t<li class=\"iMes\"><a href=\"";
                // line 90
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-dialog\"></i>";
                echo gettext("Tickets");
                echo "</span></a>";
                if ((isset($context["count_tickets"]) ? $context["count_tickets"] : null)) {
                    echo "<span class=\"numberMiddle\">";
                    echo twig_escape_filter($this->env, (isset($context["count_tickets"]) ? $context["count_tickets"] : null), "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 92
            echo "            
            ";
            // line 93
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "client")), "method")) {
                // line 94
                echo "            <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-user\"></i>";
                echo gettext("Clients");
                echo "</span></a></li>
            ";
            }
            // line 96
            echo "            
        \t<li><a href=\"";
            // line 97
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("index");
            echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-home\"></i>";
            echo gettext("Dashboard");
            echo "</span></a></li>
        </ul>
    </div>
    <div class=\"fix\"></div>
</div>


<div class=\"wrapper\">
    
    ";
            // line 106
            if ((isset($context["hide_menu"]) ? $context["hide_menu"] : null)) {
                // line 107
                echo "    
    ";
                // line 108
                $this->displayBlock('content_wide', $context, $blocks);
                // line 109
                echo "    
    ";
            } else {
                // line 111
                echo "    <div class=\"leftNav\">
    ";
                // line 112
                $this->displayBlock('left_top', $context, $blocks);
                echo "    
    ";
                // line 113
                $this->displayBlock('nav', $context, $blocks);
                // line 114
                echo "    ";
                $this->displayBlock('left_bottom', $context, $blocks);
                // line 115
                echo "    </div>
    
    ";
                // line 117
                $this->displayBlock('before_content', $context, $blocks);
                // line 118
                echo "    <div class=\"content\">

        <div class=\"breadCrumbHolder module\">
            <div class=\"breadCrumb module\">
                ";
                // line 122
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 128
                echo "            </div>
        </div>

        ";
                // line 131
                $this->displayBlock('top_content', $context, $blocks);
                // line 132
                echo "        ";
                $this->displayBlock('content', $context, $blocks);
                // line 133
                echo "    </div>
    ";
            }
            // line 135
            echo "    <div class=\"fix\"></div>
</div>

<div id=\"footer\">
\t<div class=\"wrapper\">
        ";
            // line 140
            $this->env->loadTemplate("partial_footer.phtml")->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null))));
            // line 141
            echo "    </div>
</div>
<div class=\"loading dim\"></div>    
    ";
            // line 144
            $this->displayBlock('js', $context, $blocks);
            // line 145
            echo "    <noscript id=\"noscript\">
        <div class=\"msg error\">
        NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.
        </div>
    </noscript>
";
        }
        // line 151
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
    }

    // line 108
    public function block_content_wide($context, array $blocks = array())
    {
    }

    // line 112
    public function block_left_top($context, array $blocks = array())
    {
    }

    // line 113
    public function block_nav($context, array $blocks = array())
    {
        $this->env->loadTemplate("partial_menu.phtml")->display($context);
    }

    // line 114
    public function block_left_bottom($context, array $blocks = array())
    {
    }

    // line 117
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 122
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 123
        echo "                <ul>
                    <li class=\"firstB\"><a href=\"";
        // line 124
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
                    <li class=\"lastB\">";
        // line 125
        $this->displayBlock("meta_title", $context, $blocks);
        echo "</li>
                </ul>
                ";
    }

    // line 131
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
    }

    // line 144
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 144,  482 => 132,  477 => 131,  464 => 124,  461 => 123,  458 => 122,  442 => 113,  437 => 112,  417 => 151,  409 => 145,  407 => 144,  402 => 141,  400 => 140,  393 => 135,  389 => 133,  384 => 131,  379 => 128,  377 => 122,  371 => 118,  369 => 117,  365 => 115,  362 => 114,  360 => 113,  356 => 112,  353 => 111,  349 => 109,  347 => 108,  344 => 107,  342 => 106,  328 => 97,  325 => 96,  317 => 94,  315 => 93,  312 => 92,  299 => 90,  286 => 89,  283 => 88,  280 => 87,  278 => 86,  261 => 83,  256 => 81,  253 => 80,  239 => 78,  236 => 77,  234 => 76,  231 => 75,  214 => 72,  212 => 71,  185 => 58,  167 => 53,  161 => 52,  155 => 50,  153 => 49,  150 => 48,  148 => 47,  144 => 46,  140 => 45,  117 => 37,  113 => 36,  109 => 34,  106 => 33,  104 => 32,  92 => 31,  86 => 27,  80 => 25,  78 => 24,  73 => 21,  71 => 20,  66 => 18,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  41 => 7,  36 => 4,  34 => 3,  32 => 2,  30 => 1,  758 => 331,  755 => 330,  742 => 320,  734 => 315,  729 => 313,  721 => 310,  712 => 303,  703 => 300,  700 => 299,  691 => 295,  685 => 294,  680 => 292,  677 => 291,  672 => 290,  664 => 285,  660 => 284,  648 => 275,  638 => 268,  629 => 262,  624 => 260,  614 => 253,  609 => 251,  603 => 248,  595 => 243,  590 => 241,  582 => 236,  577 => 234,  568 => 229,  563 => 226,  555 => 221,  550 => 219,  542 => 214,  537 => 212,  529 => 207,  524 => 205,  516 => 200,  511 => 198,  502 => 192,  497 => 190,  491 => 187,  483 => 182,  478 => 180,  470 => 125,  465 => 173,  457 => 168,  453 => 117,  448 => 114,  440 => 162,  432 => 108,  429 => 155,  427 => 20,  422 => 7,  413 => 148,  410 => 147,  399 => 143,  395 => 142,  390 => 140,  386 => 132,  376 => 138,  366 => 137,  352 => 136,  346 => 135,  334 => 132,  329 => 130,  326 => 129,  320 => 128,  318 => 127,  309 => 121,  305 => 120,  301 => 119,  297 => 118,  293 => 117,  285 => 112,  275 => 85,  271 => 104,  267 => 103,  263 => 102,  258 => 82,  255 => 98,  241 => 91,  233 => 90,  225 => 89,  217 => 73,  213 => 86,  211 => 85,  201 => 67,  187 => 71,  178 => 57,  172 => 66,  159 => 60,  151 => 59,  143 => 58,  135 => 42,  130 => 39,  121 => 49,  116 => 47,  107 => 41,  102 => 39,  93 => 33,  88 => 31,  79 => 25,  74 => 23,  65 => 17,  60 => 15,  54 => 14,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}

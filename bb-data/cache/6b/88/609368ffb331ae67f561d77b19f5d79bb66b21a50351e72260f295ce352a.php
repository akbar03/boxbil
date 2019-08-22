<?php

/* partial_menu.phtml */
class __TwigTemplate_6b88609368ffb331ae67f561d77b19f5d79bb66b21a50351e72260f295ce352a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"main-navigation nav-collapse collapse\">

    ";
        // line 3
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_dashboard")) {
            // line 4
            echo "    <li class=\"main-menu\">
        <a class=\"no-submenu\" href=\"";
            // line 5
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\"><span class=\"awe-home\"></span>";
            echo gettext("Dashboard");
            echo "</a>
    </li>
    ";
        }
        // line 8
        echo "    
    ";
        // line 9
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_order")) {
            // line 10
            echo "    <li class=\"main-menu\">
        <a href=\"#\" class=\"order-button\"><span class=\"awe-shopping-cart\"></span>";
            // line 11
            echo gettext("Order");
            echo "</a>
    </li>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_support")) {
            // line 16
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/support");
            echo "\"><span class=\"awe-wrench\"></span>";
            echo gettext("Support");
            echo "</a>
    </li>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_services")) {
            // line 22
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 23
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service");
            echo "\"><span class=\"awe-cogs\"></span>";
            echo gettext("Services");
            echo "</a>
    </li>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_invoices")) {
            // line 28
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 29
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/invoice");
            echo "\"><span class=\"awe-file-alt\"></span>";
            echo gettext("Invoices");
            echo "</a>
    </li>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_emails")) {
            // line 34
            echo "    <li class=\"main-menu\">
        <a  href=\"";
            // line 35
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/email");
            echo "\"><span class=\"awe-envelope-alt\"></span>";
            echo gettext("Emails");
            echo "</a>
    </li>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_payments")) {
            // line 40
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/client/balance");
            echo "\"><span class=\"awe-credit-card\"></span>";
            echo gettext("Payments history");
            echo "</a>
    </li>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 46
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 47
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "\"><span class=\"awe-edit\"></span>";
            echo gettext("Blog");
            echo "</a>
    </li>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 52
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/kb");
            echo "\"><span class=\"awe-book\"></span>";
            echo gettext("Knowledge Base");
            echo "</a>
    </li>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "forum")), "method")) {
            // line 58
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 59
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/forum");
            echo "\"><span class=\"awe-comments\"></span>";
            echo gettext("Forum");
            echo "</a>
    </li>
    ";
        }
        // line 62
        echo "</ul>

<script type=\"text/javascript\">
    \$('.main-menu').each(function(index){
        var menu_link = \$(this).children('a').attr('href');
        if (\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_current_url"), "html", null, true);
        echo "\" ==\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"){
            \$('.main-menu:first').addClass(\"current\");
        }
        else if ('";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_current_url"), "html", null, true);
        echo "'.indexOf(menu_link) >= 0 && menu_link != \"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"){
            \$(this).addClass(\"current\");
      }
    });

</script>";
    }

    public function getTemplateName()
    {
        return "partial_menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 67,  170 => 59,  165 => 57,  154 => 53,  149 => 51,  146 => 50,  138 => 47,  133 => 45,  119 => 40,  117 => 39,  106 => 35,  90 => 29,  87 => 28,  82 => 26,  55 => 16,  50 => 14,  41 => 10,  36 => 8,  23 => 3,  809 => 191,  804 => 190,  799 => 189,  792 => 172,  789 => 171,  784 => 174,  782 => 171,  776 => 170,  773 => 169,  770 => 168,  759 => 263,  754 => 260,  750 => 258,  744 => 256,  742 => 255,  739 => 254,  733 => 251,  730 => 250,  727 => 249,  724 => 247,  720 => 245,  712 => 243,  704 => 241,  702 => 240,  699 => 239,  696 => 238,  692 => 236,  684 => 234,  676 => 232,  674 => 231,  671 => 230,  668 => 229,  664 => 227,  655 => 224,  647 => 222,  645 => 221,  642 => 220,  639 => 219,  635 => 217,  627 => 215,  619 => 213,  617 => 212,  614 => 211,  611 => 210,  607 => 208,  599 => 206,  591 => 204,  589 => 203,  586 => 202,  584 => 201,  577 => 199,  574 => 198,  572 => 197,  565 => 192,  562 => 191,  559 => 190,  557 => 189,  554 => 188,  552 => 187,  544 => 179,  542 => 178,  539 => 177,  536 => 176,  533 => 168,  531 => 167,  525 => 163,  517 => 158,  513 => 157,  509 => 155,  507 => 154,  504 => 153,  498 => 150,  494 => 149,  491 => 148,  489 => 147,  486 => 146,  475 => 140,  469 => 139,  464 => 137,  456 => 136,  447 => 134,  443 => 132,  441 => 131,  437 => 129,  435 => 128,  428 => 124,  421 => 119,  415 => 117,  413 => 116,  407 => 114,  395 => 109,  391 => 108,  388 => 107,  385 => 106,  383 => 105,  378 => 102,  368 => 99,  365 => 98,  360 => 96,  350 => 93,  347 => 92,  336 => 88,  333 => 87,  330 => 86,  315 => 81,  312 => 80,  299 => 74,  289 => 72,  283 => 70,  279 => 69,  272 => 65,  263 => 61,  257 => 59,  254 => 58,  245 => 52,  243 => 51,  241 => 50,  235 => 48,  233 => 47,  230 => 46,  225 => 41,  204 => 12,  198 => 7,  193 => 70,  186 => 278,  180 => 276,  178 => 62,  169 => 272,  167 => 58,  164 => 270,  162 => 56,  150 => 43,  148 => 42,  144 => 41,  137 => 38,  135 => 46,  126 => 34,  122 => 41,  118 => 32,  114 => 38,  110 => 30,  97 => 26,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 22,  65 => 15,  61 => 14,  57 => 13,  53 => 15,  48 => 10,  44 => 11,  39 => 9,  384 => 85,  374 => 80,  357 => 71,  351 => 68,  339 => 58,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 83,  318 => 50,  316 => 49,  304 => 47,  281 => 41,  276 => 38,  265 => 37,  251 => 34,  240 => 33,  215 => 37,  201 => 25,  189 => 24,  151 => 52,  134 => 13,  130 => 44,  121 => 11,  107 => 10,  95 => 7,  78 => 5,  73 => 19,  67 => 3,  34 => 36,  28 => 5,  25 => 4,  22 => 17,  19 => 1,  558 => 221,  549 => 186,  546 => 185,  534 => 214,  526 => 213,  521 => 212,  516 => 211,  508 => 206,  497 => 197,  488 => 194,  485 => 193,  471 => 190,  463 => 189,  458 => 188,  453 => 187,  445 => 182,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  414 => 166,  410 => 115,  399 => 159,  393 => 158,  387 => 155,  375 => 146,  371 => 145,  367 => 78,  363 => 97,  359 => 142,  355 => 141,  344 => 91,  338 => 134,  332 => 131,  317 => 82,  313 => 48,  309 => 117,  305 => 75,  301 => 115,  297 => 114,  286 => 71,  280 => 105,  268 => 64,  264 => 95,  260 => 60,  256 => 93,  252 => 57,  248 => 91,  237 => 85,  231 => 82,  226 => 29,  224 => 78,  220 => 38,  210 => 18,  200 => 64,  196 => 62,  183 => 58,  179 => 57,  175 => 274,  171 => 55,  163 => 19,  159 => 45,  155 => 52,  152 => 51,  147 => 50,  140 => 39,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  111 => 35,  105 => 28,  103 => 34,  101 => 33,  98 => 32,  96 => 27,  93 => 25,  85 => 27,  81 => 22,  77 => 21,  74 => 23,  72 => 19,  69 => 21,  66 => 20,  58 => 17,  52 => 9,  49 => 8,  46 => 7,  43 => 1,  37 => 45,  31 => 1,  26 => 15,);
    }
}

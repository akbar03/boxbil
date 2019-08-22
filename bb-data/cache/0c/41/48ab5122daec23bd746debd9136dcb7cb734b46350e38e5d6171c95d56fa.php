<?php

/* partial_menu_top.phtml */
class __TwigTemplate_0c4148ab5122daec23bd746debd9136dcb7cb734b46350e38e5d6171c95d56fa extends Twig_Template
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
        echo "                        <ul class=\"menu_body\">
                            ";
        // line 2
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "order")), "method")) {
            // line 3
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order#tab-new");
            echo "\" title=\"\">";
            echo gettext("Order");
            echo "</a></li>
                            ";
        }
        // line 5
        echo "                            
                            ";
        // line 6
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "invoice")), "method")) {
            // line 7
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice#tab-new");
            echo "\" title=\"\">";
            echo gettext("Invoice");
            echo "</a></li>
                            ";
        }
        // line 9
        echo "                            
                            ";
        // line 10
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "client")), "method")) {
            // line 11
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client#tab-new");
            echo "\" title=\"\">";
            echo gettext("Client");
            echo "</a></li>
                            ";
        }
        // line 13
        echo "                            
                            ";
        // line 14
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "product")), "method")) {
            // line 15
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product#tab-new");
            echo "\" title=\"\">";
            echo gettext("Product");
            echo "</a></li>
                            ";
        }
        // line 17
        echo "                            
                            ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "support")), "method")) {
            // line 19
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support#tab-new");
            echo "\" title=\"\">";
            echo gettext("Support ticket");
            echo "</a></li>
                            ";
        }
        // line 21
        echo "                            
                            ";
        // line 22
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "staff")), "method")) {
            // line 23
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/staff#tab-new");
            echo "\" title=\"\">";
            echo gettext("Staff member");
            echo "</a></li>
                            ";
        }
        // line 25
        echo "                            
                            ";
        // line 26
        if (($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "news")), "method"))) {
            // line 27
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("news#tab-new");
            echo "\" title=\"\">";
            echo gettext("Announcement");
            echo "</a></li>
                            ";
        }
        // line 29
        echo "                            
                            ";
        // line 30
        if (($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "forum")), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "forum")), "method"))) {
            // line 31
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("forum#tab-new");
            echo "\" title=\"\">";
            echo gettext("Forum topic");
            echo "</a></li>
                            ";
        }
        // line 33
        echo "                        </ul>";
    }

    public function getTemplateName()
    {
        return "partial_menu_top.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  115 => 31,  110 => 29,  100 => 26,  97 => 25,  89 => 23,  87 => 22,  84 => 21,  76 => 19,  63 => 15,  61 => 14,  58 => 13,  50 => 11,  48 => 10,  45 => 9,  35 => 6,  24 => 3,  665 => 137,  657 => 131,  654 => 129,  652 => 128,  641 => 127,  623 => 123,  618 => 122,  613 => 119,  602 => 118,  588 => 115,  552 => 112,  539 => 109,  536 => 108,  533 => 107,  530 => 106,  527 => 105,  521 => 103,  518 => 102,  515 => 101,  512 => 100,  509 => 99,  506 => 98,  504 => 97,  501 => 96,  499 => 95,  496 => 94,  493 => 93,  490 => 92,  484 => 90,  481 => 89,  469 => 88,  455 => 85,  452 => 84,  449 => 83,  446 => 82,  443 => 81,  434 => 78,  431 => 77,  428 => 76,  425 => 75,  419 => 73,  416 => 72,  404 => 71,  388 => 67,  359 => 61,  348 => 57,  336 => 55,  331 => 52,  308 => 49,  298 => 47,  292 => 43,  277 => 41,  273 => 40,  269 => 39,  259 => 37,  257 => 36,  254 => 35,  249 => 34,  237 => 33,  208 => 23,  199 => 22,  170 => 17,  166 => 16,  157 => 15,  131 => 11,  114 => 9,  103 => 7,  77 => 5,  51 => 1,  46 => 126,  43 => 117,  40 => 113,  37 => 7,  31 => 70,  25 => 21,  22 => 2,  19 => 1,  487 => 91,  482 => 132,  477 => 131,  464 => 124,  461 => 123,  458 => 122,  442 => 113,  437 => 79,  417 => 151,  409 => 145,  407 => 144,  402 => 141,  400 => 140,  393 => 135,  389 => 133,  384 => 131,  379 => 128,  377 => 122,  371 => 63,  369 => 117,  365 => 115,  362 => 114,  360 => 113,  356 => 112,  353 => 111,  349 => 109,  347 => 108,  344 => 107,  342 => 106,  328 => 97,  325 => 96,  317 => 94,  315 => 93,  312 => 50,  299 => 90,  286 => 89,  283 => 88,  280 => 87,  278 => 86,  261 => 83,  256 => 81,  253 => 80,  239 => 78,  236 => 77,  234 => 76,  231 => 75,  214 => 72,  212 => 71,  185 => 58,  167 => 53,  161 => 52,  155 => 50,  153 => 49,  150 => 48,  148 => 47,  144 => 46,  140 => 45,  117 => 37,  113 => 30,  109 => 8,  106 => 33,  104 => 32,  92 => 6,  86 => 27,  80 => 25,  78 => 24,  73 => 21,  71 => 17,  66 => 18,  62 => 2,  59 => 16,  57 => 15,  52 => 13,  41 => 7,  36 => 4,  34 => 87,  32 => 5,  30 => 1,  758 => 331,  755 => 330,  742 => 320,  734 => 315,  729 => 313,  721 => 310,  712 => 303,  703 => 300,  700 => 299,  691 => 295,  685 => 294,  680 => 292,  677 => 291,  672 => 290,  664 => 285,  660 => 284,  648 => 275,  638 => 268,  629 => 262,  624 => 260,  614 => 253,  609 => 251,  603 => 248,  595 => 243,  590 => 241,  582 => 236,  577 => 114,  568 => 229,  563 => 226,  555 => 221,  550 => 219,  542 => 214,  537 => 212,  529 => 207,  524 => 104,  516 => 200,  511 => 198,  502 => 192,  497 => 190,  491 => 187,  483 => 182,  478 => 180,  470 => 125,  465 => 173,  457 => 168,  453 => 117,  448 => 114,  440 => 80,  432 => 108,  429 => 155,  427 => 20,  422 => 74,  413 => 148,  410 => 147,  399 => 143,  395 => 142,  390 => 140,  386 => 132,  376 => 138,  366 => 137,  352 => 136,  346 => 135,  334 => 132,  329 => 130,  326 => 129,  320 => 128,  318 => 127,  309 => 121,  305 => 120,  301 => 119,  297 => 118,  293 => 117,  285 => 112,  275 => 85,  271 => 104,  267 => 103,  263 => 102,  258 => 82,  255 => 98,  241 => 91,  233 => 90,  225 => 89,  217 => 27,  213 => 26,  211 => 85,  201 => 67,  187 => 19,  178 => 57,  172 => 66,  159 => 60,  151 => 59,  143 => 14,  135 => 42,  130 => 39,  121 => 49,  116 => 47,  107 => 41,  102 => 27,  93 => 33,  88 => 31,  79 => 25,  74 => 18,  65 => 17,  60 => 15,  54 => 14,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 3,);
    }
}

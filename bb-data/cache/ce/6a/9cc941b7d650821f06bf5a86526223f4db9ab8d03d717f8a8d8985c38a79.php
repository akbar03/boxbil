<?php

/* partial_pending_messages.phtml */
class __TwigTemplate_ce6a9cc941b7d650821f06bf5a86526223f4db9ab8d03d717f8a8d8985c38a79 extends Twig_Template
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
        $context["pending_messages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_get_pending_messages");
        // line 2
        if ((isset($context["pending_messages"]) ? $context["pending_messages"] : null)) {
            // line 3
            echo "<script>
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pending_messages"]) ? $context["pending_messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "        bb.msg('";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "');
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pending_messages.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  21 => 2,  33 => 4,  185 => 67,  170 => 59,  165 => 57,  154 => 53,  149 => 51,  146 => 50,  138 => 47,  133 => 45,  119 => 40,  117 => 39,  106 => 35,  90 => 29,  87 => 28,  82 => 26,  55 => 16,  50 => 14,  41 => 10,  36 => 8,  23 => 3,  809 => 191,  804 => 190,  799 => 189,  792 => 172,  789 => 171,  784 => 174,  782 => 171,  776 => 170,  773 => 169,  770 => 168,  759 => 263,  754 => 260,  750 => 258,  744 => 256,  742 => 255,  739 => 254,  733 => 251,  730 => 250,  727 => 249,  724 => 247,  720 => 245,  712 => 243,  704 => 241,  702 => 240,  699 => 239,  696 => 238,  692 => 236,  684 => 234,  676 => 232,  674 => 231,  671 => 230,  668 => 229,  664 => 227,  655 => 224,  647 => 222,  645 => 221,  642 => 220,  639 => 219,  635 => 217,  627 => 215,  619 => 213,  617 => 212,  614 => 211,  611 => 210,  607 => 208,  599 => 206,  591 => 204,  589 => 203,  586 => 202,  584 => 201,  577 => 199,  574 => 198,  572 => 197,  565 => 192,  562 => 191,  559 => 190,  557 => 189,  554 => 188,  552 => 187,  544 => 179,  542 => 178,  539 => 177,  536 => 176,  533 => 168,  531 => 167,  525 => 163,  517 => 158,  513 => 157,  509 => 155,  507 => 154,  504 => 153,  498 => 150,  494 => 149,  491 => 148,  489 => 147,  486 => 146,  475 => 140,  469 => 139,  464 => 137,  456 => 136,  447 => 134,  443 => 132,  441 => 131,  437 => 129,  435 => 128,  428 => 124,  421 => 119,  415 => 117,  413 => 116,  407 => 114,  395 => 109,  391 => 108,  388 => 107,  385 => 106,  383 => 105,  378 => 102,  368 => 99,  365 => 98,  360 => 96,  350 => 93,  347 => 92,  336 => 88,  333 => 87,  330 => 86,  315 => 81,  312 => 80,  299 => 74,  289 => 72,  283 => 70,  279 => 69,  272 => 65,  263 => 61,  257 => 59,  254 => 58,  245 => 52,  243 => 51,  241 => 50,  235 => 48,  233 => 47,  230 => 46,  225 => 41,  204 => 12,  198 => 7,  193 => 70,  186 => 278,  180 => 276,  178 => 62,  169 => 272,  167 => 58,  164 => 270,  162 => 56,  150 => 43,  148 => 42,  144 => 41,  137 => 38,  135 => 46,  126 => 34,  122 => 41,  118 => 32,  114 => 38,  110 => 30,  97 => 26,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 22,  65 => 15,  61 => 14,  57 => 13,  53 => 15,  48 => 10,  44 => 11,  39 => 7,  384 => 85,  374 => 80,  357 => 71,  351 => 68,  339 => 58,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 83,  318 => 50,  316 => 49,  304 => 47,  281 => 41,  276 => 38,  265 => 37,  251 => 34,  240 => 33,  215 => 37,  201 => 25,  189 => 24,  151 => 52,  134 => 13,  130 => 44,  121 => 11,  107 => 10,  95 => 7,  78 => 5,  73 => 19,  67 => 3,  34 => 36,  28 => 3,  25 => 4,  22 => 17,  19 => 1,  558 => 221,  549 => 186,  546 => 185,  534 => 214,  526 => 213,  521 => 212,  516 => 211,  508 => 206,  497 => 197,  488 => 194,  485 => 193,  471 => 190,  463 => 189,  458 => 188,  453 => 187,  445 => 182,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  414 => 166,  410 => 115,  399 => 159,  393 => 158,  387 => 155,  375 => 146,  371 => 145,  367 => 78,  363 => 97,  359 => 142,  355 => 141,  344 => 91,  338 => 134,  332 => 131,  317 => 82,  313 => 48,  309 => 117,  305 => 75,  301 => 115,  297 => 114,  286 => 71,  280 => 105,  268 => 64,  264 => 95,  260 => 60,  256 => 93,  252 => 57,  248 => 91,  237 => 85,  231 => 82,  226 => 29,  224 => 78,  220 => 38,  210 => 18,  200 => 64,  196 => 62,  183 => 58,  179 => 57,  175 => 274,  171 => 55,  163 => 19,  159 => 45,  155 => 52,  152 => 51,  147 => 50,  140 => 39,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  111 => 35,  105 => 28,  103 => 34,  101 => 33,  98 => 32,  96 => 27,  93 => 25,  85 => 27,  81 => 22,  77 => 21,  74 => 23,  72 => 19,  69 => 21,  66 => 20,  58 => 17,  52 => 9,  49 => 8,  46 => 7,  43 => 1,  37 => 5,  31 => 1,  26 => 4,);
    }
}

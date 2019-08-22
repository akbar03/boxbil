<?php

/* [{{ guest.system_company.name }}] New Order Placed */
class __TwigTemplate_070ec5ab4051913d7e4d62904da33f5fddbc35cf6a7a2d71df281d43baa4254b extends Twig_Template
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
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "name"), "html", null, true);
        echo "] New Order Placed";
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] New Order Placed";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  57 => 7,  46 => 5,  40 => 3,  34 => 2,  31 => 1,  19 => 1,  79 => 13,  74 => 11,  67 => 9,  62 => 7,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  35 => 1,);
    }
}

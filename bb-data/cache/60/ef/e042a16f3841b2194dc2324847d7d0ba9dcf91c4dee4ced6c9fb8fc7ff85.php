<?php

/* [{{ guest.system_company.name }}] Invoice Created */
class __TwigTemplate_60efe042a16f3841b2194dc2324847d7d0ba9dcf91c4dee4ced6c9fb8fc7ff85 extends Twig_Template
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
        echo "] Invoice Created";
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] Invoice Created";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  79 => 13,  74 => 11,  67 => 9,  62 => 7,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  35 => 1,);
    }
}

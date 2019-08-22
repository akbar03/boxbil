<?php

/* 
{% filter markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

This is to notify that proforma invoice {{ invoice.id }} was generated on {{ invoice.created_at|bb_date }}.
Amount Due: {{ invoice.total | money(invoice.currency) }}
Due Date: {{invoice.due_at|bb_date}}

You can view and pay the invoice at: {{'invoice'|link}}/{{invoice.hash}}

Login to members area: {{'login'|link({'email' : c.email }) }}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_0ed430260a3625679a4b89b147c22b7ffeb0954b957951517b9f719bb9dce584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_4f153a893bf71b1f2871b9f26051169b9a40680088d98a10ded561c686b1664f' => array($this, 'block___internal_4f153a893bf71b1f2871b9f26051169b9a40680088d98a10ded561c686b1664f'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_4f153a893bf71b1f2871b9f26051169b9a40680088d98a10ded561c686b1664f", $context, $blocks));
    }

    public function block___internal_4f153a893bf71b1f2871b9f26051169b9a40680088d98a10ded561c686b1664f($context, array $blocks = array())
    {
        // line 3
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "last_name"), "html", null, true);
        echo ",

This is to notify that proforma invoice ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo " was generated on ";
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
        echo ".
Amount Due: ";
        // line 6
        echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
        echo "
Due Date: ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")), "html", null, true);
        echo "

You can view and pay the invoice at: ";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "

Login to members area: ";
        // line 11
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login", array("email" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "email")));
        echo "

";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

This is to notify that proforma invoice {{ invoice.id }} was generated on {{ invoice.created_at|bb_date }}.
Amount Due: {{ invoice.total | money(invoice.currency) }}
Due Date: {{invoice.due_at|bb_date}}

You can view and pay the invoice at: {{'invoice'|link}}/{{invoice.hash}}

Login to members area: {{'login'|link({'email' : c.email }) }}

{{ guest.system_company.signature }}

{% endfilter %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  74 => 11,  67 => 9,  62 => 7,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  35 => 1,);
    }
}

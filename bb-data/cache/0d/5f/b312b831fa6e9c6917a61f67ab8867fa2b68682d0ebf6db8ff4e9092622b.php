<?php

/* 
{% filter markdown %}
Hi {{ staff.name }},

Client **{{ order.client.first_name }} {{ order.client.last_name }}** placed a new order for **{{ order.title }}** on {{ order.created_at|bb_date }}

Manage order {{'order/manage'|alink}}/{{order.id}}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_0d5fb312b831fa6e9c6917a61f67ab8867fa2b68682d0ebf6db8ff4e9092622b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_21fa734a304705aa160077e604a33938a0eaff0f34eae1f47dcde797ac317666' => array($this, 'block___internal_21fa734a304705aa160077e604a33938a0eaff0f34eae1f47dcde797ac317666'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_21fa734a304705aa160077e604a33938a0eaff0f34eae1f47dcde797ac317666", $context, $blocks));
    }

    public function block___internal_21fa734a304705aa160077e604a33938a0eaff0f34eae1f47dcde797ac317666($context, array $blocks = array())
    {
        // line 3
        echo "Hi ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "name"), "html", null, true);
        echo ",

Client **";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
        echo "** placed a new order for **";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "** on ";
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at")), "html", null, true);
        echo "

Manage order ";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}
Hi {{ staff.name }},

Client **{{ order.client.first_name }} {{ order.client.last_name }}** placed a new order for **{{ order.title }}** on {{ order.created_at|bb_date }}

Manage order {{'order/manage'|alink}}/{{order.id}}

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
        return array (  64 => 9,  57 => 7,  46 => 5,  40 => 3,  34 => 2,  31 => 1,  19 => 1,  79 => 13,  74 => 11,  67 => 9,  62 => 7,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  35 => 1,);
    }
}

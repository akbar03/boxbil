<?php

/* mod_order_index.phtml */
class __TwigTemplate_7901f6344baed4dd3ec01f14651814ca4ecc3bea7e1b8967395c3fa981350a3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 5
        $context["loader_nr"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "loader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "loader"), "8")) : ("8"));
        // line 6
        $context["loader_url"] = (("img/assets/loaders/loader" . (isset($context["loader_nr"]) ? $context["loader_nr"] : null)) . ".gif");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Order");
    }

    // line 8
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h2>";
        // line 17
        echo gettext("Select Product");
        echo "</h2>
                <p>";
        // line 18
        echo gettext("Choose products we offer for selling");
        echo "</p>
            </header>
            <section>
                <img id=\"loader-image\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_mod_asset_url((isset($context["loader_url"]) ? $context["loader_url"] : null), "orderbutton"), "html", null, true);
        echo "\" style=\"display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%\" />
                <iframe style=\"width: 100%;\" frameborder=\"0\" allowtransparency=\"true\" onload='javascript:resizeIframe(this);' id=\"popup-iframe\"  src=\"";
        // line 22
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton");
        echo "&theme_color=";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "theme_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "theme_color"), "green")) : ("green")), "html", null, true);
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id")) {
            echo "&order=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id"), "html", null, true);
        }
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_custom_form_values")) {
            echo "&show_custom_form_values=1";
        }
        echo "&loader=3\" id=\"popup-iframe\"/>
            </section>
        </div>
    </article>
</div>
";
    }

    // line 29
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 35
        echo "
<script language=\"javascript\" type=\"text/javascript\">
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
        \$('#loader-image').hide();
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  98 => 33,  93 => 30,  90 => 29,  71 => 22,  67 => 21,  61 => 18,  57 => 17,  50 => 12,  47 => 11,  42 => 8,  36 => 3,  31 => 6,  29 => 5,  27 => 2,);
    }
}

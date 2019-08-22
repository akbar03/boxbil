<?php

/* layout_default.phtml */
class __TwigTemplate_a81fcfe55ad158ceff2786a075ce88ca4e8ef96a9f34eddbbaa79b48b99f9053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'opengraph' => array($this, 'block_opengraph'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>    <html class=\"no-js ie8 ie\" lang=\"en\"> <![endif]-->
<!--[if IE 9]>    <html class=\"no-js ie9 ie\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_robots"), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_author"), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 18
        $this->displayBlock('opengraph', $context, $blocks);
        // line 19
        echo "
    <link rel='stylesheet' type='text/css' href=\"";
        // line 20
        echo twig_asset_url($this->env, (("css/huraga-" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "color_scheme")) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 21
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 22
        echo twig_asset_url($this->env, "css/logos.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 23
        echo twig_asset_url($this->env, "css/flags16.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 30
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 32
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 33
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 34
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 35
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\" defer=\"defer\"></script>

    ";
        // line 37
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 39
        echo "</head>

<body class=\"";
        // line 41
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
";
        // line 42
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "cookieconsent")), "method")) {
            // line 43
            echo "    ";
            try {
                $this->env->loadTemplate("mod_cookieconsent_index.phtml")->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_order") || $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_order"))) {
            // line 272
            echo "<script src=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton/js", array("options" => "1", "width" => 600, "theme_color" => "green", "background_color" => "black", "background_opacity" => 50, "background_close" => 1, "bind_selector" => ".order-button", "border_radius" => 0, "loader" => 8));
            echo "\" ></script>
";
        }
        // line 274
        echo "
";
        // line 275
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "inject_javascript")) {
            // line 276
            echo "    ";
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "inject_javascript");
            echo "
";
        }
        // line 278
        try {
            $this->env->loadTemplate("partial_pending_messages.phtml")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 279
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_title"), "html", null, true);
    }

    // line 12
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), "html", null, true);
    }

    // line 18
    public function block_opengraph($context, array $blocks = array())
    {
    }

    // line 37
    public function block_head($context, array $blocks = array())
    {
    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        if ((!(isset($context["client"]) ? $context["client"] : null))) {
            // line 48
            echo "<script type=\"text/javascript\">\$(function(){bb.redirect('";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login");
            echo "');});</script>
";
        } else {
            // line 50
            $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
            // line 51
            $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
            // line 52
            echo "
<div id=\"wrapper\">
    <header class=\"container\" id=\"header\">
    <nav>
        <ul class=\"f16\">
            ";
            // line 57
            $context["languages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_languages");
            // line 58
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
                // line 59
                echo "            ";
                $context["currentLang"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_locale");
                // line 60
                echo "            ";
                $context["countryCode"] = twig_slice($this->env, (isset($context["currentLang"]) ? $context["currentLang"] : null), 3, 2);
                // line 61
                echo "                <li>
                    <div class=\"btn-group\">
                        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <span class=\"flag  ";
                // line 64
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["countryCode"]) ? $context["countryCode"] : null)), "html", null, true);
                echo "\"></span>
                            ";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["countryCode"]) ? $context["countryCode"] : null), "html", null, true);
                echo "
                            <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            ";
                // line 69
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 70
                    echo "                            ";
                    $context["countryCode"] = twig_slice($this->env, (isset($context["lang"]) ? $context["lang"] : null), 3, 2);
                    // line 71
                    echo "                            ";
                    if (((isset($context["lang"]) ? $context["lang"] : null) != (isset($context["currentLang"]) ? $context["currentLang"] : null))) {
                        // line 72
                        echo "                                    <li class=\"language_selector\" data-language-code=\"";
                        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                        echo "\"><a href=\"javascript:;\"> <span class=\"flag ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["countryCode"]) ? $context["countryCode"] : null)), "html", null, true);
                        echo "\"></span> ";
                        echo twig_escape_filter($this->env, gettext((isset($context["lang"]) ? $context["lang"] : null)), "html", null, true);
                        echo "</a></li>
                                ";
                    }
                    // line 74
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                        </ul>
                    </div>
                </li>

            ";
            }
            // line 80
            echo "
            ";
            // line 81
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_dashboard")) {
                // line 82
                echo "            <li>
                <a href=\"";
                // line 83
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("");
                echo "\" class=\"show-tip\" title=\"";
                echo gettext("Dashboard");
                echo "\">";
                echo gettext("Dashboard");
                echo "</a>
            </li>
            ";
            }
            // line 86
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_order")) {
                // line 87
                echo "            <li class=\"order-button\">
                <a href=\"#\" class=\"show-tip\" title=\"";
                // line 88
                echo gettext("Order");
                echo "\">";
                echo gettext("Order services");
                echo "</a>
            </li>
            ";
            }
            // line 91
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_profile")) {
                // line 92
                echo "            <li>
                <a href=\"";
                // line 93
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
                echo "\" class=\"show-tip\" title=\"";
                echo gettext("Profile");
                echo "\">";
                echo gettext("Profile");
                echo "</a>
            </li>
            ";
            }
            // line 96
            echo "
            ";
            // line 97
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_signout")) {
                // line 98
                echo "            <li>
                <a href=\"";
                // line 99
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/logout");
                echo "\" class=\"show-tip\" title=\"";
                echo gettext("Sign out");
                echo "\">";
                echo gettext("Sign out");
                echo "</a>
            </li>
            ";
            }
            // line 102
            echo "        </ul>
    </nav>

    ";
            // line 105
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_company_logo")) {
                // line 106
                echo "        ";
                if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url")) {
                    // line 107
                    echo "            <h1>
                <a href=\"";
                    // line 108
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
                    echo "\">
                    <img src=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
                    echo "\" style=\"max-height: 75px\"/>
                </a>
                <p></p>
            </h1>
        ";
                }
                // line 114
                echo "    ";
            }
            // line 115
            echo "
    ";
            // line 116
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_company_name")) {
                // line 117
                echo "    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
                echo "</p>
    ";
            }
            // line 119
            echo "</header>
    <section class=\"container\" role=\"main\">
        <div class=\"navigation-block\">

            <div class=\"navbar\">
                <a class=\"btn btn-navbar btn-block btn-large\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"awe-user\"></span> ";
            // line 124
            echo gettext("User profile");
            echo "</a>
            </div>

            <nav class=\"main-navigation nav-collapse collapse\" role=\"navigation\">
                ";
            // line 128
            $this->env->loadTemplate("partial_menu.phtml")->display($context);
            // line 129
            echo "            </nav>

            ";
            // line 131
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_client_details")) {
                // line 132
                echo "            <section class=\"user-profile\">
                <figure>
                    <img alt=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name"), "html", null, true);
                echo " gravatar\" src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), 60), "html", null, true);
                echo "\">
                    <figcaption>
                        <strong><a href=\"";
                // line 136
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/profile");
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name"), "html", null, true);
                echo "</a></strong>
                        <em>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company"), "html", null, true);
                echo "</em>
                        <ul>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 139
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/profile");
                echo "\">";
                echo gettext("profile");
                echo "</a></li>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 140
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/logout");
                echo "\">";
                echo gettext("sign out");
                echo "</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </section>
            ";
            }
            // line 146
            echo "
            ";
            // line 147
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_balance_enabled")) {
                // line 148
                echo "            <section class=\"balance\">
                <h2>";
                // line 149
                echo gettext("Account balance");
                echo "</h2>
                <strong>";
                // line 150
                echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
                echo "</strong>
            </section>
            ";
            }
            // line 153
            echo "
            ";
            // line 154
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_note_enabled")) {
                // line 155
                echo "            <section class=\"side-note\">
                <div class=\"side-note-container\">
                    <h2>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_note_title"), "html", null, true);
                echo "</h2>
                    <p>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_note_content"), "html", null, true);
                echo "</p>
                </div>
                <div class=\"side-note-bottom\"></div>
            </section>
            ";
            }
            // line 163
            echo "        </div>

        <div class=\"content-block\" role=\"main\">

            ";
            // line 167
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_breadcrumb")) {
                // line 168
                echo "            ";
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 176
                echo "            ";
            }
            // line 177
            echo "
            ";
            // line 178
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_page_header")) {
                // line 179
                echo "            ";
                // line 185
                echo "            ";
            }
            // line 186
            echo "
            ";
            // line 187
            $this->env->loadTemplate("partial_message.phtml")->display($context);
            // line 188
            echo "
            ";
            // line 189
            $this->displayBlock('content_before', $context, $blocks);
            // line 190
            echo "            ";
            $this->displayBlock('content', $context, $blocks);
            // line 191
            echo "            ";
            $this->displayBlock('content_after', $context, $blocks);
            // line 192
            echo "        </div>
    </section>
    <div id=\"push\"></div>
</div>

";
            // line 197
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_enabled")) {
                // line 198
                echo "<footer id=\"footer\" class=\"container\">
    <p>&copy; ";
                // line 199
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
                echo " ";
                echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_signature"), $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature"))) : ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature")));
                echo "</p>
    <ul>
        ";
                // line 201
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_enabled")) {
                    // line 202
                    echo "        <li>
            ";
                    // line 203
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page")))) {
                        // line 204
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 206
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 208
                    echo "        </li>
        ";
                }
                // line 210
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_enabled")) {
                    // line 211
                    echo "        <li>
            ";
                    // line 212
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page")))) {
                        // line 213
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 215
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 217
                    echo "        </li>
        ";
                }
                // line 219
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_enabled")) {
                    // line 220
                    echo "        <li>
            ";
                    // line 221
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page")))) {
                        // line 222
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 224
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_title"), "html", null, true);
                        echo "</a>

            ";
                    }
                    // line 227
                    echo "        </li>
        ";
                }
                // line 229
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_enabled")) {
                    // line 230
                    echo "        <li>
            ";
                    // line 231
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page")))) {
                        // line 232
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 234
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 236
                    echo "        </li>
        ";
                }
                // line 238
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_enabled")) {
                    // line 239
                    echo "        <li>
            ";
                    // line 240
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page")))) {
                        // line 241
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 243
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 245
                    echo "        </li>
        ";
                }
                // line 247
                echo "
        ";
                // line 249
                echo "        ";
                if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
                    // line 250
                    echo "        <li>
            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">";
                    // line 251
                    echo gettext("Powered by BoxBilling");
                    echo "</a>
        </li>
        ";
                }
                // line 254
                echo "    </ul>
    ";
                // line 255
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_to_top_enabled")) {
                    // line 256
                    echo "    <a href=\"#top\" class=\"btn btn-primary btn-flat pull-right\"><span class=\"awe-arrow-up\"></span> ";
                    echo gettext("Top");
                    echo "</a>
    ";
                }
                // line 258
                echo "</footer>
";
            }
            // line 260
            echo "
<div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
    <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
        <img src=\"";
            // line 263
            echo twig_asset_url($this->env, "img/loader.gif");
            echo "\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
    </div>
</div>
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

";
        }
    }

    // line 168
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 169
        echo "            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 170
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a> <span class=\"divider\">/</span></li>
                ";
        // line 171
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 174
        echo "            </ul>
            ";
    }

    // line 171
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 172
        echo "                <li class=\"active\">";
        echo gettext("Dashboard");
        echo "</li>
                ";
    }

    // line 189
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 190
    public function block_content($context, array $blocks = array())
    {
    }

    // line 191
    public function block_content_after($context, array $blocks = array())
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
        return array (  809 => 191,  804 => 190,  799 => 189,  792 => 172,  789 => 171,  784 => 174,  782 => 171,  776 => 170,  773 => 169,  770 => 168,  759 => 263,  754 => 260,  750 => 258,  744 => 256,  742 => 255,  739 => 254,  733 => 251,  730 => 250,  727 => 249,  724 => 247,  720 => 245,  712 => 243,  704 => 241,  702 => 240,  699 => 239,  696 => 238,  692 => 236,  684 => 234,  676 => 232,  674 => 231,  671 => 230,  668 => 229,  664 => 227,  655 => 224,  647 => 222,  645 => 221,  642 => 220,  639 => 219,  635 => 217,  627 => 215,  619 => 213,  617 => 212,  614 => 211,  611 => 210,  607 => 208,  599 => 206,  591 => 204,  589 => 203,  586 => 202,  584 => 201,  577 => 199,  574 => 198,  572 => 197,  565 => 192,  562 => 191,  559 => 190,  557 => 189,  554 => 188,  552 => 187,  544 => 179,  542 => 178,  539 => 177,  536 => 176,  533 => 168,  531 => 167,  525 => 163,  517 => 158,  513 => 157,  509 => 155,  507 => 154,  504 => 153,  498 => 150,  494 => 149,  491 => 148,  489 => 147,  486 => 146,  475 => 140,  469 => 139,  464 => 137,  456 => 136,  447 => 134,  443 => 132,  441 => 131,  437 => 129,  435 => 128,  428 => 124,  421 => 119,  415 => 117,  413 => 116,  407 => 114,  395 => 109,  391 => 108,  388 => 107,  385 => 106,  383 => 105,  378 => 102,  368 => 99,  365 => 98,  360 => 96,  350 => 93,  347 => 92,  336 => 88,  333 => 87,  330 => 86,  315 => 81,  312 => 80,  299 => 74,  289 => 72,  283 => 70,  279 => 69,  272 => 65,  263 => 61,  257 => 59,  254 => 58,  245 => 52,  243 => 51,  241 => 50,  235 => 48,  233 => 47,  230 => 46,  225 => 41,  204 => 12,  198 => 7,  193 => 279,  186 => 278,  180 => 276,  178 => 275,  169 => 272,  167 => 271,  164 => 270,  162 => 46,  150 => 43,  148 => 42,  144 => 41,  137 => 38,  135 => 37,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  97 => 26,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 7,  384 => 85,  374 => 80,  357 => 71,  351 => 68,  339 => 58,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 83,  318 => 50,  316 => 49,  304 => 47,  281 => 41,  276 => 38,  265 => 37,  251 => 34,  240 => 33,  215 => 37,  201 => 25,  189 => 24,  151 => 15,  134 => 13,  130 => 35,  121 => 11,  107 => 10,  95 => 7,  78 => 5,  73 => 19,  67 => 3,  34 => 36,  28 => 27,  25 => 22,  22 => 17,  19 => 9,  558 => 221,  549 => 186,  546 => 185,  534 => 214,  526 => 213,  521 => 212,  516 => 211,  508 => 206,  497 => 197,  488 => 194,  485 => 193,  471 => 190,  463 => 189,  458 => 188,  453 => 187,  445 => 182,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  414 => 166,  410 => 115,  399 => 159,  393 => 158,  387 => 155,  375 => 146,  371 => 145,  367 => 78,  363 => 97,  359 => 142,  355 => 141,  344 => 91,  338 => 134,  332 => 131,  317 => 82,  313 => 48,  309 => 117,  305 => 75,  301 => 115,  297 => 114,  286 => 71,  280 => 105,  268 => 64,  264 => 95,  260 => 60,  256 => 93,  252 => 57,  248 => 91,  237 => 85,  231 => 82,  226 => 29,  224 => 78,  220 => 38,  210 => 18,  200 => 64,  196 => 62,  183 => 58,  179 => 57,  175 => 274,  171 => 55,  163 => 19,  159 => 45,  155 => 52,  152 => 51,  147 => 50,  140 => 39,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  111 => 35,  105 => 28,  103 => 30,  101 => 27,  98 => 28,  96 => 27,  93 => 25,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  58 => 2,  52 => 9,  49 => 8,  46 => 7,  43 => 1,  37 => 45,  31 => 1,  26 => 15,);
    }
}

<?php

/* layout_default.phtml */
class __TwigTemplate_93c25b363ac41e9b435c81f5d55929df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'opengraph' => array($this, 'block_opengraph'),
            'head' => array($this, 'block_head'),
            'header_buttons' => array($this, 'block_header_buttons'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
            'sidebar' => array($this, 'block_sidebar'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["company"] = $this->getAttribute($_guest_, "system_company");
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_title"), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/"), "html", null, true);
        echo "\"/>
    
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo "\" />
    <meta name=\"robots\" content=\"index, follow\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_asset_url($this->env, "favicon.png");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 17
        echo twig_stylesheet_tag(twig_asset_url($this->env, "print.css"), "print");
        echo "
    ";
        // line 18
        echo twig_stylesheet_tag(twig_asset_url($this->env, "style.css"));
        echo "
    <!--[if IE 6]>";
        // line 19
        echo twig_stylesheet_tag(twig_asset_url($this->env, "ie6.css"));
        echo "<![endif]-->
    <!--[if IE 7]>";
        // line 20
        echo twig_stylesheet_tag(twig_asset_url($this->env, "ie.css"));
        echo "<![endif]-->

    ";
        // line 22
        echo twig_script_tag(twig_asset_url($this->env, "jquery.min.js"));
        echo "
    ";
        // line 23
        echo twig_script_tag(twig_asset_url($this->env, "jquery.tipsy.js"));
        echo "
    ";
        // line 24
        echo twig_script_tag(twig_asset_url($this->env, "bb-jquery.js"));
        echo "

    ";
        // line 26
        $this->displayBlock('opengraph', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "</head>

<body>

<div class=\"header\">
    <div class=\"container_16\">
        <div class=\"grid_4\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
        echo "\">
                ";
        // line 36
        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
        if ($this->getAttribute($_company_, "logo_url")) {
            // line 37
            echo "                    ";
            if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
            echo twig_img_tag($this->getAttribute($_company_, "logo_url"));
            echo "
                ";
        } else {
            // line 39
            echo "                    ";
            echo twig_img_tag(twig_asset_url($this->env, "images/logo.png"));
            echo "
                ";
        }
        // line 41
        echo "            </a>
        </div>

        <div class=\"grid_12\">
            ";
        // line 45
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ($_client_) {
            // line 46
            echo "            <ul class=\"middleNav\">
                <li>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Dashboard");
            echo "\"><span class=\"big-dark-icon i-home\"></span></a>
                </li>
                <li>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("cart"), "html", null, true);
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Shopping cart");
            echo "\"><span class=\"big-dark-icon i-cart\"></span></a>
                </li>
                <li>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("me"), "html", null, true);
            echo "\" class=\"show-tip\" title=\"";
            echo gettext("Profile");
            echo "\"><span class=\"big-dark-icon i-profile\"></span></a>
                </li>
                <li>
                    <a href=\"client/client/logout\" class=\"show-tip api\" title=\"";
            // line 57
            echo gettext("Sign out");
            echo "\"><span class=\"big-dark-icon i-logout\"></span></a>
                </li>
            </ul>

            ";
        } else {
            // line 62
            echo "            ";
            $this->displayBlock('header_buttons', $context, $blocks);
            // line 68
            echo "            ";
        }
        // line 69
        echo "        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div id=\"main\">
    <div class=\"container_16\">
        ";
        // line 76
        $this->displayBlock('content_before', $context, $blocks);
        // line 77
        echo "
        <div class=\"grid_12\">
            ";
        // line 79
        $this->env->loadTemplate("partial_message.phtml")->display($context);
        // line 80
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "            ";
        $this->displayBlock('content_after', $context, $blocks);
        // line 82
        echo "        </div>

        <div class=\"grid_4\">
            ";
        // line 85
        $this->displayBlock('sidebar', $context, $blocks);
        // line 86
        echo "
            ";
        // line 87
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$_client_)) {
            // line 88
            echo "            <div class=\"widget\" id=\"login-form\" style=\"display: none;\" >
                <div class=\"head\">
                    <h2 class=\"dark-icon i-profile\">";
            // line 90
            echo gettext("Login to client area");
            echo "</h2>
                </div>
                <div class=\"block\">
                <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"guest/client/login\" data-api-redirect=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
            echo "\">
                    <fieldset>
                        <legend>";
            // line 95
            echo gettext("Login to client area");
            echo "</legend>
                        <p>
                            <input type=\"email\" name=\"email\" value=\"";
            // line 97
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
            echo "\" required=\"required\" placeholder=\"";
            echo gettext("Email address");
            echo "\">
                        </p>
                        <p>
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" placeholder=\"";
            // line 100
            echo gettext("Password");
            echo "\">
                        </p>
                        <a class=\"bb-button\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("reset-password"), "html", null, true);
            echo "\">";
            echo gettext("Reset password");
            echo "</a>
                        <input type=\"hidden\" name=\"remember\" value=\"1\" />
                        <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
            // line 104
            echo gettext("Sign in");
            echo "\" style=\"float: right\">
                    </fieldset>
                </form>
                </div>
            </div>
            ";
        }
        // line 110
        echo "            
            <div class=\"gradient\" style=\"margin-bottom: 10px;\">
                <nav>";
        // line 112
        $this->env->loadTemplate("partial_menu.phtml")->display($context);
        echo "</nav>
            </div>

            ";
        // line 115
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["languages"] = $this->getAttribute($_guest_, "extension_languages");
        // line 116
        echo "            ";
        if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
        if ((twig_length_filter($this->env, $_languages_) > 1)) {
            // line 117
            echo "            <div class=\"widget\">
                <div class=\"head\">
                    <h2 class=\"dark-icon i-drag\">";
            // line 119
            echo gettext("Select language");
            echo "</h2>
                </div>
                <div class=\"block\">
                    <select name=\"lang\" class=\"language_selector\">
                    ";
            // line 123
            if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_languages_);
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 124
                echo "                        <option value=\"";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $_lang_, "html", null, true);
                echo "\" class=\"lang_";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, $_lang_, "html", null, true);
                echo "\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo twig_escape_filter($this->env, gettext($_lang_), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 126
            echo "                    </select>
                </div>
            </div>
            ";
        }
        // line 130
        echo "            
            ";
        // line 131
        $this->displayBlock('sidebar2', $context, $blocks);
        // line 132
        echo "
        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"footer\">
    <div class=\"container_16\">
        ";
        // line 140
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 141
            echo "        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
            // line 143
            echo gettext("Popular articles");
            echo "</h2>
                <div class=\"block\">
                    <ul>
                        ";
            // line 146
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_guest_, "kb_article_get_list", array(0 => array("per_page" => 4)), "method"), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 147
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
                echo "/";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "category"), "slug"), "html", null, true);
                echo "/";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "slug"), "html", null, true);
                echo "\">";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_article_, "title"), 30), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 149
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 156
            echo "        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
            // line 158
            echo gettext("Recent posts");
            echo "</h2>
                <div class=\"block\">
                    <ul>
                        ";
            // line 161
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context["posts"] = $this->getAttribute($_guest_, "news_get_list", array(0 => array("per_page" => 4)), "method");
            // line 162
            echo "                        ";
            if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_posts_, "list"));
            foreach ($context['_seq'] as $context["i"] => $context["post"]) {
                // line 163
                echo "                        <li>
                            <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
                echo "/";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "slug"), "html", null, true);
                echo "\">";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_post_, "title"), 30), "html", null, true);
                echo "</a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 167
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 172
        echo "        
        <div class=\"grid_4\">
            <div class=\"box\">
                <h2>";
        // line 175
        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_company_, "name"), "html", null, true);
        echo "</h2>
                <div class=\"block\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/about-us"), "html", null, true);
        echo "\">";
        echo gettext("About us");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/tos"), "html", null, true);
        echo "\">";
        echo gettext("Terms and conditions");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/privacy-policy"), "html", null, true);
        echo "\">";
        echo gettext("Privacy policy");
        echo "</a>
                        </li>
                        ";
        // line 187
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 188
            echo "                        <li>
                            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">Billing software</a>
                        </li>
                        ";
        }
        // line 192
        echo "                    </ul>
                </div>
            </div>
        </div>

        <div class=\"grid_4\">
            ";
        // line 198
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 199
            echo "            <p class=\"logo\">
                <a class=\"boxbilling\" href=\"http://www.boxbilling.com\" title=\"Invoicing software\" target=\"_blank\">";
            // line 200
            echo twig_img_tag(twig_asset_url($this->env, "images/boxbilling-logo.png"), "Business software");
            echo "</a>
            </p>
            ";
        }
        // line 203
        echo "        </div>

        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"footer lower\">
    <div class=\"container_16\">
        <div class=\"grid_16\">
            <div class=\"box\">
                <div class=\"block\">
                    <p>
                    ";
        // line 216
        echo "                    ";
        // line 217
        echo "                    © ";
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y"), "html", null, true);
        echo " ";
        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_company_, "signature"), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
<div class=\"loading dim\" style=\"display:none\"><div class=\"popup_block\"><h3>";
        // line 225
        echo gettext("Loading ..");
        echo "</h3></div></div>
    ";
        // line 226
        $this->displayBlock('js', $context, $blocks);
        // line 227
        echo "    <noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
    ";
        // line 228
        $this->env->loadTemplate("mod_cron_check.phtml")->display($context);
        // line 229
        echo "</body>
</html>";
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_meta_description($context, array $blocks = array())
    {
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_description"), "html", null, true);
    }

    // line 11
    public function block_meta_keywords($context, array $blocks = array())
    {
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_keywords"), "html", null, true);
    }

    // line 26
    public function block_opengraph($context, array $blocks = array())
    {
    }

    // line 27
    public function block_head($context, array $blocks = array())
    {
    }

    // line 62
    public function block_header_buttons($context, array $blocks = array())
    {
        // line 63
        echo "            <div class=\"top-buttons\">
                <a id=\"login-form-link\" class=\"bb-button bb-button-submit\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("login"), "html", null, true);
        echo "\">";
        echo gettext("Sign in");
        echo "</a>
                <a class=\"bb-button bb-button-red\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("login"), "html", null, true);
        echo "?register=1\">";
        echo gettext("Register");
        echo "</a>
            </div>
            ";
    }

    // line 76
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 81
    public function block_content_after($context, array $blocks = array())
    {
    }

    // line 85
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 131
    public function block_sidebar2($context, array $blocks = array())
    {
    }

    // line 226
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
        return array (  622 => 226,  617 => 131,  612 => 85,  607 => 81,  602 => 80,  597 => 76,  588 => 65,  579 => 63,  576 => 62,  571 => 27,  566 => 26,  559 => 11,  552 => 10,  547 => 5,  542 => 229,  540 => 228,  537 => 227,  531 => 225,  515 => 217,  513 => 216,  499 => 203,  493 => 200,  490 => 199,  487 => 198,  473 => 188,  463 => 185,  455 => 182,  439 => 175,  412 => 164,  409 => 163,  403 => 162,  400 => 161,  387 => 155,  384 => 154,  377 => 149,  359 => 147,  354 => 146,  348 => 143,  341 => 140,  331 => 132,  329 => 131,  326 => 130,  320 => 126,  304 => 124,  299 => 123,  292 => 119,  288 => 117,  284 => 116,  281 => 115,  275 => 112,  271 => 110,  250 => 100,  241 => 97,  236 => 95,  231 => 93,  225 => 90,  221 => 88,  218 => 87,  215 => 86,  213 => 85,  208 => 82,  202 => 80,  200 => 79,  196 => 77,  185 => 69,  182 => 68,  171 => 57,  163 => 54,  155 => 51,  147 => 48,  143 => 46,  134 => 41,  121 => 37,  118 => 36,  114 => 35,  105 => 28,  100 => 26,  95 => 24,  91 => 23,  87 => 22,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 15,  58 => 11,  54 => 10,  45 => 7,  389 => 75,  380 => 73,  370 => 66,  364 => 63,  352 => 53,  349 => 52,  346 => 51,  343 => 50,  340 => 49,  337 => 48,  328 => 47,  309 => 42,  303 => 41,  298 => 38,  287 => 37,  272 => 34,  261 => 33,  246 => 29,  235 => 28,  219 => 25,  207 => 24,  191 => 20,  167 => 15,  145 => 13,  140 => 45,  129 => 11,  115 => 10,  103 => 7,  81 => 5,  75 => 4,  67 => 3,  41 => 1,  35 => 45,  32 => 2,  29 => 1,  26 => 27,  20 => 17,  17 => 9,  689 => 296,  686 => 295,  680 => 290,  676 => 288,  668 => 283,  663 => 281,  659 => 279,  656 => 278,  653 => 277,  645 => 272,  638 => 270,  634 => 268,  631 => 267,  628 => 266,  620 => 261,  613 => 259,  609 => 257,  606 => 256,  598 => 251,  591 => 249,  582 => 64,  575 => 241,  565 => 234,  558 => 232,  553 => 229,  544 => 222,  535 => 226,  532 => 218,  518 => 215,  508 => 214,  502 => 213,  496 => 212,  489 => 208,  479 => 192,  470 => 187,  467 => 196,  457 => 193,  447 => 179,  441 => 191,  434 => 172,  427 => 167,  411 => 175,  405 => 174,  394 => 158,  390 => 156,  383 => 163,  379 => 162,  372 => 159,  368 => 158,  360 => 153,  344 => 141,  338 => 141,  327 => 134,  323 => 133,  316 => 130,  312 => 129,  305 => 126,  301 => 125,  293 => 120,  277 => 109,  266 => 102,  262 => 104,  255 => 102,  251 => 97,  244 => 94,  240 => 93,  232 => 88,  216 => 77,  205 => 81,  201 => 69,  194 => 76,  190 => 65,  183 => 62,  179 => 62,  170 => 55,  165 => 52,  162 => 51,  159 => 50,  152 => 45,  142 => 41,  138 => 39,  128 => 39,  122 => 34,  117 => 33,  107 => 32,  102 => 27,  97 => 30,  94 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  56 => 2,  52 => 12,  49 => 8,  46 => 10,  43 => 9,  40 => 8,  37 => 5,  34 => 6,  28 => 3,  23 => 22,);
    }
}

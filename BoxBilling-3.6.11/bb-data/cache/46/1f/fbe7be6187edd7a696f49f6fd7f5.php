<?php

/* macro_functions.phtml */
class __TwigTemplate_461ffbe7be6187edd7a696f49f6fd7f5 extends Twig_Template
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
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "

";
    }

    // line 1
    public function getselectbox($name = null, $options = null, $selected = null, $required = null, $nullOption = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "required" => $required,
            "nullOption" => $nullOption,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 3
            if (isset($context["nullOption"])) { $_nullOption_ = $context["nullOption"]; } else { $_nullOption_ = null; }
            if ($_nullOption_) {
                echo "<option value=\"\">-- ";
                if (isset($context["nullOption"])) { $_nullOption_ = $context["nullOption"]; } else { $_nullOption_ = null; }
                echo twig_escape_filter($this->env, $_nullOption_, "html", null, true);
                echo " --</option>";
            }
            // line 4
            echo "        ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                echo "        <option value=\"";
                if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                echo twig_escape_filter($this->env, $_val_, "html", null, true);
                echo "\" label=\"";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_);
                echo "\" ";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                if (($_selected_ == $_val_)) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "    </select>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 10
    public function getselectboxtld($name = null, $options = null, $selected = null, $required = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "required" => $required,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 12
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <option value=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tld"), "html", null, true);
                echo "\" label=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tld"), "html", null, true);
                echo "\" ";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (($_selected_ == $this->getAttribute($_data_, "tld"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tld"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "    </select>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 19
    public function getcurrency_format($price = null, $currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $price,
            "currency" => $currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            echo twig_money($this->env, $_price_, $_currency_);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 24
    public function getcurrency($price = null, $currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $price,
            "currency" => $currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            echo twig_money_convert($this->env, $_price_, $_currency_);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 28
    public function getstatus_name($status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $status,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr($_status_, array("_" => " ")))), "html", null, true);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 33
    public function getperiod_name($period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
            echo twig_period_title($this->env, $_period_);
            echo "
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 37
    public function getmarkdown_quote($text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "


";
            // line 41
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($_text_, "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 42
                echo "> ";
                if (isset($context["line"])) { $_line_ = $context["line"]; } else { $_line_ = null; }
                echo twig_escape_filter($this->env, $_line_, "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 47
    public function getrecaptcha()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "
";
            // line 49
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "spamchecker")), "method")) {
                // line 50
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context["rc"] = $this->getAttribute($_guest_, "spamchecker_recaptcha");
                // line 51
                if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                if ($this->getAttribute($_rc_, "enabled")) {
                    // line 52
                    echo "    ";
                    $context["server"] = "https://www.google.com/recaptcha/api";
                    // line 53
                    echo "    <script type=\"text/javascript\">
        var RecaptchaOptions = {
        theme : 'custom',
        custom_theme_widget: 'recaptcha_widget'
    };
    </script>

    <div id=\"recaptcha_widget\" style=\"display:none\">

    <div id=\"recaptcha_image\"></div>
    <div class=\"recaptcha_only_if_incorrect_sol\" style=\"color:red\">";
                    // line 63
                    echo gettext("Incorrect please try again");
                    echo "</div>

    <p>
        <label>";
                    // line 66
                    echo gettext("Enter the words above");
                    echo "</label>
        <br/>
        <input type=\"text\" id=\"recaptcha_response_field\" name=\"recaptcha_response_field\" style=\"width: 245px\"/>
            <a class=\"bb-button\" href=\"javascript:Recaptcha.reload()\" style=\"float: right\"><span class=\"dark-icon i-reload\"></span></a>
    </p>
    </div>

    <script type=\"text/javascript\" src=\"";
                    // line 73
                    if (isset($context["server"])) { $_server_ = $context["server"]; } else { $_server_ = null; }
                    echo twig_escape_filter($this->env, $_server_, "html", null, true);
                    echo "/challenge?k=";
                    if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_rc_, "publickey"), "html", null, true);
                    echo "\"></script>
    <noscript>
        <iframe src=\"";
                    // line 75
                    if (isset($context["server"])) { $_server_ = $context["server"]; } else { $_server_ = null; }
                    echo twig_escape_filter($this->env, $_server_, "html", null, true);
                    echo "/noscript?k=";
                    if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_rc_, "publickey"), "html", null, true);
                    echo "\" height=\"300\" width=\"500\" frameborder=\"0\"></iframe><br/>
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
    </noscript>
";
                }
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "macro_functions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 75,  380 => 73,  370 => 66,  364 => 63,  352 => 53,  349 => 52,  346 => 51,  343 => 50,  340 => 49,  337 => 48,  328 => 47,  309 => 42,  303 => 41,  298 => 38,  287 => 37,  272 => 34,  261 => 33,  246 => 29,  235 => 28,  219 => 25,  207 => 24,  191 => 20,  167 => 15,  145 => 13,  140 => 12,  129 => 11,  115 => 10,  103 => 7,  81 => 5,  75 => 4,  67 => 3,  41 => 1,  35 => 45,  32 => 36,  29 => 31,  26 => 27,  20 => 17,  17 => 9,  689 => 296,  686 => 295,  680 => 290,  676 => 288,  668 => 283,  663 => 281,  659 => 279,  656 => 278,  653 => 277,  645 => 272,  638 => 270,  634 => 268,  631 => 267,  628 => 266,  620 => 261,  613 => 259,  609 => 257,  606 => 256,  598 => 251,  591 => 249,  582 => 243,  575 => 241,  565 => 234,  558 => 232,  553 => 229,  544 => 222,  535 => 219,  532 => 218,  518 => 215,  508 => 214,  502 => 213,  496 => 212,  489 => 208,  479 => 200,  470 => 197,  467 => 196,  457 => 193,  447 => 192,  441 => 191,  434 => 190,  427 => 186,  411 => 175,  405 => 174,  394 => 167,  390 => 166,  383 => 163,  379 => 162,  372 => 159,  368 => 158,  360 => 153,  344 => 142,  338 => 141,  327 => 134,  323 => 133,  316 => 130,  312 => 129,  305 => 126,  301 => 125,  293 => 120,  277 => 109,  266 => 102,  262 => 101,  255 => 98,  251 => 97,  244 => 94,  240 => 93,  232 => 88,  216 => 77,  205 => 70,  201 => 69,  194 => 66,  190 => 65,  183 => 62,  179 => 19,  170 => 55,  165 => 52,  162 => 51,  159 => 50,  152 => 45,  142 => 41,  138 => 39,  128 => 35,  122 => 34,  117 => 33,  107 => 32,  102 => 31,  97 => 30,  94 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  56 => 2,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 3,  23 => 22,);
    }
}

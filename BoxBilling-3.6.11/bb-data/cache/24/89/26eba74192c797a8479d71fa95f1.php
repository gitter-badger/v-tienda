<?php

/* mod_client_login.phtml */
class __TwigTemplate_248926eba74192c797a8479d71fa95f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getContext($context, "request"), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Login / Sign up");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-profile\"></span></div>
            <h2>";
        // line 11
        echo gettext("Sign In / Create new account");
        echo "</h2>
            <p>";
        // line 12
        echo gettext("Become a member to participate in forum, contact support, order new services");
        echo "</p>
        </div>
        <div class=\"block\" id=\"login-to-account\" ";
        // line 14
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "register")) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"splitter\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\" >
                    <div class=\"block\">
                        <h2>";
        // line 19
        echo gettext("Sign in");
        echo "</h2>
                        <form action=\"\" method=\"post\" id=\"client-login\">
                            <fieldset>
                                <legend>";
        // line 22
        echo gettext("Login to client area");
        echo "</legend>
                                <p>
                                    <label>";
        // line 24
        echo gettext("Email Address");
        echo ": </label>
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 25
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
        echo "\" required=\"required\">
                                </p>

                                <p>
                                    <label>";
        // line 29
        echo gettext("Password");
        echo ": </label>
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 30
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "password"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <input type=\"hidden\" name=\"remember\" value=\"1\" />
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 33
        echo gettext("Login");
        echo "\">
                                <a class=\"bb-button\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("reset-password"), "html", null, true);
        echo "\">";
        echo gettext("Reset password");
        echo "</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">
                <div class=\"box\" ";
        // line 42
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "register")) {
            echo "style=\"display:none;\"";
        }
        echo ">
                    <h2>";
        // line 43
        echo gettext("Do not have an account yet?");
        echo "</h2>
                    <div class=\"block\">
                        <a style=\"margin: 30px 0 0 40px;\" class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$('#login-to-account').slideUp(); \$('#register-new-account').slideDown(); return false;\" >";
        // line 45
        echo gettext("Register");
        echo "</a>
                    </div>
                    ";
        // line 47
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "oauth")), "method")) {
            // line 48
            echo "                        ";
            $this->env->loadTemplate("mod_oauth_buttons.phtml")->display(array_merge($context, array("redirect_to" => "me")));
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        </div>

        <div class=\"block\" id=\"register-new-account\" ";
        // line 56
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ((!$this->getAttribute($_request_, "register"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <form action=\"\" method=\"post\" id=\"create-profile\">
            <div class=\"grid_6 alpha\">
                <div class=\"box\">
                    ";
        // line 60
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["r"] = $this->getAttribute($_guest_, "client_required");
        // line 61
        echo "                    <h2>";
        echo gettext("Enter your details below");
        echo "</h2>
                    <div class=\"block\">
                        <fieldset>
                            <legend>";
        // line 64
        echo gettext("Create new profile");
        echo "</legend>
                            <p>
                                <label>";
        // line 66
        echo gettext("Email Address");
        echo ": </label>
                                <input type=\"email\" name=\"email\" value=\"";
        // line 67
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
        echo "\" required=\"required\" id=\"reg-email\">
                            </p>
                            <p>
                                <label>";
        // line 70
        echo gettext("First Name");
        echo ": </label>
                                <input type=\"text\" name=\"first_name\" value=\"";
        // line 71
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "first_name"), "html", null, true);
        echo "\" required=\"required\">
                            </p>
                            ";
        // line 73
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("last_name", $_r_)) {
            // line 74
            echo "                            <p>
                                <label>";
            // line 75
            echo gettext("Last Name");
            echo ": </label>
                                <input type=\"text\" name=\"last_name\" value=\"";
            // line 76
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "last_name"), "html", null, true);
            echo "\" required=\"required\">
                            </p>
                            ";
        }
        // line 79
        echo "                            
                            ";
        // line 80
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("company", $_r_)) {
            // line 81
            echo "                            <p>
                                <label>";
            // line 82
            echo gettext("Company");
            echo ": </label>
                                <input type=\"text\" name=\"company\" value=\"";
            // line 83
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "company"), "html", null, true);
            echo "\" required=\"required\">
                            </p>
                            ";
        }
        // line 86
        echo "                            
                            ";
        // line 87
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("birthday", $_r_)) {
            // line 88
            echo "                            <p>
                                <label>";
            // line 89
            echo gettext("Birthday");
            echo ": </label>
                                <input type=\"text\" name=\"birthday\" value=\"\">
                            </p>
                            ";
        }
        // line 93
        echo "                            
                            ";
        // line 94
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("gender", $_r_)) {
            // line 95
            echo "                            <p>
                                <label>";
            // line 96
            echo gettext("You are");
            echo ": </label>
                                <select name=\"gender\">
                                    <option value=\"male\">Male</option>
                                    <option value=\"female\">Female</option>
                                </select>
                            </p>
                            ";
        }
        // line 103
        echo "                            
                            <p>
                                <label>";
        // line 105
        echo gettext("Password");
        echo ": </label>
                                <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                            </p>
                            
                            <p>
                                <label>";
        // line 110
        echo gettext("Password confirm");
        echo ": </label>
                                <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                            </p>
                            
                            ";
        // line 114
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        echo $_mf_->getrecaptcha();
        echo "

                        </fieldset>
                    </div>
                </div>
            </div>

            <div class=\"grid_6 omega\">
                <div class=\"box\" id=\"register-new-account\">
                    <h2>&nbsp;</h2>
                    <div class=\"block\">
                        <fieldset>
                            <legend>";
        // line 126
        echo gettext("Create new profile");
        echo "</legend>

                                ";
        // line 128
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("address_1", $_r_)) {
            // line 129
            echo "                                <p>
                                    <label>";
            // line 130
            echo gettext("Address");
            echo ": </label>
                                    <input type=\"text\" name=\"address_1\" value=\"";
            // line 131
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "address_1"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 134
        echo "                                
                                ";
        // line 135
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("address_2", $_r_)) {
            // line 136
            echo "                                <p>
                                    <label>";
            // line 137
            echo gettext("Address 2");
            echo ": </label>
                                    <input type=\"text\" name=\"address_2\" value=\"";
            // line 138
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "address_2"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 141
        echo "                                
                                ";
        // line 142
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("city", $_r_)) {
            // line 143
            echo "                                <p>
                                    <label>";
            // line 144
            echo gettext("City");
            echo ": </label>
                                    <input type=\"text\" name=\"city\" value=\"";
            // line 145
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "city"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 148
        echo "                                
                                ";
        // line 149
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("country", $_r_)) {
            // line 150
            echo "                                <p>
                                    <label>";
            // line 151
            echo gettext("Country");
            echo ": </label>
                                    ";
            // line 152
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo $_mf_->getselectbox("country", $this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_request_, "country"), 0, "Select country");
            echo "
                                </p>
                                ";
        }
        // line 155
        echo "                                
                                ";
        // line 156
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("state", $_r_)) {
            // line 157
            echo "                                <p>
                                    <label>";
            // line 158
            echo gettext("State");
            echo ": </label>
                                     ";
            // line 160
            echo "                                     <input type=\"text\" name=\"state\" value=\"";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "state"), "html", null, true);
            echo "\" />
                                </p>
                                ";
        }
        // line 163
        echo "                                
                                ";
        // line 164
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("postcode", $_r_)) {
            // line 165
            echo "                                <p>
                                    <label>";
            // line 166
            echo gettext("Zip/Postal Code");
            echo ": </label>
                                    <input type=\"text\" name=\"postcode\" value=\"";
            // line 167
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "postcode"), "html", null, true);
            echo "\">
                                </p>
                                ";
        }
        // line 170
        echo "                                
                                ";
        // line 171
        if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
        if (twig_in_filter("phone", $_r_)) {
            // line 172
            echo "                                <p>
                                    <label>";
            // line 173
            echo gettext("Phone Number");
            echo ": </label>
                                    <br/>
                                    <input type=\"text\" name=\"phone_cc\" value=\"";
            // line 175
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "phone_cc"), "html", null, true);
            echo "\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "phone"), "html", null, true);
            echo "\" style=\"width: 233px\">
                                </p>
                                ";
        }
        // line 178
        echo "                            <input class=\"bb-button bb-button-red bb-button-big\" type=\"submit\" value=\"";
        echo gettext("Register");
        echo "\" style=\"margin: 30px 0 0 70px;\">
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"clear\"></div>
            </form>
        </div>
    </div>

";
    }

    // line 190
    public function block_js($context, array $blocks = array())
    {
        // line 191
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password reset confirmation email was sent');
            }
        );
        return false;
    });

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });

    \$('#create-profile').bind('submit',function(event){
        bb.post(
            'guest/client/create',
            \$(this).serialize(),
            function(result) {
                //login after registration
                var login_details = {
                    email: \$('#reg-email').val(),
                    password: \$('#reg-password').val(),
                };
                bb.post(
                    'guest/client/login',
                    login_details,
                    function(result) {
                        bb.redirect();
                    }
                );
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 191,  466 => 190,  450 => 178,  440 => 175,  435 => 173,  432 => 172,  429 => 171,  426 => 170,  419 => 167,  415 => 166,  412 => 165,  409 => 164,  406 => 163,  398 => 160,  394 => 158,  391 => 157,  388 => 156,  385 => 155,  376 => 152,  372 => 151,  369 => 150,  366 => 149,  363 => 148,  356 => 145,  352 => 144,  349 => 143,  346 => 142,  343 => 141,  336 => 138,  332 => 137,  329 => 136,  326 => 135,  323 => 134,  316 => 131,  312 => 130,  309 => 129,  306 => 128,  301 => 126,  285 => 114,  278 => 110,  270 => 105,  266 => 103,  256 => 96,  253 => 95,  250 => 94,  247 => 93,  240 => 89,  237 => 88,  234 => 87,  231 => 86,  224 => 83,  220 => 82,  217 => 81,  214 => 80,  211 => 79,  204 => 76,  200 => 75,  197 => 74,  194 => 73,  188 => 71,  184 => 70,  177 => 67,  173 => 66,  168 => 64,  161 => 61,  158 => 60,  148 => 56,  140 => 50,  137 => 49,  134 => 48,  131 => 47,  126 => 45,  121 => 43,  114 => 42,  101 => 34,  97 => 33,  90 => 30,  86 => 29,  78 => 25,  74 => 24,  69 => 22,  63 => 19,  52 => 14,  47 => 12,  43 => 11,  37 => 7,  34 => 6,  28 => 5,  23 => 3,);
    }
}

<?php

/* mod_client_profile.phtml */
class __TwigTemplate_ec94f84db76c559307ce6b7e655867a3 extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Profile details");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 8
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["profile"] = $this->getAttribute($_client_, "client_get");
        // line 9
        echo "
<div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-profile\"></span></div>
            <h2>";
        // line 13
        echo gettext("Profile details");
        echo "</h2>
            <p>";
        // line 14
        echo gettext("Keep your profile up to date");
        echo "</p>
        </div>
    <div class=\"block conversation\">
        <div class=\"widget simpleTabs tabsRight first\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-profile\">";
        // line 19
        echo gettext("Manage profile");
        echo "</h2>
        </div>
        <ul class=\"tabs\">
            <li><a href=\"#tab-details\"><span class=\"dark-icon i-profile\"></span>";
        // line 22
        echo gettext("Details");
        echo "</a></li>
            <li><a href=\"#tab-password\"><span class=\"dark-icon i-logout\"></span>";
        // line 23
        echo gettext("Change Password");
        echo "</a></li>
            <li><a href=\"#tab-gravatar\"><span class=\"dark-icon i-uncheck\"></span>";
        // line 24
        echo gettext("Gravatar");
        echo "</a></li>
            <li><a href=\"#tab-currency\"><span class=\"dark-icon i-payment\"></span>";
        // line 25
        echo gettext("Currency");
        echo "</a></li>
            <li><a href=\"#tab-api\"><span class=\"dark-icon i-logout\"></span>";
        // line 26
        echo gettext("API");
        echo "</a></li>
        </ul>
        <div class=\"tabs_container\">

            <div class=\"tab_content\" id=\"tab-details\">
                <form method=\"post\" action=\"\" id=\"profile-update\">
                <div class=\"grid_6 alpha\">
                    <div class=\"box\">
                        <h2>";
        // line 34
        echo gettext("Update profile");
        echo "</h2>
                        <div class=\"block\">
                            <fieldset>
                                <p>
                                    <label>";
        // line 38
        echo gettext("Email Address");
        echo ": </label>
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 39
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "email"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 42
        echo gettext("First Name");
        echo ": </label>
                                    <input type=\"text\" name=\"first_name\" value=\"";
        // line 43
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "first_name"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 46
        echo gettext("Last Name");
        echo ": </label>
                                    <input type=\"text\" name=\"last_name\" value=\"";
        // line 47
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "last_name"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 50
        echo gettext("Company Name");
        echo ": </label>
                                    <input type=\"text\" name=\"company\" value=\"";
        // line 51
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "company"), "html", null, true);
        echo "\">
                                </p>
                                <p>
                                    <label>";
        // line 54
        echo gettext("Phone Country Code");
        echo ": </label>
                                    <input type=\"text\" name=\"phone_cc\" value=\"";
        // line 55
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "phone_cc"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 58
        echo gettext("Phone Number");
        echo ": </label>
                                    <input type=\"text\" name=\"phone\" value=\"";
        // line 59
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "phone"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 61
        echo gettext("Update profile");
        echo "\">
                            </fieldset>
                        </div>
                        </div>
                </div>
                <div class=\"grid_6 omega\">
                    <div class=\"box\">
                        <h2>&nbsp;</h2>
                        <div class=\"block\">
                            <fieldset>
                                <p>
                                    <label>";
        // line 72
        echo gettext("Address");
        echo ": </label>
                                    <input type=\"text\" name=\"address_1\" value=\"";
        // line 73
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "address_1"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 76
        echo gettext("Address 2");
        echo ": </label>
                                    <input type=\"text\" name=\"address_2\" value=\"";
        // line 77
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "address_2"), "html", null, true);
        echo "\">
                                </p>
                                <p>
                                    <label>";
        // line 80
        echo gettext("City");
        echo ": </label>
                                    <input type=\"text\" name=\"city\" value=\"";
        // line 81
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "city"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 84
        echo gettext("Country");
        echo ": </label>
                                    ";
        // line 85
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo $_mf_->getselectbox("country", $this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_profile_, "country"), 1, "Select country");
        echo "
                                </p>
                                <p>
                                    <label>";
        // line 88
        echo gettext("State");
        echo ": </label>
                                     ";
        // line 90
        echo "                                     <input type=\"text\" name=\"state\" value=\"";
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "state"), "html", null, true);
        echo "\" />
                                </p>
                                <p>
                                    <label>";
        // line 93
        echo gettext("Zip/Postal Code");
        echo ": </label>
                                    <input type=\"text\" name=\"postcode\" value=\"";
        // line 94
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "postcode"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                            </fieldset>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class=\"tab_content\" id=\"tab-password\">
                <div class=\"box\">
                    <h2>";
        // line 105
        echo gettext("Change password");
        echo "</h2>
                    <div class=\"block\">
                        <form method=\"post\" action=\"\" id=\"change-password\">
                            <fieldset>
                                <legend>";
        // line 109
        echo gettext("Enter new password");
        echo "</legend>
                                <p>
                                    <label>";
        // line 111
        echo gettext("Password");
        echo ": </label>
                                    <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 115
        echo gettext("Password confirm");
        echo ": </label>
                                    <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                </p>
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 118
        echo gettext("Change password");
        echo "\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class=\"tab_content\" id=\"tab-api\">
                <div class=\"box\">
                    <h2>";
        // line 127
        echo gettext("API key");
        echo "</h2>
                    <p>";
        // line 128
        echo gettext("API key allows integration with external applications. You will need this key for authentication.");
        echo "</p>
                    <p>";
        // line 129
        echo gettext("Warning! Resetting the key will break existing applications using it.");
        echo "</p>
                    <div class=\"block\">
                        <form method=\"post\" action=\"\" id=\"change-api-key\">
                            <fieldset>
                                <p>
                                    <label>";
        // line 134
        echo gettext("Your API key");
        echo ": </label>
                                    <input type=\"text\" value=\"";
        // line 135
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "client_api_key_get"), "html", null, true);
        echo "\" id=\"api-key\">
                                </p>
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 137
        echo gettext("Reset key");
        echo "\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"tab_content\" id=\"tab-gravatar\">
                <div class=\"box\">
                    <h2>";
        // line 146
        echo gettext("Gravatar");
        echo "</h2>
                    <div class=\"block\">
                        <img src=\"";
        // line 148
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($_profile_, "email")), "html", null, true);
        echo "\" alt=\"Gravatar\" style=\"float: left; padding: 1px; margin-right: 10px; border: 1px solid #d1d1d1;\"/>
                        <p>";
        // line 149
        echo gettext("Please register with");
        echo " <b>";
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "email"), "html", null, true);
        echo "</b> ";
        echo gettext("at ");
        echo "<a target=\"_blank\" href=\"http://gravatar.com\">Gravatar.com</a> ";
        echo gettext("to change your profile image. Gravatar image updates may not appear immediately.");
        echo "</p>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>

            <div class=\"tab_content\" id=\"tab-currency\">
                <div class=\"box\">
                    <h2>";
        // line 157
        echo gettext("Currency");
        echo "</h2>
                    <div class=\"block\">
                        ";
        // line 159
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "currency")) {
            // line 160
            echo "                            <p>";
            echo gettext("Your profile currency is");
            echo " <em>";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "currency"), "html", null, true);
            echo "</em></p>
                            <p>";
            // line 161
            echo gettext("Create new client profile if you want to manage your money in other currency");
            echo "</p>
                        ";
        } else {
            // line 163
            echo "                            <p>";
            echo gettext("Your profile currency will be defined after your first order. Once your currency is set, all your profile accounting will be managed in that currency and can not be changed.");
            echo "</p>
                        ";
        }
        // line 165
        echo "                    </div>
                </div>
            </div>

            <div class=\"clear\"></div>
        </div>
        </div>
    </div>
</div>

";
    }

    // line 177
    public function block_js($context, array $blocks = array())
    {
        // line 178
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#change-password').bind('submit',function(event){
        bb.post(
            'client/client/change_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password was changed');
            }
        );
        return false;
    });
    
    \$('#change-api-key').bind('submit',function(event){
        bb.post(
            'client/client/api_key_reset',
            \$(this).serialize(),
            function(result) {
                \$('#api-key').val(result);
                bb.msg('API key was changed');
            }
        );
        return false;
    });

    \$('#profile-update').bind('submit',function(event){
        bb.post(
            'client/client/update',
            \$(this).serialize(),
            function(result) {
                bb.msg('Profile updated');
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
        return "mod_client_profile.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 178,  401 => 177,  387 => 165,  381 => 163,  376 => 161,  368 => 160,  365 => 159,  360 => 157,  342 => 149,  337 => 148,  332 => 146,  320 => 137,  314 => 135,  310 => 134,  302 => 129,  298 => 128,  294 => 127,  282 => 118,  276 => 115,  269 => 111,  264 => 109,  257 => 105,  242 => 94,  238 => 93,  230 => 90,  226 => 88,  217 => 85,  213 => 84,  206 => 81,  202 => 80,  195 => 77,  191 => 76,  184 => 73,  180 => 72,  166 => 61,  160 => 59,  156 => 58,  149 => 55,  145 => 54,  138 => 51,  134 => 50,  127 => 47,  123 => 46,  116 => 43,  112 => 42,  105 => 39,  101 => 38,  94 => 34,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  61 => 19,  53 => 14,  49 => 13,  43 => 9,  40 => 8,  38 => 7,  35 => 6,  32 => 5,  26 => 3,);
    }
}

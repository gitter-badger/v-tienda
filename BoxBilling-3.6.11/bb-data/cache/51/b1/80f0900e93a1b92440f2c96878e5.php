<?php

/* mod_cart_index.phtml */
class __TwigTemplate_51b180f0900e93a1b92440f2c96878e5 extends Twig_Template
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
        return $this->env->resolveTemplate((($this->getAttribute($this->getContext($context, "request"), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 11
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["cart"] = $this->getAttribute($_guest_, "cart_get");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Order confirm");
    }

    // line 7
    public function block_content_before($context, array $blocks = array())
    {
        // line 8
        $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 3)));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_cart_, "items")) > 0)) {
            // line 16
            echo "<div id=\"shopping-cart\">
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">3</span></div>
            <h2>";
            // line 20
            echo gettext("Order confirmation");
            echo "</h2>
            <p>";
            // line 21
            echo gettext("These are the products you have selected");
            echo "</p>
        </div>
        <div class=\"block\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
            // line 27
            echo gettext("Product");
            echo "</th>
                        <th>";
            // line 28
            echo gettext("Period");
            echo "</th>
                        <th class=\"currency\">";
            // line 29
            echo gettext("Price");
            echo "</th>
                    </tr>
                 </thead>

                 <tbody>
                    ";
            // line 34
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cart_, "items"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 35
                echo "                    <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                        <td>
                            ";
                // line 37
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "
                            ";
                // line 38
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "quantity") > 1)) {
                    // line 39
                    echo "                            x ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "quantity"), "html", null, true);
                    echo "
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>";
                // line 42
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_period_title($this->env, $this->getAttribute($_item_, "period"));
                echo "</td>
                        <td class=\"currency\">
                            ";
                // line 44
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "discount_price")) {
                    // line 45
                    echo "                                <del>";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_money_convert($this->env, $this->getAttribute($_item_, "price"));
                    echo "</del>
                                ";
                    // line 46
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_money_convert($this->env, ($this->getAttribute($_item_, "price") - $this->getAttribute($_item_, "discount_price")));
                    echo "
                            ";
                } else {
                    // line 48
                    echo "                                ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_money_convert($this->env, $this->getAttribute($_item_, "price"));
                    echo "
                            ";
                }
                // line 50
                echo "                        </td>
                    </tr>
                    ";
                // line 52
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "setup_price") != 0)) {
                    // line 53
                    echo "                    <tr>
                        <td>";
                    // line 54
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    echo "</td>
                        <td>-</td>
                        <td class=\"currency\">
                            ";
                    // line 57
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if ($this->getAttribute($_item_, "discount_setup")) {
                        // line 58
                        echo "                                <del>";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_money_convert($this->env, $this->getAttribute($_item_, "setup_price"));
                        echo "</del>
                                ";
                        // line 59
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_money_convert($this->env, ($this->getAttribute($_item_, "setup_price") - $this->getAttribute($_item_, "discount_setup")));
                        echo "
                            ";
                    } else {
                        // line 61
                        echo "                                ";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_money_convert($this->env, $this->getAttribute($_item_, "setup_price"));
                        echo "</td>
                            ";
                    }
                    // line 63
                    echo "                    </tr>
                    ";
                }
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 66
            echo "                 </tbody>
            </table>
            
            ";
            // line 69
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if ($_client_) {
                // line 70
                echo "            <div class=\"grid_5 suffix_2 alpha\">
                <div class=\"box\">
                    <div class=\"block\">
                        <form action=\"guest/cart/apply_promo\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                            <fieldset>
                                <input type=\"text\" name=\"promocode\" value=\"";
                // line 75
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_request_, "promocode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_request_, "promocode"), $this->getAttribute($_cart_, "promocode"))) : ($this->getAttribute($_cart_, "promocode"))), "html", null, true);
                echo "\" required=\"required\" placeholder=\"";
                echo gettext("Have a promo code?");
                echo "\">
                                ";
                // line 76
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                if ($this->getAttribute($_cart_, "promocode")) {
                    // line 77
                    echo "                                <a href=\"guest/cart/remove_promo\" class=\"bb-button api-link\" data-api-reload=\"1\">";
                    echo gettext("Reset");
                    echo "</a>
                                ";
                } else {
                    // line 79
                    echo "                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
                    echo gettext("Apply");
                    echo "\">
                                ";
                }
                // line 81
                echo "                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"grid_5 omega\">
                <div class=\"box\">
                    <div class=\"block pricing\">
                        <p>";
                // line 89
                echo gettext("Total:");
                echo "</p>
                        <div class=\"currency\">";
                // line 90
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                echo twig_money_convert($this->env, $this->getAttribute($_cart_, "total"));
                echo "</div>
                        <form method=\"post\" action=\"client/cart/checkout\" class=\"api-form\" data-api-jsonp=\"onAfterCartCheckout\">
                        ";
                // line 92
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                if ($this->getAttribute($_cart_, "total")) {
                    // line 93
                    echo "                        <div style=\"text-align: left;\">
                        ";
                    // line 94
                    if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_guest_, "invoice_gateways"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                        // line 95
                        echo "                            ";
                        if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                        if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                        if (twig_in_filter($this->getAttribute($this->getAttribute($_cart_, "currency"), "code"), $this->getAttribute($_gtw_, "accepted_currencies"))) {
                            // line 96
                            echo "                            <label><input type=\"radio\" name=\"gateway_id\" value=\"";
                            if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "id"), "html", null, true);
                            echo "\" ";
                            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                            echo (($this->getAttribute($_loop_, "first")) ? ("checked") : (""));
                            echo "/>
                                ";
                            // line 97
                            echo gettext("Pay by");
                            echo " ";
                            if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "title"), "html", null, true);
                            echo "
                            </label>
                            <div class=\"clear\"></div>
                            ";
                        }
                        // line 101
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 102
                    echo "                        </div>
                        ";
                }
                // line 104
                echo "                        <br/>
                        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">";
                // line 105
                echo gettext("Checkout");
                echo "</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            } else {
                // line 111
                echo "
            <div class=\"block\">
                <div class=\"splitter\">
                <div class=\"grid_6 alpha\">
                    <div class=\"box\">
                        <div class=\"block\">
                            <h2>";
                // line 117
                echo gettext("Sign in");
                echo "</h2>
                            <form action=\"guest/client/login\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                    <legend>";
                // line 120
                echo gettext("Login to client area");
                echo "</legend>
                                    <p>
                                        <label>";
                // line 122
                echo gettext("Email Address");
                echo ": </label>
                                        <input type=\"email\" name=\"email\" value=\"";
                // line 123
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
                echo "\" required=\"required\">
                                    </p>
                                    <p>
                                        <label>";
                // line 126
                echo gettext("Password");
                echo ": </label>
                                        <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                    </p>
                                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
                // line 129
                echo gettext("Login");
                echo "\">
                                    <a class=\"bb-button\" href=\"";
                // line 130
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

                    ";
                // line 139
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if ((!$this->getAttribute($_request_, "register"))) {
                    // line 140
                    echo "                    <div class=\"box\">
                        <h2>";
                    // line 141
                    echo gettext("Do not have an account yet?");
                    echo "</h2>
                        <div class=\"block\">
                            <a class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$(this).parents('.box').hide(); \$('#register-new-account').fadeIn(); return false;\" style=\"margin: 30px 0 0 50px;\">";
                    // line 143
                    echo gettext("Register");
                    echo "</a>
                        </div>
                        ";
                    // line 145
                    if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                    if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "oauth")), "method")) {
                        // line 146
                        echo "                            ";
                        $this->env->loadTemplate("mod_oauth_buttons.phtml")->display(array_merge($context, array("redirect_to" => "cart")));
                        // line 147
                        echo "                        ";
                    }
                    // line 148
                    echo "                    </div>
                    ";
                }
                // line 150
                echo "
                    <div class=\"box\" id=\"register-new-account\" ";
                // line 151
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if ((!$this->getAttribute($_request_, "register"))) {
                    echo "style=\"display: none;\"";
                }
                echo " >
                            <h2>";
                // line 152
                echo gettext("Enter your details below");
                echo "</h2>
                            <div class=\"block\">
                                ";
                // line 154
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context["r"] = $this->getAttribute($_guest_, "client_required");
                // line 155
                echo "                                <form action=\"guest/client/create\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                        <legend>";
                // line 157
                echo gettext("Create new profile");
                echo "</legend>
                                        <p>
                                            <label>";
                // line 159
                echo gettext("Email Address");
                echo ": </label>
                                            <input type=\"email\" name=\"email\" value=\"";
                // line 160
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
                echo "\" required=\"required\" id=\"reg-email\">
                                        </p>
                                        <p>
                                            <label>";
                // line 163
                echo gettext("First Name");
                echo ": </label>
                                            <input type=\"text\" name=\"first_name\" value=\"";
                // line 164
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_request_, "first_name"), "html", null, true);
                echo "\" required=\"required\">
                                        </p>

                                        ";
                // line 167
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("last_name", $_r_)) {
                    // line 168
                    echo "                                        <p>
                                            <label>";
                    // line 169
                    echo gettext("Last Name");
                    echo ": </label>
                                            <input type=\"text\" name=\"last_name\" value=\"";
                    // line 170
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "last_name"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 173
                echo "
                                        ";
                // line 174
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("company", $_r_)) {
                    // line 175
                    echo "                                        <p>
                                            <label>";
                    // line 176
                    echo gettext("Company");
                    echo ": </label>
                                            <input type=\"text\" name=\"company\" value=\"";
                    // line 177
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "company"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 180
                echo "
                                        ";
                // line 181
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("birthday", $_r_)) {
                    // line 182
                    echo "                                        <p>
                                            <label>";
                    // line 183
                    echo gettext("Birthday");
                    echo ": </label>
                                            <input type=\"text\" name=\"birthday\" value=\"\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 187
                echo "
                                        ";
                // line 188
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("gender", $_r_)) {
                    // line 189
                    echo "                                        <p>
                                            <label>";
                    // line 190
                    echo gettext("You are");
                    echo ": </label>
                                            <select name=\"gender\" required=\"required\">
                                                <option value=\"male\">Male</option>
                                                <option value=\"female\">Female</option>
                                            </select>
                                        </p>
                                        ";
                }
                // line 197
                echo "
                                        ";
                // line 198
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("address_1", $_r_)) {
                    // line 199
                    echo "                                        <p>
                                            <label>";
                    // line 200
                    echo gettext("Address");
                    echo ": </label>
                                            <input type=\"text\" name=\"address_1\" value=\"";
                    // line 201
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "address_1"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 204
                echo "
                                        ";
                // line 205
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("address_2", $_r_)) {
                    // line 206
                    echo "                                        <p>
                                            <label>";
                    // line 207
                    echo gettext("Address 2");
                    echo ": </label>
                                            <input type=\"text\" name=\"address_2\" value=\"";
                    // line 208
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "address_2"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 211
                echo "
                                        ";
                // line 212
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("city", $_r_)) {
                    // line 213
                    echo "                                        <p>
                                            <label>";
                    // line 214
                    echo gettext("City");
                    echo ": </label>
                                            <input type=\"text\" name=\"city\" value=\"";
                    // line 215
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "city"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 218
                echo "
                                        ";
                // line 219
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("country", $_r_)) {
                    // line 220
                    echo "                                        <p>
                                            <label>";
                    // line 221
                    echo gettext("Country");
                    echo ": </label>
                                            ";
                    // line 222
                    if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                    if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo $_mf_->getselectbox("country", $this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_request_, "country"), 0, "Select country");
                    echo "
                                        </p>
                                        ";
                }
                // line 225
                echo "
                                        ";
                // line 226
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("state", $_r_)) {
                    // line 227
                    echo "                                        <p>
                                            <label>";
                    // line 228
                    echo gettext("State");
                    echo ": </label>
                                            ";
                    // line 230
                    echo "                                            <input type=\"text\" name=\"state\" value=\"";
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "state"), "html", null, true);
                    echo "\" />
                                        </p>
                                        ";
                }
                // line 233
                echo "
                                        ";
                // line 234
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("postcode", $_r_)) {
                    // line 235
                    echo "                                        <p>
                                            <label>";
                    // line 236
                    echo gettext("Zip/Postal Code");
                    echo ": </label>
                                            <input type=\"text\" name=\"postcode\" value=\"";
                    // line 237
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "postcode"), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 240
                echo "
                                        ";
                // line 241
                if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
                if (twig_in_filter("phone", $_r_)) {
                    // line 242
                    echo "                                        <p>
                                            <label>";
                    // line 243
                    echo gettext("Phone");
                    echo ": </label>
                                            <br/>
                                            <input type=\"text\" name=\"phone_cc\" value=\"";
                    // line 245
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "phone_cc"), "html", null, true);
                    echo "\" required=\"required\" style=\"width: 30px; \">
                                            <input type=\"text\" name=\"phone\" value=\"";
                    // line 246
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_request_, "phone"), "html", null, true);
                    echo "\" required=\"required\"style=\"width: 230px; \">
                                        </p>
                                        ";
                }
                // line 249
                echo "
                                        <p>
                                            <label>";
                // line 251
                echo gettext("Password");
                echo ": </label>
                                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                                        </p>

                                        <p>
                                            <label>";
                // line 256
                echo gettext("Password confirm");
                echo ": </label>
                                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                        </p>

                                        ";
                // line 260
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                echo $_mf_->getrecaptcha();
                echo "

                                        <input class=\"bb-button bb-button-red\" type=\"submit\" value=\"";
                // line 262
                echo gettext("Register");
                echo "\">
                                        <input type=\"hidden\" name=\"auto_login\" value=\"1\">
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                </div>
                <div class=\"clear\"></div>
                </div>
            </div>
            
            ";
            }
            // line 274
            echo "            <div class=\"clear\"></div>
        </div>
    </div>
</div>

";
        } else {
            // line 280
            echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">3</span></div>
        <h2>";
            // line 284
            echo gettext("You have not selected any product");
            echo "</h2>
    </div>
    <div class=\"block\">

        <div class=\"box\">
            <a class=\"bb-button bb-button-red\" href=\"";
            // line 289
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
            echo "\">";
            echo gettext("Order new service");
            echo "</a>
        </div>
        
    </div>
</div>

";
        }
    }

    // line 298
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 299
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 302
    public function block_js($context, array $blocks = array())
    {
        // line 303
        echo "<script type=\"text/javascript\">
function onAfterCartCheckout(result)
{
    if(result.invoice_hash) {
        bb.redirect('";
        // line 307
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
        echo "' + '/' + result.invoice_hash + '?auto_redirect=1');
    } else {
        bb.redirect('";
        // line 309
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("service/manage"), "html", null, true);
        echo "' + '/' + result.order_id );
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_cart_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 309,  781 => 307,  775 => 303,  772 => 302,  767 => 299,  764 => 298,  750 => 289,  742 => 284,  736 => 280,  728 => 274,  713 => 262,  707 => 260,  700 => 256,  692 => 251,  688 => 249,  681 => 246,  676 => 245,  671 => 243,  668 => 242,  665 => 241,  662 => 240,  655 => 237,  651 => 236,  648 => 235,  645 => 234,  642 => 233,  634 => 230,  630 => 228,  627 => 227,  624 => 226,  621 => 225,  612 => 222,  608 => 221,  605 => 220,  602 => 219,  599 => 218,  592 => 215,  588 => 214,  585 => 213,  582 => 212,  579 => 211,  572 => 208,  568 => 207,  565 => 206,  562 => 205,  559 => 204,  552 => 201,  548 => 200,  545 => 199,  542 => 198,  539 => 197,  529 => 190,  526 => 189,  523 => 188,  520 => 187,  513 => 183,  510 => 182,  507 => 181,  504 => 180,  497 => 177,  493 => 176,  490 => 175,  487 => 174,  484 => 173,  477 => 170,  473 => 169,  470 => 168,  467 => 167,  460 => 164,  456 => 163,  449 => 160,  445 => 159,  440 => 157,  436 => 155,  433 => 154,  428 => 152,  421 => 151,  418 => 150,  414 => 148,  411 => 147,  408 => 146,  405 => 145,  400 => 143,  395 => 141,  392 => 140,  389 => 139,  375 => 130,  371 => 129,  365 => 126,  358 => 123,  354 => 122,  349 => 120,  343 => 117,  335 => 111,  326 => 105,  323 => 104,  319 => 102,  305 => 101,  295 => 97,  286 => 96,  281 => 95,  263 => 94,  260 => 93,  257 => 92,  251 => 90,  247 => 89,  237 => 81,  231 => 79,  225 => 77,  222 => 76,  214 => 75,  207 => 70,  204 => 69,  199 => 66,  193 => 65,  189 => 63,  182 => 61,  176 => 59,  170 => 58,  167 => 57,  158 => 54,  155 => 53,  152 => 52,  148 => 50,  141 => 48,  135 => 46,  129 => 45,  126 => 44,  120 => 42,  117 => 41,  110 => 39,  107 => 38,  102 => 37,  95 => 35,  90 => 34,  82 => 29,  78 => 28,  74 => 27,  65 => 21,  61 => 20,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  42 => 8,  39 => 7,  33 => 5,  27 => 11,  25 => 3,);
    }
}

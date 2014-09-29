<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_90833cc431760c894f3676ba2b813fef extends Twig_Template
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
        // line 4
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Client Area");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"dashboard\">
";
        // line 8
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ($_client_) {
            // line 9
            echo "
";
            // line 10
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context["tickets"] = $this->getAttribute($_client_, "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method");
            // line 11
            if (isset($context["tickets"])) { $_tickets_ = $context["tickets"]; } else { $_tickets_ = null; }
            if (($this->getAttribute($_tickets_, "total") > 0)) {
                // line 12
                echo "    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
                // line 14
                echo gettext("Tickets waiting your reply");
                echo "</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>";
                // line 19
                echo gettext("Id");
                echo "</th>
                    <th>";
                // line 20
                echo gettext("Subject");
                echo "</th>
                    <th>";
                // line 21
                echo gettext("Help desk");
                echo "</th>
                    <th>";
                // line 22
                echo gettext("Status");
                echo "</th>
                    <th>";
                // line 23
                echo gettext("Submitted");
                echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
                // line 28
                if (isset($context["tickets"])) { $_tickets_ = $context["tickets"]; } else { $_tickets_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_tickets_, "list"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 29
                    echo "
                <tr class=\"";
                    // line 30
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                    echo "\">
                    <td>";
                    // line 31
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
                    echo "</td>
                    <td><a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, twig_bb_client_link_filter("support/ticket"), "html", null, true);
                    echo "/";
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
                    echo "\">";
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "subject"), "html", null, true);
                    echo "</a></td>
                    <td>";
                    // line 33
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_ticket_, "helpdesk"), "name"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 34
                    if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo $_mf_->getstatus_name($this->getAttribute($_ticket_, "status"));
                    echo "</td>
                    <td>";
                    // line 35
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_ticket_, "created_at")), "html", null, true);
                    echo "</td>
                </tr>

                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 39
                    echo "
                <tr>
                    <td colspan=\"5\">";
                    // line 41
                    echo gettext("The list is empty");
                    echo "</td>
                </tr>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 45
                echo "
            </tbody>
        </table>
    </div>
";
            }
            // line 50
            echo "
";
            // line 51
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context["profile"] = $this->getAttribute($_client_, "client_get");
            // line 52
            echo "<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-profile\">";
            // line 55
            echo gettext("Profile");
            echo "</h2>
        </div>

        <table>
            <tbody>
                <tr>
                    <td>";
            // line 61
            echo gettext("ID");
            echo "</td>
                    <td>#";
            // line 62
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "id"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 65
            echo gettext("Email");
            echo "</td>
                    <td>";
            // line 66
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "email"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 69
            echo gettext("Balance");
            echo "</td>
                    <td>";
            // line 70
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_money($this->env, $this->getAttribute($_profile_, "balance"), $this->getAttribute($_profile_, "currency"));
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("me"), "html", null, true);
            echo "\">";
            echo gettext("Manage profile");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-invoice\">";
            // line 88
            echo gettext("Invoices");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 93
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 94
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 97
            echo gettext("Paid");
            echo "</td>
                    <td>";
            // line 98
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(0 => array("status" => "paid")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 101
            echo gettext("Unpaid");
            echo "</td>
                    <td>";
            // line 102
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(0 => array("status" => "unpaid")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
            echo "\">";
            echo gettext("All Invoices");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
            // line 120
            echo gettext("Services");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 125
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 126
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("hide_addons" => 1)), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 129
            echo gettext("Active");
            echo "</td>
                    <td>";
            // line 130
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("hide_addons" => 1, "status" => "active")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 133
            echo gettext("Soon expires");
            echo "</td>
                    <td>";
            // line 134
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("expiring" => 1)), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("service"), "html", null, true);
            echo "\">";
            echo gettext("All services");
            echo "</a>
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
            echo "\">";
            echo gettext("New order");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
            // line 153
            echo gettext("Tickets");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 158
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 159
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "support_ticket_get_list", array(), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 162
            echo gettext("Open");
            echo "</td>
                    <td>";
            // line 163
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "support_ticket_get_list", array(0 => array("status" => "open")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 166
            echo gettext("On Hold");
            echo "</td>
                    <td>";
            // line 167
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support"), "html", null, true);
            echo "\">";
            echo gettext("All tickets");
            echo "</a>
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("support"), "html", null, true);
            echo "?ticket=1\">";
            echo gettext("New ticket");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-order\">";
            // line 186
            echo gettext("Recent orders");
            echo "</h2>
        </div>
        <table>
            <tbody>
                ";
            // line 190
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("per_page" => 5, "page" => $this->getAttribute($_request_, "page"), "hide_addons" => 1)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 191
                echo "                <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 192
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("service/manage"), "html", null, true);
                echo "/";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_order_, "title"), 30), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 193
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo $_mf_->getstatus_name($this->getAttribute($_order_, "status"));
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 196
                echo "                <tr>
                    <td colspan=\"3\">";
                // line 197
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 200
            echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-email\">";
            // line 208
            echo gettext("Recent emails");
            echo "</h2>
        </div>
        <table>
            <tbody>
                ";
            // line 212
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_client_, "email_get_list", array(0 => array("per_page" => 5)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 213
                echo "                <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 214
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("email"), "html", null, true);
                echo "/";
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_email_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_email_, "subject"), 30), "html", null, true);
                echo "</a></td>
                    <td title=\"";
                // line 215
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_email_, "created_at")), "html", null, true);
                echo "\">";
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute($_email_, "created_at")), "html", null, true);
                echo " ";
                echo gettext("ago");
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 218
                echo "                <tr>
                    <td colspan=\"2\">";
                // line 219
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 222
            echo "            </tbody>
        </table>
    </div>
</div>
<div class=\"clear\"></div>

";
        } else {
            // line 229
            echo "
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-order\"><a href=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
            echo "\">";
            echo gettext("Order");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 234
            echo gettext("Order products and services");
            echo "</p>
            </div>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-profile\"><a href=\"";
            // line 241
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/login"), "html", null, true);
            echo "?register=1\">";
            echo gettext("Register");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 243
            echo gettext("Become a member and manage services");
            echo "</p>
            </div>
        </div>
    </div>
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-email\"><a href=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/contact-us"), "html", null, true);
            echo "\">";
            echo gettext("Contact Us");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 251
            echo gettext("Contact us for more information");
            echo "</p>
            </div>
        </div>
    </div>

    ";
            // line 256
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "news")), "method")) {
                // line 257
                echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-blog\"><a href=\"";
                // line 259
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
                echo "\">";
                echo gettext("Announcements");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 261
                echo gettext("Latest news & announcements");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 266
            echo "
    ";
            // line 267
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
                // line 268
                echo "    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-kb\"><a href=\"";
                // line 270
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
                echo "\">";
                echo gettext("Knowledge Base");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 272
                echo gettext("Browse our KB for answers and FAQs");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 277
            echo "
    ";
            // line 278
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
                // line 279
                echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-boxbilling\"><a href=\"http://www.boxbilling.com\">";
                // line 281
                echo gettext("Invoicing Software");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 283
                echo gettext("Powered by BoxBilling invoicing software");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 288
            echo "    <div class=\"clear\"></div>
";
        }
        // line 290
        echo "
</div>
";
    }

    // line 295
    public function block_js($context, array $blocks = array())
    {
        // line 296
        echo "<script type=\"text/javascript\">
\$(function() {

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

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 296,  686 => 295,  680 => 290,  676 => 288,  668 => 283,  663 => 281,  659 => 279,  656 => 278,  653 => 277,  645 => 272,  638 => 270,  634 => 268,  631 => 267,  628 => 266,  620 => 261,  613 => 259,  609 => 257,  606 => 256,  598 => 251,  591 => 249,  582 => 243,  575 => 241,  565 => 234,  558 => 232,  553 => 229,  544 => 222,  535 => 219,  532 => 218,  518 => 215,  508 => 214,  502 => 213,  496 => 212,  489 => 208,  479 => 200,  470 => 197,  467 => 196,  457 => 193,  447 => 192,  441 => 191,  434 => 190,  427 => 186,  411 => 175,  405 => 174,  394 => 167,  390 => 166,  383 => 163,  379 => 162,  372 => 159,  368 => 158,  360 => 153,  344 => 142,  338 => 141,  327 => 134,  323 => 133,  316 => 130,  312 => 129,  305 => 126,  301 => 125,  293 => 120,  277 => 109,  266 => 102,  262 => 101,  255 => 98,  251 => 97,  244 => 94,  240 => 93,  232 => 88,  216 => 77,  205 => 70,  201 => 69,  194 => 66,  190 => 65,  183 => 62,  179 => 61,  170 => 55,  165 => 52,  162 => 51,  159 => 50,  152 => 45,  142 => 41,  138 => 39,  128 => 35,  122 => 34,  117 => 33,  107 => 32,  102 => 31,  97 => 30,  94 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  56 => 14,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 3,  23 => 4,);
    }
}

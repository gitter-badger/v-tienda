<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_a408a56f28fdcb2a0a4336d93536aaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getContext($context, "request"), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoices");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["unpaid_invoices"] = $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(0 => array("status" => "unpaid", "per_page" => 100)), "method"), "list");
        // line 8
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-invoice\"></span></div>
            <h2>";
        // line 12
        echo gettext("Invoices");
        echo "</h2>
            <p>";
        // line 13
        echo gettext("List of invoices");
        echo "</p>
        </div>
        
        <div class=\"block conversation\">
        <div class=\"widget simpleTabs tabsRight first\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-invoice\">";
        // line 19
        echo gettext("Invoice management");
        echo "</h2>
        </div>
        <ul class=\"tabs\">
            ";
        // line 22
        if (isset($context["unpaid_invoices"])) { $_unpaid_invoices_ = $context["unpaid_invoices"]; } else { $_unpaid_invoices_ = null; }
        if (twig_length_filter($this->env, $_unpaid_invoices_)) {
            // line 23
            echo "            <li><a href=\"#tab-unpaid\">";
            echo gettext("Unpaid");
            echo "</a></li>
            ";
        }
        // line 25
        echo "            <li><a href=\"#tab-paid\">";
        echo gettext("Paid");
        echo "</a></li>
        </ul>
        <div class=\"tabs_container\">
            
            ";
        // line 29
        if (isset($context["unpaid_invoices"])) { $_unpaid_invoices_ = $context["unpaid_invoices"]; } else { $_unpaid_invoices_ = null; }
        if (twig_length_filter($this->env, $_unpaid_invoices_)) {
            // line 30
            echo "            <div class=\"tab_content\" id=\"tab-unpaid\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
            // line 34
            echo gettext("Title");
            echo "</th>
                        <th>";
            // line 35
            echo gettext("Issue Date");
            echo "</th>
                        <th>";
            // line 36
            echo gettext("Due Date");
            echo "</th>
                        <th>";
            // line 37
            echo gettext("Total");
            echo "</th>
                        <th>&nbsp</th>
                    </tr>
                </thead>

                <tbody>

                    ";
            // line 44
            if (isset($context["unpaid_invoices"])) { $_unpaid_invoices_ = $context["unpaid_invoices"]; } else { $_unpaid_invoices_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_unpaid_invoices_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 45
                echo "                    <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                        <td>";
                // line 46
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute($_invoice_, "id")), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_invoice_, "created_at")), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_invoice_, "due_at")), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_money($this->env, $this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
                echo "</td>
                        <td class=\"actions\"><a class=\"bb-button bb-button-red\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
                echo "/";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
                echo "\">";
                echo gettext("Pay");
                echo "</a></td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 54
                echo "                    <tr>
                        <td colspan=\"5\">";
                // line 55
                echo gettext("The list is empty");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        // line 62
        echo "        
        <div class=\"tab_content\" id=\"tab-paid\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
        // line 67
        echo gettext("Title");
        echo "</th>
                        <th>";
        // line 68
        echo gettext("Issue Date");
        echo "</th>
                        <th>";
        // line 69
        echo gettext("Paid at");
        echo "</th>
                        <th>";
        // line 70
        echo gettext("Total");
        echo "</th>
                        <th>&nbsp</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 76
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["paid_invoices"] = $this->getAttribute($_client_, "invoice_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"), "status" => "paid")), "method");
        // line 77
        echo "                    ";
        if (isset($context["paid_invoices"])) { $_paid_invoices_ = $context["paid_invoices"]; } else { $_paid_invoices_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_paid_invoices_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
            // line 78
            echo "
                    <tr class=\"";
            // line 79
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
            echo "\">
                        <td>";
            // line 80
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute($_invoice_, "id")), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_invoice_, "created_at")), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_invoice_, "paid_at")), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_money($this->env, $this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
            echo "/";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 89
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        echo "                </tbody>
            </table>
            ";
        // line 94
        if (isset($context["paid_invoices"])) { $_paid_invoices_ = $context["paid_invoices"]; } else { $_paid_invoices_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_paid_invoices_)));
        // line 95
        echo "            
        </div>
    </div>
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 95,  274 => 94,  270 => 92,  261 => 89,  258 => 88,  246 => 84,  241 => 83,  236 => 82,  231 => 81,  226 => 80,  221 => 79,  218 => 78,  211 => 77,  207 => 76,  198 => 70,  194 => 69,  190 => 68,  186 => 67,  179 => 62,  173 => 58,  164 => 55,  161 => 54,  147 => 50,  142 => 49,  137 => 48,  132 => 47,  127 => 46,  121 => 45,  115 => 44,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  87 => 30,  84 => 29,  76 => 25,  70 => 23,  67 => 22,  61 => 19,  52 => 13,  48 => 12,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  27 => 3,  22 => 2,);
    }
}

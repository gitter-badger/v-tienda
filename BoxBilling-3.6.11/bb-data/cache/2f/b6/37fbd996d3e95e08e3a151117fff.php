<?php

/* mod_client_balance.phtml */
class __TwigTemplate_2fb637fbd996d3e95e08e3a151117fff extends Twig_Template
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
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["profile"] = $this->getAttribute($_client_, "client_get");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Payments history");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-payment\"></span></div>
        <h2>";
        // line 11
        echo gettext("Payments history");
        echo "</h2>
        <p>";
        // line 12
        echo gettext("Here you can track your payments you have made and what you have been charged for");
        echo "</p>
    </div>
    <div class=\"block\">
        <table>
            <thead>
                <tr>
                    <th>";
        // line 18
        echo gettext("Amount");
        echo "</th>
                    <th>";
        // line 19
        echo gettext("Description");
        echo "</th>
                    <th>";
        // line 20
        echo gettext("Date");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 25
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["transactions"] = $this->getAttribute($_client_, "client_balance_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"))), "method");
        // line 26
        echo "                ";
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_transactions_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 27
            echo "                <tr class=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
            echo "\">
                    <td>";
            // line 28
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_money($this->env, $this->getAttribute($_tx_, "amount"), $this->getAttribute($_tx_, "currency"));
            echo "</td>
                    <td>";
            // line 29
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "description"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_tx_, "created_at")), "html", null, true);
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <tr>
                    <td colspan=\"3\">";
            // line 34
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "            </tbody>

            <tfoot>
                <tr>
                    <th><a class=\"bb-button\" href=\"#\" onclick=\"\$('#widget-add-funds').slideToggle(); return false;\" ><span class=\"dark-icon i-payment\"></span> ";
        // line 41
        echo gettext("Add Funds");
        echo "</a></th>
                    <th class=\"currency\" colspan=\"2\">";
        // line 42
        echo gettext("Balance");
        echo ": ";
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_money($this->env, $this->getAttribute($_profile_, "balance"), $this->getAttribute($_profile_, "currency"));
        echo "</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

";
        // line 49
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_transactions_)));
        // line 50
        echo "
<div class=\"grid_6 suffix_6 alpha omega\">
<div class=\"widget\" style=\"display: none;\" id=\"widget-add-funds\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-payment\">";
        // line 54
        echo gettext("Add funds in advance");
        echo "</h2>
    </div>
    <div class=\"block\">
        <p>";
        // line 57
        echo gettext("You can add funds to your account if you have active order.");
        echo "</p>
        <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"client/invoice/funds_invoice\" data-api-jsonp=\"onAfterInvoiceCreated\">
            <fieldset>
                <legend>";
        // line 60
        echo gettext("Add funds in advance");
        echo "</legend>
                <p>
                    <label>";
        // line 62
        echo gettext("Amount");
        echo ": </label>
                    <input type=\"text\" name=\"amount\" value=\"\" required=\"required\"/>
                </p>
                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 65
        echo gettext("Add funds");
        echo "\">
            </fieldset>
        </form>
    </div>
</div>
</div>

";
    }

    // line 74
    public function block_js($context, array $blocks = array())
    {
        // line 75
        echo "<script type=\"text/javascript\">
    function onAfterInvoiceCreated(hash) {
        var link = '";
        // line 77
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("invoice"), "html", null, true);
        echo "/' + hash;
        bb.redirect(link);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_balance.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 77,  193 => 75,  190 => 74,  178 => 65,  172 => 62,  167 => 60,  161 => 57,  155 => 54,  149 => 50,  146 => 49,  133 => 42,  129 => 41,  123 => 37,  114 => 34,  111 => 33,  102 => 30,  97 => 29,  92 => 28,  86 => 27,  79 => 26,  75 => 25,  67 => 20,  63 => 19,  59 => 18,  50 => 12,  46 => 11,  40 => 7,  37 => 6,  31 => 3,  25 => 4,  23 => 2,);
    }
}

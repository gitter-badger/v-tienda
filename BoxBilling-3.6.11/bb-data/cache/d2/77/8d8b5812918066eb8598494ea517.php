<?php

/* mod_order_list.phtml */
class __TwigTemplate_d2778d8b5812918066eb8598494ea517 extends Twig_Template
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
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("My Products & Services");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-services\"></span></div>
            <h2>";
        // line 11
        echo gettext("Ordered Services");
        echo "</h2>
        </div>
        <div class=\"block\">

        <table class=\"with-border\">
            <thead>
                <tr>
                    <th>";
        // line 18
        echo gettext("Product/Service");
        echo "</th>
                    <th>";
        // line 19
        echo gettext("Price");
        echo "</th>
                    <th>";
        // line 20
        echo gettext("Next due date");
        echo "</th>
                    <th>";
        // line 21
        echo gettext("Status");
        echo "</th>
                    <th>&nbsp</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 27
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["orders"] = $this->getAttribute($_client_, "order_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"), "hide_addons" => 1)), "method");
        // line 28
        echo "                ";
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_orders_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 29
            echo "
                <tr class=\"";
            // line 30
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service/manage"), "html", null, true);
            echo "/";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 32
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_money($this->env, $this->getAttribute($_order_, "total"), $this->getAttribute($_order_, "currency"));
            echo " ";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if ($this->getAttribute($_order_, "period")) {
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_period_title($this->env, $this->getAttribute($_order_, "period"));
            }
            echo "</td>
                    <td>";
            // line 33
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if ($this->getAttribute($_order_, "expires_at")) {
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_order_, "expires_at")), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                    <td>";
            // line 34
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $_mf_->getstatus_name($this->getAttribute($_order_, "status"));
            echo "</td>
                    <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service/manage"), "html", null, true);
            echo "/";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
            </tbody>

        </table>

            <div class=\"box\">
                <a class=\"bb-button bb-button-red\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("order"), "html", null, true);
        echo "\">";
        echo gettext("Order new service");
        echo "</a>
            </div>
        </div>
    </div>

";
        // line 56
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_orders_)));
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_order_list.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 57,  172 => 56,  162 => 51,  154 => 45,  144 => 41,  140 => 39,  128 => 35,  122 => 34,  112 => 33,  101 => 32,  91 => 31,  86 => 30,  83 => 29,  76 => 28,  72 => 27,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  41 => 11,  36 => 8,  33 => 7,  27 => 5,  22 => 3,);
    }
}

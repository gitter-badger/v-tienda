<?php

/* mod_email_index.phtml */
class __TwigTemplate_2f2ae8366674d72c20c38041f38d3d8b extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Emails");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-email\"></span></div>
        <h2>";
        // line 10
        echo gettext("Emails we have sent you");
        echo "</h2>
        <p>";
        // line 11
        echo gettext("Here you can track emails we have sent you");
        echo "</p>
    </div>
    <div class=\"block\">
        <table>
            <thead>
                <tr>
                    <th>";
        // line 17
        echo gettext("Email subject");
        echo "</th>
                    <th>";
        // line 18
        echo gettext("To");
        echo "</th>
                    <th>";
        // line 19
        echo gettext("Date sent");
        echo "</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 25
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["emails"] = $this->getAttribute($_client_, "email_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"))), "method");
        // line 26
        echo "                ";
        if (isset($context["emails"])) { $_emails_ = $context["emails"]; } else { $_emails_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_emails_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 27
            echo "                <tr class=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("email"), "html", null, true);
            echo "/";
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "subject"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 29
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "recipients"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_email_, "created_at")), "html", null, true);
            echo "</td>
                    <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("email"), "html", null, true);
            echo "/";
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"4\">";
            // line 35
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "            </tbody>
        </table>
    </div>
</div>

";
        // line 43
        if (isset($context["emails"])) { $_emails_ = $context["emails"]; } else { $_emails_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_emails_)));
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_email_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  137 => 43,  130 => 38,  121 => 35,  118 => 34,  107 => 31,  102 => 30,  97 => 29,  87 => 28,  81 => 27,  74 => 26,  70 => 25,  61 => 19,  57 => 18,  53 => 17,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  25 => 3,);
    }
}

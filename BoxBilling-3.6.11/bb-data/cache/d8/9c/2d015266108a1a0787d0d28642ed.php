<?php

/* mod_kb_index.phtml */
class __TwigTemplate_d89c2d015266108a1a0787d0d28642ed extends Twig_Template
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
        echo gettext("Knowledge base");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "q")) {
            // line 8
            echo "        ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            $context["kbcategories"] = $this->getAttribute($_guest_, "kb_category_get_list", array(0 => array("q" => $this->getAttribute($_request_, "q"))), "method");
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context["kbcategories"] = $this->getAttribute($_guest_, "kb_category_get_list");
            // line 11
            echo "    ";
        }
        // line 12
        echo "
<div class=\"h-block\" >
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-kb\"></span></div>
        <h2>";
        // line 16
        echo gettext("Knowledge base");
        echo "</h2>
    </div>
    <div class=\"block\">
        <div class=\"block\" style=\"text-align: center; margin: 20px 0 20px 0\">
            <form method=\"get\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("kb"), "html", null, true);
        echo "\" class=\"search\">
                <p>
                    <input class=\"search text\" name=\"q\" type=\"text\" value=\"";
        // line 22
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "q"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("What are you looking for?");
        echo "\">
                    <input class=\"bb-button bb-button-submit\" value=\"";
        // line 23
        echo gettext("Search");
        echo "\" type=\"submit\">
                </p>
            </form>
        </div>

    ";
        // line 28
        if (isset($context["kbcategories"])) { $_kbcategories_ = $context["kbcategories"]; } else { $_kbcategories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_kbcategories_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 29
            echo "        <div class=\"block kb\">
            <h2 class=\"big-dark-icon i-kb\" id=\"category-";
            // line 30
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("kb"), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "slug"), "html", null, true);
            echo "\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "title"), "html", null, true);
            echo "</a></h2>
            <ul>
            ";
            // line 32
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "articles"));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 33
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
                echo "/";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "category"), "slug"), "html", null, true);
                echo "/";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "slug"), "html", null, true);
                echo "\">";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "            </ul>
        </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        <p>
            ";
            // line 40
            echo gettext("Try using other keyword. No matches not for keyword:");
            // line 41
            echo "            <b>";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "q"), "html", null, true);
            echo "</b>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_kb_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 44,  147 => 41,  145 => 40,  142 => 39,  134 => 35,  116 => 33,  111 => 32,  97 => 30,  94 => 29,  88 => 28,  80 => 23,  73 => 22,  68 => 20,  61 => 16,  55 => 12,  52 => 11,  48 => 10,  45 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  25 => 3,);
    }
}

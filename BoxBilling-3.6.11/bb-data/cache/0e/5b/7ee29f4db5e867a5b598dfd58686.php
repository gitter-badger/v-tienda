<?php

/* mod_news_index.phtml */
class __TwigTemplate_0e5b7ee29f4db5e867a5b598dfd58686 extends Twig_Template
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
        echo gettext("Blog");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-blog\"></span></div>
        <h2>";
        // line 9
        echo gettext("News & Announcements");
        echo "</h2>
        <p>";
        // line 10
        echo gettext("Track our latest posts");
        echo "</p>
    </div>
    <div class=\"block articles\">
    ";
        // line 13
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["posts"] = $this->getAttribute($_guest_, "news_get_list", array(0 => array("page" => $this->getAttribute($_request_, "page"), "per_page" => 5)), "method");
        // line 14
        echo "    ";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_posts_, "list"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 15
            echo "        <div class=\"article";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                echo " last";
            }
            echo "\">
            <h2><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "slug"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a></h2>
            ";
            // line 17
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_bbmd_filter($this->env, $this->getAttribute($_post_, "content"));
            echo "
            <p class=\"meta\">";
            // line 18
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($_post_, "updated_at")), "html", null, true);
            echo "</p>
            <a class=\"bb-button read_more\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "slug"), "html", null, true);
            echo "\">";
            echo gettext("Read more..");
            echo "</a>
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 22
            echo "    <p>The list is empty</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </div>
    <div class=\"clear\"></div>
</div>

";
        // line 28
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_posts_)));
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 29,  135 => 28,  129 => 24,  122 => 22,  101 => 19,  96 => 18,  91 => 17,  81 => 16,  73 => 15,  53 => 14,  49 => 13,  43 => 10,  39 => 9,  34 => 6,  31 => 5,  25 => 3,);
    }
}

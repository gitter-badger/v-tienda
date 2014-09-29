<?php

/* partial_pagination.phtml */
class __TwigTemplate_e04da628dfa8184ad68f68c0b37baec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        if (($this->getAttribute($_list_, "pages") > 1)) {
            // line 2
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            $context["page"] = $this->getAttribute($_list_, "page");
            // line 3
            echo "
<div class=\"paginator\">
<ul>
  ";
            // line 6
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_list_, "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                echo "    <li>
    ";
                // line 8
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (($_i_ == $_page_)) {
                    // line 9
                    echo "        <a class=\"bb-button bb-button-submit\" href=\"#\" onclick=\"return false;\">";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 11
                    echo "        <a class=\"bb-button\" href=\"?";
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => $_i_)));
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
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                        echo twig_escape_filter($this->env, $_k_, "html", null, true);
                        echo "=";
                        if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                        echo twig_escape_filter($this->env, $_v_, "html", null, true);
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if (($this->getAttribute($_loop_, "last") == false)) {
                            echo "&";
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo "\">";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "</a>
    ";
                }
                // line 13
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "</ul>
    <div class=\"clear\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  47 => 11,  40 => 9,  28 => 6,  23 => 3,  20 => 2,  17 => 1,  175 => 57,  172 => 56,  162 => 51,  154 => 45,  144 => 41,  140 => 39,  128 => 35,  122 => 34,  112 => 33,  101 => 15,  91 => 31,  86 => 30,  83 => 29,  76 => 28,  72 => 27,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  41 => 11,  36 => 8,  33 => 7,  27 => 5,  22 => 3,);
    }
}

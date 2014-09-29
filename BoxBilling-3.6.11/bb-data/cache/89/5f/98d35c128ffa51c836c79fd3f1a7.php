<?php

/* mod_forum_index.phtml */
class __TwigTemplate_895f98d35c128ffa51c836c79fd3f1a7 extends Twig_Template
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
        echo gettext("Forum");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-forum\"></span></div>
            <h2>";
        // line 9
        echo gettext("Forum");
        echo "</h2>
            <p>";
        // line 10
        echo gettext("Welcome to our forums. If you wish to become a member and post, you have to be registered member.");
        echo "</p>
        </div>
        <div class=\"block\">

            ";
        // line 14
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_guest_, "forum_get_categories"));
        foreach ($context['_seq'] as $context["cat_name"] => $context["forums"]) {
            // line 15
            echo "            <table>
                <caption>";
            // line 16
            if (isset($context["cat_name"])) { $_cat_name_ = $context["cat_name"]; } else { $_cat_name_ = null; }
            echo twig_escape_filter($this->env, $_cat_name_, "html", null, true);
            echo "</caption>
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th style=\"width:80%;\">";
            // line 20
            echo gettext("Forum");
            echo "</th>
                        <th>";
            // line 21
            echo gettext("Threads");
            echo "</th>
                        <th>";
            // line 22
            echo gettext("Posts");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 27
            if (isset($context["forums"])) { $_forums_ = $context["forums"]; } else { $_forums_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_forums_);
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 28
                echo "                    <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 30
                if (isset($context["forum"])) { $_forum_ = $context["forum"]; } else { $_forum_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_forum_, "status"), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
                echo "/";
                if (isset($context["forum"])) { $_forum_ = $context["forum"]; } else { $_forum_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_forum_, "slug"), "html", null, true);
                echo "\">";
                if (isset($context["forum"])) { $_forum_ = $context["forum"]; } else { $_forum_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_forum_, "title"), "html", null, true);
                echo "</a>
                            <p>";
                // line 34
                if (isset($context["forum"])) { $_forum_ = $context["forum"]; } else { $_forum_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_forum_, "description"), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 37
                if (isset($context["forum"])) { $_forum_ = $context["forum"]; } else { $_forum_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_forum_, "stats", array(), "any", false, true), "topics_count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_forum_, "stats", array(), "any", false, true), "topics_count"), 0)) : (0)), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 39
                if (isset($context["forum"])) { $_forum_ = $context["forum"]; } else { $_forum_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_forum_, "stats", array(), "any", false, true), "posts_count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_forum_, "stats", array(), "any", false, true), "posts_count"), 0)) : (0)), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "                </tbody>
            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_name'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "            
            ";
        // line 46
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($_client_ && $this->getAttribute($_client_, "forum_favorites"))) {
            // line 47
            echo "            <h2>";
            echo gettext("Favorite topics");
            echo "</h2>
            <table>
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">";
            // line 53
            echo gettext("Thread / Thread Starter");
            echo "</th>
                        <th>";
            // line 54
            echo gettext("Last post");
            echo "</th>
                        <th>";
            // line 55
            echo gettext("Replies");
            echo "</th>
                        <th>";
            // line 56
            echo gettext("Views");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 61
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_client_, "forum_favorites"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                // line 62
                echo "                    <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 64
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topic_, "status"), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <img src=\"";
                // line 67
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($this->getAttribute($_topic_, "first"), "author"), "email")), "html", null, true);
                echo "?size=30\" alt=\"";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_topic_, "first"), "author"), "name"), "html", null, true);
                echo "\" />
                        </td>
                        <td>
                            <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
                echo "/";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_topic_, "forum"), "slug"), "html", null, true);
                echo "/";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topic_, "slug"), "html", null, true);
                echo "\">";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topic_, "title"), "html", null, true);
                echo "</a>
                            <p style=\"font-size: .9em\">";
                // line 71
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_topic_, "first"), "author"), "name"), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 74
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, twig_bb_date($this->getAttribute($this->getAttribute($_topic_, "last"), "created_at")), "html", null, true);
                echo "
                            <p style=\"font-size: .9em\">";
                // line 75
                echo gettext("by");
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
                echo "/";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_topic_, "forum"), "slug"), "html", null, true);
                echo "/";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topic_, "slug"), "html", null, true);
                echo "#m-";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_topic_, "last"), "id"), "html", null, true);
                echo "\">";
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_topic_, "last"), "author"), "name"), "html", null, true);
                echo " ";
                echo "</p>
                        </td>
                        <td>";
                // line 77
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_topic_, "stats"), "posts_count"), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                if (isset($context["topic"])) { $_topic_ = $context["topic"]; } else { $_topic_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_topic_, "stats"), "views_count"), "html", null, true);
                echo "</td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "
                    <tr>
                        <td colspan=\"6\">";
                // line 84
                echo gettext("The list is empty");
                echo "</td>
                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 88
            echo "
                </tbody>

            </table>
            ";
        }
        // line 93
        echo "        </div>
    </div>

    ";
        // line 96
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$_client_)) {
            // line 97
            echo "    <p><button class=\"bb-button bb-button-red\" type=\"button\" onclick=\"parent.location='";
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/login"), "html", null, true);
            echo "'\">";
            echo gettext("Register");
            echo "</button></p>
    ";
        }
        // line 99
        echo "    
";
    }

    public function getTemplateName()
    {
        return "mod_forum_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 99,  297 => 97,  294 => 96,  289 => 93,  282 => 88,  272 => 84,  268 => 82,  258 => 78,  253 => 77,  233 => 75,  228 => 74,  221 => 71,  208 => 70,  198 => 67,  191 => 64,  184 => 62,  178 => 61,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  148 => 47,  145 => 46,  142 => 45,  134 => 42,  124 => 39,  118 => 37,  111 => 34,  101 => 33,  94 => 30,  87 => 28,  82 => 27,  74 => 22,  70 => 21,  66 => 20,  58 => 16,  55 => 15,  50 => 14,  43 => 10,  39 => 9,  34 => 6,  31 => 5,  25 => 3,);
    }
}

<?php

/* mod_order_index.phtml */
class __TwigTemplate_7dd5f8a6c1dfea4d5a1d7aa6fe900b9d extends Twig_Template
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
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 5
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["periods"] = $this->getAttribute($_guest_, "system_periods");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Order");
    }

    // line 7
    public function block_content_before($context, array $blocks = array())
    {
        // line 8
        $this->env->loadTemplate("partial_steps.phtml")->display(array_merge($context, array("selected" => 1)));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">1</span></div>
        <h2>";
        // line 16
        echo gettext("Select Product");
        echo "</h2>
        <p>";
        // line 17
        echo gettext("Choose products we offer for selling");
        echo "</p>
    </div>
    <div class=\"block\">
    ";
        // line 20
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_guest_, "product_category_get_list"), "list"));
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
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 21
            echo "    <div class=\"product-category";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                echo " last";
            }
            echo "\" id=\"pc-";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\">
        <div class=\"show-products\">
            ";
            // line 23
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if ($this->getAttribute($_category_, "icon_url")) {
                // line 24
                echo "            <div style=\"float: left; margin: 20px;\">
                ";
                // line 25
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_img_tag($this->getAttribute($_category_, "icon_url"));
                echo "
            </div>
            ";
            }
            // line 28
            echo "            <div class=\"block product-pricing\" style=\"float: right;\">
                <span class=\"starting_from\">";
            // line 29
            echo gettext("Starting from:");
            echo "</span>
                <div class=\"currency\">";
            // line 30
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_money_convert($this->env, $this->getAttribute($_category_, "price_starting_from"));
            echo "</div>
                <a class=\"bb-button\" href=\"#\">";
            // line 31
            echo gettext("View products");
            echo "</a>
            </div>
            <div class=\"block\">
                <h2>";
            // line 34
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "title"), "html", null, true);
            echo "</h2>
                ";
            // line 35
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_bbmd_filter($this->env, $this->getAttribute($_category_, "description"));
            echo "
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"products\" style=\"display:none; position: relative;\">
            <div class=\"fader\" style=\"width: 100%;margin-right: 0;height: 8px;position: absolute;top: 0;left: 0;opacity: 0.75;border-top: 1px solid rgba(0, 0, 0, 0.4);background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(transparent));-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0.0, rgba(0,0,0,0)), color-stop(0.5, rgba(0,0,0,.8)), color-stop(1.0, rgba(0,0,0,0)));\"></div>
            ";
            // line 41
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $context["listing_template"] = (("mod_service" . $this->getAttribute($_category_, "type")) . "_listing.phtml");
            // line 42
            echo "            ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["listing_template"])) { $_listing_template_ = $context["listing_template"]; } else { $_listing_template_ = null; }
            if ($this->getAttribute($_guest_, "system_template_exists", array(0 => array("file" => $_listing_template_)), "method")) {
                // line 43
                echo "                <div class=\"mod_service";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "type"), "html", null, true);
                echo "\">";
                if (isset($context["listing_template"])) { $_listing_template_ = $context["listing_template"]; } else { $_listing_template_ = null; }
                $template = $this->env->resolveTemplate($_listing_template_);
                $template->display($context);
                echo "</div>
            ";
            } else {
                // line 45
                echo "            ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "products"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 46
                    echo "            <div class=\"product";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        echo " first";
                    }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "last")) {
                        echo " last";
                    }
                    echo "\">
                <div class=\"block\" style=\"position: relative;\">
                    <div class=\"product-pricing\" style=\"float:right; text-align: right; margin: 0 0 20px 20px;\">
                        <span class=\"starting_from\">";
                    // line 49
                    echo gettext("Starting from:");
                    echo "</span>
                        <div class=\"currency\">";
                    // line 50
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo twig_money_convert($this->env, $this->getAttribute($_product_, "price_starting_from"));
                    echo "</div>
                        ";
                    // line 51
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    if (($this->getAttribute($this->getAttribute($_product_, "pricing"), "type") == "recurrent")) {
                        // line 52
                        echo "                        <form method=\"get\" action=\"";
                        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
                        echo "/";
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_product_, "slug"), "html", null, true);
                        echo "\">
                        <p>
                        <select name=\"period\" id=\"period-selector\">
                        ";
                        // line 55
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_product_, "pricing"), "recurrent"));
                        foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                            // line 56
                            echo "                            ";
                            if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                            if ($this->getAttribute($_prices_, "enabled")) {
                                // line 57
                                echo "                            <option value=\"";
                                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                                echo twig_escape_filter($this->env, $_code_, "html", null, true);
                                echo "\" data-bb-price=\"";
                                if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                                echo twig_money_convert($this->env, $this->getAttribute($_prices_, "price"));
                                echo "\">";
                                if (isset($context["periods"])) { $_periods_ = $context["periods"]; } else { $_periods_ = null; }
                                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_periods_, $_code_, array(), "array"), "html", null, true);
                                echo "</option>
                            ";
                            }
                            // line 59
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 60
                        echo "                        </select>
                        </p>
                        <button class=\"bb-button bb-button-submit\" type=\"submit\">";
                        // line 62
                        echo gettext("Order now");
                        echo "</button>
                        </form>
                        ";
                    } else {
                        // line 65
                        echo "                        <p><button class=\"bb-button bb-button-submit\" type=\"button\" onclick=\"parent.location='";
                        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
                        echo "/";
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_product_, "slug"), "html", null, true);
                        echo "'\">";
                        echo gettext("Order now");
                        echo "</button></p>
                        ";
                    }
                    // line 67
                    echo "                    </div>

                    ";
                    // line 69
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    if ($this->getAttribute($_product_, "icon_url")) {
                        // line 70
                        echo "                    <div style=\"display: block;float:left; margin:0 20px 20px 0;\">
                        ";
                        // line 71
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        echo twig_img_tag($this->getAttribute($_product_, "icon_url"));
                        echo "
                    </div>
                    ";
                    }
                    // line 74
                    echo "                    
                    <h2>";
                    // line 75
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_product_, "title"), "html", null, true);
                    echo "</h2>

                    ";
                    // line 77
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo twig_bbmd_filter($this->env, $this->getAttribute($_product_, "description"));
                    echo "
                    <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
            </div>
            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 83
                echo "            ";
            }
            // line 84
            echo "            <div class=\"clear\"></div>
        </div>
    </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 88
        echo "    <div class=\"clear\"></div>
    </div>
</div>
";
    }

    // line 93
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        $this->env->loadTemplate("partial_currency.phtml")->display($context);
    }

    // line 97
    public function block_js($context, array $blocks = array())
    {
        // line 99
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('.show-products').click(function(){
        if(\$(this).parents('.product-category').hasClass('selected')) {
            \$(this).parents('.product-category').find('.products').slideUp();
            \$(this).parents('.product-category').removeClass('selected');
        } else {
            \$('.product-category').removeClass('selected');
            \$(this).parents('.product-category').addClass('selected');
            \$('.product-category .products').slideUp('fast');
            \$(this).parents('.product-category').find('.products').slideToggle();
        }
        return false;
    });
    
    var open = '";
        // line 115
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "show"), "js", null, true);
        echo "';
    if(open) {
        \$('#pc-' + open + ' .show-products').trigger('click');
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 115,  350 => 99,  347 => 97,  342 => 94,  339 => 93,  332 => 88,  315 => 84,  312 => 83,  291 => 77,  285 => 75,  282 => 74,  275 => 71,  272 => 70,  269 => 69,  265 => 67,  254 => 65,  248 => 62,  244 => 60,  238 => 59,  224 => 57,  220 => 56,  215 => 55,  205 => 52,  202 => 51,  197 => 50,  193 => 49,  179 => 46,  160 => 45,  149 => 43,  144 => 42,  141 => 41,  131 => 35,  126 => 34,  120 => 31,  115 => 30,  111 => 29,  108 => 28,  101 => 25,  98 => 24,  95 => 23,  83 => 21,  65 => 20,  59 => 17,  55 => 16,  49 => 12,  46 => 11,  42 => 8,  39 => 7,  33 => 3,  27 => 5,  25 => 2,);
    }
}

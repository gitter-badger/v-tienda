<?php

/* partial_message.phtml */
class __TwigTemplate_b08d89659f6baa6da77683c602dfad83 extends Twig_Template
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
        if (isset($context["flashes"])) { $_flashes_ = $context["flashes"]; } else { $_flashes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_flashes_);
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 2
            echo "    ";
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 3
                echo "        <div class=\"h-block ";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "\">
            <h2>";
                // line 4
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "</h2>
            <p>";
                // line 5
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $_msg_, "html", null, true);
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partial_message.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  22 => 2,  622 => 226,  617 => 131,  612 => 85,  607 => 81,  602 => 80,  597 => 76,  588 => 65,  579 => 63,  576 => 62,  571 => 27,  566 => 26,  559 => 11,  552 => 10,  547 => 5,  542 => 229,  540 => 228,  537 => 227,  531 => 225,  515 => 217,  513 => 216,  499 => 203,  493 => 200,  490 => 199,  487 => 198,  473 => 188,  463 => 185,  455 => 182,  439 => 175,  412 => 164,  409 => 163,  403 => 162,  400 => 161,  387 => 155,  384 => 154,  377 => 149,  359 => 147,  354 => 146,  348 => 143,  341 => 140,  331 => 132,  329 => 131,  326 => 130,  320 => 126,  304 => 124,  299 => 123,  292 => 119,  288 => 117,  284 => 116,  281 => 115,  275 => 112,  271 => 110,  250 => 100,  241 => 97,  236 => 95,  231 => 93,  225 => 90,  221 => 88,  218 => 87,  215 => 86,  213 => 85,  208 => 82,  202 => 80,  200 => 79,  196 => 77,  185 => 69,  182 => 68,  171 => 57,  163 => 54,  155 => 51,  147 => 48,  143 => 46,  134 => 41,  121 => 37,  118 => 36,  114 => 35,  105 => 28,  100 => 26,  95 => 24,  91 => 23,  87 => 22,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 15,  58 => 11,  54 => 10,  45 => 7,  389 => 75,  380 => 73,  370 => 66,  364 => 63,  352 => 53,  349 => 52,  346 => 51,  343 => 50,  340 => 49,  337 => 48,  328 => 47,  309 => 42,  303 => 41,  298 => 38,  287 => 37,  272 => 34,  261 => 33,  246 => 29,  235 => 28,  219 => 25,  207 => 24,  191 => 20,  167 => 15,  145 => 13,  140 => 45,  129 => 11,  115 => 10,  103 => 7,  81 => 5,  75 => 4,  67 => 3,  41 => 1,  35 => 45,  32 => 2,  29 => 1,  26 => 27,  20 => 17,  17 => 1,  689 => 296,  686 => 295,  680 => 290,  676 => 288,  668 => 283,  663 => 281,  659 => 279,  656 => 278,  653 => 277,  645 => 272,  638 => 270,  634 => 268,  631 => 267,  628 => 266,  620 => 261,  613 => 259,  609 => 257,  606 => 256,  598 => 251,  591 => 249,  582 => 64,  575 => 241,  565 => 234,  558 => 232,  553 => 229,  544 => 222,  535 => 226,  532 => 218,  518 => 215,  508 => 214,  502 => 213,  496 => 212,  489 => 208,  479 => 192,  470 => 187,  467 => 196,  457 => 193,  447 => 179,  441 => 191,  434 => 172,  427 => 167,  411 => 175,  405 => 174,  394 => 158,  390 => 156,  383 => 163,  379 => 162,  372 => 159,  368 => 158,  360 => 153,  344 => 141,  338 => 141,  327 => 134,  323 => 133,  316 => 130,  312 => 129,  305 => 126,  301 => 125,  293 => 120,  277 => 109,  266 => 102,  262 => 104,  255 => 102,  251 => 97,  244 => 94,  240 => 93,  232 => 88,  216 => 77,  205 => 81,  201 => 69,  194 => 76,  190 => 65,  183 => 62,  179 => 62,  170 => 55,  165 => 52,  162 => 51,  159 => 50,  152 => 45,  142 => 41,  138 => 39,  128 => 39,  122 => 34,  117 => 33,  107 => 32,  102 => 27,  97 => 30,  94 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  56 => 2,  52 => 12,  49 => 8,  46 => 10,  43 => 9,  40 => 8,  37 => 5,  34 => 4,  28 => 3,  23 => 22,);
    }
}

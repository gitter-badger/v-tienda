<?php

/* partial_menu.phtml */
class __TwigTemplate_e7cd516218120fdb072519d2b589e999 extends Twig_Template
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
        echo "<ul class=\"nav main\">
    ";
        // line 2
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$_client_)) {
            // line 3
            echo "    <li>
        <a class=\"dark-icon i-home\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_bb_client_link_filter(""), "html", null, true);
            echo "\">";
            echo gettext("Home");
            echo "</a>
    </li>
    ";
        }
        // line 7
        echo "    <li>
        <a class=\"dark-icon i-order\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/order"), "html", null, true);
        echo "\">";
        echo gettext("Order");
        echo "</a>
    </li>

    ";
        // line 11
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 12
            echo "    <li>
        <a class=\"dark-icon i-blog\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/blog"), "html", null, true);
            echo "\">";
            echo gettext("Blog");
            echo "</a>
    </li>
    ";
        }
        // line 16
        echo "    
    ";
        // line 17
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 18
            echo "    <li>
        <a class=\"dark-icon i-kb\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/kb"), "html", null, true);
            echo "\">";
            echo gettext("Knowledge Base");
            echo "</a>
    </li>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "forum")), "method")) {
            // line 24
            echo "    <li>
        <a class=\"dark-icon i-forum\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/forum"), "html", null, true);
            echo "\">";
            echo gettext("Forum");
            echo "</a>
    </li>
    ";
        }
        // line 28
        echo "    
    <li>
        <a class=\"dark-icon i-contacts\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_bb_client_link_filter("/contact-us"), "html", null, true);
        echo "\">";
        echo gettext("Contact us");
        echo "</a>
    </li>

    ";
        // line 33
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ($_client_) {
            // line 34
            echo "    <li>
        <a class=\"dark-icon i-support\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/support"), "html", null, true);
            echo "\">";
            echo gettext("Support");
            echo "</a>
    </li>
    <li>
        <a class=\"dark-icon i-services\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/service"), "html", null, true);
            echo "\">";
            echo gettext("Services");
            echo "</a>
    </li>
    
    <li>
        <a class=\"dark-icon i-invoice\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/invoice"), "html", null, true);
            echo "\">";
            echo gettext("Invoices");
            echo "</a>
    </li>
    <li>
        <a class=\"dark-icon i-email\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/emails"), "html", null, true);
            echo "\">";
            echo gettext("Emails");
            echo "</a>
    </li>

    <li>
        <a class=\"dark-icon i-payment\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_bb_client_link_filter("/balance"), "html", null, true);
            echo "\">";
            echo gettext("Payment history");
            echo "</a>
    </li>
    
    ";
            // line 61
            echo "    ";
        } else {
            // line 62
            echo "    ";
            // line 67
            echo "    ";
        }
        // line 68
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partial_menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  158 => 67,  156 => 62,  153 => 61,  136 => 45,  119 => 38,  111 => 35,  108 => 34,  93 => 28,  85 => 25,  79 => 23,  62 => 17,  59 => 16,  51 => 13,  48 => 12,  39 => 5,  22 => 2,  622 => 226,  617 => 131,  612 => 85,  607 => 81,  602 => 80,  597 => 76,  588 => 65,  579 => 63,  576 => 62,  571 => 27,  566 => 26,  559 => 11,  552 => 10,  547 => 5,  542 => 229,  540 => 228,  537 => 227,  531 => 225,  515 => 217,  513 => 216,  499 => 203,  493 => 200,  490 => 199,  487 => 198,  473 => 188,  463 => 185,  455 => 182,  439 => 175,  412 => 164,  409 => 163,  403 => 162,  400 => 161,  387 => 155,  384 => 154,  377 => 149,  359 => 147,  354 => 146,  348 => 143,  341 => 140,  331 => 132,  329 => 131,  326 => 130,  320 => 126,  304 => 124,  299 => 123,  292 => 119,  288 => 117,  284 => 116,  281 => 115,  275 => 112,  271 => 110,  250 => 100,  241 => 97,  236 => 95,  231 => 93,  225 => 90,  221 => 88,  218 => 87,  215 => 86,  213 => 85,  208 => 82,  202 => 80,  200 => 79,  196 => 77,  185 => 69,  182 => 68,  171 => 57,  163 => 54,  155 => 51,  147 => 48,  143 => 46,  134 => 41,  121 => 37,  118 => 36,  114 => 35,  105 => 33,  100 => 26,  95 => 24,  91 => 23,  87 => 22,  82 => 24,  78 => 19,  74 => 18,  70 => 17,  65 => 18,  58 => 11,  54 => 10,  45 => 11,  389 => 75,  380 => 73,  370 => 66,  364 => 63,  352 => 53,  349 => 52,  346 => 51,  343 => 50,  340 => 49,  337 => 48,  328 => 47,  309 => 42,  303 => 41,  298 => 38,  287 => 37,  272 => 34,  261 => 33,  246 => 29,  235 => 28,  219 => 25,  207 => 24,  191 => 20,  167 => 15,  145 => 49,  140 => 45,  129 => 11,  115 => 10,  103 => 7,  81 => 5,  75 => 4,  67 => 3,  41 => 1,  35 => 45,  32 => 2,  29 => 1,  26 => 4,  20 => 2,  17 => 1,  689 => 296,  686 => 295,  680 => 290,  676 => 288,  668 => 283,  663 => 281,  659 => 279,  656 => 278,  653 => 277,  645 => 272,  638 => 270,  634 => 268,  631 => 267,  628 => 266,  620 => 261,  613 => 259,  609 => 257,  606 => 256,  598 => 251,  591 => 249,  582 => 64,  575 => 241,  565 => 234,  558 => 232,  553 => 229,  544 => 222,  535 => 226,  532 => 218,  518 => 215,  508 => 214,  502 => 213,  496 => 212,  489 => 208,  479 => 192,  470 => 187,  467 => 196,  457 => 193,  447 => 179,  441 => 191,  434 => 172,  427 => 167,  411 => 175,  405 => 174,  394 => 158,  390 => 156,  383 => 163,  379 => 162,  372 => 159,  368 => 158,  360 => 153,  344 => 141,  338 => 141,  327 => 134,  323 => 133,  316 => 130,  312 => 129,  305 => 126,  301 => 125,  293 => 120,  277 => 109,  266 => 102,  262 => 104,  255 => 102,  251 => 97,  244 => 94,  240 => 93,  232 => 88,  216 => 77,  205 => 81,  201 => 69,  194 => 76,  190 => 65,  183 => 62,  179 => 62,  170 => 55,  165 => 52,  162 => 51,  159 => 50,  152 => 45,  142 => 41,  138 => 39,  128 => 42,  122 => 34,  117 => 33,  107 => 32,  102 => 27,  97 => 30,  94 => 29,  88 => 28,  80 => 23,  76 => 22,  72 => 21,  68 => 19,  64 => 19,  56 => 2,  52 => 12,  49 => 8,  46 => 10,  43 => 9,  40 => 8,  37 => 8,  34 => 7,  28 => 3,  23 => 3,);
    }
}
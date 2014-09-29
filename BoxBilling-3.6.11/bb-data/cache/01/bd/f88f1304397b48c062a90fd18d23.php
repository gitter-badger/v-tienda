<?php

/* partial_steps.phtml */
class __TwigTemplate_01bdf88f1304397b48c062a90fd18d23 extends Twig_Template
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
        echo "<div class=\"steps\">

<div class=\"grid_4 alpha";
        // line 3
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        if (($_selected_ == 1)) {
            echo " selected";
        }
        echo "\">
    <span>1</span>
    <p>";
        // line 5
        echo gettext("Select product");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 8
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        if (($_selected_ == 2)) {
            echo " selected";
        }
        echo "\">
    <span>2</span>
    <p>";
        // line 10
        echo gettext("Configure");
        echo "</p>
</div>

<div class=\"grid_4";
        // line 13
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        if (($_selected_ == 3)) {
            echo " selected";
        }
        echo "\">
    <span>3</span>
    <p>";
        // line 15
        echo gettext("Confirm");
        echo "</p>
</div>

<div class=\"grid_4 omega";
        // line 18
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        if (($_selected_ == 4)) {
            echo " selected";
        }
        echo "\">
    <span>4</span>
    <p>";
        // line 20
        echo gettext("Checkout");
        echo "</p>
</div>

<div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "partial_steps.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  63 => 18,  57 => 15,  43 => 10,  35 => 8,  29 => 5,  21 => 3,  17 => 1,  786 => 309,  781 => 307,  775 => 303,  772 => 302,  767 => 299,  764 => 298,  750 => 289,  742 => 284,  736 => 280,  728 => 274,  713 => 262,  707 => 260,  700 => 256,  692 => 251,  688 => 249,  681 => 246,  676 => 245,  671 => 243,  668 => 242,  665 => 241,  662 => 240,  655 => 237,  651 => 236,  648 => 235,  645 => 234,  642 => 233,  634 => 230,  630 => 228,  627 => 227,  624 => 226,  621 => 225,  612 => 222,  608 => 221,  605 => 220,  602 => 219,  599 => 218,  592 => 215,  588 => 214,  585 => 213,  582 => 212,  579 => 211,  572 => 208,  568 => 207,  565 => 206,  562 => 205,  559 => 204,  552 => 201,  548 => 200,  545 => 199,  542 => 198,  539 => 197,  529 => 190,  526 => 189,  523 => 188,  520 => 187,  513 => 183,  510 => 182,  507 => 181,  504 => 180,  497 => 177,  493 => 176,  490 => 175,  487 => 174,  484 => 173,  477 => 170,  473 => 169,  470 => 168,  467 => 167,  460 => 164,  456 => 163,  449 => 160,  445 => 159,  440 => 157,  436 => 155,  433 => 154,  428 => 152,  421 => 151,  418 => 150,  414 => 148,  411 => 147,  408 => 146,  405 => 145,  400 => 143,  395 => 141,  392 => 140,  389 => 139,  375 => 130,  371 => 129,  365 => 126,  358 => 123,  354 => 122,  349 => 120,  343 => 117,  335 => 111,  326 => 105,  323 => 104,  319 => 102,  305 => 101,  295 => 97,  286 => 96,  281 => 95,  263 => 94,  260 => 93,  257 => 92,  251 => 90,  247 => 89,  237 => 81,  231 => 79,  225 => 77,  222 => 76,  214 => 75,  207 => 70,  204 => 69,  199 => 66,  193 => 65,  189 => 63,  182 => 61,  176 => 59,  170 => 58,  167 => 57,  158 => 54,  155 => 53,  152 => 52,  148 => 50,  141 => 48,  135 => 46,  129 => 45,  126 => 44,  120 => 42,  117 => 41,  110 => 39,  107 => 38,  102 => 37,  95 => 35,  90 => 34,  82 => 29,  78 => 28,  74 => 27,  65 => 21,  61 => 20,  55 => 16,  52 => 15,  49 => 13,  46 => 13,  42 => 8,  39 => 7,  33 => 5,  27 => 11,  25 => 3,);
    }
}

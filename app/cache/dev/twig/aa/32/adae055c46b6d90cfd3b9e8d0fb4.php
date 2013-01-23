<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_aa32adae055c46b6d90cfd3b9e8d0fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  125 => 44,  69 => 20,  110 => 39,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 105,  247 => 97,  234 => 89,  231 => 88,  228 => 89,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  107 => 27,  209 => 77,  188 => 69,  182 => 69,  176 => 61,  90 => 41,  20 => 1,  262 => 236,  260 => 235,  257 => 234,  240 => 93,  238 => 97,  56 => 13,  53 => 38,  140 => 49,  86 => 28,  23 => 3,  187 => 59,  174 => 67,  170 => 60,  158 => 56,  134 => 54,  99 => 25,  128 => 45,  148 => 52,  117 => 44,  113 => 40,  87 => 34,  167 => 64,  164 => 63,  146 => 15,  142 => 13,  62 => 27,  40 => 8,  97 => 23,  77 => 24,  49 => 13,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 71,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 23,  38 => 7,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 23,  61 => 12,  47 => 11,  105 => 41,  93 => 31,  76 => 34,  72 => 22,  68 => 30,  91 => 35,  84 => 33,  44 => 10,  27 => 3,  25 => 29,  28 => 3,  24 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 36,  100 => 35,  78 => 26,  75 => 23,  71 => 21,  58 => 16,  34 => 5,  19 => 1,  94 => 33,  88 => 20,  79 => 35,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 16,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 30,  101 => 45,  96 => 24,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 22,  43 => 7,  41 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 6,  184 => 70,  178 => 86,  171 => 66,  165 => 60,  162 => 53,  157 => 31,  153 => 62,  151 => 53,  143 => 43,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 36,  92 => 21,  89 => 29,  85 => 29,  81 => 24,  73 => 33,  64 => 11,  60 => 16,  57 => 16,  54 => 13,  51 => 12,  48 => 11,  45 => 13,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}

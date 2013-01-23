<?php

/* TvDatabaseHomeBundle:Default:index.html.twig */
class __TwigTemplate_3c822bcf5559ddfdfcce740239bed19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'script' => array($this, 'block_script'),
            'mainmany' => array($this, 'block_mainmany'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 11
    public function block_mainmany($context, array $blocks = array())
    {
        // line 12
        echo "\t<li class=\"current_page_item\" ><a href=\"/";
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a></li>
\t<li><a href=\"/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/tvstations\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tv Stations", array(), "messages");
        echo "</a></li>
\t<li><a href=\"/";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo "/advancedsearch\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Advanced Search", array(), "messages");
        echo "</a></li>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 19
            echo "\t<div id=\"TV\">
\t<a href=\"/";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/tv/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tv"), "tvid"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "tv"), "tvname"), "html", null, true);
            echo "</a>
\t<div id=\"broadcast table\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "shows"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"/";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/show/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nameId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "name"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "showsNext"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"/";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
            echo "/show/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nameNextId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "nameNext"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "TvDatabaseHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  112 => 29,  108 => 28,  98 => 25,  94 => 24,  83 => 20,  80 => 19,  76 => 18,  71 => 17,  63 => 14,  57 => 13,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}

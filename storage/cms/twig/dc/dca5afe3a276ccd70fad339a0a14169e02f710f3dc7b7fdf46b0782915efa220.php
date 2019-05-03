<?php

/* /home/ubuntu/workspace/themes/master/pages/destinations.htm */
class __TwigTemplate_42c3eb26b2a993dadbc99f92d8b4aab42450aba608fc4b17576d8851b68d2ca5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["e"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["editor"] ?? null), "records", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null);
        // line 2
        $context["destinations"] = twig_get_attribute($this->env, $this->source, ($context["destinations"] ?? null), "records", []);
        // line 3
        echo "
<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "destinations_bg", []), "getPath", []), "html", null, true);
        echo "\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Top destinations"]);
        echo "</h1>
\t\t\t\t\t<h2>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Some of the most impressive places in the world"]);
        echo "</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"./?ref=nav\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Top destinations"]);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-sectionspace tg-haslayout\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div id=\"tg-content\" class=\"tg-content\">
\t\t\t\t\t\t\t<div class=\"tg-topdestinations\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["destinations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-topdestination\">
\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/destinations/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\" class=\"tg-btnviewall\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["View Gallery"]);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/destinations/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\"><img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "image", []), "getPath", []), 360, 360]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/destinations/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-totaltours\">";
            // line 37
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Avalaible"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/destinations.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  106 => 37,  98 => 36,  87 => 34,  79 => 33,  74 => 30,  70 => 29,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}
{% set destinations = destinations.records %}

<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{e.destinations_bg.getPath}}\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>{{\"Top destinations\" | _ }}</h1>
\t\t\t\t\t<h2>{{\"Some of the most impressive places in the world\" | _ }}</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"./?ref=nav\">{{'Home' |_}}</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">{{\"Top destinations\" | _ }}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-sectionspace tg-haslayout\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div id=\"tg-content\" class=\"tg-content\">
\t\t\t\t\t\t\t<div class=\"tg-topdestinations\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    {% for c in destinations %}
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-topdestination\">
\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{app}}/destinations/{{c.slug}}\" class=\"tg-btnviewall\">{{'View Gallery' | _ }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{app}}/destinations/{{c.slug}}\"><img src=\"{{c.image.getPath | resize(360, 360)}}\" alt=\"{{c.name}}\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2><a href=\"{{app}}/destinations/{{c.slug}}\">{{c.name}}</a></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-totaltours\">{{'Avalaible' | _}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                {% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>", "/home/ubuntu/workspace/themes/master/pages/destinations.htm", "");
    }
}

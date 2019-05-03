<?php

/* /home/ubuntu/workspace/themes/master/pages/destination.htm */
class __TwigTemplate_299843ae81bfff4870c94a43e4301155b3961642b7594ae50ced360a40a1ec5a extends Twig_Template
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
        $context["d"] = twig_get_attribute($this->env, $this->source, ($context["destination"] ?? null), "record", []);
        // line 2
        echo "
<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "image", []), "getPath", []), "html", null, true);
        echo "\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "services_title", []), "html", null, true);
        echo "</h1>
\t\t\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "services_subtitle", []), "html", null, true);
        echo "</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=nav\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/destinations\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Destinations"]);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "name", []), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t<div id=\"tg-content\" class=\"tg-content\">
    \t\t\t
                    <div class=\"tg-sectionhead\"  style=\"margin-top: 50px\">
\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t<h2>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About"]);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>     \t\t\t
    \t\t\t
    \t\t\t    <div>
    \t\t\t        ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "description", []);
        echo "
    \t\t\t    </div>
    \t\t\t    
    \t\t\t    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "youtube", [])) {
            // line 38
            echo "    \t\t\t    <div style=\"margin: 100px auto\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "youtube", []), "html", null, true);
            echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen style=\"-webkit-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); -moz-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); box-shadow: 0px 0px 54px -2px rgba(51,51,51,1);\"></iframe>    \t\t\t    
    \t\t\t    </div>
    \t\t\t    ";
        }
        // line 42
        echo "    \t\t\t    
                    <div class=\"tg-sectionhead\"  style=\"margin-top: 100px\">
\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t<h2>";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Photo Gallery"]);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    \t\t\t    
    \t\t\t    

                \t<div class=\"tg-gallery\">
                \t\t<ul>
                \t\t
                \t\t    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "gallery", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 54
            echo "                \t\t\t<li>
                \t\t\t\t<figure>
                \t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getPath", []), "html", null, true);
            echo "\" data-rel=\"prettyPhoto[instagram]\">
                \t\t\t\t\t\t<img src=\"";
            // line 57
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["c"], "getPath", []), 350, 350]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["d"] ?? null), "name", []), "html", null, true);
            echo "\" style=\"height: 350px; width: 350px;\">
                \t\t\t\t\t</a>
                \t\t\t\t</figure>
                \t\t\t</li>
                \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                
                \t\t</ul>
                \t</div>
                </div>
            </div>
        </div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/destination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 62,  129 => 57,  125 => 56,  121 => 54,  117 => 53,  106 => 45,  101 => 42,  95 => 39,  92 => 38,  90 => 37,  84 => 34,  76 => 29,  57 => 13,  51 => 12,  45 => 11,  40 => 9,  36 => 8,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set d = destination.record %}

<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{d.image.getPath}}\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>{{e.services_title}}</h1>
\t\t\t\t\t<h2>{{e.services_subtitle}}</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"{{app}}/?ref=nav\">{{'Home' |_}}</a></li>
\t\t\t\t\t\t<li><a href=\"{{app}}/destinations\">{{'Destinations' |_}}</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">{{d.name}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t<div id=\"tg-content\" class=\"tg-content\">
    \t\t\t
                    <div class=\"tg-sectionhead\"  style=\"margin-top: 50px\">
\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t<h2>{{ \"About\" |_}}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>     \t\t\t
    \t\t\t
    \t\t\t    <div>
    \t\t\t        {{d.description | raw}}
    \t\t\t    </div>
    \t\t\t    
    \t\t\t    {% if d.youtube %}
    \t\t\t    <div style=\"margin: 100px auto\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{{d.youtube}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen style=\"-webkit-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); -moz-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); box-shadow: 0px 0px 54px -2px rgba(51,51,51,1);\"></iframe>    \t\t\t    
    \t\t\t    </div>
    \t\t\t    {% endif %}
    \t\t\t    
                    <div class=\"tg-sectionhead\"  style=\"margin-top: 100px\">
\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t<h2>{{ \"Photo Gallery\" |_}}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>    \t\t\t    
    \t\t\t    

                \t<div class=\"tg-gallery\">
                \t\t<ul>
                \t\t
                \t\t    {% for c in d.gallery %}
                \t\t\t<li>
                \t\t\t\t<figure>
                \t\t\t\t\t<a href=\"{{c.getPath}}\" data-rel=\"prettyPhoto[instagram]\">
                \t\t\t\t\t\t<img src=\"{{c.getPath | resize(350, 350) }}\" alt=\"{{d.name}}\" style=\"height: 350px; width: 350px;\">
                \t\t\t\t\t</a>
                \t\t\t\t</figure>
                \t\t\t</li>
                \t\t\t{% endfor %}
                
                \t\t</ul>
                \t</div>
                </div>
            </div>
        </div>
    </div>
</main>", "/home/ubuntu/workspace/themes/master/pages/destination.htm", "");
    }
}

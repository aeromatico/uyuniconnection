<?php

/* /home/ubuntu/workspace/themes/master/partials/menu/main.htm */
class __TwigTemplate_fd73022ff80eb57e31a6c557cfeaafa4f2865c44eb59ed8dce0961f06e4944f4 extends Twig_Template
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
        $context["packs"] = twig_get_attribute($this->env, $this->source, ($context["packs"] ?? null), "records", []);
        echo "      
";
        // line 2
        $context["menuPacks"] = twig_get_attribute($this->env, $this->source, ($context["menuPacks"] ?? null), "records", []);
        echo "        
        
        
        <nav id=\"tg-nav\" class=\"tg-nav\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<a href=\"#menu\" class=\"navbar-toggle collapsed\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tg-navigation\" class=\"collapse navbar-collapse tg-navigation\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=main-menu\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["home"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/destinations\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["destinations"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/services\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["services"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children menu-item-has-mega-menu\"><a href=\"javascript:void(0);\">tours</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"mega-menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["packs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/tours/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</a></li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-sliderarea\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Featured packs"]);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-trendingtripsslider tg-trendingtrips owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuPacks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/tours/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 34
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "image", []), "getPath", []), 235, 170]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "days", []), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["days"]);
            echo ", ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["c"], "days", []) - 1), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nights"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "avalaible", []) == 1)) {
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Avalaible"]);
                echo " ";
            } else {
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Not avalaible"]);
                echo " ";
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "pricing", []), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/menu/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 48,  141 => 41,  137 => 40,  124 => 38,  114 => 37,  106 => 34,  100 => 33,  96 => 31,  92 => 30,  86 => 27,  82 => 25,  69 => 23,  65 => 22,  56 => 18,  50 => 17,  44 => 16,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set packs = packs.records %}      
{% set menuPacks = menuPacks.records %}        
        
        
        <nav id=\"tg-nav\" class=\"tg-nav\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<a href=\"#menu\" class=\"navbar-toggle collapsed\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tg-navigation\" class=\"collapse navbar-collapse tg-navigation\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/?ref=main-menu\">{{ 'home'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/destinations\">{{ 'destinations'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/services\">{{ 'services'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children menu-item-has-mega-menu\"><a href=\"javascript:void(0);\">tours</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"mega-menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t    {% for c in packs %}
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/tours/{{c.slug}}\">{{c.name}}</a></li>
                                                {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-sliderarea\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>{{'Featured packs' | _}}</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-trendingtripsslider tg-trendingtrips owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t    {% for c in menuPacks %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{app}}/tours/{{c.slug}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ c.image.getPath | resize(235, 170) }}\" alt=\"{{ c.name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">{{c.days}} {{'days' |_}}, {{c.days - 1}} {{'nights' |_}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">{% if c.avalaible == 1 %} {{'Avalaible' | _}} {% else %} {{'Not avalaible' | _}} {% endif %}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{c.name}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\${{c.pricing}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>", "/home/ubuntu/workspace/themes/master/partials/menu/main.htm", "");
    }
}

<?php

/* /home/ubuntu/workspace/themes/master/pages/services.htm */
class __TwigTemplate_5abdee9432164381c4f43f53acea1377e4f23641663555486504f131678e449b extends Twig_Template
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
        echo "
<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "services_bg", []), "getPath", []), "html", null, true);
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
\t\t\t\t\t\t<li><a href=\"./?ref=nav\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "services_title", []), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">

<!--************************************
\t\t\tFeatures Start
\t*************************************-->
\t<section class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"tg-features\">
\t\t\t\t
\t\t\t\t    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "services", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 31
            echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
\t\t\t\t\t\t\t\t<h2><span>0";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "</span><a href=\"javascript:void(0);\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", []), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t<p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", []), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--************************************
\t\t\tFeatures End
\t*************************************-->
\t<!--************************************
\t\t\tCall To Action Start
\t*************************************-->
\t<section class=\"tg-parallax\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "services_bg2", []), "getPath", []), "html", null, true);
        echo "\">
\t\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"tg-calltoaction\">
\t\t\t\t\t\t\t<div class=\"tg-pattern\"><img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/patternw.png");
        echo "\" alt=\"image destination\"></div>
\t\t\t\t\t\t\t<h2>Get 10% Off on your Next Travel</h2>
\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Travel between 22 April to 21 May and get existing offers along with a sure 10% cash discount</p></div>
\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\"><span>Explore Tour</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--************************************
\t\t\tCall To Action End
\t*************************************-->
\t
</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 59,  132 => 53,  119 => 42,  100 => 37,  92 => 34,  87 => 31,  70 => 30,  49 => 12,  45 => 11,  40 => 9,  36 => 8,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}

<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{e.services_bg.getPath}}\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>{{e.services_title}}</h1>
\t\t\t\t\t<h2>{{e.services_subtitle}}</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"./?ref=nav\">{{'Home' |_}}</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">{{e.services_title}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">

<!--************************************
\t\t\tFeatures Start
\t*************************************-->
\t<section class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"tg-features\">
\t\t\t\t
\t\t\t\t    {% for c in e.services %}
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
\t\t\t\t\t\t\t\t<h2><span>0{{loop.index}}</span><a href=\"javascript:void(0);\">{{c.title}}</a></h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t<p>{{c.description}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--************************************
\t\t\tFeatures End
\t*************************************-->
\t<!--************************************
\t\t\tCall To Action Start
\t*************************************-->
\t<section class=\"tg-parallax\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{e.services_bg2.getPath}}\">
\t\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"tg-calltoaction\">
\t\t\t\t\t\t\t<div class=\"tg-pattern\"><img src=\"{{'assets/img/patternw.png' | theme }}\" alt=\"image destination\"></div>
\t\t\t\t\t\t\t<h2>Get 10% Off on your Next Travel</h2>
\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Travel between 22 April to 21 May and get existing offers along with a sure 10% cash discount</p></div>
\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\"><span>Explore Tour</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!--************************************
\t\t\tCall To Action End
\t*************************************-->
\t
</main>", "/home/ubuntu/workspace/themes/master/pages/services.htm", "");
    }
}

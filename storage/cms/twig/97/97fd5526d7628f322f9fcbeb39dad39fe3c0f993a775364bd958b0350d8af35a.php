<?php

/* /home/ubuntu/workspace/themes/master/pages/about.htm */
class __TwigTemplate_d5ac5b19323abb43451e3ea5685186cbe5533581648716d1a3b23adabe787bf4 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_bg", []), "getPath", []), "html", null, true);
        echo "\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_title", []), "html", null, true);
        echo "</h1>
\t\t\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_subtitle", []), "html", null, true);
        echo "</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"./?ref=nav\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_title", []), "html", null, true);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">

<!--************************************
\t\t\t\t\tAbout Us Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-aboutus\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<figure data-vide-bg=\"poster: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_image1", []), "getPath", []), "html", null, true);
        echo "\" data-vide-options=\"position: 0% 50%\"></figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-textbox\">
\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t<h2>";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Mission"]);
        echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_mission", []);
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<figure data-vide-bg=\"poster: ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_image2", []), "getPath", []), "html", null, true);
        echo "\" data-vide-options=\"position: 0% 50%\"></figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-textbox\">
\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t<h2>";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vision"]);
        echo "</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "about_vision", []);
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tAbout Us End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tFAQs Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-sectionspace tg-haslayout tg-bglight\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t\t<h2>Need Help?</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"tg-accordion\" class=\"tg-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>Ornare Quam Justo Tellusv</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>A work of art is above all an adventure of mind!</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>Pharetra Etiam Inceptos</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>We pride ourselves on innovative.</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tFAQs End
\t\t\t*************************************-->
</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 58,  106 => 54,  96 => 47,  85 => 39,  78 => 35,  68 => 28,  49 => 12,  45 => 11,  40 => 9,  36 => 8,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}

<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{e.about_bg.getPath}}\">
\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t<h1>{{e.about_title}}</h1>
\t\t\t\t\t<h2>{{e.about_subtitle}}</h2>
\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"./?ref=nav\">{{'Home' |_}}</a></li>
\t\t\t\t\t\t<li class=\"tg-active\">{{e.about_title}}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">

<!--************************************
\t\t\t\t\tAbout Us Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-aboutus\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<figure data-vide-bg=\"poster: {{e.about_image1.getPath}}\" data-vide-options=\"position: 0% 50%\"></figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-textbox\">
\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t<h2>{{'Mission'|_}}</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{e.about_mission |raw}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<figure data-vide-bg=\"poster: {{e.about_image2.getPath}}\" data-vide-options=\"position: 0% 50%\"></figure>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-textbox\">
\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t<h2>{{'Vision'|_}}</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{e.about_vision |raw}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tAbout Us End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tFAQs Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-sectionspace tg-haslayout tg-bglight\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t\t<h2>Need Help?</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"tg-accordion\" class=\"tg-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>Ornare Quam Justo Tellusv</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>A work of art is above all an adventure of mind!</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>Pharetra Etiam Inceptos</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
\t\t\t\t\t\t\t\t\t\t<h4>We pride ourselves on innovative.</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tFAQs End
\t\t\t*************************************-->
</main>", "/home/ubuntu/workspace/themes/master/pages/about.htm", "");
    }
}

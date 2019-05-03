<?php

/* /home/ubuntu/workspace/themes/master/partials/slider.htm */
class __TwigTemplate_99e2179b151b0bb99e3a38d563305938acba0bc2c514a2cc3d5cf697c9c7ef5f extends Twig_Template
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
<div id=\"tg-homebannerslider\" class=\"tg-homebannerslider tg-haslayout\">
\t\t\t<div id=\"tg-homesliderfull\" class=\"tg-homeslider tg-homesliderfull tg-homeslidervthree owl-carousel tg-haslayout\">
\t\t\t
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "slider", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "\t\t\t\t<figure class=\"item\" data-vide-bg=\"poster: ";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["c"], "image", []));
            echo "\" data-vide-options=\"position: 50% 50%\">
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-slidercontent\">
\t\t\t\t\t\t\t\t\t\t<h1>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", []), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "subtitle", []), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\"><span>Explore Tour</span></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t\t\t</div>
\t\t\t<div id=\"tg-homesliderthumbnails\" class=\"tg-homeslider tg-homesliderthumbnails tg-homeslidervthree owl-carousel tg-haslayout\">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "slider", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "\t\t\t\t<figure class=\"item\" data-vide-bg=\"poster: ";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["c"], "image", []));
            echo "\" data-vide-options=\"position: 50% 50%\">
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"tg-slidercontent\">
\t\t\t\t\t\t\t<h1>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", []), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t\t<h2>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "subtitle", []), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</div>
\t\t\t<div class=\"tg-findtour tg-nobackground\" style=\"display: none\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formtrip\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"selectpicker\" style=\"width: 100%\"></input>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" data-live-search=\"true\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Adventure Type\">Adventure Type</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Ice Adventure Vacations\">Ice Adventure Vacations</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"National Park\">National Park</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Adult Vacations\">Adult Vacations</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" data-live-search=\"true\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Travel Month\">Travel Month</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"January\">January</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"February\">February</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"March\">March</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"April\">April</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"May\">May</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"June\">June</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"July\">July</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"August\">August</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"September\">September</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"October\">October</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"November\">November</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"December\">December</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" data-live-search=\"true\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Duration\">Duration</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"2 weeks\">2 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"3 weeks\">3 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"4 weeks\">4 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"5 weeks\">5 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"6 weeks\">6 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"7 weeks\">7 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"8 weeks\">8 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"9 weeks\">9 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"10 weeks\">10 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn\" type=\"submit\"><span>find tours</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  84 => 31,  80 => 30,  73 => 27,  69 => 26,  64 => 23,  49 => 14,  45 => 13,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}

<div id=\"tg-homebannerslider\" class=\"tg-homebannerslider tg-haslayout\">
\t\t\t<div id=\"tg-homesliderfull\" class=\"tg-homeslider tg-homesliderfull tg-homeslidervthree owl-carousel tg-haslayout\">
\t\t\t
\t\t\t{% for c in e.slider %}
\t\t\t\t<figure class=\"item\" data-vide-bg=\"poster: {{c.image | media}}\" data-vide-options=\"position: 50% 50%\">
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-slidercontent\">
\t\t\t\t\t\t\t\t\t\t<h1>{{c.title}}</h1>
\t\t\t\t\t\t\t\t\t\t<h2>{{c.subtitle}}</h2>
\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\"><span>Explore Tour</span></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t {% endfor %}

\t\t\t</div>
\t\t\t<div id=\"tg-homesliderthumbnails\" class=\"tg-homeslider tg-homesliderthumbnails tg-homeslidervthree owl-carousel tg-haslayout\">
\t\t\t\t{% for c in e.slider %}
\t\t\t\t<figure class=\"item\" data-vide-bg=\"poster: {{c.image | media}}\" data-vide-options=\"position: 50% 50%\">
\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"tg-slidercontent\">
\t\t\t\t\t\t\t<h1>{{c.title}}</h1>
\t\t\t\t\t\t\t<h2>{{c.subtitle}}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</figcaption>
\t\t\t\t</figure>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"tg-findtour tg-nobackground\" style=\"display: none\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formtrip\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"selectpicker\" style=\"width: 100%\"></input>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" data-live-search=\"true\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Adventure Type\">Adventure Type</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Ice Adventure Vacations\">Ice Adventure Vacations</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"National Park\">National Park</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Adult Vacations\">Adult Vacations</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" data-live-search=\"true\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Travel Month\">Travel Month</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"January\">January</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"February\">February</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"March\">March</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"April\">April</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"May\">May</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"June\">June</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"July\">July</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"August\">August</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"September\">September</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"October\">October</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"November\">November</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"December\">December</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"selectpicker\" data-live-search=\"true\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"Duration\">Duration</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"2 weeks\">2 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"3 weeks\">3 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"4 weeks\">4 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"5 weeks\">5 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"6 weeks\">6 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"7 weeks\">7 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"8 weeks\">8 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"9 weeks\">9 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option data-tokens=\"10 weeks\">10 weeks</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn\" type=\"submit\"><span>find tours</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>", "/home/ubuntu/workspace/themes/master/partials/slider.htm", "");
    }
}

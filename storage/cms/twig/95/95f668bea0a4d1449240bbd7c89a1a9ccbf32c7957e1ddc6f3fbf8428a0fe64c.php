<?php

/* /home/ubuntu/workspace/themes/master/pages/contact.htm */
class __TwigTemplate_f71203ef3f54ab6fc75b9757e420a1ec201495a1c38093c215c6c7e8188730ac extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "contact_bg", []), "getPath", []), "html", null, true);
        echo "\">
\t\t\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact us"]);
        echo "</h1>
\t\t\t\t\t\t\t<h2>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Keep in touch"]);
        echo "</h2>
\t\t\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"tg-active\">Contact us</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout tg-sectionspace\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t<div id=\"tg-content\" class=\"tg-content\">
    \t\t\t\t<ul class=\"tg-contactinfo\">
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<span class=\"tg-contactinfoicon\"><i class=\"fa fa-commenting-o\"></i></span>
    \t\t\t\t\t\t<h2>Get in Touch</h2>
    \t\t\t\t\t\t<span>Telephone: +591 72418032</span>
    \t\t\t\t\t\t<span>Mobile: +591 77868473</span>
    \t\t\t\t\t\t<strong><a href=\"mailto:hello@Travleu.com\">info@uyunisaltflatsbolivia.com</a></strong>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<span class=\"tg-contactinfoicon\"><i class=\"icon-map-marker\"></i></span>
    \t\t\t\t\t\t<h2>Visit Our Location</h2>
    \t\t\t\t\t\t<address>Ferroviaria Avenue N.332 - Next of Avenida Hotel</address>
    \t\t\t\t\t\t<strong><a href=\"javascript:void(0);\">Get Directions</a></strong>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<span class=\"tg-contactinfoicon\"><i class=\"icon-briefcase\"></i></span>
    \t\t\t\t\t\t<h2>Reservation?</h2>
    \t\t\t\t\t\t<div class=\"tg-description\"><p>perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p></div>
    \t\t\t\t\t\t<strong><a href=\"mailto:careers@travleu.com\">booking@uyunisaltflatsbolivia.com</a></strong>
    \t\t\t\t\t</li>
    \t\t\t\t</ul>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 9,  36 => 8,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}

<section class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{e.contact_bg.getPath}}\">
\t\t\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<h1>{{'Contact us' |_}}</h1>
\t\t\t\t\t\t\t<h2>{{\"Keep in touch\" |_}}</h2>
\t\t\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t\t\t<li><a href=\"{{app}}\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"tg-active\">Contact us</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

<main id=\"tg-main\" class=\"tg-main tg-haslayout tg-sectionspace\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t<div id=\"tg-content\" class=\"tg-content\">
    \t\t\t\t<ul class=\"tg-contactinfo\">
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<span class=\"tg-contactinfoicon\"><i class=\"fa fa-commenting-o\"></i></span>
    \t\t\t\t\t\t<h2>Get in Touch</h2>
    \t\t\t\t\t\t<span>Telephone: +591 72418032</span>
    \t\t\t\t\t\t<span>Mobile: +591 77868473</span>
    \t\t\t\t\t\t<strong><a href=\"mailto:hello@Travleu.com\">info@uyunisaltflatsbolivia.com</a></strong>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<span class=\"tg-contactinfoicon\"><i class=\"icon-map-marker\"></i></span>
    \t\t\t\t\t\t<h2>Visit Our Location</h2>
    \t\t\t\t\t\t<address>Ferroviaria Avenue N.332 - Next of Avenida Hotel</address>
    \t\t\t\t\t\t<strong><a href=\"javascript:void(0);\">Get Directions</a></strong>
    \t\t\t\t\t</li>
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<span class=\"tg-contactinfoicon\"><i class=\"icon-briefcase\"></i></span>
    \t\t\t\t\t\t<h2>Reservation?</h2>
    \t\t\t\t\t\t<div class=\"tg-description\"><p>perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p></div>
    \t\t\t\t\t\t<strong><a href=\"mailto:careers@travleu.com\">booking@uyunisaltflatsbolivia.com</a></strong>
    \t\t\t\t\t</li>
    \t\t\t\t</ul>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
</main>", "/home/ubuntu/workspace/themes/master/pages/contact.htm", "");
    }
}

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
        echo "<nav id=\"tg-nav\" class=\"tg-nav\">
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
        // line 12
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/?ref=main-menu\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["home"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"destinations.html\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["destinations"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/services\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["services"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children menu-item-has-mega-menu\"><a href=\"javascript:void(0);\">tours</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"mega-menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvone.html\">list style one</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvtwo.html\">list style two</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvthree.html\">list style three</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvfour.html\">list style four</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvfive.html\">list style five</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvsix.html\">list style six</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-sliderarea\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Popular Tours</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-trendingtripsslider tg-trendingtrips owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-05.jpg");
        echo "\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-06.jpg");
        echo "\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-07.jpg");
        echo "\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-08.jpg");
        echo "\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
        return array (  125 => 79,  106 => 63,  87 => 47,  68 => 31,  46 => 14,  42 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"tg-nav\" class=\"tg-nav\">
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
\t\t\t\t\t\t\t\t\t<li><a href=\"destinations.html\">{{ 'destinations'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/services\">{{ 'services'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children menu-item-has-mega-menu\"><a href=\"javascript:void(0);\">tours</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"mega-menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvone.html\">list style one</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvtwo.html\">list style two</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvthree.html\">list style three</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvfour.html\">list style four</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvfive.html\">list style five</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"listingvsix.html\">list style six</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-sliderarea\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Popular Tours</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-trendingtripsslider tg-trendingtrips owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/tours/img-05.jpg' | theme }}\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/tours/img-06.jpg' | theme }}\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/tours/img-07.jpg' | theme }}\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item tg-trendingtrip\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/tours/img-08.jpg' | theme }}\" alt=\"image destinations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-locationname\">Paris</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>from</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>\$600</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>", "/home/ubuntu/workspace/themes/master/partials/menu/main.htm", "");
    }
}

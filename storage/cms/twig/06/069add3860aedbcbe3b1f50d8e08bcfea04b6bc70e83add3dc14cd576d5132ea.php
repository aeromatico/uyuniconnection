<?php

/* /home/ubuntu/workspace/themes/master/pages/home.htm */
class __TwigTemplate_3849d64586e2bb695e38e017c97a66ae9124251a8c355f9a84bcd48884075851 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">

<!--************************************
    \t\tOur Destination Start
    *************************************-->
    <section class=\"tg-sectionspace tg-bgdark tg-haslayout\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-sectionhead tg-sectionheadvtwo\">
    \t\t\t\t\t<div class=\"tg-sectiontitle\">
    \t\t\t\t\t\t<h2>Top Destinations</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-themetabs tg-themetabsvtwo\">
    \t\t\t\t\t<ul class=\"tg-themetabnav\" role=\"tablist\">
    \t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#northamerica\" role=\"tab\" data-toggle=\"tab\"><strong>North america</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#europe\" aria-controls=\"europe\" role=\"tab\" data-toggle=\"tab\"><strong>Europe</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#africa\" aria-controls=\"africa\" role=\"tab\" data-toggle=\"tab\"><strong>africa</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#asia\" aria-controls=\"asia\" role=\"tab\" data-toggle=\"tab\"><strong>asia</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#southamerica\" aria-controls=\"southamerica\" role=\"tab\" data-toggle=\"tab\"><strong>south america</strong></a></li>
    \t\t\t\t\t</ul>
    \t\t\t\t\t<div class=\"tab-content tg-themetabcontent\">
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"america\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-11.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-12.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-13.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-14.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"europe\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-11.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-12.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-13.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-14.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"africa\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-11.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-12.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-13.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-14.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"asia\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-11.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-12.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 201
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-13.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-14.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"southamerica\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-11.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-12.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 249
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-13.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-14.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"tg-ourdestination\">
    \t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 tg-verticalmiddle\">
    \t\t\t\t\t<figure><img src=\"";
        // line 280
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/placeholder/placeholder-01.png");
        echo "\" alt=\"image destinations\"></figure>
    \t\t\t\t</div>
    \t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 tg-verticalmiddle\">
    \t\t\t\t\t<div class=\"tg-ourdestinationcontent\">
    \t\t\t\t\t\t<div class=\"tg-sectiontitle tg-sectiontitleleft\">
    \t\t\t\t\t\t\t<h2>Popular Tours</h2>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"tg-description\"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer adipiscing elit, sed diam nonummy nibh...</p></div>
    \t\t\t\t\t\t<ul class=\"tg-destinations\">
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Europe</h3>
    \t\t\t\t\t\t\t\t\t<em>(05)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Africa</h3>
    \t\t\t\t\t\t\t\t\t<em>(15)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Asia</h3>
    \t\t\t\t\t\t\t\t\t<em>(12)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Oceania</h3>
    \t\t\t\t\t\t\t\t\t<em>(02)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>North America</h3>
    \t\t\t\t\t\t\t\t\t<em>(08)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>South America</h3>
    \t\t\t\t\t\t\t\t\t<em>(27)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\"><span>all destinations</span></a>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tOur Destination End
    *************************************-->
    <!--************************************
    \t\tPopular Tours Start
    *************************************-->
    <section class=\"tg-sectionspace tg-haslayout\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-sectionhead tg-sectionheadvtwo\">
    \t\t\t\t\t<div class=\"tg-sectiontitle\">
    \t\t\t\t\t\t<h2>Popular Tours</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"tg-populartoursslider\" class=\"tg-populartoursslider tg-populartours owl-carousel\">
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 354
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-01.jpg");
        echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t<span class=\"tg-descount\">25% Off</span>
    \t\t\t\t\t\t</figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">City Tours in Europe, Paris</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<del>\$2,800</del>
    \t\t\t\t\t\t\t\t\t<h4>\$2,500</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure><a href=\"javascript:void(0);\"><img src=\"";
        // line 378
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-02.jpg");
        echo "\" alt=\"image destinations\"></a></figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Best of Canada Tours and Travel</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<span>from</span>
    \t\t\t\t\t\t\t\t\t<h4>\$600</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure><a href=\"javascript:void(0);\"><img src=\"";
        // line 400
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-03.jpg");
        echo "\" alt=\"image destinations\"></a></figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Italy – 3 Days in Rome, Golden Gate</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<span>from</span>
    \t\t\t\t\t\t\t\t\t<h4>\$1,430</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure><a href=\"javascript:void(0);\"><img src=\"";
        // line 422
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tours/img-04.jpg");
        echo "\" alt=\"image destinations\"></a></figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Best of Canada Tours and Travel</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<span>from</span>
    \t\t\t\t\t\t\t\t\t<h4>\$600</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tPopular Tours End
    *************************************-->
    <!--************************************
    \t\tFeatures Start
    *************************************-->
    <section class=\"tg-parallax\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 454
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/parallax/bgparallax-02.jpg");
        echo "\">
    \t<div class=\"tg-sectionspace tg-haslayout\">
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"tg-features\">
    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>01</span><a href=\"javascript:void(0);\">Luxury Hotels</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>02</span><a href=\"javascript:void(0);\">Tourist Guide</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>03</span><a href=\"javascript:void(0);\">Flights Tickets</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tFeatures End
*************************************-->

<!--Articles-->

</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 454,  521 => 422,  496 => 400,  471 => 378,  444 => 354,  367 => 280,  344 => 260,  330 => 249,  316 => 238,  302 => 227,  284 => 212,  270 => 201,  256 => 190,  242 => 179,  224 => 164,  210 => 153,  196 => 142,  182 => 131,  164 => 116,  150 => 105,  136 => 94,  122 => 83,  104 => 68,  90 => 57,  76 => 46,  62 => 35,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'slider' %}

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">

<!--************************************
    \t\tOur Destination Start
    *************************************-->
    <section class=\"tg-sectionspace tg-bgdark tg-haslayout\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-sectionhead tg-sectionheadvtwo\">
    \t\t\t\t\t<div class=\"tg-sectiontitle\">
    \t\t\t\t\t\t<h2>Top Destinations</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-themetabs tg-themetabsvtwo\">
    \t\t\t\t\t<ul class=\"tg-themetabnav\" role=\"tablist\">
    \t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#northamerica\" role=\"tab\" data-toggle=\"tab\"><strong>North america</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#europe\" aria-controls=\"europe\" role=\"tab\" data-toggle=\"tab\"><strong>Europe</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#africa\" aria-controls=\"africa\" role=\"tab\" data-toggle=\"tab\"><strong>africa</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#asia\" aria-controls=\"asia\" role=\"tab\" data-toggle=\"tab\"><strong>asia</strong></a></li>
    \t\t\t\t\t\t<li role=\"presentation\"><a href=\"#southamerica\" aria-controls=\"southamerica\" role=\"tab\" data-toggle=\"tab\"><strong>south america</strong></a></li>
    \t\t\t\t\t</ul>
    \t\t\t\t\t<div class=\"tab-content tg-themetabcontent\">
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"america\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-11.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-12.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-13.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-14.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"europe\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-11.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-12.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-13.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-14.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"africa\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-11.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-12.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-13.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-14.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"asia\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-11.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-12.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-13.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-14.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"southamerica\">
    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-11.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Paris</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>Beautiful City in the World</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-12.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Dubai</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-13.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Istanbul</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-14.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">london</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>in the streets of London</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"tg-ourdestination\">
    \t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 tg-verticalmiddle\">
    \t\t\t\t\t<figure><img src=\"{{'assets/img/placeholder/placeholder-01.png' | theme }}\" alt=\"image destinations\"></figure>
    \t\t\t\t</div>
    \t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 tg-verticalmiddle\">
    \t\t\t\t\t<div class=\"tg-ourdestinationcontent\">
    \t\t\t\t\t\t<div class=\"tg-sectiontitle tg-sectiontitleleft\">
    \t\t\t\t\t\t\t<h2>Popular Tours</h2>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"tg-description\"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer adipiscing elit, sed diam nonummy nibh...</p></div>
    \t\t\t\t\t\t<ul class=\"tg-destinations\">
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Europe</h3>
    \t\t\t\t\t\t\t\t\t<em>(05)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Africa</h3>
    \t\t\t\t\t\t\t\t\t<em>(15)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Asia</h3>
    \t\t\t\t\t\t\t\t\t<em>(12)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>Oceania</h3>
    \t\t\t\t\t\t\t\t\t<em>(02)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>North America</h3>
    \t\t\t\t\t\t\t\t\t<em>(08)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
    \t\t\t\t\t\t\t\t\t<h3>South America</h3>
    \t\t\t\t\t\t\t\t\t<em>(27)</em>
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\"><span>all destinations</span></a>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tOur Destination End
    *************************************-->
    <!--************************************
    \t\tPopular Tours Start
    *************************************-->
    <section class=\"tg-sectionspace tg-haslayout\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-sectionhead tg-sectionheadvtwo\">
    \t\t\t\t\t<div class=\"tg-sectiontitle\">
    \t\t\t\t\t\t<h2>Popular Tours</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"tg-populartoursslider\" class=\"tg-populartoursslider tg-populartours owl-carousel\">
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-01.jpg' | theme }}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t<span class=\"tg-descount\">25% Off</span>
    \t\t\t\t\t\t</figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">City Tours in Europe, Paris</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<del>\$2,800</del>
    \t\t\t\t\t\t\t\t\t<h4>\$2,500</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure><a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-02.jpg' | theme }}\" alt=\"image destinations\"></a></figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Best of Canada Tours and Travel</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<span>from</span>
    \t\t\t\t\t\t\t\t\t<h4>\$600</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure><a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-03.jpg' | theme }}\" alt=\"image destinations\"></a></figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Italy – 3 Days in Rome, Golden Gate</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<span>from</span>
    \t\t\t\t\t\t\t\t\t<h4>\$1,430</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure><a href=\"javascript:void(0);\"><img src=\"{{'assets/img/tours/img-04.jpg' | theme }}\" alt=\"image destinations\"></a></figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"javascript:void(0);\">Best of Canada Tours and Travel</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">7 Days</span>
    \t\t\t\t\t\t\t\t\t<span class=\"tg-stars\"><span></span></span>
    \t\t\t\t\t\t\t\t\t<em>(3 Review)</em>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<span>from</span>
    \t\t\t\t\t\t\t\t\t<h4>\$600</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tPopular Tours End
    *************************************-->
    <!--************************************
    \t\tFeatures Start
    *************************************-->
    <section class=\"tg-parallax\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{'assets/img/parallax/bgparallax-02.jpg' | theme }}\">
    \t<div class=\"tg-sectionspace tg-haslayout\">
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"tg-features\">
    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>01</span><a href=\"javascript:void(0);\">Luxury Hotels</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>02</span><a href=\"javascript:void(0);\">Tourist Guide</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>03</span><a href=\"javascript:void(0);\">Flights Tickets</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tFeatures End
*************************************-->

<!--Articles-->

</main>", "/home/ubuntu/workspace/themes/master/pages/home.htm", "");
    }
}

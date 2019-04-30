<?php

/* /home/ubuntu/workspace/themes/master/pages/pack.htm */
class __TwigTemplate_27ae116977ee79edb853e4e5ceab06198c1b3bee35f60c0e8f1f630f7456ba22 extends Twig_Template
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
        $context["p"] = twig_get_attribute($this->env, $this->source, ($context["pack"] ?? null), "record", []);
        // line 2
        echo "
\t<div class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "bg", []), "getPath", []), "html", null, true);
        echo "\">
\t\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t<div id=\"tg-content\" class=\"tg-content\">
    \t\t\t\t<div class=\"tg-tourbookingdetail\">
    \t\t\t\t\t<div class=\"tg-bookinginfo\">
    \t\t\t\t\t\t<h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "name", []), "html", null, true);
        echo "</h2>
    \t\t\t\t\t\t
    \t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t<p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "subtitle", []), "html", null, true);
        echo "</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t
    \t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t<del>";
        // line 28
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "pricing", []) + 500), "html", null, true);
        echo "</del>
    \t\t\t\t\t\t\t<h4>\$";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "pricing", []), "html", null, true);
        echo "</h4>
    \t\t\t\t\t\t</div>


    \t\t\t\t\t\t<ul class=\"tg-tripinfo\">
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration\">4 days, 3 nights</span></li>
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration tg-availabilty\">Availaible</span></li>
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration tg-location\">Uyuni</span></li>
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration tg-peoples\">Shared</span></li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<div class=\"tg-refundshare\">
    \t\t\t\t\t\t\t<div class=\"tg-refund\">
    \t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/img-03.jpg");
        echo "\" alt=\"image description\"></figure>
    \t\t\t\t\t\t\t\t<div class=\"tg-refundinfo\">
    \t\t\t\t\t\t\t\t\t<h3>100% refundable</h3>
    \t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t<p>Cancel up to 12 days before your trip and get a full refund, including service fees.</p>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<ul class=\"tg-likeshare\">
    \t\t\t\t\t\t\t\t<li class=\"tg-shareicon\">
    \t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><i class=\"icon-share-button-outline\"></i>share</a>
    \t\t\t\t\t\t\t\t\t<ul class=\"tg-share\">
    \t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter\"></i></a></li>
    \t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook\"></i></a></li>
    \t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-pinterest\"></i></a></li>
    \t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t</li>    \t
    \t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-eye\"></i>3520</a></li>
    \t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-sectionspace tg-haslayout\">
    \t\t\t\t\t\t<div class=\"tg-themetabs tg-bookingtabs\">
    \t\t\t\t\t\t\t<ul class=\"tg-themetabnav\" role=\"tablist\">
    \t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
    \t\t\t\t\t\t\t\t\t<a href=\"#america\" aria-controls=\"america\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>Overview</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t<li role=\"presentation\">
    \t\t\t\t\t\t\t\t\t<a href=\"#australia\" aria-controls=\"australia\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>Itinerary</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t<li role=\"presentation\">
    \t\t\t\t\t\t\t\t\t<a href=\"#italy\" aria-controls=\"italy\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>location</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>

    \t\t\t\t\t\t\t\t<li role=\"presentation\">
    \t\t\t\t\t\t\t\t\t<a href=\"#india\" aria-controls=\"india\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>Gallery</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t<div class=\"tab-content tg-themetabcontent\">
    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active tg-overviewtab\" id=\"america\">
    \t\t\t\t\t\t\t\t\t<div class=\"tg-bookingdetail\">
    \t\t\t\t\t\t\t\t\t\t<div class=\"tg-box\">
    \t\t\t\t\t\t\t\t\t\t\t<h2>About this tour</h2>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 93
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "description", []);
        echo "</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<div class=\"tg-bookingdetail tg-bookingdetailstyle\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<h3>Services (Shared)</h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-content\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 101
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "services_shared", []);
        echo "</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<div class=\"tg-bookingdetail tg-bookingdetailstyle\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<h3>Services (Private)</h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-content\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 109
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "services_private", []);
        echo "</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane tg-itinerary\" id=\"australia\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"tg-box\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "itinerary", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 120
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", []), "html", null, true);
            echo "<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["c"], "description", []);
            echo "</p>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane tg-locationtab\" id=\"italy\">
    \t\t\t\t\t\t\t\t\t<div class=\"tg-box tg-location\">
    \t\t\t\t\t\t\t\t\t\t<h3>The neighborhood</h3>
    \t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t<p>Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis
    euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t<div id=\"tg-locationmap\" class=\"tg-locationmap tg-map\"></div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane tg-gallerytab\" id=\"india\">
    \t\t\t\t\t\t\t\t\t<div class=\"tg-gallery\">
    \t\t\t\t\t\t\t\t\t\t<ul>
    \t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "gallery", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 150
            echo "    \t\t\t\t\t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getPath", []), "html", null, true);
            echo "\" data-rel=\"prettyPhoto[instagram]\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getPath", []), "html", null, true);
            echo "\" alt=\"image decruoton\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "
    \t\t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>

</main>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/pages/pack.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 158,  229 => 153,  225 => 152,  221 => 150,  217 => 149,  195 => 129,  184 => 124,  178 => 121,  175 => 120,  171 => 119,  158 => 109,  147 => 101,  136 => 93,  81 => 41,  66 => 29,  62 => 28,  54 => 23,  48 => 20,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set p = pack.record %}

\t<div class=\"tg-parallax tg-innerbanner\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{p.bg.getPath}}\">
\t\t<div class=\"tg-sectionspace tg-haslayout\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t

<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
    \t<div class=\"row\">
    \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t<div id=\"tg-content\" class=\"tg-content\">
    \t\t\t\t<div class=\"tg-tourbookingdetail\">
    \t\t\t\t\t<div class=\"tg-bookinginfo\">
    \t\t\t\t\t\t<h2>{{p.name}}</h2>
    \t\t\t\t\t\t
    \t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t<p>{{p.subtitle}}</p>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t
    \t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t<span>From</span>
    \t\t\t\t\t\t\t<del>{{p.pricing + 500}}</del>
    \t\t\t\t\t\t\t<h4>\${{p.pricing}}</h4>
    \t\t\t\t\t\t</div>


    \t\t\t\t\t\t<ul class=\"tg-tripinfo\">
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration\">4 days, 3 nights</span></li>
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration tg-availabilty\">Availaible</span></li>
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration tg-location\">Uyuni</span></li>
    \t\t\t\t\t\t\t<li><span class=\"tg-tourduration tg-peoples\">Shared</span></li>
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t\t<div class=\"tg-refundshare\">
    \t\t\t\t\t\t\t<div class=\"tg-refund\">
    \t\t\t\t\t\t\t\t<figure><img src=\"{{'assets/img/img-03.jpg' | theme }}\" alt=\"image description\"></figure>
    \t\t\t\t\t\t\t\t<div class=\"tg-refundinfo\">
    \t\t\t\t\t\t\t\t\t<h3>100% refundable</h3>
    \t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t<p>Cancel up to 12 days before your trip and get a full refund, including service fees.</p>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<ul class=\"tg-likeshare\">
    \t\t\t\t\t\t\t\t<li class=\"tg-shareicon\">
    \t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><i class=\"icon-share-button-outline\"></i>share</a>
    \t\t\t\t\t\t\t\t\t<ul class=\"tg-share\">
    \t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter\"></i></a></li>
    \t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook\"></i></a></li>
    \t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-pinterest\"></i></a></li>
    \t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t</li>    \t
    \t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-eye\"></i>3520</a></li>
    \t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-sectionspace tg-haslayout\">
    \t\t\t\t\t\t<div class=\"tg-themetabs tg-bookingtabs\">
    \t\t\t\t\t\t\t<ul class=\"tg-themetabnav\" role=\"tablist\">
    \t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\">
    \t\t\t\t\t\t\t\t\t<a href=\"#america\" aria-controls=\"america\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>Overview</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t<li role=\"presentation\">
    \t\t\t\t\t\t\t\t\t<a href=\"#australia\" aria-controls=\"australia\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>Itinerary</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t<li role=\"presentation\">
    \t\t\t\t\t\t\t\t\t<a href=\"#italy\" aria-controls=\"italy\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>location</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>

    \t\t\t\t\t\t\t\t<li role=\"presentation\">
    \t\t\t\t\t\t\t\t\t<a href=\"#india\" aria-controls=\"india\" role=\"tab\" data-toggle=\"tab\">
    \t\t\t\t\t\t\t\t\t\t<span>Gallery</span>
    \t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t<div class=\"tab-content tg-themetabcontent\">
    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active tg-overviewtab\" id=\"america\">
    \t\t\t\t\t\t\t\t\t<div class=\"tg-bookingdetail\">
    \t\t\t\t\t\t\t\t\t\t<div class=\"tg-box\">
    \t\t\t\t\t\t\t\t\t\t\t<h2>About this tour</h2>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>{{p.description | raw}}</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<div class=\"tg-bookingdetail tg-bookingdetailstyle\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<h3>Services (Shared)</h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-content\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>{{p.services_shared |raw}}</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<div class=\"tg-bookingdetail tg-bookingdetailstyle\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<h3>Services (Private)</h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-content\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>{{p.services_private |raw}}</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane tg-itinerary\" id=\"australia\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"tg-box\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t    {% for c in p.itinerary %}
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panel\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<h4>{{c.title}}<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-panelcontent\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{c.description |raw}}</p>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane tg-locationtab\" id=\"italy\">
    \t\t\t\t\t\t\t\t\t<div class=\"tg-box tg-location\">
    \t\t\t\t\t\t\t\t\t\t<h3>The neighborhood</h3>
    \t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t<p>Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis
    euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t<div id=\"tg-locationmap\" class=\"tg-locationmap tg-map\"></div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane tg-gallerytab\" id=\"india\">
    \t\t\t\t\t\t\t\t\t<div class=\"tg-gallery\">
    \t\t\t\t\t\t\t\t\t\t<ul>
    \t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t    {% for c in p.gallery %}
    \t\t\t\t\t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{c.getPath}}\" data-rel=\"prettyPhoto[instagram]\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{c.getPath}}\" alt=\"image decruoton\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t{% endfor %}

    \t\t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>

</main>", "/home/ubuntu/workspace/themes/master/pages/pack.htm", "");
    }
}

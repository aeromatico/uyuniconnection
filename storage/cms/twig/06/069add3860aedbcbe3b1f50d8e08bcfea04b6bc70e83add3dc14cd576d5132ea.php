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
        $context["e"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["editor"] ?? null), "records", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null);
        // line 2
        $context["destinations"] = twig_get_attribute($this->env, $this->source, ($context["destinations"] ?? null), "records", []);
        // line 3
        $context["packs"] = twig_get_attribute($this->env, $this->source, ($context["packs"] ?? null), "records", []);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
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
    \t\t\t\t\t\t<h2>";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Top Destinations"]);
        echo "</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Uyuni is one of the most incredible tourist destinations in the world"]);
        echo "</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-themetabs tg-themetabsvtwo\">
    \t\t\t\t\t<div class=\"tab-content tg-themetabcontent\">

    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["destinations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 32
            echo "    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"./destinations/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\"><img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "image", []), "getPath", []), 360, 230]);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"./destinations/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "subtitle", []), "html", null, true);
            echo "</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                    
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t\t<div style=\"text-align: center\">
    \t\t\t\t<a class=\"tg-btn\" href=\"./destinations\"><span>destinations gallery</span></a>
    \t\t\t\t</div>
    \t\t\t\t
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
    \t\t\t\t\t\t<h2>";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Popular Tours"]);
        echo "</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tour packages that achieve unforgettable adventures and maximum comfort"]);
        echo "</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"tg-populartoursslider\" class=\"tg-populartoursslider tg-populartours owl-carousel\">
    \t\t\t\t
    \t\t\t\t    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["packs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 79
            echo "    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t<a href=\"";
            // line 81
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/tours/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\"><img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "image", []), "getPath", []), 360, 230]);
            echo "\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t<span class=\"tg-descount\">";
            // line 82
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
    \t\t\t\t\t\t</figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/tours/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "days", []), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["days"]);
            echo ", ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["c"], "days", []) - 1), "html", null, true);
            echo ", ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["nights"]);
            echo "</span>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<h4>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "pricing", []), "html", null, true);
            echo "</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    \t\t\t\t\t
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tPopular Tours End
    *************************************-->
    <section>
    \t<div class=\"tg-sectionspace tg-haslayout\" style=\"margin-top: -100px\">
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\" style=\"width: 80%; margin: 0 auto\">

                    <iframe src=\"https://player.vimeo.com/video/333993050\" width=\"640\" height=\"360\" frameborder=\"0\" allow=\"autoplay; fullscreen\" style=\"-webkit-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); -moz-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); box-shadow: 0px 0px 54px -2px rgba(51,51,51,1);\" allowfullscreen></iframe>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>    
    </section>

    <!--************************************
    \t\tFeatures Start
    *************************************-->
    <section class=\"tg-parallax\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "home_features_bg", []), "getPath", []), "html", null, true);
        echo "\">
    \t<div class=\"tg-sectionspace tg-haslayout\">
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"tg-features\">
    \t\t\t\t
    \t\t\t\t    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "home_features", []));
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
            // line 134
            echo "    \t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
    \t\t\t\t\t\t<div class=\"tg-feature\">
    \t\t\t\t\t\t\t<div class=\"tg-featuretitle\">
    \t\t\t\t\t\t\t\t<h2><span>0";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "</span><a href=\"javascript:void(0);\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", []), "html", null, true);
            echo "</a></h2>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "description", []), "html", null, true);
            echo "</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
                        ";
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
        // line 145
        echo "                        
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
        return array (  301 => 145,  282 => 140,  274 => 137,  269 => 134,  252 => 133,  243 => 127,  216 => 102,  204 => 96,  192 => 93,  178 => 86,  163 => 82,  155 => 81,  151 => 79,  147 => 78,  139 => 73,  133 => 70,  105 => 44,  93 => 38,  86 => 36,  77 => 34,  73 => 32,  69 => 31,  56 => 21,  50 => 18,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set e = editor.records[0] %}
{% set destinations = destinations.records %}
{% set packs        = packs.records %}

{% partial 'slider' %}

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
    \t\t\t\t\t\t<h2>{{\"Top Destinations\" | _}}</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>{{\"Uyuni is one of the most incredible tourist destinations in the world\"|_}}</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    \t\t\t\t<div class=\"tg-themetabs tg-themetabsvtwo\">
    \t\t\t\t\t<div class=\"tab-content tg-themetabcontent\">

    \t\t\t\t\t\t\t<div class=\"tg-topdestinationslider tg-populardestinations owl-carousel\">
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t    {% for c in destinations %}
    \t\t\t\t\t\t\t\t<div class=\"item tg-populardestination\">
    \t\t\t\t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t\t\t\t<a href=\"./destinations/{{c.slug}}\"><img src=\"{{c.image.getPath | resize(360, 230)}}\" alt=\"{{c.name}}\"></a>
    \t\t\t\t\t\t\t\t\t\t<figcaption>
    \t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"./destinations/{{c.slug}}\">{{c.name}}</a></h3>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t\t\t\t\t<p>{{c.subtitle}}</p>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</figcaption>
    \t\t\t\t\t\t\t\t\t</figure>
    \t\t\t\t\t\t\t\t</div>
                                    {% endfor %}
                                    
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t\t<div style=\"text-align: center\">
    \t\t\t\t<a class=\"tg-btn\" href=\"./destinations\"><span>destinations gallery</span></a>
    \t\t\t\t</div>
    \t\t\t\t
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
    \t\t\t\t\t\t<h2>{{'Popular Tours' |_}}</h2>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t<p>{{'Tour packages that achieve unforgettable adventures and maximum comfort' |_}}</p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"tg-populartoursslider\" class=\"tg-populartoursslider tg-populartours owl-carousel\">
    \t\t\t\t
    \t\t\t\t    {% for c in packs %}
    \t\t\t\t\t<div class=\"item tg-populartour\">
    \t\t\t\t\t\t<figure>
    \t\t\t\t\t\t\t<a href=\"{{app}}/tours/{{c.slug}}\"><img src=\"{{c.image.getPath | resize(360, 230)}}\" alt=\"image destinations\"></a>
    \t\t\t\t\t\t\t<span class=\"tg-descount\">{% if c.avalaible == 1 %} {{'Avalaible' | _}} {% else %} {{'Not avalaible' | _}} {% endif %}</span>
    \t\t\t\t\t\t</figure>
    \t\t\t\t\t\t<div class=\"tg-populartourcontent\">
    \t\t\t\t\t\t\t<div class=\"tg-populartourtitle\">
    \t\t\t\t\t\t\t\t<h3><a href=\"{{app}}/tours/{{c.slug}}\">{{c.name}}</a></h3>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-description\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"tg-populartourfoot\">
    \t\t\t\t\t\t\t\t<div class=\"tg-durationrating\">
    \t\t\t\t\t\t\t\t\t<span class=\"tg-tourduration\">{{c.days}} {{'days' |_}}, {{c.days - 1}}, {{'nights' |_}}</span>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"tg-pricearea\">
    \t\t\t\t\t\t\t\t\t<h4>{{c.pricing}}</h4>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t{% endfor %}
    \t\t\t\t\t
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>
    <!--************************************
    \t\tPopular Tours End
    *************************************-->
    <section>
    \t<div class=\"tg-sectionspace tg-haslayout\" style=\"margin-top: -100px\">
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\" style=\"width: 80%; margin: 0 auto\">

                    <iframe src=\"https://player.vimeo.com/video/333993050\" width=\"640\" height=\"360\" frameborder=\"0\" allow=\"autoplay; fullscreen\" style=\"-webkit-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); -moz-box-shadow: 0px 0px 54px -2px rgba(51,51,51,1); box-shadow: 0px 0px 54px -2px rgba(51,51,51,1);\" allowfullscreen></iframe>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>    
    </section>

    <!--************************************
    \t\tFeatures Start
    *************************************-->
    <section class=\"tg-parallax\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{ e.home_features_bg.getPath }}\">
    \t<div class=\"tg-sectionspace tg-haslayout\">
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"tg-features\">
    \t\t\t\t
    \t\t\t\t    {% for c in e.home_features %}
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
                        {% endfor %}
                        
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

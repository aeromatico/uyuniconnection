<?php

/* /home/ubuntu/workspace/themes/master/partials/footer.htm */
class __TwigTemplate_6e8c148e716dfdbe9e73412d5ad29a2b169a6342b3da49166b4ddc63498617b9 extends Twig_Template
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
        $context["destinations"] = twig_get_attribute($this->env, $this->source, ($context["destinations"] ?? null), "records", []);
        // line 2
        echo "<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
\t\t<div class=\"tg-fourcolumns\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgettext\">
\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t<h3>About Us</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t<p>Nunc cursus liero purs ac cogue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>(+591) 72418032</span>
\t\t\t\t\t\t\t\t<a href=\"mailto:info@travlu.com\">info@uyuniconnectionbolivia.com</a>
\t\t\t\t\t\t\t\t<ul class=\"tg-socialicons tg-socialiconsvtwo\">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook-logo-outline\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-instagram-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetdestinations\">
\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t<h3>";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Top Destinations"]);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["destinations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
            echo "/destinations/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", []), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetnewsletter\">
\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t<h3>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Newsletter"]);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Sign up for our mailing list to get latest updates and offers</p></div>
\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formnewsletter\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-08.png");
        echo "\" alt=\"image destinations\"></button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<span>We respect your privacy</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tg-footerbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<p>Copyright &copy; 2019 Uyuni Connection. All  rights reserved</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  86 => 42,  77 => 35,  64 => 33,  60 => 32,  53 => 28,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set destinations = destinations.records %}
<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
\t\t<div class=\"tg-fourcolumns\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgettext\">
\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t<h3>About Us</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t<p>Nunc cursus liero purs ac cogue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>(+591) 72418032</span>
\t\t\t\t\t\t\t\t<a href=\"mailto:info@travlu.com\">info@uyuniconnectionbolivia.com</a>
\t\t\t\t\t\t\t\t<ul class=\"tg-socialicons tg-socialiconsvtwo\">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook-logo-outline\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-instagram-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetdestinations\">
\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t<h3>{{'Top Destinations' | _ }}</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t    {% for c in destinations %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/destinations/{{c.slug}}\">{{c.name}}</a></li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetnewsletter\">
\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t<h3>{{'Newsletter' | _ }}</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Sign up for our mailing list to get latest updates and offers</p></div>
\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formnewsletter\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><img src=\"{{'assets/img/icons/icon-08.png' | theme }}\" alt=\"image destinations\"></button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<span>We respect your privacy</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tg-footerbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<p>Copyright &copy; 2019 Uyuni Connection. All  rights reserved</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>", "/home/ubuntu/workspace/themes/master/partials/footer.htm", "");
    }
}

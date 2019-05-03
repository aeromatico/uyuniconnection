<?php

/* /home/ubuntu/workspace/themes/master/partials/header.htm */
class __TwigTemplate_e2d351504c386dd41b3683db6a1f04feed39c25b127ed1e407dba45d4c87525c extends Twig_Template
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
        echo "<header id=\"tg-header\" class=\"tg-header tg-headervthree tg-haslayout\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"tg-topbar\">
\t\t\t\t\t\t<nav class=\"tg-infonav\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-01.png");
        echo "\" alt=\"image destinations\"></i>
\t\t\t\t\t\t\t\t\t<span>(+591) 72418032</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-02.png");
        echo "\" alt=\"image destinations\"></i>
\t\t\t\t\t\t\t\t\t<span>CHOOSE YOUR EXPERIENCE <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/destinations\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Discover more"]);
        echo "</a></span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"tg-addnavcartsearch\">
\t\t\t\t\t\t\t<nav class=\"tg-addnav\" style=\"margin-right: 20px\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/about\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["about"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/contact\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact"]);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-navigationarea tg-headerfixed\">
\t\t\t\t\t\t<strong class=\"tg-logo\"><a href=\"index.html\"><img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"Uyuni Connection\" style=\"height: 45px; width: auto\"></a></strong>
\t\t\t\t\t\t<div class=\"tg-socialsignin\">
\t\t\t\t\t\t\t<ul class=\"tg-socialicons\">
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook-logo-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-instagram-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tg-userbox\">
\t\t\t\t\t\t\t\t<a id=\"tg-btnsignin\" class=\"tg-btn\" href=\"#tg-loginsingup\"><span>sign in</span></a>
\t\t\t\t\t\t\t\t<div class=\"dropdown tg-dropdown\">
\t\t\t\t\t\t\t\t\t<button class=\"tg-btndropdown\" id=\"tg-dropdowndashboard\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/language.png");
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Language:"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu tg-dropdownusermenu\" aria-labelledby=\"tg-dropdowndashboard\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/en/\">English</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/es/\">Español</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  109 => 49,  101 => 44,  97 => 43,  90 => 39,  86 => 38,  72 => 27,  61 => 21,  55 => 20,  43 => 13,  39 => 12,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"tg-header\" class=\"tg-header tg-headervthree tg-haslayout\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"tg-topbar\">
\t\t\t\t\t\t<nav class=\"tg-infonav\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i><img src=\"{{'assets/img/icons/icon-01.png' | theme }}\" alt=\"image destinations\"></i>
\t\t\t\t\t\t\t\t\t<span>(+591) 72418032</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i><img src=\"{{'assets/img/icons/icon-02.png' | theme }}\" alt=\"image destinations\"></i>
\t\t\t\t\t\t\t\t\t<span>CHOOSE YOUR EXPERIENCE <a href=\"{{app}}/destinations\">{{\"Discover more\" | _}}</a></span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"tg-addnavcartsearch\">
\t\t\t\t\t\t\t<nav class=\"tg-addnav\" style=\"margin-right: 20px\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/about\">{{ 'about'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/contact\">{{ 'contact'|_ }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-navigationarea tg-headerfixed\">
\t\t\t\t\t\t<strong class=\"tg-logo\"><a href=\"index.html\"><img src=\"{{'assets/img/logo.png' | theme }}\" alt=\"Uyuni Connection\" style=\"height: 45px; width: auto\"></a></strong>
\t\t\t\t\t\t<div class=\"tg-socialsignin\">
\t\t\t\t\t\t\t<ul class=\"tg-socialicons\">
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook-logo-outline\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-instagram-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tg-userbox\">
\t\t\t\t\t\t\t\t<a id=\"tg-btnsignin\" class=\"tg-btn\" href=\"#tg-loginsingup\"><span>sign in</span></a>
\t\t\t\t\t\t\t\t<div class=\"dropdown tg-dropdown\">
\t\t\t\t\t\t\t\t\t<button class=\"tg-btndropdown\" id=\"tg-dropdowndashboard\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{'assets/img/language.png' | theme }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t<span>{{ 'Language:'|_ }}</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu tg-dropdownusermenu\" aria-labelledby=\"tg-dropdowndashboard\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/en/\">English</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/es/\">Español</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% partial 'menu/main' %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>", "/home/ubuntu/workspace/themes/master/partials/header.htm", "");
    }
}

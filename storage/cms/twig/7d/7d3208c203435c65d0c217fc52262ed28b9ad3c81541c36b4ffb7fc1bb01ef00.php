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
\t\t\t\t\t\t\t\t\t<span>1-800-321-6543</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-02.png");
        echo "\" alt=\"image destinations\"></i>
\t\t\t\t\t\t\t\t\t<span>CHOOSE YOUR EXPERIENCE <a href=\"javascript:void(0);\">Discover more</a></span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"tg-addnavcartsearch\">
\t\t\t\t\t\t\t<nav class=\"tg-addnav\">
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
\t\t\t\t\t\t\t<nav class=\"tg-cartsearch\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-03.png");
        echo "\" alt=\"image destinations\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartitems\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartlistitems\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Shopping Cart</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-itemimg\"><img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/products/img-11.jpg");
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-contentbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-producthead\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em>x 2</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$600</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-itemimg\"><img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/products/img-11.jpg");
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-contentbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-producthead\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em>x 2</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$600</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subtotal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Subtotal</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$830</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-btnarea\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"#\"><span>view cart</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tg-search\"><img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-04.png");
        echo "\" alt=\"image destinations\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-navigationarea tg-headerfixed\">
\t\t\t\t\t\t<strong class=\"tg-logo\"><a href=\"index.html\"><img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"company logo here\"></a></strong>
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
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/language.png");
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Language:"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu tg-dropdownusermenu\" aria-labelledby=\"tg-dropdowndashboard\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/en/\">English</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["app"] ?? null), "html", null, true);
        echo "/es/\">Español</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
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
        return array (  160 => 90,  156 => 89,  148 => 84,  144 => 83,  137 => 79,  133 => 78,  119 => 67,  110 => 61,  88 => 42,  75 => 32,  67 => 27,  56 => 21,  50 => 20,  39 => 12,  32 => 8,  23 => 1,);
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
\t\t\t\t\t\t\t\t\t<span>1-800-321-6543</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i><img src=\"{{'assets/img/icons/icon-02.png' | theme }}\" alt=\"image destinations\"></i>
\t\t\t\t\t\t\t\t\t<span>CHOOSE YOUR EXPERIENCE <a href=\"javascript:void(0);\">Discover more</a></span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"tg-addnavcartsearch\">
\t\t\t\t\t\t\t<nav class=\"tg-addnav\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/about\">{{ 'about'|_ }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{app}}/contact\">{{ 'contact'|_ }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<nav class=\"tg-cartsearch\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/icons/icon-03.png' | theme }}\" alt=\"image destinations\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartitems\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartlistitems\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Shopping Cart</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-itemimg\"><img src=\"{{'assets/img/products/img-11.jpg' | theme }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-contentbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-producthead\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em>x 2</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$600</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-itemimg\"><img src=\"{{'assets/img/products/img-11.jpg' | theme }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-contentbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-producthead\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em>x 2</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$600</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subtotal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Subtotal</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$830</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-btnarea\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"#\"><span>view cart</span></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tg-search\"><img src=\"{{'assets/img/icons/icon-04.png' | theme }}\" alt=\"image destinations\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-navigationarea tg-headerfixed\">
\t\t\t\t\t\t<strong class=\"tg-logo\"><a href=\"index.html\"><img src=\"{{'assets/img/logo.png' | theme }}\" alt=\"company logo here\"></a></strong>
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

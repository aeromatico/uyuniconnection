<?php

/* /home/ubuntu/workspace/themes/master/layouts/master.htm */
class __TwigTemplate_156471106c2f2ff643544b35c96fc76e950c2333cf1f55a9b1b7e7be71c4e613 extends Twig_Template
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
        echo "<!doctype html>
<!--[if lt IE 7]>\t\t<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>\t\t\t<html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>\t\t\t<html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->\t<html class=\"no-js\" lang=\"zxx\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Uyuni Salt Flat</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/apple-touch-icon.png");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/icomoon.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-select.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/scrollbar.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.mmenu.all.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/prettyPhoto.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/transitions.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/color.css");
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
\t<script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js");
        echo "\"></script>
</head>
<body class=\"tg-home tg-homevthree tg-login\">
\t<!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
\t<!--************************************
\t\t\t\tLoader Start
\t*************************************-->
\t<div class=\"loader\">
\t\t<div class=\"span\">
\t\t\t<div class=\"location_indicator\"></div>
\t\t</div>
\t</div>
\t<!--************************************
\t\t\t\tLoader End
\t*************************************-->
\t
\t";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "\t
\t<!--************************************
\t\t\tWrapper Start
\t*************************************-->
\t<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
\t\t<!--************************************
\t\t\t\tHeader Start
\t\t*************************************-->
\t\t";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "\t\t<!--************************************
\t\t\t\tHeader End
\t\t*************************************-->

\t\t
\t\t<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
\t\t

\t\t";
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 65
        echo "\t\t\t\t

\t\t<!--************************************
\t\t\t\tMain End
\t\t*************************************-->
\t\t<!--************************************
\t\t\t\tFooter Start
\t\t*************************************-->
\t\t<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
\t\t\t<div class=\"tg-fourcolumns\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgettext\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>About Travlu</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Nunc cursus liero purs ac cogue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>1-800-321-6543</span>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@travlu.com\">info@travlu.com</a>
\t\t\t\t\t\t\t\t\t<ul class=\"tg-socialicons tg-socialiconsvtwo\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook-logo-outline\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-instagram-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgettravelunews\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>Travelu News</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/thumbnail/img-01.jpg");
        echo "\" alt=\"image destinations\"></a>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-newcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Bungee Jumping Trip</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"2017-06-06\">Feb 22, 2017</time>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/thumbnail/img-02.jpg");
        echo "\" alt=\"image destinations\"></a>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-newcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Trip to White Castle</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"2017-06-06\">Feb 22, 2017</time>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetdestinations\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>Top Destinations</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Bayonne, Melbourne</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Greenville, New Jersey</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">The Heights, London</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">West Side, New York</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Upper East Side, New York</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetnewsletter\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>Newsletter</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Sign up for our mailing list to get latest updates and offers</p></div>
\t\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formnewsletter\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><img src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/icon-08.png");
        echo "\" alt=\"image destinations\"></button>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<span>We respect your privacy</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tg-footerbar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<p>Copyright &copy; 2017 Travlu. All  rights reserved</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!--************************************
\t\t\t\tFooter End
\t\t*************************************-->
\t</div>
\t<!--************************************
\t\t\tWrapper End
\t*************************************-->

\t<!--************************************
\t\t\tLogin Singup Start
\t*************************************-->
\t<div id=\"tg-loginsingup\" class=\"tg-loginsingup\" data-vide-bg=\"poster: ";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/singup-img.jpg");
        echo "\" data-vide-options=\"position: 0% 50%\">
\t\t<div class=\"tg-contentarea tg-themescrollbar\">
\t\t\t<div class=\"tg-scrollbar\">
\t\t\t\t<button type=\"button\" class=\"close\">x</button>
\t\t\t\t<div class=\"tg-logincontent\">
\t\t\t\t\t<nav id=\"tg-loginnav\" class=\"tg-loginnav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">My Account</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">My Wishlist</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<div class=\"tg-themetabs\">
\t\t\t\t\t\t<ul class=\"tg-navtbs\" role=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Already Registered</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#profile\" data-toggle=\"tab\">New to Travleu ?</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tg-tabcontent tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active fade in\" id=\"home\">
\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formlogin\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Name or Email <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Password <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"remember\" id=\"rememberpass\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rememberpass\">Remember Me</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Lost your password?</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\"><span>update profile</span></button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"profile\">
\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formlogin\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Name or Email <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Password <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"remember\" id=\"remember\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember\">Remember Me</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Lost your password?</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\"><span>update profile</span></button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-shareor\"><span>or</span></div>
\t\t\t\t\t<div class=\"tg-signupwith\">
\t\t\t\t\t\t<h2>Sign in With...</h2>
\t\t\t\t\t\t<ul class=\"tg-sharesocialicon\">
\t\t\t\t\t\t\t<li class=\"tg-facebook\"><a href=\"#\"><i class=\"icon-facebook-1\"></i><span>Facebook</span></a></li>
\t\t\t\t\t\t\t<li class=\"tg-twitter\"><a href=\"#\"><i class=\"icon-twitter-1\"></i><span>Twitter</span></a></li>
\t\t\t\t\t\t\t<li class=\"tg-googleplus\"><a href=\"#\"><i class=\"icon-google4\"></i><span>Google+</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--************************************
\t\t\tLogin Singup End
\t*************************************-->
\t<script src=\"";
        // line 269
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-library.js");
        echo "\"></script>
\t<script src=\"";
        // line 270
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
\t<script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en\"></script>
\t<script src=\"";
        // line 272
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-select.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-scrolltofixed.js");
        echo "\"></script>
\t<script src=\"";
        // line 274
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 275
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mmenu.all.js");
        echo "\"></script>
\t<script src=\"";
        // line 276
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/packery.pkgd.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 277
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.vide.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 278
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scrollbar.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 279
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/prettyPhoto.js");
        echo "\"></script>
\t<script src=\"";
        // line 280
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/countdown.js");
        echo "\"></script>
\t<script src=\"";
        // line 281
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/parallax.js");
        echo "\"></script>
\t<script src=\"";
        // line 282
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gmap3.js");
        echo "\"></script>
\t<script src=\"";
        // line 283
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
\t</body>
\t</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 283,  412 => 282,  408 => 281,  404 => 280,  400 => 279,  396 => 278,  392 => 277,  388 => 276,  384 => 275,  380 => 274,  376 => 273,  372 => 272,  367 => 270,  363 => 269,  279 => 188,  245 => 157,  202 => 117,  187 => 105,  145 => 65,  143 => 64,  131 => 54,  127 => 53,  117 => 45,  113 => 44,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  40 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 7]>\t\t<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>\t\t\t<html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>\t\t\t<html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->\t<html class=\"no-js\" lang=\"zxx\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Uyuni Salt Flat</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"apple-touch-icon\" href=\"{{'assets/img/apple-touch-icon.png' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/bootstrap.min.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/normalize.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/font-awesome.min.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/icomoon.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/owl.carousel.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/bootstrap-select.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/scrollbar.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/jquery.mmenu.all.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/prettyPhoto.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/transitions.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/main.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/color.css' | theme }}\">
\t<link rel=\"stylesheet\" href=\"{{'assets/css/responsive.css' | theme }}\">
\t<script src=\"{{'assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js' | theme }}\"></script>
</head>
<body class=\"tg-home tg-homevthree tg-login\">
\t<!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
\t<!--************************************
\t\t\t\tLoader Start
\t*************************************-->
\t<div class=\"loader\">
\t\t<div class=\"span\">
\t\t\t<div class=\"location_indicator\"></div>
\t\t</div>
\t</div>
\t<!--************************************
\t\t\t\tLoader End
\t*************************************-->
\t
\t{% partial 'menu/main' %}
\t
\t<!--************************************
\t\t\tWrapper Start
\t*************************************-->
\t<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
\t\t<!--************************************
\t\t\t\tHeader Start
\t\t*************************************-->
\t\t{% partial 'header' %}
\t\t<!--************************************
\t\t\t\tHeader End
\t\t*************************************-->

\t\t
\t\t<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
\t\t

\t\t{% page %}
\t\t\t\t

\t\t<!--************************************
\t\t\t\tMain End
\t\t*************************************-->
\t\t<!--************************************
\t\t\t\tFooter Start
\t\t*************************************-->
\t\t<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
\t\t\t<div class=\"tg-fourcolumns\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgettext\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>About Travlu</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Nunc cursus liero purs ac cogue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>1-800-321-6543</span>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@travlu.com\">info@travlu.com</a>
\t\t\t\t\t\t\t\t\t<ul class=\"tg-socialicons tg-socialiconsvtwo\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-facebook-logo-outline\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-instagram-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><i class=\"icon-twitter-social-outlined-logo\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgettravelunews\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>Travelu News</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/thumbnail/img-01.jpg' | theme }}\" alt=\"image destinations\"></a>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-newcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Bungee Jumping Trip</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"2017-06-06\">Feb 22, 2017</time>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><img src=\"{{'assets/img/thumbnail/img-02.jpg' | theme }}\" alt=\"image destinations\"></a>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-newcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"javascript:void(0);\">Trip to White Castle</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"2017-06-06\">Feb 22, 2017</time>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetdestinations\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>Top Destinations</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Bayonne, Melbourne</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Greenville, New Jersey</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">The Heights, London</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">West Side, New York</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Upper East Side, New York</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<div class=\"tg-footercolumn tg-widget tg-widgetnewsletter\">
\t\t\t\t\t\t\t\t<div class=\"tg-widgettitle\">
\t\t\t\t\t\t\t\t\t<h3>Newsletter</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-widgetcontent\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Sign up for our mailing list to get latest updates and offers</p></div>
\t\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formnewsletter\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"><img src=\"{{'assets/img/icons/icon-08.png' | theme }}\" alt=\"image destinations\"></button>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<span>We respect your privacy</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tg-footerbar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<p>Copyright &copy; 2017 Travlu. All  rights reserved</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!--************************************
\t\t\t\tFooter End
\t\t*************************************-->
\t</div>
\t<!--************************************
\t\t\tWrapper End
\t*************************************-->

\t<!--************************************
\t\t\tLogin Singup Start
\t*************************************-->
\t<div id=\"tg-loginsingup\" class=\"tg-loginsingup\" data-vide-bg=\"poster: {{'assets/img/singup-img.jpg' | theme }}\" data-vide-options=\"position: 0% 50%\">
\t\t<div class=\"tg-contentarea tg-themescrollbar\">
\t\t\t<div class=\"tg-scrollbar\">
\t\t\t\t<button type=\"button\" class=\"close\">x</button>
\t\t\t\t<div class=\"tg-logincontent\">
\t\t\t\t\t<nav id=\"tg-loginnav\" class=\"tg-loginnav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">My Account</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">My Wishlist</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<div class=\"tg-themetabs\">
\t\t\t\t\t\t<ul class=\"tg-navtbs\" role=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Already Registered</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#profile\" data-toggle=\"tab\">New to Travleu ?</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tg-tabcontent tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active fade in\" id=\"home\">
\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formlogin\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Name or Email <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Password <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"remember\" id=\"rememberpass\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"rememberpass\">Remember Me</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Lost your password?</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\"><span>update profile</span></button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"profile\">
\t\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formlogin\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Name or Email <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>Password <sup>*</sup></label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"remember\" id=\"remember\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember\">Remember Me</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Lost your password?</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\"><span>update profile</span></button>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-shareor\"><span>or</span></div>
\t\t\t\t\t<div class=\"tg-signupwith\">
\t\t\t\t\t\t<h2>Sign in With...</h2>
\t\t\t\t\t\t<ul class=\"tg-sharesocialicon\">
\t\t\t\t\t\t\t<li class=\"tg-facebook\"><a href=\"#\"><i class=\"icon-facebook-1\"></i><span>Facebook</span></a></li>
\t\t\t\t\t\t\t<li class=\"tg-twitter\"><a href=\"#\"><i class=\"icon-twitter-1\"></i><span>Twitter</span></a></li>
\t\t\t\t\t\t\t<li class=\"tg-googleplus\"><a href=\"#\"><i class=\"icon-google4\"></i><span>Google+</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--************************************
\t\t\tLogin Singup End
\t*************************************-->
\t<script src=\"{{'assets/js/vendor/jquery-library.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/vendor/bootstrap.min.js' | theme }}\"></script>
\t<script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en\"></script>
\t<script src=\"{{'assets/js/bootstrap-select.min.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/jquery-scrolltofixed.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/owl.carousel.min.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/jquery.mmenu.all.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/packery.pkgd.min.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/jquery.vide.min.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/scrollbar.min.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/prettyPhoto.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/countdown.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/parallax.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/gmap3.js' | theme }}\"></script>
\t<script src=\"{{'assets/js/main.js' | theme }}\"></script>
\t</body>
\t</html>", "/home/ubuntu/workspace/themes/master/layouts/master.htm", "");
    }
}

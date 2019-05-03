<?php

/* /home/ubuntu/workspace/themes/master/layouts/fallback.htm */
class __TwigTemplate_33a6cd670f1ad68af383229197fa2839c86ff5e9a27bf300ba345bf896a43d7e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/master/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/home/ubuntu/workspace/themes/master/layouts/fallback.htm", "");
    }
}

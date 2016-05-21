<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb5f601fd46625607d9c0fac2bf382f6950ff7b0d7a14b125a13dc643623b7dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aba0ddb4d61432cd8d6ab11581239b118fc6f364340b381b00286d220250fa6 = $this->env->getExtension("native_profiler");
        $__internal_4aba0ddb4d61432cd8d6ab11581239b118fc6f364340b381b00286d220250fa6->enter($__internal_4aba0ddb4d61432cd8d6ab11581239b118fc6f364340b381b00286d220250fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aba0ddb4d61432cd8d6ab11581239b118fc6f364340b381b00286d220250fa6->leave($__internal_4aba0ddb4d61432cd8d6ab11581239b118fc6f364340b381b00286d220250fa6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09352a3fd91d60d56655bbc03767c8d517f051ae9eb1fa964dc15dfb3d36a53c = $this->env->getExtension("native_profiler");
        $__internal_09352a3fd91d60d56655bbc03767c8d517f051ae9eb1fa964dc15dfb3d36a53c->enter($__internal_09352a3fd91d60d56655bbc03767c8d517f051ae9eb1fa964dc15dfb3d36a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09352a3fd91d60d56655bbc03767c8d517f051ae9eb1fa964dc15dfb3d36a53c->leave($__internal_09352a3fd91d60d56655bbc03767c8d517f051ae9eb1fa964dc15dfb3d36a53c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1669a98fe0397461442be052780b01b534a2033b73a71951e5f35f8bec74ca41 = $this->env->getExtension("native_profiler");
        $__internal_1669a98fe0397461442be052780b01b534a2033b73a71951e5f35f8bec74ca41->enter($__internal_1669a98fe0397461442be052780b01b534a2033b73a71951e5f35f8bec74ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1669a98fe0397461442be052780b01b534a2033b73a71951e5f35f8bec74ca41->leave($__internal_1669a98fe0397461442be052780b01b534a2033b73a71951e5f35f8bec74ca41_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_00f4a6ac911832dfe0bbbdf899665c92b563ee08ed10cd4bb4bf2c9e4e5f5b67 = $this->env->getExtension("native_profiler");
        $__internal_00f4a6ac911832dfe0bbbdf899665c92b563ee08ed10cd4bb4bf2c9e4e5f5b67->enter($__internal_00f4a6ac911832dfe0bbbdf899665c92b563ee08ed10cd4bb4bf2c9e4e5f5b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_00f4a6ac911832dfe0bbbdf899665c92b563ee08ed10cd4bb4bf2c9e4e5f5b67->leave($__internal_00f4a6ac911832dfe0bbbdf899665c92b563ee08ed10cd4bb4bf2c9e4e5f5b67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

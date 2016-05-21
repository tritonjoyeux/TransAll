<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c25631e740753389a857a080502fed6492d7397d7abfdcd90d46dab49bbdf828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_908d6e95be1fa69652ac63b9e0cbe80cdb4d96d503f79fb0a6fd45f453b06644 = $this->env->getExtension("native_profiler");
        $__internal_908d6e95be1fa69652ac63b9e0cbe80cdb4d96d503f79fb0a6fd45f453b06644->enter($__internal_908d6e95be1fa69652ac63b9e0cbe80cdb4d96d503f79fb0a6fd45f453b06644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908d6e95be1fa69652ac63b9e0cbe80cdb4d96d503f79fb0a6fd45f453b06644->leave($__internal_908d6e95be1fa69652ac63b9e0cbe80cdb4d96d503f79fb0a6fd45f453b06644_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07bc0a714d3f8b982dd8b009028197b029f8dc72dec81ab4f2bcf02d26ad4e07 = $this->env->getExtension("native_profiler");
        $__internal_07bc0a714d3f8b982dd8b009028197b029f8dc72dec81ab4f2bcf02d26ad4e07->enter($__internal_07bc0a714d3f8b982dd8b009028197b029f8dc72dec81ab4f2bcf02d26ad4e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_07bc0a714d3f8b982dd8b009028197b029f8dc72dec81ab4f2bcf02d26ad4e07->leave($__internal_07bc0a714d3f8b982dd8b009028197b029f8dc72dec81ab4f2bcf02d26ad4e07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

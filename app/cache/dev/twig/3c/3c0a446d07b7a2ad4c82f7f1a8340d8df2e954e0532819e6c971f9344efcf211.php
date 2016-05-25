<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f71953dddad0118809c77f62760eab65cbd5715d5f1305c95791470edad1d532 extends Twig_Template
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
        $__internal_339e7ad34b0ac088049dcdf5c3e57e9f14e6120fb00d3656b212abe9cbce4044 = $this->env->getExtension("native_profiler");
        $__internal_339e7ad34b0ac088049dcdf5c3e57e9f14e6120fb00d3656b212abe9cbce4044->enter($__internal_339e7ad34b0ac088049dcdf5c3e57e9f14e6120fb00d3656b212abe9cbce4044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339e7ad34b0ac088049dcdf5c3e57e9f14e6120fb00d3656b212abe9cbce4044->leave($__internal_339e7ad34b0ac088049dcdf5c3e57e9f14e6120fb00d3656b212abe9cbce4044_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcdf597caed8d450355d0bc3acef1fdc78c3323e135169b590147f14037d68e3 = $this->env->getExtension("native_profiler");
        $__internal_bcdf597caed8d450355d0bc3acef1fdc78c3323e135169b590147f14037d68e3->enter($__internal_bcdf597caed8d450355d0bc3acef1fdc78c3323e135169b590147f14037d68e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_bcdf597caed8d450355d0bc3acef1fdc78c3323e135169b590147f14037d68e3->leave($__internal_bcdf597caed8d450355d0bc3acef1fdc78c3323e135169b590147f14037d68e3_prof);

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

<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_ae9230505ed57331becb3731f43384eb7a7134d51842bb724d676074eb3dff38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_7739f912367a18602543385ee692738ce22dabeb15c4176127df37abc9677305 = $this->env->getExtension("native_profiler");
        $__internal_7739f912367a18602543385ee692738ce22dabeb15c4176127df37abc9677305->enter($__internal_7739f912367a18602543385ee692738ce22dabeb15c4176127df37abc9677305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7739f912367a18602543385ee692738ce22dabeb15c4176127df37abc9677305->leave($__internal_7739f912367a18602543385ee692738ce22dabeb15c4176127df37abc9677305_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aee7b726537dc725264bf913015fce2245723d30626389e837e3c6af5343df72 = $this->env->getExtension("native_profiler");
        $__internal_aee7b726537dc725264bf913015fce2245723d30626389e837e3c6af5343df72->enter($__internal_aee7b726537dc725264bf913015fce2245723d30626389e837e3c6af5343df72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_aee7b726537dc725264bf913015fce2245723d30626389e837e3c6af5343df72->leave($__internal_aee7b726537dc725264bf913015fce2245723d30626389e837e3c6af5343df72_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

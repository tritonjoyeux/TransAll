<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_b9966611a9bc064b9b13ea94837922739a1313dfd70d40971cec314785eba498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/request.html.twig", 1);
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
        $__internal_462ddb6c941747f2fba2b2903fdec805d98a9a8fd461dda9b23bf12c78ad6343 = $this->env->getExtension("native_profiler");
        $__internal_462ddb6c941747f2fba2b2903fdec805d98a9a8fd461dda9b23bf12c78ad6343->enter($__internal_462ddb6c941747f2fba2b2903fdec805d98a9a8fd461dda9b23bf12c78ad6343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462ddb6c941747f2fba2b2903fdec805d98a9a8fd461dda9b23bf12c78ad6343->leave($__internal_462ddb6c941747f2fba2b2903fdec805d98a9a8fd461dda9b23bf12c78ad6343_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4132488883d6b82ab5fa8d46bfa2759798d2c2d8af5390eb3cdde2ef6f522c48 = $this->env->getExtension("native_profiler");
        $__internal_4132488883d6b82ab5fa8d46bfa2759798d2c2d8af5390eb3cdde2ef6f522c48->enter($__internal_4132488883d6b82ab5fa8d46bfa2759798d2c2d8af5390eb3cdde2ef6f522c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4132488883d6b82ab5fa8d46bfa2759798d2c2d8af5390eb3cdde2ef6f522c48->leave($__internal_4132488883d6b82ab5fa8d46bfa2759798d2c2d8af5390eb3cdde2ef6f522c48_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
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

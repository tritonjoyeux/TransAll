<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_97c456729d472264a066aa47b025ee8a8abbe0518dd38267e2d766415373f7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_cea9658b0b1d8c7d02a1e20c2af1cd1db8575e04197028b019badcdfd1a5391a = $this->env->getExtension("native_profiler");
        $__internal_cea9658b0b1d8c7d02a1e20c2af1cd1db8575e04197028b019badcdfd1a5391a->enter($__internal_cea9658b0b1d8c7d02a1e20c2af1cd1db8575e04197028b019badcdfd1a5391a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea9658b0b1d8c7d02a1e20c2af1cd1db8575e04197028b019badcdfd1a5391a->leave($__internal_cea9658b0b1d8c7d02a1e20c2af1cd1db8575e04197028b019badcdfd1a5391a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_048ec210fe74093f8f92c48d2fd276d160b57cc92928d83b980a066ed5c94d25 = $this->env->getExtension("native_profiler");
        $__internal_048ec210fe74093f8f92c48d2fd276d160b57cc92928d83b980a066ed5c94d25->enter($__internal_048ec210fe74093f8f92c48d2fd276d160b57cc92928d83b980a066ed5c94d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_048ec210fe74093f8f92c48d2fd276d160b57cc92928d83b980a066ed5c94d25->leave($__internal_048ec210fe74093f8f92c48d2fd276d160b57cc92928d83b980a066ed5c94d25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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

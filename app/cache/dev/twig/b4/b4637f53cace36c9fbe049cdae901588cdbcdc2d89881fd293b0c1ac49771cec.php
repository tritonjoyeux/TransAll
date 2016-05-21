<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_c2170e31c121f64944aad254fec691b4a0bba5b61f23edd8d1f27ca2ec1c3346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_2e9284ee73cd4860c97054092cd5badb59ab3634c10611cd2116e6d26a0bd1d7 = $this->env->getExtension("native_profiler");
        $__internal_2e9284ee73cd4860c97054092cd5badb59ab3634c10611cd2116e6d26a0bd1d7->enter($__internal_2e9284ee73cd4860c97054092cd5badb59ab3634c10611cd2116e6d26a0bd1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9284ee73cd4860c97054092cd5badb59ab3634c10611cd2116e6d26a0bd1d7->leave($__internal_2e9284ee73cd4860c97054092cd5badb59ab3634c10611cd2116e6d26a0bd1d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbf2ded98ee3a23d253a6bd57344e33d3177a11a56efd9c041bb5517d7a56358 = $this->env->getExtension("native_profiler");
        $__internal_bbf2ded98ee3a23d253a6bd57344e33d3177a11a56efd9c041bb5517d7a56358->enter($__internal_bbf2ded98ee3a23d253a6bd57344e33d3177a11a56efd9c041bb5517d7a56358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bbf2ded98ee3a23d253a6bd57344e33d3177a11a56efd9c041bb5517d7a56358->leave($__internal_bbf2ded98ee3a23d253a6bd57344e33d3177a11a56efd9c041bb5517d7a56358_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

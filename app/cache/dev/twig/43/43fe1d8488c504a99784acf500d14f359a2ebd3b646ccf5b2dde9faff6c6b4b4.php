<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_104ff66fd543cc371ff4720259b1924a7d0ae1c3ad37d00f79fb266c33dabe5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c3db43b6a0cfd96a871a1d63b0aedffa7abf89f8130050cf0f4c23116687f405 = $this->env->getExtension("native_profiler");
        $__internal_c3db43b6a0cfd96a871a1d63b0aedffa7abf89f8130050cf0f4c23116687f405->enter($__internal_c3db43b6a0cfd96a871a1d63b0aedffa7abf89f8130050cf0f4c23116687f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3db43b6a0cfd96a871a1d63b0aedffa7abf89f8130050cf0f4c23116687f405->leave($__internal_c3db43b6a0cfd96a871a1d63b0aedffa7abf89f8130050cf0f4c23116687f405_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44018637ca3e35dbdf7764ac40b4936505b89e46d28b167d66e0ef345062d9af = $this->env->getExtension("native_profiler");
        $__internal_44018637ca3e35dbdf7764ac40b4936505b89e46d28b167d66e0ef345062d9af->enter($__internal_44018637ca3e35dbdf7764ac40b4936505b89e46d28b167d66e0ef345062d9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_44018637ca3e35dbdf7764ac40b4936505b89e46d28b167d66e0ef345062d9af->leave($__internal_44018637ca3e35dbdf7764ac40b4936505b89e46d28b167d66e0ef345062d9af_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @User/ChangePassword/changePassword.html.twig */
class __TwigTemplate_d699c20b369b76446e7855f6efc3cf915e23bd46588ae9ab39a65cd7ea207a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_23de028e32afba4c00079d53682cee724941c818148203ef2a049e07e7761b54 = $this->env->getExtension("native_profiler");
        $__internal_23de028e32afba4c00079d53682cee724941c818148203ef2a049e07e7761b54->enter($__internal_23de028e32afba4c00079d53682cee724941c818148203ef2a049e07e7761b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23de028e32afba4c00079d53682cee724941c818148203ef2a049e07e7761b54->leave($__internal_23de028e32afba4c00079d53682cee724941c818148203ef2a049e07e7761b54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e0c128cbe738390e69ccb5a06d525b52cb81a24b2a71468435b03b10fd9343f = $this->env->getExtension("native_profiler");
        $__internal_0e0c128cbe738390e69ccb5a06d525b52cb81a24b2a71468435b03b10fd9343f->enter($__internal_0e0c128cbe738390e69ccb5a06d525b52cb81a24b2a71468435b03b10fd9343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@User/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_0e0c128cbe738390e69ccb5a06d525b52cb81a24b2a71468435b03b10fd9343f->leave($__internal_0e0c128cbe738390e69ccb5a06d525b52cb81a24b2a71468435b03b10fd9343f_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword.html.twig";
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

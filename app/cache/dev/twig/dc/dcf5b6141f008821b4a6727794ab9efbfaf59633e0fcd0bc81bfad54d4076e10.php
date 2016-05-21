<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_d498f05597d1ee1606dab3246aba43dab9cf070f43b3bb5cb96650ddc52bc528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_676b90a6dbc477f9f15c9f058f2b37813fb5b16dbd7304b725128a76ef479ff8 = $this->env->getExtension("native_profiler");
        $__internal_676b90a6dbc477f9f15c9f058f2b37813fb5b16dbd7304b725128a76ef479ff8->enter($__internal_676b90a6dbc477f9f15c9f058f2b37813fb5b16dbd7304b725128a76ef479ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_676b90a6dbc477f9f15c9f058f2b37813fb5b16dbd7304b725128a76ef479ff8->leave($__internal_676b90a6dbc477f9f15c9f058f2b37813fb5b16dbd7304b725128a76ef479ff8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adb97ea5e866caf500eb17ccfb3d0faacf7e5c05601e6d17e8fb98e2822539d8 = $this->env->getExtension("native_profiler");
        $__internal_adb97ea5e866caf500eb17ccfb3d0faacf7e5c05601e6d17e8fb98e2822539d8->enter($__internal_adb97ea5e866caf500eb17ccfb3d0faacf7e5c05601e6d17e8fb98e2822539d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_adb97ea5e866caf500eb17ccfb3d0faacf7e5c05601e6d17e8fb98e2822539d8->leave($__internal_adb97ea5e866caf500eb17ccfb3d0faacf7e5c05601e6d17e8fb98e2822539d8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

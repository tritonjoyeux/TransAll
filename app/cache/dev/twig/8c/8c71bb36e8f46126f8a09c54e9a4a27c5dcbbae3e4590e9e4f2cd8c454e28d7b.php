<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_65107174161d1275fd27d217ffecd278f995ca316c271c960f78cc7d5475c31d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dcc050266bf512d10d8933f5f83b807c992f71d555eee6828560fbae00ae5c7c = $this->env->getExtension("native_profiler");
        $__internal_dcc050266bf512d10d8933f5f83b807c992f71d555eee6828560fbae00ae5c7c->enter($__internal_dcc050266bf512d10d8933f5f83b807c992f71d555eee6828560fbae00ae5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc050266bf512d10d8933f5f83b807c992f71d555eee6828560fbae00ae5c7c->leave($__internal_dcc050266bf512d10d8933f5f83b807c992f71d555eee6828560fbae00ae5c7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a76d67869fb2451e874108a15a0b3030b3f37b5f6af3cb2c606868d340d97f6e = $this->env->getExtension("native_profiler");
        $__internal_a76d67869fb2451e874108a15a0b3030b3f37b5f6af3cb2c606868d340d97f6e->enter($__internal_a76d67869fb2451e874108a15a0b3030b3f37b5f6af3cb2c606868d340d97f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a76d67869fb2451e874108a15a0b3030b3f37b5f6af3cb2c606868d340d97f6e->leave($__internal_a76d67869fb2451e874108a15a0b3030b3f37b5f6af3cb2c606868d340d97f6e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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

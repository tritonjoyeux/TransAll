<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_6a3305e950ae0c5f2484ff67d4c6c8f95935860dfdd2847a4c7d22fcb67a7cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5cb2c1e017b11ac736d9b7295239f3c2685bd6d94810b21e49672250c7bacf63 = $this->env->getExtension("native_profiler");
        $__internal_5cb2c1e017b11ac736d9b7295239f3c2685bd6d94810b21e49672250c7bacf63->enter($__internal_5cb2c1e017b11ac736d9b7295239f3c2685bd6d94810b21e49672250c7bacf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb2c1e017b11ac736d9b7295239f3c2685bd6d94810b21e49672250c7bacf63->leave($__internal_5cb2c1e017b11ac736d9b7295239f3c2685bd6d94810b21e49672250c7bacf63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be292c35fcfbab0d628bb5bfac552c87ccd5cccb93b8e864208afec845d7988b = $this->env->getExtension("native_profiler");
        $__internal_be292c35fcfbab0d628bb5bfac552c87ccd5cccb93b8e864208afec845d7988b->enter($__internal_be292c35fcfbab0d628bb5bfac552c87ccd5cccb93b8e864208afec845d7988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_be292c35fcfbab0d628bb5bfac552c87ccd5cccb93b8e864208afec845d7988b->leave($__internal_be292c35fcfbab0d628bb5bfac552c87ccd5cccb93b8e864208afec845d7988b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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

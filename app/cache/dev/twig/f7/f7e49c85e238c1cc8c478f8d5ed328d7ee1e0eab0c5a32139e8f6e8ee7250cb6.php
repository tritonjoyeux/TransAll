<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_6dbb28e3773d195dfb4b9ae7015d1bab47d861edbeccc3a71b694940f73f296b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_778ee3486f370dbd51e7174bd85fd0757d1314ffadd0b2e7642707ef7b621a97 = $this->env->getExtension("native_profiler");
        $__internal_778ee3486f370dbd51e7174bd85fd0757d1314ffadd0b2e7642707ef7b621a97->enter($__internal_778ee3486f370dbd51e7174bd85fd0757d1314ffadd0b2e7642707ef7b621a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778ee3486f370dbd51e7174bd85fd0757d1314ffadd0b2e7642707ef7b621a97->leave($__internal_778ee3486f370dbd51e7174bd85fd0757d1314ffadd0b2e7642707ef7b621a97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d671c50a7fc47f2b5e2ded67c00d564af83e4a007584f6c939bb49e6e891dfe0 = $this->env->getExtension("native_profiler");
        $__internal_d671c50a7fc47f2b5e2ded67c00d564af83e4a007584f6c939bb49e6e891dfe0->enter($__internal_d671c50a7fc47f2b5e2ded67c00d564af83e4a007584f6c939bb49e6e891dfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d671c50a7fc47f2b5e2ded67c00d564af83e4a007584f6c939bb49e6e891dfe0->leave($__internal_d671c50a7fc47f2b5e2ded67c00d564af83e4a007584f6c939bb49e6e891dfe0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

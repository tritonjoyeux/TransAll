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
        $__internal_54e77d53afc9816e684e8e397d51fa9dcaab4c8db13c9d09c08ebd9907d7f42c = $this->env->getExtension("native_profiler");
        $__internal_54e77d53afc9816e684e8e397d51fa9dcaab4c8db13c9d09c08ebd9907d7f42c->enter($__internal_54e77d53afc9816e684e8e397d51fa9dcaab4c8db13c9d09c08ebd9907d7f42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e77d53afc9816e684e8e397d51fa9dcaab4c8db13c9d09c08ebd9907d7f42c->leave($__internal_54e77d53afc9816e684e8e397d51fa9dcaab4c8db13c9d09c08ebd9907d7f42c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_141cd1e3fac2d8624b551cb816089e8ca7e94a92f892750fc964e071d8d6b793 = $this->env->getExtension("native_profiler");
        $__internal_141cd1e3fac2d8624b551cb816089e8ca7e94a92f892750fc964e071d8d6b793->enter($__internal_141cd1e3fac2d8624b551cb816089e8ca7e94a92f892750fc964e071d8d6b793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_141cd1e3fac2d8624b551cb816089e8ca7e94a92f892750fc964e071d8d6b793->leave($__internal_141cd1e3fac2d8624b551cb816089e8ca7e94a92f892750fc964e071d8d6b793_prof);

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

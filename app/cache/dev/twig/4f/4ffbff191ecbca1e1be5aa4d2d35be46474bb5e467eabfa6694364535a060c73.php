<?php

/* @User/Group/list.html.twig */
class __TwigTemplate_c5717d255fe1c9e82b203aee00ae66cd3b13b324952c50952ba68c1be2c584f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/list.html.twig", 1);
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
        $__internal_98a5e929766ccbc1b5a80621e75c2e2e9491e51ab281f2e05ab03a9669741557 = $this->env->getExtension("native_profiler");
        $__internal_98a5e929766ccbc1b5a80621e75c2e2e9491e51ab281f2e05ab03a9669741557->enter($__internal_98a5e929766ccbc1b5a80621e75c2e2e9491e51ab281f2e05ab03a9669741557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a5e929766ccbc1b5a80621e75c2e2e9491e51ab281f2e05ab03a9669741557->leave($__internal_98a5e929766ccbc1b5a80621e75c2e2e9491e51ab281f2e05ab03a9669741557_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4d42f57aa6c8b62d8b1be48bc313c2292bac8da89ad24dce26e6e006abf024e = $this->env->getExtension("native_profiler");
        $__internal_f4d42f57aa6c8b62d8b1be48bc313c2292bac8da89ad24dce26e6e006abf024e->enter($__internal_f4d42f57aa6c8b62d8b1be48bc313c2292bac8da89ad24dce26e6e006abf024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@User/Group/list.html.twig", 4)->display($context);
        
        $__internal_f4d42f57aa6c8b62d8b1be48bc313c2292bac8da89ad24dce26e6e006abf024e->leave($__internal_f4d42f57aa6c8b62d8b1be48bc313c2292bac8da89ad24dce26e6e006abf024e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/list.html.twig";
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

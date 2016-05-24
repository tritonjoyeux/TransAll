<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2f0e1cd35965dd230133f703161d303efa903aa6e0b5c796e30e71e5855ad37a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_d5d0911e9789050b60eedef6c194ca75095c43e6dc7415ccc511fcbe160d47c8 = $this->env->getExtension("native_profiler");
        $__internal_d5d0911e9789050b60eedef6c194ca75095c43e6dc7415ccc511fcbe160d47c8->enter($__internal_d5d0911e9789050b60eedef6c194ca75095c43e6dc7415ccc511fcbe160d47c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d0911e9789050b60eedef6c194ca75095c43e6dc7415ccc511fcbe160d47c8->leave($__internal_d5d0911e9789050b60eedef6c194ca75095c43e6dc7415ccc511fcbe160d47c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6950dd56245663e975f64c1923305ed2f97737192c7d5d9d7074ffa73383fa39 = $this->env->getExtension("native_profiler");
        $__internal_6950dd56245663e975f64c1923305ed2f97737192c7d5d9d7074ffa73383fa39->enter($__internal_6950dd56245663e975f64c1923305ed2f97737192c7d5d9d7074ffa73383fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6950dd56245663e975f64c1923305ed2f97737192c7d5d9d7074ffa73383fa39->leave($__internal_6950dd56245663e975f64c1923305ed2f97737192c7d5d9d7074ffa73383fa39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

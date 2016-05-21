<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_429f2b0cd22261428b74cea6dd537b182a98d6e638d4ed6829d612f56d3d4e5c extends Twig_Template
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
        $__internal_f7fe46c983bb74c43d25b450ab919d051f82515499eac514bf4c60843e85d1ef = $this->env->getExtension("native_profiler");
        $__internal_f7fe46c983bb74c43d25b450ab919d051f82515499eac514bf4c60843e85d1ef->enter($__internal_f7fe46c983bb74c43d25b450ab919d051f82515499eac514bf4c60843e85d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fe46c983bb74c43d25b450ab919d051f82515499eac514bf4c60843e85d1ef->leave($__internal_f7fe46c983bb74c43d25b450ab919d051f82515499eac514bf4c60843e85d1ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ef26279dda912f0ff47804bfbe1731641f058d78ac02bcb819f91eca92ddcd8 = $this->env->getExtension("native_profiler");
        $__internal_4ef26279dda912f0ff47804bfbe1731641f058d78ac02bcb819f91eca92ddcd8->enter($__internal_4ef26279dda912f0ff47804bfbe1731641f058d78ac02bcb819f91eca92ddcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4ef26279dda912f0ff47804bfbe1731641f058d78ac02bcb819f91eca92ddcd8->leave($__internal_4ef26279dda912f0ff47804bfbe1731641f058d78ac02bcb819f91eca92ddcd8_prof);

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

<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b7e22f01f9c2a6d17c04aff356d3b3ed62e0cea9191b6122793392a09da796bb extends Twig_Template
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
        $__internal_7ef6bf4c3916980b7b30cf84b5bebc886ad5d3cdbca453235b73b67835096c0a = $this->env->getExtension("native_profiler");
        $__internal_7ef6bf4c3916980b7b30cf84b5bebc886ad5d3cdbca453235b73b67835096c0a->enter($__internal_7ef6bf4c3916980b7b30cf84b5bebc886ad5d3cdbca453235b73b67835096c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ef6bf4c3916980b7b30cf84b5bebc886ad5d3cdbca453235b73b67835096c0a->leave($__internal_7ef6bf4c3916980b7b30cf84b5bebc886ad5d3cdbca453235b73b67835096c0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b40d8044115ccba52e3cee14b5426114274d1022265e2206674bedb4c40ebdb = $this->env->getExtension("native_profiler");
        $__internal_4b40d8044115ccba52e3cee14b5426114274d1022265e2206674bedb4c40ebdb->enter($__internal_4b40d8044115ccba52e3cee14b5426114274d1022265e2206674bedb4c40ebdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4b40d8044115ccba52e3cee14b5426114274d1022265e2206674bedb4c40ebdb->leave($__internal_4b40d8044115ccba52e3cee14b5426114274d1022265e2206674bedb4c40ebdb_prof);

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

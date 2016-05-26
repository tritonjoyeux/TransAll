<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_888ddd6e20be25ce32fefdf7013471ce02127c12410b39dd2ec778cdb4463db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_ef2bbd3ada084040177e4abbc0c0b581aa0d260030dd1af9d9a70d728d3fd348 = $this->env->getExtension("native_profiler");
        $__internal_ef2bbd3ada084040177e4abbc0c0b581aa0d260030dd1af9d9a70d728d3fd348->enter($__internal_ef2bbd3ada084040177e4abbc0c0b581aa0d260030dd1af9d9a70d728d3fd348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef2bbd3ada084040177e4abbc0c0b581aa0d260030dd1af9d9a70d728d3fd348->leave($__internal_ef2bbd3ada084040177e4abbc0c0b581aa0d260030dd1af9d9a70d728d3fd348_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c99fe563f007a2b2342cd6c86b3322047c3344a075f20c80f8347b7949cb2463 = $this->env->getExtension("native_profiler");
        $__internal_c99fe563f007a2b2342cd6c86b3322047c3344a075f20c80f8347b7949cb2463->enter($__internal_c99fe563f007a2b2342cd6c86b3322047c3344a075f20c80f8347b7949cb2463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_c99fe563f007a2b2342cd6c86b3322047c3344a075f20c80f8347b7949cb2463->leave($__internal_c99fe563f007a2b2342cd6c86b3322047c3344a075f20c80f8347b7949cb2463_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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

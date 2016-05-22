<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_760a4a8c5c55b0fe0e0c959ef24b8909c2e80030807ac85c495eb9e4c0dcd952 extends Twig_Template
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
        $__internal_aaa2a84bfddd927dba0c68676b8913f2099796569f8ac52153e608773c865cb5 = $this->env->getExtension("native_profiler");
        $__internal_aaa2a84bfddd927dba0c68676b8913f2099796569f8ac52153e608773c865cb5->enter($__internal_aaa2a84bfddd927dba0c68676b8913f2099796569f8ac52153e608773c865cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa2a84bfddd927dba0c68676b8913f2099796569f8ac52153e608773c865cb5->leave($__internal_aaa2a84bfddd927dba0c68676b8913f2099796569f8ac52153e608773c865cb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cc0c5825b67010b3a20b8884d6be76a870116f07a5d7a2d6a9a569e79e62170 = $this->env->getExtension("native_profiler");
        $__internal_8cc0c5825b67010b3a20b8884d6be76a870116f07a5d7a2d6a9a569e79e62170->enter($__internal_8cc0c5825b67010b3a20b8884d6be76a870116f07a5d7a2d6a9a569e79e62170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_8cc0c5825b67010b3a20b8884d6be76a870116f07a5d7a2d6a9a569e79e62170->leave($__internal_8cc0c5825b67010b3a20b8884d6be76a870116f07a5d7a2d6a9a569e79e62170_prof);

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

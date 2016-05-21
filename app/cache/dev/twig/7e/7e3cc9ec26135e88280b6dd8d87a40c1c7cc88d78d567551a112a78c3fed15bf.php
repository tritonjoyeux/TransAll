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
        $__internal_ba7e27735a612c7c7fad232379c1a42170e9c5697233fecf30b0fad721ffdb75 = $this->env->getExtension("native_profiler");
        $__internal_ba7e27735a612c7c7fad232379c1a42170e9c5697233fecf30b0fad721ffdb75->enter($__internal_ba7e27735a612c7c7fad232379c1a42170e9c5697233fecf30b0fad721ffdb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba7e27735a612c7c7fad232379c1a42170e9c5697233fecf30b0fad721ffdb75->leave($__internal_ba7e27735a612c7c7fad232379c1a42170e9c5697233fecf30b0fad721ffdb75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e74d6ed0cc77fdad5c1cb2988f382edad51aa20710f49286b0fd2c091a6d11c0 = $this->env->getExtension("native_profiler");
        $__internal_e74d6ed0cc77fdad5c1cb2988f382edad51aa20710f49286b0fd2c091a6d11c0->enter($__internal_e74d6ed0cc77fdad5c1cb2988f382edad51aa20710f49286b0fd2c091a6d11c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_e74d6ed0cc77fdad5c1cb2988f382edad51aa20710f49286b0fd2c091a6d11c0->leave($__internal_e74d6ed0cc77fdad5c1cb2988f382edad51aa20710f49286b0fd2c091a6d11c0_prof);

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

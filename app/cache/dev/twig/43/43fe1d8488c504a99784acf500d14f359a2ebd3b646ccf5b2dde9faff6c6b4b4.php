<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_104ff66fd543cc371ff4720259b1924a7d0ae1c3ad37d00f79fb266c33dabe5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_d8e4afb0a107c147d435a4dd84b74ce17279a32f743b7627d54baeb80aa268fc = $this->env->getExtension("native_profiler");
        $__internal_d8e4afb0a107c147d435a4dd84b74ce17279a32f743b7627d54baeb80aa268fc->enter($__internal_d8e4afb0a107c147d435a4dd84b74ce17279a32f743b7627d54baeb80aa268fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e4afb0a107c147d435a4dd84b74ce17279a32f743b7627d54baeb80aa268fc->leave($__internal_d8e4afb0a107c147d435a4dd84b74ce17279a32f743b7627d54baeb80aa268fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a1b0a5acfe18961a9de59fae9aa77482cd8e809fc9222d9654d5d226e919ba7 = $this->env->getExtension("native_profiler");
        $__internal_2a1b0a5acfe18961a9de59fae9aa77482cd8e809fc9222d9654d5d226e919ba7->enter($__internal_2a1b0a5acfe18961a9de59fae9aa77482cd8e809fc9222d9654d5d226e919ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2a1b0a5acfe18961a9de59fae9aa77482cd8e809fc9222d9654d5d226e919ba7->leave($__internal_2a1b0a5acfe18961a9de59fae9aa77482cd8e809fc9222d9654d5d226e919ba7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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

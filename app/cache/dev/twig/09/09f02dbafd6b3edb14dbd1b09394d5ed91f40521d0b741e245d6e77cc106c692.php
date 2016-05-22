<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_e370da6e8a16296b26bfbf9b41b575fa1b20ba980704971c4c4d13bc7de0968e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_9c8bbb1fd0f2f861de4aef8182714c22a0f0fac7849e096d87bd61198276f669 = $this->env->getExtension("native_profiler");
        $__internal_9c8bbb1fd0f2f861de4aef8182714c22a0f0fac7849e096d87bd61198276f669->enter($__internal_9c8bbb1fd0f2f861de4aef8182714c22a0f0fac7849e096d87bd61198276f669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8bbb1fd0f2f861de4aef8182714c22a0f0fac7849e096d87bd61198276f669->leave($__internal_9c8bbb1fd0f2f861de4aef8182714c22a0f0fac7849e096d87bd61198276f669_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae6de4e5e0585e61587a0ae935c0090d5551c3bc9df5f0d94f1ce8f8d725dde1 = $this->env->getExtension("native_profiler");
        $__internal_ae6de4e5e0585e61587a0ae935c0090d5551c3bc9df5f0d94f1ce8f8d725dde1->enter($__internal_ae6de4e5e0585e61587a0ae935c0090d5551c3bc9df5f0d94f1ce8f8d725dde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ae6de4e5e0585e61587a0ae935c0090d5551c3bc9df5f0d94f1ce8f8d725dde1->leave($__internal_ae6de4e5e0585e61587a0ae935c0090d5551c3bc9df5f0d94f1ce8f8d725dde1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @User/Group/show.html.twig */
class __TwigTemplate_6d5b001bf9357773675b86bed368843b6f4ef09f5c95dff51e2e0e19b6a86769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/show.html.twig", 1);
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
        $__internal_0e83f5ce162a8bc989f04d4b2bfe41e0f3440182ffbc6283e6bc4a6e25320f61 = $this->env->getExtension("native_profiler");
        $__internal_0e83f5ce162a8bc989f04d4b2bfe41e0f3440182ffbc6283e6bc4a6e25320f61->enter($__internal_0e83f5ce162a8bc989f04d4b2bfe41e0f3440182ffbc6283e6bc4a6e25320f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e83f5ce162a8bc989f04d4b2bfe41e0f3440182ffbc6283e6bc4a6e25320f61->leave($__internal_0e83f5ce162a8bc989f04d4b2bfe41e0f3440182ffbc6283e6bc4a6e25320f61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_912f6b83b35fe9090bda1e1563b13cc4d4d8856f6d7d6bc1f011cf907dd3beba = $this->env->getExtension("native_profiler");
        $__internal_912f6b83b35fe9090bda1e1563b13cc4d4d8856f6d7d6bc1f011cf907dd3beba->enter($__internal_912f6b83b35fe9090bda1e1563b13cc4d4d8856f6d7d6bc1f011cf907dd3beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@User/Group/show.html.twig", 4)->display($context);
        
        $__internal_912f6b83b35fe9090bda1e1563b13cc4d4d8856f6d7d6bc1f011cf907dd3beba->leave($__internal_912f6b83b35fe9090bda1e1563b13cc4d4d8856f6d7d6bc1f011cf907dd3beba_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f71953dddad0118809c77f62760eab65cbd5715d5f1305c95791470edad1d532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_b53ad9738ed310a5620371bc3ec35b136e4f1fcd58be436c9f031b4cf1bae94e = $this->env->getExtension("native_profiler");
        $__internal_b53ad9738ed310a5620371bc3ec35b136e4f1fcd58be436c9f031b4cf1bae94e->enter($__internal_b53ad9738ed310a5620371bc3ec35b136e4f1fcd58be436c9f031b4cf1bae94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b53ad9738ed310a5620371bc3ec35b136e4f1fcd58be436c9f031b4cf1bae94e->leave($__internal_b53ad9738ed310a5620371bc3ec35b136e4f1fcd58be436c9f031b4cf1bae94e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0340de15e2b4b356fed2342d3a0fea36968302a576c52c1bab2267e1a558c5c8 = $this->env->getExtension("native_profiler");
        $__internal_0340de15e2b4b356fed2342d3a0fea36968302a576c52c1bab2267e1a558c5c8->enter($__internal_0340de15e2b4b356fed2342d3a0fea36968302a576c52c1bab2267e1a558c5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0340de15e2b4b356fed2342d3a0fea36968302a576c52c1bab2267e1a558c5c8->leave($__internal_0340de15e2b4b356fed2342d3a0fea36968302a576c52c1bab2267e1a558c5c8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

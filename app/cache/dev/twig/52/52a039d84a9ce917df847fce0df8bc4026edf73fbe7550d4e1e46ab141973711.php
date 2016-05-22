<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_c70f54b548935e98be9bd6b18746c644631160ee0c4a6b7940caa826b0044610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/edit.html.twig", 1);
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
        $__internal_8f76d8fe7338d367783fd7706f8c59975eb57120b8c2fdfc86bc6f72f8bd0fcc = $this->env->getExtension("native_profiler");
        $__internal_8f76d8fe7338d367783fd7706f8c59975eb57120b8c2fdfc86bc6f72f8bd0fcc->enter($__internal_8f76d8fe7338d367783fd7706f8c59975eb57120b8c2fdfc86bc6f72f8bd0fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f76d8fe7338d367783fd7706f8c59975eb57120b8c2fdfc86bc6f72f8bd0fcc->leave($__internal_8f76d8fe7338d367783fd7706f8c59975eb57120b8c2fdfc86bc6f72f8bd0fcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74e0a8ea8cc4c0eb4f0310ba8e880bb812104177124dd970ed52ae7e191ef711 = $this->env->getExtension("native_profiler");
        $__internal_74e0a8ea8cc4c0eb4f0310ba8e880bb812104177124dd970ed52ae7e191ef711->enter($__internal_74e0a8ea8cc4c0eb4f0310ba8e880bb812104177124dd970ed52ae7e191ef711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_74e0a8ea8cc4c0eb4f0310ba8e880bb812104177124dd970ed52ae7e191ef711->leave($__internal_74e0a8ea8cc4c0eb4f0310ba8e880bb812104177124dd970ed52ae7e191ef711_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit.html.twig";
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

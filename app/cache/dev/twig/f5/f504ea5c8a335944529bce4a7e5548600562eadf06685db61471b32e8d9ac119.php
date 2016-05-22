<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_d7fba98f4aae394b8f6601d8060c4ad10703e0310ad445c8c6c035092faf278f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/request.html.twig", 1);
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
        $__internal_b45feb1eb8c0aef131c45df1783955be5d0428713e386b1fa9a95fbc3e3f85b7 = $this->env->getExtension("native_profiler");
        $__internal_b45feb1eb8c0aef131c45df1783955be5d0428713e386b1fa9a95fbc3e3f85b7->enter($__internal_b45feb1eb8c0aef131c45df1783955be5d0428713e386b1fa9a95fbc3e3f85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45feb1eb8c0aef131c45df1783955be5d0428713e386b1fa9a95fbc3e3f85b7->leave($__internal_b45feb1eb8c0aef131c45df1783955be5d0428713e386b1fa9a95fbc3e3f85b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_871bc600eb884b04c26e1f5ef3f8e9587e2bb667baa7b47ed4d816902a241d72 = $this->env->getExtension("native_profiler");
        $__internal_871bc600eb884b04c26e1f5ef3f8e9587e2bb667baa7b47ed4d816902a241d72->enter($__internal_871bc600eb884b04c26e1f5ef3f8e9587e2bb667baa7b47ed4d816902a241d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_871bc600eb884b04c26e1f5ef3f8e9587e2bb667baa7b47ed4d816902a241d72->leave($__internal_871bc600eb884b04c26e1f5ef3f8e9587e2bb667baa7b47ed4d816902a241d72_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
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

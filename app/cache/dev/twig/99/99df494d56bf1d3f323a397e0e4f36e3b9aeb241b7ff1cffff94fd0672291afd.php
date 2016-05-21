<?php

/* @User/Group/new.html.twig */
class __TwigTemplate_f2ffb9a30bad2d43473fd60f70c6b6ba561967448c35611117f86dc92b8f4e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/new.html.twig", 1);
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
        $__internal_decf2913f0b76a07a79ce4a11e650965d5d2fe7aa3e871e5408ca1526b2a9dc3 = $this->env->getExtension("native_profiler");
        $__internal_decf2913f0b76a07a79ce4a11e650965d5d2fe7aa3e871e5408ca1526b2a9dc3->enter($__internal_decf2913f0b76a07a79ce4a11e650965d5d2fe7aa3e871e5408ca1526b2a9dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_decf2913f0b76a07a79ce4a11e650965d5d2fe7aa3e871e5408ca1526b2a9dc3->leave($__internal_decf2913f0b76a07a79ce4a11e650965d5d2fe7aa3e871e5408ca1526b2a9dc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3977fd0ed2f4b182c4c0cc4460c4ff866b31223cd9ee160615326904920900d2 = $this->env->getExtension("native_profiler");
        $__internal_3977fd0ed2f4b182c4c0cc4460c4ff866b31223cd9ee160615326904920900d2->enter($__internal_3977fd0ed2f4b182c4c0cc4460c4ff866b31223cd9ee160615326904920900d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@User/Group/new.html.twig", 4)->display($context);
        
        $__internal_3977fd0ed2f4b182c4c0cc4460c4ff866b31223cd9ee160615326904920900d2->leave($__internal_3977fd0ed2f4b182c4c0cc4460c4ff866b31223cd9ee160615326904920900d2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/new.html.twig";
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

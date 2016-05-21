<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_54ad5d0005b8642e7c00a09203bed50b10b1d2e4421ba1dd6c5da1227323c500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_7367ac38c8a2810a898638b7f1e85e425c9e5a7edb61431ca6bcf4d488c20d1e = $this->env->getExtension("native_profiler");
        $__internal_7367ac38c8a2810a898638b7f1e85e425c9e5a7edb61431ca6bcf4d488c20d1e->enter($__internal_7367ac38c8a2810a898638b7f1e85e425c9e5a7edb61431ca6bcf4d488c20d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7367ac38c8a2810a898638b7f1e85e425c9e5a7edb61431ca6bcf4d488c20d1e->leave($__internal_7367ac38c8a2810a898638b7f1e85e425c9e5a7edb61431ca6bcf4d488c20d1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2561c0d2f926e8e0e82d37b7ac981506aabce52299d48f3adb66e20ae48817be = $this->env->getExtension("native_profiler");
        $__internal_2561c0d2f926e8e0e82d37b7ac981506aabce52299d48f3adb66e20ae48817be->enter($__internal_2561c0d2f926e8e0e82d37b7ac981506aabce52299d48f3adb66e20ae48817be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_2561c0d2f926e8e0e82d37b7ac981506aabce52299d48f3adb66e20ae48817be->leave($__internal_2561c0d2f926e8e0e82d37b7ac981506aabce52299d48f3adb66e20ae48817be_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

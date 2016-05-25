<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_e3155911cf312f1e6a6db4d9c93d71415051807491681569583de80eccbe2fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_37bd1f66919cf6f8b8bb79cc6cea71ed2cec0abc547fd8a4527fb97657c57c74 = $this->env->getExtension("native_profiler");
        $__internal_37bd1f66919cf6f8b8bb79cc6cea71ed2cec0abc547fd8a4527fb97657c57c74->enter($__internal_37bd1f66919cf6f8b8bb79cc6cea71ed2cec0abc547fd8a4527fb97657c57c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37bd1f66919cf6f8b8bb79cc6cea71ed2cec0abc547fd8a4527fb97657c57c74->leave($__internal_37bd1f66919cf6f8b8bb79cc6cea71ed2cec0abc547fd8a4527fb97657c57c74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c54b75a9345020ef6cf7a80d7b660f5844af0248661fb67f6550ece297cbad63 = $this->env->getExtension("native_profiler");
        $__internal_c54b75a9345020ef6cf7a80d7b660f5844af0248661fb67f6550ece297cbad63->enter($__internal_c54b75a9345020ef6cf7a80d7b660f5844af0248661fb67f6550ece297cbad63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c54b75a9345020ef6cf7a80d7b660f5844af0248661fb67f6550ece297cbad63->leave($__internal_c54b75a9345020ef6cf7a80d7b660f5844af0248661fb67f6550ece297cbad63_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

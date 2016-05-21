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
        $__internal_8c7b3b9c29320d213aeef3e81c5de34293943dbe7ed55b670565e669f56e4ac3 = $this->env->getExtension("native_profiler");
        $__internal_8c7b3b9c29320d213aeef3e81c5de34293943dbe7ed55b670565e669f56e4ac3->enter($__internal_8c7b3b9c29320d213aeef3e81c5de34293943dbe7ed55b670565e669f56e4ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c7b3b9c29320d213aeef3e81c5de34293943dbe7ed55b670565e669f56e4ac3->leave($__internal_8c7b3b9c29320d213aeef3e81c5de34293943dbe7ed55b670565e669f56e4ac3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba1db298a4da5962275755f6463dc38a2d19ee17e75ef27d3a01f757cdee2978 = $this->env->getExtension("native_profiler");
        $__internal_ba1db298a4da5962275755f6463dc38a2d19ee17e75ef27d3a01f757cdee2978->enter($__internal_ba1db298a4da5962275755f6463dc38a2d19ee17e75ef27d3a01f757cdee2978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@User/Group/show.html.twig", 4)->display($context);
        
        $__internal_ba1db298a4da5962275755f6463dc38a2d19ee17e75ef27d3a01f757cdee2978->leave($__internal_ba1db298a4da5962275755f6463dc38a2d19ee17e75ef27d3a01f757cdee2978_prof);

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

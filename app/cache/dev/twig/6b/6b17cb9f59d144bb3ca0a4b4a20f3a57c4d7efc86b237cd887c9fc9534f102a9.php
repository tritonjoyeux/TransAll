<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7a857d8be79bd876f07be13ecd7bce699d3b4e6c9f94cef37c807b26ef953055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a8afa786e632387e156e44c1ff477c3fd6e2549a7f63bd2886c9ff1bd04490c7 = $this->env->getExtension("native_profiler");
        $__internal_a8afa786e632387e156e44c1ff477c3fd6e2549a7f63bd2886c9ff1bd04490c7->enter($__internal_a8afa786e632387e156e44c1ff477c3fd6e2549a7f63bd2886c9ff1bd04490c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8afa786e632387e156e44c1ff477c3fd6e2549a7f63bd2886c9ff1bd04490c7->leave($__internal_a8afa786e632387e156e44c1ff477c3fd6e2549a7f63bd2886c9ff1bd04490c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f4babfab85747a560585de4a82c67875f586b8312acd38c2edc7700d340f664 = $this->env->getExtension("native_profiler");
        $__internal_6f4babfab85747a560585de4a82c67875f586b8312acd38c2edc7700d340f664->enter($__internal_6f4babfab85747a560585de4a82c67875f586b8312acd38c2edc7700d340f664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6f4babfab85747a560585de4a82c67875f586b8312acd38c2edc7700d340f664->leave($__internal_6f4babfab85747a560585de4a82c67875f586b8312acd38c2edc7700d340f664_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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

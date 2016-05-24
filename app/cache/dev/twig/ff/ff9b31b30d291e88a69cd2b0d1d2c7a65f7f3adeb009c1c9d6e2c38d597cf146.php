<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7a0080ec8094a4086cf906e9396f1d5de07495109260cd6c73a750750ad88a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_b91ae63920709efdcabebb5b095cdec72ef1da3c2a44b445570fef3901a22964 = $this->env->getExtension("native_profiler");
        $__internal_b91ae63920709efdcabebb5b095cdec72ef1da3c2a44b445570fef3901a22964->enter($__internal_b91ae63920709efdcabebb5b095cdec72ef1da3c2a44b445570fef3901a22964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91ae63920709efdcabebb5b095cdec72ef1da3c2a44b445570fef3901a22964->leave($__internal_b91ae63920709efdcabebb5b095cdec72ef1da3c2a44b445570fef3901a22964_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b2d67254221e6a821fc3a12acaadd28f9946e647e6ad3680eebe1a511f4f791 = $this->env->getExtension("native_profiler");
        $__internal_9b2d67254221e6a821fc3a12acaadd28f9946e647e6ad3680eebe1a511f4f791->enter($__internal_9b2d67254221e6a821fc3a12acaadd28f9946e647e6ad3680eebe1a511f4f791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9b2d67254221e6a821fc3a12acaadd28f9946e647e6ad3680eebe1a511f4f791->leave($__internal_9b2d67254221e6a821fc3a12acaadd28f9946e647e6ad3680eebe1a511f4f791_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @User/Group/list.html.twig */
class __TwigTemplate_2ee5c6cb93e717c43a439c0f5091c16613acfabdf63b304e17a69a2daa2bd4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/list.html.twig", 1);
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
        $__internal_eaa75a9abe7547789eab34db8258f49e8959af9f19fd268d06cff3fbd623f629 = $this->env->getExtension("native_profiler");
        $__internal_eaa75a9abe7547789eab34db8258f49e8959af9f19fd268d06cff3fbd623f629->enter($__internal_eaa75a9abe7547789eab34db8258f49e8959af9f19fd268d06cff3fbd623f629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa75a9abe7547789eab34db8258f49e8959af9f19fd268d06cff3fbd623f629->leave($__internal_eaa75a9abe7547789eab34db8258f49e8959af9f19fd268d06cff3fbd623f629_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19eecdff1888c0ca7f610ad7c17dcafa89880483ee0b3a8a390346f9e5f22790 = $this->env->getExtension("native_profiler");
        $__internal_19eecdff1888c0ca7f610ad7c17dcafa89880483ee0b3a8a390346f9e5f22790->enter($__internal_19eecdff1888c0ca7f610ad7c17dcafa89880483ee0b3a8a390346f9e5f22790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@User/Group/list.html.twig", 4)->display($context);
        
        $__internal_19eecdff1888c0ca7f610ad7c17dcafa89880483ee0b3a8a390346f9e5f22790->leave($__internal_19eecdff1888c0ca7f610ad7c17dcafa89880483ee0b3a8a390346f9e5f22790_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @User/ChangePassword/changePassword.html.twig */
class __TwigTemplate_2e13c2f520119dea8efa46795fc47577f5d0786f16264b648f7f3f0561b7f098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_b325f072588b5c1d8c5c7de4a4efb778a25035c9204011dc745d7e72b0a70368 = $this->env->getExtension("native_profiler");
        $__internal_b325f072588b5c1d8c5c7de4a4efb778a25035c9204011dc745d7e72b0a70368->enter($__internal_b325f072588b5c1d8c5c7de4a4efb778a25035c9204011dc745d7e72b0a70368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b325f072588b5c1d8c5c7de4a4efb778a25035c9204011dc745d7e72b0a70368->leave($__internal_b325f072588b5c1d8c5c7de4a4efb778a25035c9204011dc745d7e72b0a70368_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef514c7362b617d906e6ab6d4485481170fe71a13322e4cbd27a61be83f4cb17 = $this->env->getExtension("native_profiler");
        $__internal_ef514c7362b617d906e6ab6d4485481170fe71a13322e4cbd27a61be83f4cb17->enter($__internal_ef514c7362b617d906e6ab6d4485481170fe71a13322e4cbd27a61be83f4cb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@User/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ef514c7362b617d906e6ab6d4485481170fe71a13322e4cbd27a61be83f4cb17->leave($__internal_ef514c7362b617d906e6ab6d4485481170fe71a13322e4cbd27a61be83f4cb17_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @User/Group/edit.html.twig */
class __TwigTemplate_58bf15fe1e93dd744432b0c91fb8efc0772f4c841670f9d5242d77ea8ee2c784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/edit.html.twig", 1);
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
        $__internal_fbf7fb41a9410fbe0dfe589d38c49432d07455297a82d7c436b411847aab836b = $this->env->getExtension("native_profiler");
        $__internal_fbf7fb41a9410fbe0dfe589d38c49432d07455297a82d7c436b411847aab836b->enter($__internal_fbf7fb41a9410fbe0dfe589d38c49432d07455297a82d7c436b411847aab836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf7fb41a9410fbe0dfe589d38c49432d07455297a82d7c436b411847aab836b->leave($__internal_fbf7fb41a9410fbe0dfe589d38c49432d07455297a82d7c436b411847aab836b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_486daa3bb229ef8c2c0de89a6bbfef639f5462cde1745edd091c15ee037bcc54 = $this->env->getExtension("native_profiler");
        $__internal_486daa3bb229ef8c2c0de89a6bbfef639f5462cde1745edd091c15ee037bcc54->enter($__internal_486daa3bb229ef8c2c0de89a6bbfef639f5462cde1745edd091c15ee037bcc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@User/Group/edit.html.twig", 4)->display($context);
        
        $__internal_486daa3bb229ef8c2c0de89a6bbfef639f5462cde1745edd091c15ee037bcc54->leave($__internal_486daa3bb229ef8c2c0de89a6bbfef639f5462cde1745edd091c15ee037bcc54_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/edit.html.twig";
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

<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_9a602ec6a1a1a8d5ddada5579f2ade812f33d450d93f42a536be56547922f6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_cc6cb0a391e70530c48891ded0518cd54857e290985668db968ba138a8032b54 = $this->env->getExtension("native_profiler");
        $__internal_cc6cb0a391e70530c48891ded0518cd54857e290985668db968ba138a8032b54->enter($__internal_cc6cb0a391e70530c48891ded0518cd54857e290985668db968ba138a8032b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6cb0a391e70530c48891ded0518cd54857e290985668db968ba138a8032b54->leave($__internal_cc6cb0a391e70530c48891ded0518cd54857e290985668db968ba138a8032b54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3b29884ca98196f3be0994e6e9dbb68a7537a4c48515e47097895e2ec6923fe = $this->env->getExtension("native_profiler");
        $__internal_e3b29884ca98196f3be0994e6e9dbb68a7537a4c48515e47097895e2ec6923fe->enter($__internal_e3b29884ca98196f3be0994e6e9dbb68a7537a4c48515e47097895e2ec6923fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e3b29884ca98196f3be0994e6e9dbb68a7537a4c48515e47097895e2ec6923fe->leave($__internal_e3b29884ca98196f3be0994e6e9dbb68a7537a4c48515e47097895e2ec6923fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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

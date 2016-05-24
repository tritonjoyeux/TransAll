<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5bdc2bd971528e488d7df440b039e58267f30686de5510de5e08deec998d038a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_1f8494fdbab02af2777ca9b2db2cefe9faf16fc86da9c7ca02be978e410e2079 = $this->env->getExtension("native_profiler");
        $__internal_1f8494fdbab02af2777ca9b2db2cefe9faf16fc86da9c7ca02be978e410e2079->enter($__internal_1f8494fdbab02af2777ca9b2db2cefe9faf16fc86da9c7ca02be978e410e2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8494fdbab02af2777ca9b2db2cefe9faf16fc86da9c7ca02be978e410e2079->leave($__internal_1f8494fdbab02af2777ca9b2db2cefe9faf16fc86da9c7ca02be978e410e2079_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae509eaf75cef0e220c39ee3afaa56f18f001feed04447f47e95cb197623d667 = $this->env->getExtension("native_profiler");
        $__internal_ae509eaf75cef0e220c39ee3afaa56f18f001feed04447f47e95cb197623d667->enter($__internal_ae509eaf75cef0e220c39ee3afaa56f18f001feed04447f47e95cb197623d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ae509eaf75cef0e220c39ee3afaa56f18f001feed04447f47e95cb197623d667->leave($__internal_ae509eaf75cef0e220c39ee3afaa56f18f001feed04447f47e95cb197623d667_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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

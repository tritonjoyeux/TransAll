<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_65107174161d1275fd27d217ffecd278f995ca316c271c960f78cc7d5475c31d extends Twig_Template
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
        $__internal_65e0ad0c5a0cf4696df8c56b7328929c6489ae1ddb0b0b861ac401fd0f227e99 = $this->env->getExtension("native_profiler");
        $__internal_65e0ad0c5a0cf4696df8c56b7328929c6489ae1ddb0b0b861ac401fd0f227e99->enter($__internal_65e0ad0c5a0cf4696df8c56b7328929c6489ae1ddb0b0b861ac401fd0f227e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e0ad0c5a0cf4696df8c56b7328929c6489ae1ddb0b0b861ac401fd0f227e99->leave($__internal_65e0ad0c5a0cf4696df8c56b7328929c6489ae1ddb0b0b861ac401fd0f227e99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b542e2a7f902a93f64aa2910f82ba2f423484a9a0158f630d206c82e9053962 = $this->env->getExtension("native_profiler");
        $__internal_5b542e2a7f902a93f64aa2910f82ba2f423484a9a0158f630d206c82e9053962->enter($__internal_5b542e2a7f902a93f64aa2910f82ba2f423484a9a0158f630d206c82e9053962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5b542e2a7f902a93f64aa2910f82ba2f423484a9a0158f630d206c82e9053962->leave($__internal_5b542e2a7f902a93f64aa2910f82ba2f423484a9a0158f630d206c82e9053962_prof);

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

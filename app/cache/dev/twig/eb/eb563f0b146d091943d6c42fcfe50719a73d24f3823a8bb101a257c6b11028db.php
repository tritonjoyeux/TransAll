<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_545b3ae7a31b308809416d9939632623bd1cd2c2cc747466096804f35ce4149b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_397eebe8d7cc4202eb3e980a96aca5ba68be5a3186c41caa7978116bb7baa691 = $this->env->getExtension("native_profiler");
        $__internal_397eebe8d7cc4202eb3e980a96aca5ba68be5a3186c41caa7978116bb7baa691->enter($__internal_397eebe8d7cc4202eb3e980a96aca5ba68be5a3186c41caa7978116bb7baa691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397eebe8d7cc4202eb3e980a96aca5ba68be5a3186c41caa7978116bb7baa691->leave($__internal_397eebe8d7cc4202eb3e980a96aca5ba68be5a3186c41caa7978116bb7baa691_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5a9f410c12f710d7434dfc5782e12a8bc8d5f8bbbb3ec10cbbd2b63827cc7e6 = $this->env->getExtension("native_profiler");
        $__internal_f5a9f410c12f710d7434dfc5782e12a8bc8d5f8bbbb3ec10cbbd2b63827cc7e6->enter($__internal_f5a9f410c12f710d7434dfc5782e12a8bc8d5f8bbbb3ec10cbbd2b63827cc7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f5a9f410c12f710d7434dfc5782e12a8bc8d5f8bbbb3ec10cbbd2b63827cc7e6->leave($__internal_f5a9f410c12f710d7434dfc5782e12a8bc8d5f8bbbb3ec10cbbd2b63827cc7e6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

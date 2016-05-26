<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_545b3ae7a31b308809416d9939632623bd1cd2c2cc747466096804f35ce4149b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f32a936d3ae53ddbe60801566df89145c56686818d5f93c06989549e98232fe4 = $this->env->getExtension("native_profiler");
        $__internal_f32a936d3ae53ddbe60801566df89145c56686818d5f93c06989549e98232fe4->enter($__internal_f32a936d3ae53ddbe60801566df89145c56686818d5f93c06989549e98232fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32a936d3ae53ddbe60801566df89145c56686818d5f93c06989549e98232fe4->leave($__internal_f32a936d3ae53ddbe60801566df89145c56686818d5f93c06989549e98232fe4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14da6bf7d5dd22a3a8f207739e7ebf6d67ce38b245c319aa9007d34d92c27a31 = $this->env->getExtension("native_profiler");
        $__internal_14da6bf7d5dd22a3a8f207739e7ebf6d67ce38b245c319aa9007d34d92c27a31->enter($__internal_14da6bf7d5dd22a3a8f207739e7ebf6d67ce38b245c319aa9007d34d92c27a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_14da6bf7d5dd22a3a8f207739e7ebf6d67ce38b245c319aa9007d34d92c27a31->leave($__internal_14da6bf7d5dd22a3a8f207739e7ebf6d67ce38b245c319aa9007d34d92c27a31_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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

<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_30e46665d98833da95efee7e85c3df83d65e9fd936c23aa24e1eed87552be570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c54c44421b31e1688fb87311feab6d92433d9e7fce02a0927058521419873878 = $this->env->getExtension("native_profiler");
        $__internal_c54c44421b31e1688fb87311feab6d92433d9e7fce02a0927058521419873878->enter($__internal_c54c44421b31e1688fb87311feab6d92433d9e7fce02a0927058521419873878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c54c44421b31e1688fb87311feab6d92433d9e7fce02a0927058521419873878->leave($__internal_c54c44421b31e1688fb87311feab6d92433d9e7fce02a0927058521419873878_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf0f52945088dab8d4e34e1f918bbc0e397bb400487eb3b2a3509d01a72f8e91 = $this->env->getExtension("native_profiler");
        $__internal_bf0f52945088dab8d4e34e1f918bbc0e397bb400487eb3b2a3509d01a72f8e91->enter($__internal_bf0f52945088dab8d4e34e1f918bbc0e397bb400487eb3b2a3509d01a72f8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bf0f52945088dab8d4e34e1f918bbc0e397bb400487eb3b2a3509d01a72f8e91->leave($__internal_bf0f52945088dab8d4e34e1f918bbc0e397bb400487eb3b2a3509d01a72f8e91_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

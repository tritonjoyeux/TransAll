<?php

/* @User/Group/list.html.twig */
class __TwigTemplate_c5717d255fe1c9e82b203aee00ae66cd3b13b324952c50952ba68c1be2c584f0 extends Twig_Template
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
        $__internal_49620dc17ecea1d47f26e90c50da7c3b8cb7b8853543fa911730852b94934df0 = $this->env->getExtension("native_profiler");
        $__internal_49620dc17ecea1d47f26e90c50da7c3b8cb7b8853543fa911730852b94934df0->enter($__internal_49620dc17ecea1d47f26e90c50da7c3b8cb7b8853543fa911730852b94934df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49620dc17ecea1d47f26e90c50da7c3b8cb7b8853543fa911730852b94934df0->leave($__internal_49620dc17ecea1d47f26e90c50da7c3b8cb7b8853543fa911730852b94934df0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5947b44b8de0bd6511fc1a75765c4470a6181c2394ef46bc44500911aab022e7 = $this->env->getExtension("native_profiler");
        $__internal_5947b44b8de0bd6511fc1a75765c4470a6181c2394ef46bc44500911aab022e7->enter($__internal_5947b44b8de0bd6511fc1a75765c4470a6181c2394ef46bc44500911aab022e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@User/Group/list.html.twig", 4)->display($context);
        
        $__internal_5947b44b8de0bd6511fc1a75765c4470a6181c2394ef46bc44500911aab022e7->leave($__internal_5947b44b8de0bd6511fc1a75765c4470a6181c2394ef46bc44500911aab022e7_prof);

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

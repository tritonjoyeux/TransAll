<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_022027739b49209c045eb5337ae17a93031b1482c8ad9bbfbc8be10aaa1d3fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_3abe40f91f09ddacd73b383992f8d4012932ba87c40d492649cf7a4c4b101a75 = $this->env->getExtension("native_profiler");
        $__internal_3abe40f91f09ddacd73b383992f8d4012932ba87c40d492649cf7a4c4b101a75->enter($__internal_3abe40f91f09ddacd73b383992f8d4012932ba87c40d492649cf7a4c4b101a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3abe40f91f09ddacd73b383992f8d4012932ba87c40d492649cf7a4c4b101a75->leave($__internal_3abe40f91f09ddacd73b383992f8d4012932ba87c40d492649cf7a4c4b101a75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c5399fc876d8adc360c1494b1be13918c544e7420950b2712225a30a4f501eb = $this->env->getExtension("native_profiler");
        $__internal_9c5399fc876d8adc360c1494b1be13918c544e7420950b2712225a30a4f501eb->enter($__internal_9c5399fc876d8adc360c1494b1be13918c544e7420950b2712225a30a4f501eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9c5399fc876d8adc360c1494b1be13918c544e7420950b2712225a30a4f501eb->leave($__internal_9c5399fc876d8adc360c1494b1be13918c544e7420950b2712225a30a4f501eb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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

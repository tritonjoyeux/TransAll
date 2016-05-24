<?php

/* @User/Group/new.html.twig */
class __TwigTemplate_07aa36d80b8698a51e4ae68b4f2582ed06f5c7d1fd964b2672c2abe76eb7a51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/new.html.twig", 1);
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
        $__internal_8c000c7a4e3597250c9f84890651a0474ad386fd62e8295a79314ce41436f5f7 = $this->env->getExtension("native_profiler");
        $__internal_8c000c7a4e3597250c9f84890651a0474ad386fd62e8295a79314ce41436f5f7->enter($__internal_8c000c7a4e3597250c9f84890651a0474ad386fd62e8295a79314ce41436f5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c000c7a4e3597250c9f84890651a0474ad386fd62e8295a79314ce41436f5f7->leave($__internal_8c000c7a4e3597250c9f84890651a0474ad386fd62e8295a79314ce41436f5f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cb5311bad44f2c35284f95e054633d535e8d928980f0d3e9c1d8c71f1fca3f7 = $this->env->getExtension("native_profiler");
        $__internal_8cb5311bad44f2c35284f95e054633d535e8d928980f0d3e9c1d8c71f1fca3f7->enter($__internal_8cb5311bad44f2c35284f95e054633d535e8d928980f0d3e9c1d8c71f1fca3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@User/Group/new.html.twig", 4)->display($context);
        
        $__internal_8cb5311bad44f2c35284f95e054633d535e8d928980f0d3e9c1d8c71f1fca3f7->leave($__internal_8cb5311bad44f2c35284f95e054633d535e8d928980f0d3e9c1d8c71f1fca3f7_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

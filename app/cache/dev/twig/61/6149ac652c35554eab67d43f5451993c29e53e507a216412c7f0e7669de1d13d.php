<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_dc119ae84a3fd576a1af1168305d4d25b40c6051e299fe16b1476337aa246926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_b35f15ef2a87d5338a9579c421db10ee20e4a4ee8b26306c575cb7bec654d0c1 = $this->env->getExtension("native_profiler");
        $__internal_b35f15ef2a87d5338a9579c421db10ee20e4a4ee8b26306c575cb7bec654d0c1->enter($__internal_b35f15ef2a87d5338a9579c421db10ee20e4a4ee8b26306c575cb7bec654d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35f15ef2a87d5338a9579c421db10ee20e4a4ee8b26306c575cb7bec654d0c1->leave($__internal_b35f15ef2a87d5338a9579c421db10ee20e4a4ee8b26306c575cb7bec654d0c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae30e088901fc230297d6a9fc33267c895cde8db0eb57afbc7b4f0133a9ef165 = $this->env->getExtension("native_profiler");
        $__internal_ae30e088901fc230297d6a9fc33267c895cde8db0eb57afbc7b4f0133a9ef165->enter($__internal_ae30e088901fc230297d6a9fc33267c895cde8db0eb57afbc7b4f0133a9ef165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ae30e088901fc230297d6a9fc33267c895cde8db0eb57afbc7b4f0133a9ef165->leave($__internal_ae30e088901fc230297d6a9fc33267c895cde8db0eb57afbc7b4f0133a9ef165_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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

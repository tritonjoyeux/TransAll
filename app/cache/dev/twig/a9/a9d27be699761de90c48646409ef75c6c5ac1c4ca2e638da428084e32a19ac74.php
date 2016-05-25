<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b7e22f01f9c2a6d17c04aff356d3b3ed62e0cea9191b6122793392a09da796bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e5ba9214646e4f3c754bbed6d1a6e0f3c50f28f9f110b9a47b9570ff04344d70 = $this->env->getExtension("native_profiler");
        $__internal_e5ba9214646e4f3c754bbed6d1a6e0f3c50f28f9f110b9a47b9570ff04344d70->enter($__internal_e5ba9214646e4f3c754bbed6d1a6e0f3c50f28f9f110b9a47b9570ff04344d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ba9214646e4f3c754bbed6d1a6e0f3c50f28f9f110b9a47b9570ff04344d70->leave($__internal_e5ba9214646e4f3c754bbed6d1a6e0f3c50f28f9f110b9a47b9570ff04344d70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd0cd687ead63455b0545ebd560f2ed052331e3d3e5a38f3d74c6e8bd067c731 = $this->env->getExtension("native_profiler");
        $__internal_cd0cd687ead63455b0545ebd560f2ed052331e3d3e5a38f3d74c6e8bd067c731->enter($__internal_cd0cd687ead63455b0545ebd560f2ed052331e3d3e5a38f3d74c6e8bd067c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_cd0cd687ead63455b0545ebd560f2ed052331e3d3e5a38f3d74c6e8bd067c731->leave($__internal_cd0cd687ead63455b0545ebd560f2ed052331e3d3e5a38f3d74c6e8bd067c731_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

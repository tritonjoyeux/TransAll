<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0066b3a15d526089605a44c2be07444b50f6fbac29885083f42f2fd1cb751448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_19219dbc242852e0e10308b5e249641556e4fd66aefa264dd5303792b405a3c8 = $this->env->getExtension("native_profiler");
        $__internal_19219dbc242852e0e10308b5e249641556e4fd66aefa264dd5303792b405a3c8->enter($__internal_19219dbc242852e0e10308b5e249641556e4fd66aefa264dd5303792b405a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19219dbc242852e0e10308b5e249641556e4fd66aefa264dd5303792b405a3c8->leave($__internal_19219dbc242852e0e10308b5e249641556e4fd66aefa264dd5303792b405a3c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab3d2ce1b995382e9bf864d70a7035ba3fe27f1faccd14c102dc318d60b8fb43 = $this->env->getExtension("native_profiler");
        $__internal_ab3d2ce1b995382e9bf864d70a7035ba3fe27f1faccd14c102dc318d60b8fb43->enter($__internal_ab3d2ce1b995382e9bf864d70a7035ba3fe27f1faccd14c102dc318d60b8fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ab3d2ce1b995382e9bf864d70a7035ba3fe27f1faccd14c102dc318d60b8fb43->leave($__internal_ab3d2ce1b995382e9bf864d70a7035ba3fe27f1faccd14c102dc318d60b8fb43_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

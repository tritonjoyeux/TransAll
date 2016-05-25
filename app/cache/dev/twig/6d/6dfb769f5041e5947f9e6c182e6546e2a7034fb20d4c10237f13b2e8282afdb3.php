<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_dcae5fcd885dadb0a7880a0601099d50448457bbbc81a173f92c1b050dbe44ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_63b85aead61f6389012ef00aebb19436d3815b21261b0109e745f3483eb696b6 = $this->env->getExtension("native_profiler");
        $__internal_63b85aead61f6389012ef00aebb19436d3815b21261b0109e745f3483eb696b6->enter($__internal_63b85aead61f6389012ef00aebb19436d3815b21261b0109e745f3483eb696b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b85aead61f6389012ef00aebb19436d3815b21261b0109e745f3483eb696b6->leave($__internal_63b85aead61f6389012ef00aebb19436d3815b21261b0109e745f3483eb696b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d99bd28c91405b459bd03efebb802b0cfc814483042d045f0ca55288e942cd5b = $this->env->getExtension("native_profiler");
        $__internal_d99bd28c91405b459bd03efebb802b0cfc814483042d045f0ca55288e942cd5b->enter($__internal_d99bd28c91405b459bd03efebb802b0cfc814483042d045f0ca55288e942cd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d99bd28c91405b459bd03efebb802b0cfc814483042d045f0ca55288e942cd5b->leave($__internal_d99bd28c91405b459bd03efebb802b0cfc814483042d045f0ca55288e942cd5b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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

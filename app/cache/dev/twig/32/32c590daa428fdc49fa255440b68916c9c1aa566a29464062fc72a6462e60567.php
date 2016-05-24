<?php

/* @User/Group/show.html.twig */
class __TwigTemplate_224af94417b3aca99258bf4ff77ec97f9a173abde227677343d2ff6824b02c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/show.html.twig", 1);
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
        $__internal_39b08ed9bd457258848102c4931bce39d63bfd6561dfb3e0e8b2ab6e80f39b8c = $this->env->getExtension("native_profiler");
        $__internal_39b08ed9bd457258848102c4931bce39d63bfd6561dfb3e0e8b2ab6e80f39b8c->enter($__internal_39b08ed9bd457258848102c4931bce39d63bfd6561dfb3e0e8b2ab6e80f39b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39b08ed9bd457258848102c4931bce39d63bfd6561dfb3e0e8b2ab6e80f39b8c->leave($__internal_39b08ed9bd457258848102c4931bce39d63bfd6561dfb3e0e8b2ab6e80f39b8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae2ecb193cac78cf79b4ca171487fbb5ea7f8e696393e2d81eb0bb75a52828d4 = $this->env->getExtension("native_profiler");
        $__internal_ae2ecb193cac78cf79b4ca171487fbb5ea7f8e696393e2d81eb0bb75a52828d4->enter($__internal_ae2ecb193cac78cf79b4ca171487fbb5ea7f8e696393e2d81eb0bb75a52828d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@User/Group/show.html.twig", 4)->display($context);
        
        $__internal_ae2ecb193cac78cf79b4ca171487fbb5ea7f8e696393e2d81eb0bb75a52828d4->leave($__internal_ae2ecb193cac78cf79b4ca171487fbb5ea7f8e696393e2d81eb0bb75a52828d4_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

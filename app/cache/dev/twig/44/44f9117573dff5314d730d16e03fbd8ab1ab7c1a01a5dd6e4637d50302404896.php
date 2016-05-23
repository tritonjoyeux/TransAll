<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0f8e6b82df6f9a43c8b34435c01f2a069f77305e3729d141230db97df403499d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_dd836f0a9394242c31f3e86f754e6d2ddb688ee68a01c9f4863c1e37096acda2 = $this->env->getExtension("native_profiler");
        $__internal_dd836f0a9394242c31f3e86f754e6d2ddb688ee68a01c9f4863c1e37096acda2->enter($__internal_dd836f0a9394242c31f3e86f754e6d2ddb688ee68a01c9f4863c1e37096acda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd836f0a9394242c31f3e86f754e6d2ddb688ee68a01c9f4863c1e37096acda2->leave($__internal_dd836f0a9394242c31f3e86f754e6d2ddb688ee68a01c9f4863c1e37096acda2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d553800c9ef105b0d006ec30a87b1b254c88e16dd163c4223f29c69cc6fae580 = $this->env->getExtension("native_profiler");
        $__internal_d553800c9ef105b0d006ec30a87b1b254c88e16dd163c4223f29c69cc6fae580->enter($__internal_d553800c9ef105b0d006ec30a87b1b254c88e16dd163c4223f29c69cc6fae580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d553800c9ef105b0d006ec30a87b1b254c88e16dd163c4223f29c69cc6fae580->leave($__internal_d553800c9ef105b0d006ec30a87b1b254c88e16dd163c4223f29c69cc6fae580_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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

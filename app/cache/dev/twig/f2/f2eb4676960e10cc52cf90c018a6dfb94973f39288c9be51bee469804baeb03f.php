<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_2250fe14c3f54aa1787ebf7fe4b7ba59f8b124670f0abf63b69e86ad2b2c6fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_719c811c188978527671b468e7681bc83556cb5b26c55c02fda2d36989de2313 = $this->env->getExtension("native_profiler");
        $__internal_719c811c188978527671b468e7681bc83556cb5b26c55c02fda2d36989de2313->enter($__internal_719c811c188978527671b468e7681bc83556cb5b26c55c02fda2d36989de2313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_719c811c188978527671b468e7681bc83556cb5b26c55c02fda2d36989de2313->leave($__internal_719c811c188978527671b468e7681bc83556cb5b26c55c02fda2d36989de2313_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98780a99d56e0b26ad1f6d65586fd04a2a1b08369c59608711b8194dc6ee4298 = $this->env->getExtension("native_profiler");
        $__internal_98780a99d56e0b26ad1f6d65586fd04a2a1b08369c59608711b8194dc6ee4298->enter($__internal_98780a99d56e0b26ad1f6d65586fd04a2a1b08369c59608711b8194dc6ee4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_98780a99d56e0b26ad1f6d65586fd04a2a1b08369c59608711b8194dc6ee4298->leave($__internal_98780a99d56e0b26ad1f6d65586fd04a2a1b08369c59608711b8194dc6ee4298_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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

<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0cdd4d71bc6e2551d388d3d261c29432ee40d492f60d0e846c9a4f4040f54923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b244f798959c24774b1288ffbbebc2c46446aa3b39af2f584888bced9cc77e2c = $this->env->getExtension("native_profiler");
        $__internal_b244f798959c24774b1288ffbbebc2c46446aa3b39af2f584888bced9cc77e2c->enter($__internal_b244f798959c24774b1288ffbbebc2c46446aa3b39af2f584888bced9cc77e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b244f798959c24774b1288ffbbebc2c46446aa3b39af2f584888bced9cc77e2c->leave($__internal_b244f798959c24774b1288ffbbebc2c46446aa3b39af2f584888bced9cc77e2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_728f6cc69ef29f42ca4a235a6594ecd217f38d731e3df2ec60e2a5aa43b9334c = $this->env->getExtension("native_profiler");
        $__internal_728f6cc69ef29f42ca4a235a6594ecd217f38d731e3df2ec60e2a5aa43b9334c->enter($__internal_728f6cc69ef29f42ca4a235a6594ecd217f38d731e3df2ec60e2a5aa43b9334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_728f6cc69ef29f42ca4a235a6594ecd217f38d731e3df2ec60e2a5aa43b9334c->leave($__internal_728f6cc69ef29f42ca4a235a6594ecd217f38d731e3df2ec60e2a5aa43b9334c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

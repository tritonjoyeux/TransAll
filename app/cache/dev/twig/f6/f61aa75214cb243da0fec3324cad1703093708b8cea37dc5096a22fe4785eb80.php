<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_f0b53e73df55c6bc3336502b2916c8078aa091fb7b22d21802616097a86a300d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_6c3bdbed365c405df693ec85bee1c5d77e0c2d08f43d8ae0a84cce5a76c899f3 = $this->env->getExtension("native_profiler");
        $__internal_6c3bdbed365c405df693ec85bee1c5d77e0c2d08f43d8ae0a84cce5a76c899f3->enter($__internal_6c3bdbed365c405df693ec85bee1c5d77e0c2d08f43d8ae0a84cce5a76c899f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3bdbed365c405df693ec85bee1c5d77e0c2d08f43d8ae0a84cce5a76c899f3->leave($__internal_6c3bdbed365c405df693ec85bee1c5d77e0c2d08f43d8ae0a84cce5a76c899f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0828f9df97301fa9b8c2d4529fb366b5db3a4e56a2989b08f780361b5dd90f5b = $this->env->getExtension("native_profiler");
        $__internal_0828f9df97301fa9b8c2d4529fb366b5db3a4e56a2989b08f780361b5dd90f5b->enter($__internal_0828f9df97301fa9b8c2d4529fb366b5db3a4e56a2989b08f780361b5dd90f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0828f9df97301fa9b8c2d4529fb366b5db3a4e56a2989b08f780361b5dd90f5b->leave($__internal_0828f9df97301fa9b8c2d4529fb366b5db3a4e56a2989b08f780361b5dd90f5b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

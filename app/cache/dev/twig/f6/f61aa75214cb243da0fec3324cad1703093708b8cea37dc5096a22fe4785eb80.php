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
        $__internal_0b2992512e8a26b10914ca655af767c2a6921a608918121ae0bdd0c2aaec1431 = $this->env->getExtension("native_profiler");
        $__internal_0b2992512e8a26b10914ca655af767c2a6921a608918121ae0bdd0c2aaec1431->enter($__internal_0b2992512e8a26b10914ca655af767c2a6921a608918121ae0bdd0c2aaec1431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2992512e8a26b10914ca655af767c2a6921a608918121ae0bdd0c2aaec1431->leave($__internal_0b2992512e8a26b10914ca655af767c2a6921a608918121ae0bdd0c2aaec1431_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1abec5557eeac4bb3e349382bc7a71159a57bcab53e3ff7c103145333cdb98d = $this->env->getExtension("native_profiler");
        $__internal_d1abec5557eeac4bb3e349382bc7a71159a57bcab53e3ff7c103145333cdb98d->enter($__internal_d1abec5557eeac4bb3e349382bc7a71159a57bcab53e3ff7c103145333cdb98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d1abec5557eeac4bb3e349382bc7a71159a57bcab53e3ff7c103145333cdb98d->leave($__internal_d1abec5557eeac4bb3e349382bc7a71159a57bcab53e3ff7c103145333cdb98d_prof);

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

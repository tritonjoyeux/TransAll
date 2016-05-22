<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_85f73b891233217c390c8df7ac9d4ad479b1da281e42bdcd8fd00ba80b4c87d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/register.html.twig", 1);
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
        $__internal_12f1f8198289af301d7d5379f693f1307c449067b26767abec4269eaff60acdc = $this->env->getExtension("native_profiler");
        $__internal_12f1f8198289af301d7d5379f693f1307c449067b26767abec4269eaff60acdc->enter($__internal_12f1f8198289af301d7d5379f693f1307c449067b26767abec4269eaff60acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f1f8198289af301d7d5379f693f1307c449067b26767abec4269eaff60acdc->leave($__internal_12f1f8198289af301d7d5379f693f1307c449067b26767abec4269eaff60acdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88067d569539117c785fc28abe5704ef3845db5104e0c702ae3d422c2b3e106d = $this->env->getExtension("native_profiler");
        $__internal_88067d569539117c785fc28abe5704ef3845db5104e0c702ae3d422c2b3e106d->enter($__internal_88067d569539117c785fc28abe5704ef3845db5104e0c702ae3d422c2b3e106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_88067d569539117c785fc28abe5704ef3845db5104e0c702ae3d422c2b3e106d->leave($__internal_88067d569539117c785fc28abe5704ef3845db5104e0c702ae3d422c2b3e106d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

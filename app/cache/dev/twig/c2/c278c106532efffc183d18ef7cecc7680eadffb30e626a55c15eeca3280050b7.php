<?php

/* @User/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_d7f7827683bbbb96f1c0308a4b8a78ac16d4d70d5705ffe9dc0c5b4de7c9155a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2ec3db5254ce208d849e9fff08a8b9c619fd474382c518bbcc3cab959990e991 = $this->env->getExtension("native_profiler");
        $__internal_2ec3db5254ce208d849e9fff08a8b9c619fd474382c518bbcc3cab959990e991->enter($__internal_2ec3db5254ce208d849e9fff08a8b9c619fd474382c518bbcc3cab959990e991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec3db5254ce208d849e9fff08a8b9c619fd474382c518bbcc3cab959990e991->leave($__internal_2ec3db5254ce208d849e9fff08a8b9c619fd474382c518bbcc3cab959990e991_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaadb180e9203da0de5bfd9e38dbdf961d42704854a5f63685fb4403b72d4df3 = $this->env->getExtension("native_profiler");
        $__internal_eaadb180e9203da0de5bfd9e38dbdf961d42704854a5f63685fb4403b72d4df3->enter($__internal_eaadb180e9203da0de5bfd9e38dbdf961d42704854a5f63685fb4403b72d4df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eaadb180e9203da0de5bfd9e38dbdf961d42704854a5f63685fb4403b72d4df3->leave($__internal_eaadb180e9203da0de5bfd9e38dbdf961d42704854a5f63685fb4403b72d4df3_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

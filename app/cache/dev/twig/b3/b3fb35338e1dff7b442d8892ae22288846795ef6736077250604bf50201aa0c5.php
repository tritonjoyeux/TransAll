<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fd573dc9c2a18f5dba49658f3ff0254132cffcd68c48dbc6f6b7290ea45c1a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_75805637af57890e1ee6c3d8686a89c0264a12bc46f4f5873108fec81c131e35 = $this->env->getExtension("native_profiler");
        $__internal_75805637af57890e1ee6c3d8686a89c0264a12bc46f4f5873108fec81c131e35->enter($__internal_75805637af57890e1ee6c3d8686a89c0264a12bc46f4f5873108fec81c131e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75805637af57890e1ee6c3d8686a89c0264a12bc46f4f5873108fec81c131e35->leave($__internal_75805637af57890e1ee6c3d8686a89c0264a12bc46f4f5873108fec81c131e35_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e693f5bdad352c9fe7b9749c1653c3f61b5616e11fe347a6086ac0f6cd04e3a = $this->env->getExtension("native_profiler");
        $__internal_5e693f5bdad352c9fe7b9749c1653c3f61b5616e11fe347a6086ac0f6cd04e3a->enter($__internal_5e693f5bdad352c9fe7b9749c1653c3f61b5616e11fe347a6086ac0f6cd04e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5e693f5bdad352c9fe7b9749c1653c3f61b5616e11fe347a6086ac0f6cd04e3a->leave($__internal_5e693f5bdad352c9fe7b9749c1653c3f61b5616e11fe347a6086ac0f6cd04e3a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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

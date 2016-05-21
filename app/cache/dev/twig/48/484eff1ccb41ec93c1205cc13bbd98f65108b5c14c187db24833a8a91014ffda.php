<?php

/* @User/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_e581e010c21f869ba93206a9b62ba7aa319c4cd41281043dc7e5c580c5467f08 extends Twig_Template
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
        $__internal_f8f11269ee77968d73ebefb4c2091ea4a65e2c967fd87b3a2d494fcaf7c96974 = $this->env->getExtension("native_profiler");
        $__internal_f8f11269ee77968d73ebefb4c2091ea4a65e2c967fd87b3a2d494fcaf7c96974->enter($__internal_f8f11269ee77968d73ebefb4c2091ea4a65e2c967fd87b3a2d494fcaf7c96974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f11269ee77968d73ebefb4c2091ea4a65e2c967fd87b3a2d494fcaf7c96974->leave($__internal_f8f11269ee77968d73ebefb4c2091ea4a65e2c967fd87b3a2d494fcaf7c96974_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d0f3b34c9e4b0c45f52a580f93f4c032da365918f7f5f7959d8f670ce6ee8a8 = $this->env->getExtension("native_profiler");
        $__internal_5d0f3b34c9e4b0c45f52a580f93f4c032da365918f7f5f7959d8f670ce6ee8a8->enter($__internal_5d0f3b34c9e4b0c45f52a580f93f4c032da365918f7f5f7959d8f670ce6ee8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5d0f3b34c9e4b0c45f52a580f93f4c032da365918f7f5f7959d8f670ce6ee8a8->leave($__internal_5d0f3b34c9e4b0c45f52a580f93f4c032da365918f7f5f7959d8f670ce6ee8a8_prof);

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

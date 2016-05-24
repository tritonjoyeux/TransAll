<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fc01b10b41bca20a989143187bab614f4f950568a2123f77170b9d4890751eaa extends Twig_Template
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
        $__internal_5b9e6d6bef25fbc094708b871a8d72b5a8cb7bcc927a900555e7d8a19ebcaa25 = $this->env->getExtension("native_profiler");
        $__internal_5b9e6d6bef25fbc094708b871a8d72b5a8cb7bcc927a900555e7d8a19ebcaa25->enter($__internal_5b9e6d6bef25fbc094708b871a8d72b5a8cb7bcc927a900555e7d8a19ebcaa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b9e6d6bef25fbc094708b871a8d72b5a8cb7bcc927a900555e7d8a19ebcaa25->leave($__internal_5b9e6d6bef25fbc094708b871a8d72b5a8cb7bcc927a900555e7d8a19ebcaa25_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e49fc871879d4e12fe2951950f43da00e63d846189b67ca1e74d2a184a5f2d00 = $this->env->getExtension("native_profiler");
        $__internal_e49fc871879d4e12fe2951950f43da00e63d846189b67ca1e74d2a184a5f2d00->enter($__internal_e49fc871879d4e12fe2951950f43da00e63d846189b67ca1e74d2a184a5f2d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e49fc871879d4e12fe2951950f43da00e63d846189b67ca1e74d2a184a5f2d00->leave($__internal_e49fc871879d4e12fe2951950f43da00e63d846189b67ca1e74d2a184a5f2d00_prof);

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

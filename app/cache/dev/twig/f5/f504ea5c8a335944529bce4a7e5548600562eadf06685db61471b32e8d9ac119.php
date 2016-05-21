<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_d7fba98f4aae394b8f6601d8060c4ad10703e0310ad445c8c6c035092faf278f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/request.html.twig", 1);
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
        $__internal_9c2042dc407a8be8f76354dc239c1884ffb95a9bed8cfdf0ed01b780d244e036 = $this->env->getExtension("native_profiler");
        $__internal_9c2042dc407a8be8f76354dc239c1884ffb95a9bed8cfdf0ed01b780d244e036->enter($__internal_9c2042dc407a8be8f76354dc239c1884ffb95a9bed8cfdf0ed01b780d244e036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2042dc407a8be8f76354dc239c1884ffb95a9bed8cfdf0ed01b780d244e036->leave($__internal_9c2042dc407a8be8f76354dc239c1884ffb95a9bed8cfdf0ed01b780d244e036_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_752c36015fbc89e814ba13f03af98c032dbde870f248b330bb952809341d8f4e = $this->env->getExtension("native_profiler");
        $__internal_752c36015fbc89e814ba13f03af98c032dbde870f248b330bb952809341d8f4e->enter($__internal_752c36015fbc89e814ba13f03af98c032dbde870f248b330bb952809341d8f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_752c36015fbc89e814ba13f03af98c032dbde870f248b330bb952809341d8f4e->leave($__internal_752c36015fbc89e814ba13f03af98c032dbde870f248b330bb952809341d8f4e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_1b3fcf3001b3c29fc605df4c253fb093a03ae44f3612e845e9531b31e710e5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_ce1f38ed111b21df8bb5e9e5865b591b9638ff98623612501b455903b2c9b816 = $this->env->getExtension("native_profiler");
        $__internal_ce1f38ed111b21df8bb5e9e5865b591b9638ff98623612501b455903b2c9b816->enter($__internal_ce1f38ed111b21df8bb5e9e5865b591b9638ff98623612501b455903b2c9b816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce1f38ed111b21df8bb5e9e5865b591b9638ff98623612501b455903b2c9b816->leave($__internal_ce1f38ed111b21df8bb5e9e5865b591b9638ff98623612501b455903b2c9b816_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a975f63913c831bfac5d039015f29ab515422e75e87980730ff823a4079790f6 = $this->env->getExtension("native_profiler");
        $__internal_a975f63913c831bfac5d039015f29ab515422e75e87980730ff823a4079790f6->enter($__internal_a975f63913c831bfac5d039015f29ab515422e75e87980730ff823a4079790f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a975f63913c831bfac5d039015f29ab515422e75e87980730ff823a4079790f6->leave($__internal_a975f63913c831bfac5d039015f29ab515422e75e87980730ff823a4079790f6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
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

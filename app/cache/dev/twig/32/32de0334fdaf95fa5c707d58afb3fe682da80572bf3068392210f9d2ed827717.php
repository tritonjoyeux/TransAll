<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_c4169817e91bafdb4718ce4406524dc9941cc584756c086d2a85e966704623c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/show.html.twig", 1);
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
        $__internal_5b04361fbe6895fe3f170cdb2ee4fa7250d0c1045f8375c97d432565dbff69d3 = $this->env->getExtension("native_profiler");
        $__internal_5b04361fbe6895fe3f170cdb2ee4fa7250d0c1045f8375c97d432565dbff69d3->enter($__internal_5b04361fbe6895fe3f170cdb2ee4fa7250d0c1045f8375c97d432565dbff69d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b04361fbe6895fe3f170cdb2ee4fa7250d0c1045f8375c97d432565dbff69d3->leave($__internal_5b04361fbe6895fe3f170cdb2ee4fa7250d0c1045f8375c97d432565dbff69d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29c9b84ad914bbd49c2c91b4ef1a185894a33c61d1765c2a900dbfabd07d7714 = $this->env->getExtension("native_profiler");
        $__internal_29c9b84ad914bbd49c2c91b4ef1a185894a33c61d1765c2a900dbfabd07d7714->enter($__internal_29c9b84ad914bbd49c2c91b4ef1a185894a33c61d1765c2a900dbfabd07d7714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_29c9b84ad914bbd49c2c91b4ef1a185894a33c61d1765c2a900dbfabd07d7714->leave($__internal_29c9b84ad914bbd49c2c91b4ef1a185894a33c61d1765c2a900dbfabd07d7714_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
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

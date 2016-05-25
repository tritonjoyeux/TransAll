<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_c9f71c24e9eb97381b92c3650c20de9bd2ef255b377cdf272ad43de2e6abe2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_b029359b38535954864ebd03aeaf8ade1d2927bbb262ff4239ad56d3032a5430 = $this->env->getExtension("native_profiler");
        $__internal_b029359b38535954864ebd03aeaf8ade1d2927bbb262ff4239ad56d3032a5430->enter($__internal_b029359b38535954864ebd03aeaf8ade1d2927bbb262ff4239ad56d3032a5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b029359b38535954864ebd03aeaf8ade1d2927bbb262ff4239ad56d3032a5430->leave($__internal_b029359b38535954864ebd03aeaf8ade1d2927bbb262ff4239ad56d3032a5430_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_510d1ec93549a6805e308d0fbe7885337edce3ef0316c55b052ede3f9432dde5 = $this->env->getExtension("native_profiler");
        $__internal_510d1ec93549a6805e308d0fbe7885337edce3ef0316c55b052ede3f9432dde5->enter($__internal_510d1ec93549a6805e308d0fbe7885337edce3ef0316c55b052ede3f9432dde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_510d1ec93549a6805e308d0fbe7885337edce3ef0316c55b052ede3f9432dde5->leave($__internal_510d1ec93549a6805e308d0fbe7885337edce3ef0316c55b052ede3f9432dde5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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

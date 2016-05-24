<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_214977a50014e966ec77d0daa7d24cd11f1d630626e9a54f2f72cb6dda1636f7 extends Twig_Template
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
        $__internal_67325f9e68970d4b09ce2e30da6cdd2a256d07e94fa61cc35cf7591f7c2efff6 = $this->env->getExtension("native_profiler");
        $__internal_67325f9e68970d4b09ce2e30da6cdd2a256d07e94fa61cc35cf7591f7c2efff6->enter($__internal_67325f9e68970d4b09ce2e30da6cdd2a256d07e94fa61cc35cf7591f7c2efff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67325f9e68970d4b09ce2e30da6cdd2a256d07e94fa61cc35cf7591f7c2efff6->leave($__internal_67325f9e68970d4b09ce2e30da6cdd2a256d07e94fa61cc35cf7591f7c2efff6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_600c86ecacc994513c9256e95637de66ab20506bfad275107812d2cd0dbf375f = $this->env->getExtension("native_profiler");
        $__internal_600c86ecacc994513c9256e95637de66ab20506bfad275107812d2cd0dbf375f->enter($__internal_600c86ecacc994513c9256e95637de66ab20506bfad275107812d2cd0dbf375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_600c86ecacc994513c9256e95637de66ab20506bfad275107812d2cd0dbf375f->leave($__internal_600c86ecacc994513c9256e95637de66ab20506bfad275107812d2cd0dbf375f_prof);

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

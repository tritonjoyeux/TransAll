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
        $__internal_0822e62d56d6ed498e695c3007d13d1982213c8245695ed1ecaf788d5b9830f5 = $this->env->getExtension("native_profiler");
        $__internal_0822e62d56d6ed498e695c3007d13d1982213c8245695ed1ecaf788d5b9830f5->enter($__internal_0822e62d56d6ed498e695c3007d13d1982213c8245695ed1ecaf788d5b9830f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0822e62d56d6ed498e695c3007d13d1982213c8245695ed1ecaf788d5b9830f5->leave($__internal_0822e62d56d6ed498e695c3007d13d1982213c8245695ed1ecaf788d5b9830f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cbfdc8fcc0e332fac51dfa62b368b6f65301788ee0c9add8705c2ab2554f55e = $this->env->getExtension("native_profiler");
        $__internal_0cbfdc8fcc0e332fac51dfa62b368b6f65301788ee0c9add8705c2ab2554f55e->enter($__internal_0cbfdc8fcc0e332fac51dfa62b368b6f65301788ee0c9add8705c2ab2554f55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0cbfdc8fcc0e332fac51dfa62b368b6f65301788ee0c9add8705c2ab2554f55e->leave($__internal_0cbfdc8fcc0e332fac51dfa62b368b6f65301788ee0c9add8705c2ab2554f55e_prof);

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

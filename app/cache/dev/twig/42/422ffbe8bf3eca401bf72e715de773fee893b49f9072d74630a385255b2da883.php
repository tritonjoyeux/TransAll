<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ef909c48cd6e32a71982c4c02eb085bc3831808acd9fe4b93eefa638487b8fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd709b96900135f91ae6716d7677246792ec051398968163f6f034586881a0fa = $this->env->getExtension("native_profiler");
        $__internal_dd709b96900135f91ae6716d7677246792ec051398968163f6f034586881a0fa->enter($__internal_dd709b96900135f91ae6716d7677246792ec051398968163f6f034586881a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dd709b96900135f91ae6716d7677246792ec051398968163f6f034586881a0fa->leave($__internal_dd709b96900135f91ae6716d7677246792ec051398968163f6f034586881a0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

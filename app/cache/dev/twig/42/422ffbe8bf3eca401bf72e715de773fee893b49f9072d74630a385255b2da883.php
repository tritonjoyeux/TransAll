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
        $__internal_0bb47ca98426d4b362c973f6f890f61000b54e6dc842372c6ffb4dd1709c32f6 = $this->env->getExtension("native_profiler");
        $__internal_0bb47ca98426d4b362c973f6f890f61000b54e6dc842372c6ffb4dd1709c32f6->enter($__internal_0bb47ca98426d4b362c973f6f890f61000b54e6dc842372c6ffb4dd1709c32f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0bb47ca98426d4b362c973f6f890f61000b54e6dc842372c6ffb4dd1709c32f6->leave($__internal_0bb47ca98426d4b362c973f6f890f61000b54e6dc842372c6ffb4dd1709c32f6_prof);

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

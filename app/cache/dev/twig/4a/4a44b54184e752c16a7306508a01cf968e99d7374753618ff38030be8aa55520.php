<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_06a8177b0e7ab565a8f6e1e4c1092b9fd8475b81007fe5c7d1d31aba16814e7f extends Twig_Template
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
        $__internal_6b6a5416144f1dae44edb8a8374d5712bc1da652c29607fadb95cc177679a562 = $this->env->getExtension("native_profiler");
        $__internal_6b6a5416144f1dae44edb8a8374d5712bc1da652c29607fadb95cc177679a562->enter($__internal_6b6a5416144f1dae44edb8a8374d5712bc1da652c29607fadb95cc177679a562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6b6a5416144f1dae44edb8a8374d5712bc1da652c29607fadb95cc177679a562->leave($__internal_6b6a5416144f1dae44edb8a8374d5712bc1da652c29607fadb95cc177679a562_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

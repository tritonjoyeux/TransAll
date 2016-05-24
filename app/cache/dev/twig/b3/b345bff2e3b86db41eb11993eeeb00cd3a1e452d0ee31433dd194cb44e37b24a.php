<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2808687223bd0e2c8b4b35fa48a1605cf30b8d56b0945b68a4d24ede9a69d843 extends Twig_Template
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
        $__internal_43eeefac751446fd7a575c50b3de056d49d3408f533fafb649df30878f0c5ec4 = $this->env->getExtension("native_profiler");
        $__internal_43eeefac751446fd7a575c50b3de056d49d3408f533fafb649df30878f0c5ec4->enter($__internal_43eeefac751446fd7a575c50b3de056d49d3408f533fafb649df30878f0c5ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_43eeefac751446fd7a575c50b3de056d49d3408f533fafb649df30878f0c5ec4->leave($__internal_43eeefac751446fd7a575c50b3de056d49d3408f533fafb649df30878f0c5ec4_prof);

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

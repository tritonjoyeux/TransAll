<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ff997453880330d84dc2e5d3f4d6909d021dd0bb5e65eafc12e115d6b6bb5730 extends Twig_Template
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
        $__internal_393b9433b7ea8bf24fbd7d45c9e5df6cc56bc8902b29076be654b6142b63fe9e = $this->env->getExtension("native_profiler");
        $__internal_393b9433b7ea8bf24fbd7d45c9e5df6cc56bc8902b29076be654b6142b63fe9e->enter($__internal_393b9433b7ea8bf24fbd7d45c9e5df6cc56bc8902b29076be654b6142b63fe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_393b9433b7ea8bf24fbd7d45c9e5df6cc56bc8902b29076be654b6142b63fe9e->leave($__internal_393b9433b7ea8bf24fbd7d45c9e5df6cc56bc8902b29076be654b6142b63fe9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

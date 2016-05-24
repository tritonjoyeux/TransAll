<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2ba94bb423dddebf484b7ee6d957f26fd8121be84d25323fbd9bf7887d59be9c extends Twig_Template
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
        $__internal_f4cbfd500e2f214ede626a5d2418d1b0db2998f96fdd56310f9510bc29b7294e = $this->env->getExtension("native_profiler");
        $__internal_f4cbfd500e2f214ede626a5d2418d1b0db2998f96fdd56310f9510bc29b7294e->enter($__internal_f4cbfd500e2f214ede626a5d2418d1b0db2998f96fdd56310f9510bc29b7294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f4cbfd500e2f214ede626a5d2418d1b0db2998f96fdd56310f9510bc29b7294e->leave($__internal_f4cbfd500e2f214ede626a5d2418d1b0db2998f96fdd56310f9510bc29b7294e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

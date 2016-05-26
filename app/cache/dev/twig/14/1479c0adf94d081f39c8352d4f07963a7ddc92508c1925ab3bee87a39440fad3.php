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
        $__internal_33d5ed88387b321c9db01505b6789a06e89444ffada5cb1a5e242b29f93ebc81 = $this->env->getExtension("native_profiler");
        $__internal_33d5ed88387b321c9db01505b6789a06e89444ffada5cb1a5e242b29f93ebc81->enter($__internal_33d5ed88387b321c9db01505b6789a06e89444ffada5cb1a5e242b29f93ebc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_33d5ed88387b321c9db01505b6789a06e89444ffada5cb1a5e242b29f93ebc81->leave($__internal_33d5ed88387b321c9db01505b6789a06e89444ffada5cb1a5e242b29f93ebc81_prof);

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

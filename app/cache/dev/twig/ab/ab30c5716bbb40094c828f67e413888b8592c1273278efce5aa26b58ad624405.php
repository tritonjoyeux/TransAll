<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a95f254f91211ee7640b974839a9abba509f651c02f4d048cdc391269a43be3c extends Twig_Template
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
        $__internal_b361b83e3bc6e940f1b91a70ce44cbdd6ab3ad214ed01783d655e866395fe90a = $this->env->getExtension("native_profiler");
        $__internal_b361b83e3bc6e940f1b91a70ce44cbdd6ab3ad214ed01783d655e866395fe90a->enter($__internal_b361b83e3bc6e940f1b91a70ce44cbdd6ab3ad214ed01783d655e866395fe90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b361b83e3bc6e940f1b91a70ce44cbdd6ab3ad214ed01783d655e866395fe90a->leave($__internal_b361b83e3bc6e940f1b91a70ce44cbdd6ab3ad214ed01783d655e866395fe90a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

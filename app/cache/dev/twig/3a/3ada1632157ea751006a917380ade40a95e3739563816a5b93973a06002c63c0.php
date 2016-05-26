<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e1fc7ae49ea48b6a2639b2a2c60695449a5c3ba4c39f559f6c76a236cd314101 extends Twig_Template
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
        $__internal_acf246b04858cf89fc792c3ba2fa031edbfb2702c608a534d5421588834b5a74 = $this->env->getExtension("native_profiler");
        $__internal_acf246b04858cf89fc792c3ba2fa031edbfb2702c608a534d5421588834b5a74->enter($__internal_acf246b04858cf89fc792c3ba2fa031edbfb2702c608a534d5421588834b5a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_acf246b04858cf89fc792c3ba2fa031edbfb2702c608a534d5421588834b5a74->leave($__internal_acf246b04858cf89fc792c3ba2fa031edbfb2702c608a534d5421588834b5a74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d4d3d555d37c077456a80ace20a64103e52af0065e5dee6f316485cb88e896d3 extends Twig_Template
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
        $__internal_690c5d81dcf57afea01a8a526de2a633dfaa23d355c718de0a918c057e25048d = $this->env->getExtension("native_profiler");
        $__internal_690c5d81dcf57afea01a8a526de2a633dfaa23d355c718de0a918c057e25048d->enter($__internal_690c5d81dcf57afea01a8a526de2a633dfaa23d355c718de0a918c057e25048d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_690c5d81dcf57afea01a8a526de2a633dfaa23d355c718de0a918c057e25048d->leave($__internal_690c5d81dcf57afea01a8a526de2a633dfaa23d355c718de0a918c057e25048d_prof);

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

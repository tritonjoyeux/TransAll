<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_24910dcc970333225f90ea59d96e25b8b3cc68a3d3515b0d8306b64dc9b0ec78 extends Twig_Template
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
        $__internal_5eda1917dfd1a6569de4ae1daf656b2aea403c592f90cd733dc20a7bd7aac7fe = $this->env->getExtension("native_profiler");
        $__internal_5eda1917dfd1a6569de4ae1daf656b2aea403c592f90cd733dc20a7bd7aac7fe->enter($__internal_5eda1917dfd1a6569de4ae1daf656b2aea403c592f90cd733dc20a7bd7aac7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5eda1917dfd1a6569de4ae1daf656b2aea403c592f90cd733dc20a7bd7aac7fe->leave($__internal_5eda1917dfd1a6569de4ae1daf656b2aea403c592f90cd733dc20a7bd7aac7fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
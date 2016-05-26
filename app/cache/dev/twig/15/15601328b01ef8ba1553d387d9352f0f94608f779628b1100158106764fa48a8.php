<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_969be5aa02fcd6244c2e8a0df7375537770a31de2cb7c3e4a8ce03b102105c2e extends Twig_Template
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
        $__internal_a3f254e6cb9d7b4d9e5942e3fa8fb8b33eb0dee4af3a443715ca9f534e5ef0e0 = $this->env->getExtension("native_profiler");
        $__internal_a3f254e6cb9d7b4d9e5942e3fa8fb8b33eb0dee4af3a443715ca9f534e5ef0e0->enter($__internal_a3f254e6cb9d7b4d9e5942e3fa8fb8b33eb0dee4af3a443715ca9f534e5ef0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a3f254e6cb9d7b4d9e5942e3fa8fb8b33eb0dee4af3a443715ca9f534e5ef0e0->leave($__internal_a3f254e6cb9d7b4d9e5942e3fa8fb8b33eb0dee4af3a443715ca9f534e5ef0e0_prof);

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

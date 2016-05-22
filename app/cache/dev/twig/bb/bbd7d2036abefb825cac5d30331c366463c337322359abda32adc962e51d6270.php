<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_629770b7e9a77b5157ada497b93c8d857b2c868d0c562085598b3d87109df87a extends Twig_Template
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
        $__internal_f99e0ca7cff97de35482f8d4d7af8ba7e7f88a941128c8bef84dd26399d800ce = $this->env->getExtension("native_profiler");
        $__internal_f99e0ca7cff97de35482f8d4d7af8ba7e7f88a941128c8bef84dd26399d800ce->enter($__internal_f99e0ca7cff97de35482f8d4d7af8ba7e7f88a941128c8bef84dd26399d800ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f99e0ca7cff97de35482f8d4d7af8ba7e7f88a941128c8bef84dd26399d800ce->leave($__internal_f99e0ca7cff97de35482f8d4d7af8ba7e7f88a941128c8bef84dd26399d800ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

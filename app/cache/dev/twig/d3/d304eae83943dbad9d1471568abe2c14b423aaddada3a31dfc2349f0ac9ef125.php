<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e4747cd910a68b13a0686ae30500f3879133a65bb6bde236edaead30cfa67c26 extends Twig_Template
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
        $__internal_57efcd7911c3cd411d106bd92013a8f6080579669960623e1f065c0bddc34c41 = $this->env->getExtension("native_profiler");
        $__internal_57efcd7911c3cd411d106bd92013a8f6080579669960623e1f065c0bddc34c41->enter($__internal_57efcd7911c3cd411d106bd92013a8f6080579669960623e1f065c0bddc34c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_57efcd7911c3cd411d106bd92013a8f6080579669960623e1f065c0bddc34c41->leave($__internal_57efcd7911c3cd411d106bd92013a8f6080579669960623e1f065c0bddc34c41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

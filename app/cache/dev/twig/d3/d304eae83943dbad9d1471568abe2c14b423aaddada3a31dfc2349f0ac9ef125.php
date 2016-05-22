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
        $__internal_bceba67a99a4e3a474a143bf0c76d71fe0952d8e3ff055a01b36338e97756c85 = $this->env->getExtension("native_profiler");
        $__internal_bceba67a99a4e3a474a143bf0c76d71fe0952d8e3ff055a01b36338e97756c85->enter($__internal_bceba67a99a4e3a474a143bf0c76d71fe0952d8e3ff055a01b36338e97756c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bceba67a99a4e3a474a143bf0c76d71fe0952d8e3ff055a01b36338e97756c85->leave($__internal_bceba67a99a4e3a474a143bf0c76d71fe0952d8e3ff055a01b36338e97756c85_prof);

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

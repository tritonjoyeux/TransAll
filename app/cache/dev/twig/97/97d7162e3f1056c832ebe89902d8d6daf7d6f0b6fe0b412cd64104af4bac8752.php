<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_318926c1898c119dcd98ea60048a126464ca2d541aa1eb8889c3a3f8a7337ec1 extends Twig_Template
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
        $__internal_cb81ec9049462163123e4c6001418e573ff9a05e2d822c9921472ff4818503c3 = $this->env->getExtension("native_profiler");
        $__internal_cb81ec9049462163123e4c6001418e573ff9a05e2d822c9921472ff4818503c3->enter($__internal_cb81ec9049462163123e4c6001418e573ff9a05e2d822c9921472ff4818503c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cb81ec9049462163123e4c6001418e573ff9a05e2d822c9921472ff4818503c3->leave($__internal_cb81ec9049462163123e4c6001418e573ff9a05e2d822c9921472ff4818503c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

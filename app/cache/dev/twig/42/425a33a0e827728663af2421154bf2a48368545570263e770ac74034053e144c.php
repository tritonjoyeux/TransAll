<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1509d5038124d9534f3a3a954f82b86973d9fe3fbf99cddf4072c49bcf834e67 extends Twig_Template
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
        $__internal_7a1fc288e8c9fe76963c7602ffe2422a4397ebb7773782b80a5122e95dc4aebf = $this->env->getExtension("native_profiler");
        $__internal_7a1fc288e8c9fe76963c7602ffe2422a4397ebb7773782b80a5122e95dc4aebf->enter($__internal_7a1fc288e8c9fe76963c7602ffe2422a4397ebb7773782b80a5122e95dc4aebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7a1fc288e8c9fe76963c7602ffe2422a4397ebb7773782b80a5122e95dc4aebf->leave($__internal_7a1fc288e8c9fe76963c7602ffe2422a4397ebb7773782b80a5122e95dc4aebf_prof);

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

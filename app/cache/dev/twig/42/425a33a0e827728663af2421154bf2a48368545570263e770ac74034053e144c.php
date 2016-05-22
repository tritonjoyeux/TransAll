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
        $__internal_cd92d00e938707f96aee6e9a41f36ebd0dc74ffe9704e122280870a4c5dd14fb = $this->env->getExtension("native_profiler");
        $__internal_cd92d00e938707f96aee6e9a41f36ebd0dc74ffe9704e122280870a4c5dd14fb->enter($__internal_cd92d00e938707f96aee6e9a41f36ebd0dc74ffe9704e122280870a4c5dd14fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cd92d00e938707f96aee6e9a41f36ebd0dc74ffe9704e122280870a4c5dd14fb->leave($__internal_cd92d00e938707f96aee6e9a41f36ebd0dc74ffe9704e122280870a4c5dd14fb_prof);

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

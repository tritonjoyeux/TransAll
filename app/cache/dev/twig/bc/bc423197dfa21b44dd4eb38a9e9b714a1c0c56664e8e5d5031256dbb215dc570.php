<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_82f4fd641523a08d07516bb0e6bc796f9bf94cab437885522b131580e20b6a35 extends Twig_Template
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
        $__internal_fa33d9918446fed0acb08240c065c50781a9eb4ee34cf8c70ce77d509fd1c3e0 = $this->env->getExtension("native_profiler");
        $__internal_fa33d9918446fed0acb08240c065c50781a9eb4ee34cf8c70ce77d509fd1c3e0->enter($__internal_fa33d9918446fed0acb08240c065c50781a9eb4ee34cf8c70ce77d509fd1c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fa33d9918446fed0acb08240c065c50781a9eb4ee34cf8c70ce77d509fd1c3e0->leave($__internal_fa33d9918446fed0acb08240c065c50781a9eb4ee34cf8c70ce77d509fd1c3e0_prof);

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

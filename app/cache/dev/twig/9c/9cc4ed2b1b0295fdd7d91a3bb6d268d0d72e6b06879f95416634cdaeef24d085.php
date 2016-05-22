<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_17d59568e828bf7d8030df9a388b0488b48371eba54d1e3653b24ef2be61b2ef extends Twig_Template
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
        $__internal_547a10729558cca0bdd3cedcf4bd4351a5342604b7f7936e5ecf569f13285bbf = $this->env->getExtension("native_profiler");
        $__internal_547a10729558cca0bdd3cedcf4bd4351a5342604b7f7936e5ecf569f13285bbf->enter($__internal_547a10729558cca0bdd3cedcf4bd4351a5342604b7f7936e5ecf569f13285bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_547a10729558cca0bdd3cedcf4bd4351a5342604b7f7936e5ecf569f13285bbf->leave($__internal_547a10729558cca0bdd3cedcf4bd4351a5342604b7f7936e5ecf569f13285bbf_prof);

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

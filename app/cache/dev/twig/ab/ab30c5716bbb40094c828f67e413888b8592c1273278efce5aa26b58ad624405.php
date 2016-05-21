<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a95f254f91211ee7640b974839a9abba509f651c02f4d048cdc391269a43be3c extends Twig_Template
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
        $__internal_417972dd756570bd62c37d1f3d7537ca358b5f1276b7c9c73bfc69f4a80555eb = $this->env->getExtension("native_profiler");
        $__internal_417972dd756570bd62c37d1f3d7537ca358b5f1276b7c9c73bfc69f4a80555eb->enter($__internal_417972dd756570bd62c37d1f3d7537ca358b5f1276b7c9c73bfc69f4a80555eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_417972dd756570bd62c37d1f3d7537ca358b5f1276b7c9c73bfc69f4a80555eb->leave($__internal_417972dd756570bd62c37d1f3d7537ca358b5f1276b7c9c73bfc69f4a80555eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

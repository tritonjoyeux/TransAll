<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a8a73493693c8756db3f6ceb1e6820fa1e15537a35992ef172d5444ff490edd4 extends Twig_Template
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
        $__internal_f50eceaacde75f36d4899dc2b17c62c28be9848c455d2d09fbf130a91ad1afed = $this->env->getExtension("native_profiler");
        $__internal_f50eceaacde75f36d4899dc2b17c62c28be9848c455d2d09fbf130a91ad1afed->enter($__internal_f50eceaacde75f36d4899dc2b17c62c28be9848c455d2d09fbf130a91ad1afed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f50eceaacde75f36d4899dc2b17c62c28be9848c455d2d09fbf130a91ad1afed->leave($__internal_f50eceaacde75f36d4899dc2b17c62c28be9848c455d2d09fbf130a91ad1afed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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

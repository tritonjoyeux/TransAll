<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_de75dc55907bde23190ab09e4a9ac396e1ff74e4d694c84b8c1c5e188f4b4475 extends Twig_Template
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
        $__internal_eeb71339709e57856ab13321f30f896808b90221537b0959a219d2c4596b4fec = $this->env->getExtension("native_profiler");
        $__internal_eeb71339709e57856ab13321f30f896808b90221537b0959a219d2c4596b4fec->enter($__internal_eeb71339709e57856ab13321f30f896808b90221537b0959a219d2c4596b4fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eeb71339709e57856ab13321f30f896808b90221537b0959a219d2c4596b4fec->leave($__internal_eeb71339709e57856ab13321f30f896808b90221537b0959a219d2c4596b4fec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

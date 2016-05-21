<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0cfb6ad32d2102a73d2359b44f367d129c50f74bf59607a01ac7b5874f37c6fa extends Twig_Template
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
        $__internal_dbed0273bae46fda88aa0a2b4894303a0ebb714a01d1876b9c8b47d89ec4b431 = $this->env->getExtension("native_profiler");
        $__internal_dbed0273bae46fda88aa0a2b4894303a0ebb714a01d1876b9c8b47d89ec4b431->enter($__internal_dbed0273bae46fda88aa0a2b4894303a0ebb714a01d1876b9c8b47d89ec4b431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dbed0273bae46fda88aa0a2b4894303a0ebb714a01d1876b9c8b47d89ec4b431->leave($__internal_dbed0273bae46fda88aa0a2b4894303a0ebb714a01d1876b9c8b47d89ec4b431_prof);

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

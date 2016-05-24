<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c2ff377bc0136f7f7c8c1f11f57feeda8a63c3d85267db59dda7d1f4f6fe41fd extends Twig_Template
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
        $__internal_89de068a580ef02d7a68a9da6edab7f4b24c917ce56b128a96161a1f98dd936a = $this->env->getExtension("native_profiler");
        $__internal_89de068a580ef02d7a68a9da6edab7f4b24c917ce56b128a96161a1f98dd936a->enter($__internal_89de068a580ef02d7a68a9da6edab7f4b24c917ce56b128a96161a1f98dd936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_89de068a580ef02d7a68a9da6edab7f4b24c917ce56b128a96161a1f98dd936a->leave($__internal_89de068a580ef02d7a68a9da6edab7f4b24c917ce56b128a96161a1f98dd936a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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

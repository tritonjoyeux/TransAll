<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_df0bf77aecfd6eaf5316fc46faeb37cf9a4c1ef94278c4580562216114f134b9 extends Twig_Template
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
        $__internal_d288951e5cd3f4aecb1eae28f1fdb374ec3a581894f8a75bad7e1a23f700f1dc = $this->env->getExtension("native_profiler");
        $__internal_d288951e5cd3f4aecb1eae28f1fdb374ec3a581894f8a75bad7e1a23f700f1dc->enter($__internal_d288951e5cd3f4aecb1eae28f1fdb374ec3a581894f8a75bad7e1a23f700f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d288951e5cd3f4aecb1eae28f1fdb374ec3a581894f8a75bad7e1a23f700f1dc->leave($__internal_d288951e5cd3f4aecb1eae28f1fdb374ec3a581894f8a75bad7e1a23f700f1dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cf8fb29e2dee1b8721f0b451f355796e3067f2c0db6d61b726fb5bf173dffd0f extends Twig_Template
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
        $__internal_cd8904e2ca40f6b0e6dab2de82c72601fbbb4c2aba70f952b169c95c5bfac635 = $this->env->getExtension("native_profiler");
        $__internal_cd8904e2ca40f6b0e6dab2de82c72601fbbb4c2aba70f952b169c95c5bfac635->enter($__internal_cd8904e2ca40f6b0e6dab2de82c72601fbbb4c2aba70f952b169c95c5bfac635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cd8904e2ca40f6b0e6dab2de82c72601fbbb4c2aba70f952b169c95c5bfac635->leave($__internal_cd8904e2ca40f6b0e6dab2de82c72601fbbb4c2aba70f952b169c95c5bfac635_prof);

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

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
        $__internal_893de97df699993ed7268aabf92906fb6ab126bc187eabfd8608f143ce114a62 = $this->env->getExtension("native_profiler");
        $__internal_893de97df699993ed7268aabf92906fb6ab126bc187eabfd8608f143ce114a62->enter($__internal_893de97df699993ed7268aabf92906fb6ab126bc187eabfd8608f143ce114a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_893de97df699993ed7268aabf92906fb6ab126bc187eabfd8608f143ce114a62->leave($__internal_893de97df699993ed7268aabf92906fb6ab126bc187eabfd8608f143ce114a62_prof);

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

<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7c9ad2859297873b355afffe36efe37d001849b9945856fc251865203723ffcd extends Twig_Template
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
        $__internal_dcbae963b539a3b23f54c6ae3d694a19deea00951b98dd5e2179158ce2be03d2 = $this->env->getExtension("native_profiler");
        $__internal_dcbae963b539a3b23f54c6ae3d694a19deea00951b98dd5e2179158ce2be03d2->enter($__internal_dcbae963b539a3b23f54c6ae3d694a19deea00951b98dd5e2179158ce2be03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dcbae963b539a3b23f54c6ae3d694a19deea00951b98dd5e2179158ce2be03d2->leave($__internal_dcbae963b539a3b23f54c6ae3d694a19deea00951b98dd5e2179158ce2be03d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

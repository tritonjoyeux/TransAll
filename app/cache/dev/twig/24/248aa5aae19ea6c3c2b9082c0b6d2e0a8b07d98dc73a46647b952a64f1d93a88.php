<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e0667336b6579e40b54448ab08485046a81fb3b564eb5b0e4f99a31e344786d3 extends Twig_Template
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
        $__internal_477aa26f7f33140f58fdb6f9009d9296b3c4bf31ac53d27d614b6c6d4434537b = $this->env->getExtension("native_profiler");
        $__internal_477aa26f7f33140f58fdb6f9009d9296b3c4bf31ac53d27d614b6c6d4434537b->enter($__internal_477aa26f7f33140f58fdb6f9009d9296b3c4bf31ac53d27d614b6c6d4434537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_477aa26f7f33140f58fdb6f9009d9296b3c4bf31ac53d27d614b6c6d4434537b->leave($__internal_477aa26f7f33140f58fdb6f9009d9296b3c4bf31ac53d27d614b6c6d4434537b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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

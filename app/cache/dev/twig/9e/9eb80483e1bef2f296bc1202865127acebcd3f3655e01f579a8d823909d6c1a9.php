<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_da885e499c78f86fb2d2c12093c946430b394acf66ed741d1d2b57c71ae838a7 extends Twig_Template
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
        $__internal_24009526aad79a3a9ca5225f529c1352b385eb5344edee9c3d60b9eed0d5cfdd = $this->env->getExtension("native_profiler");
        $__internal_24009526aad79a3a9ca5225f529c1352b385eb5344edee9c3d60b9eed0d5cfdd->enter($__internal_24009526aad79a3a9ca5225f529c1352b385eb5344edee9c3d60b9eed0d5cfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_24009526aad79a3a9ca5225f529c1352b385eb5344edee9c3d60b9eed0d5cfdd->leave($__internal_24009526aad79a3a9ca5225f529c1352b385eb5344edee9c3d60b9eed0d5cfdd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

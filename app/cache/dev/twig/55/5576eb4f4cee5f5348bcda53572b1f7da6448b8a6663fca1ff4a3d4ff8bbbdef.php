<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_934fb03c0f79a3debc004d3dda1a3c231c3ae6b0cbf7916e73af84b36dec5c37 extends Twig_Template
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
        $__internal_066d8d6d4823bb3f95fc173c335e9a398aaf3cfc745c8f4f6e86f0b70c54ac58 = $this->env->getExtension("native_profiler");
        $__internal_066d8d6d4823bb3f95fc173c335e9a398aaf3cfc745c8f4f6e86f0b70c54ac58->enter($__internal_066d8d6d4823bb3f95fc173c335e9a398aaf3cfc745c8f4f6e86f0b70c54ac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_066d8d6d4823bb3f95fc173c335e9a398aaf3cfc745c8f4f6e86f0b70c54ac58->leave($__internal_066d8d6d4823bb3f95fc173c335e9a398aaf3cfc745c8f4f6e86f0b70c54ac58_prof);

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

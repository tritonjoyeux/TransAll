<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_49e54368ed1b2263208eb19585fe4ff3f9cdada97a3b5b783f64299661408e9f extends Twig_Template
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
        $__internal_b219a873481b8d4c219eea7a45cfa43e7ea7e31ac95deaef79885b03c3261d8d = $this->env->getExtension("native_profiler");
        $__internal_b219a873481b8d4c219eea7a45cfa43e7ea7e31ac95deaef79885b03c3261d8d->enter($__internal_b219a873481b8d4c219eea7a45cfa43e7ea7e31ac95deaef79885b03c3261d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_b219a873481b8d4c219eea7a45cfa43e7ea7e31ac95deaef79885b03c3261d8d->leave($__internal_b219a873481b8d4c219eea7a45cfa43e7ea7e31ac95deaef79885b03c3261d8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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

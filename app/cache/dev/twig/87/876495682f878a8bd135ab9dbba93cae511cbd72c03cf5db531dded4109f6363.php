<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1119db22c174fbf5b0a66a7c67d58f967f7a6d2672a7b24a9715e90230de51f5 extends Twig_Template
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
        $__internal_5d57fab50e2d2498432b0e61624ff5e0b8a13955d7941d2e9d6c68d3561858e1 = $this->env->getExtension("native_profiler");
        $__internal_5d57fab50e2d2498432b0e61624ff5e0b8a13955d7941d2e9d6c68d3561858e1->enter($__internal_5d57fab50e2d2498432b0e61624ff5e0b8a13955d7941d2e9d6c68d3561858e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_5d57fab50e2d2498432b0e61624ff5e0b8a13955d7941d2e9d6c68d3561858e1->leave($__internal_5d57fab50e2d2498432b0e61624ff5e0b8a13955d7941d2e9d6c68d3561858e1_prof);

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

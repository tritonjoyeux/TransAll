<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_17dde9f8bafa67d4e93e87c1da4b3db7dca3e5a789d6205767430c7d47060e65 extends Twig_Template
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
        $__internal_51469a7b93b66b04ff17ee50ef0decb4209ad1c7ee81fddc919ad145b700cc87 = $this->env->getExtension("native_profiler");
        $__internal_51469a7b93b66b04ff17ee50ef0decb4209ad1c7ee81fddc919ad145b700cc87->enter($__internal_51469a7b93b66b04ff17ee50ef0decb4209ad1c7ee81fddc919ad145b700cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_51469a7b93b66b04ff17ee50ef0decb4209ad1c7ee81fddc919ad145b700cc87->leave($__internal_51469a7b93b66b04ff17ee50ef0decb4209ad1c7ee81fddc919ad145b700cc87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

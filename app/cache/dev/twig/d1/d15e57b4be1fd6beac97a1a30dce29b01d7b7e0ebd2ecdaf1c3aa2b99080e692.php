<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_827c42f995f8d18638e53b9317afaeea52af178fd9f5193d0cb38c1b0557ffa0 extends Twig_Template
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
        $__internal_0e411c86cf202815c865baca24f7196965bac3caef4d558c77581ff51d68a39c = $this->env->getExtension("native_profiler");
        $__internal_0e411c86cf202815c865baca24f7196965bac3caef4d558c77581ff51d68a39c->enter($__internal_0e411c86cf202815c865baca24f7196965bac3caef4d558c77581ff51d68a39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0e411c86cf202815c865baca24f7196965bac3caef4d558c77581ff51d68a39c->leave($__internal_0e411c86cf202815c865baca24f7196965bac3caef4d558c77581ff51d68a39c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

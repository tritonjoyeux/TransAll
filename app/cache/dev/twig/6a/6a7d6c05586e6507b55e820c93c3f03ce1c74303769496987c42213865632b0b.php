<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_abc29b6dbd58ca7f3fb7434d23a71872abb193ebce8ef1310ffcc1a614a8524b extends Twig_Template
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
        $__internal_9085eaacde0025dcdf520fabf1a393c476e05d34505836bc2a566db0a24f9010 = $this->env->getExtension("native_profiler");
        $__internal_9085eaacde0025dcdf520fabf1a393c476e05d34505836bc2a566db0a24f9010->enter($__internal_9085eaacde0025dcdf520fabf1a393c476e05d34505836bc2a566db0a24f9010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9085eaacde0025dcdf520fabf1a393c476e05d34505836bc2a566db0a24f9010->leave($__internal_9085eaacde0025dcdf520fabf1a393c476e05d34505836bc2a566db0a24f9010_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

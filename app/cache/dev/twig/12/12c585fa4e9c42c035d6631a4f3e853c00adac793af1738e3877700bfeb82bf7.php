<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2866432f380436b622d4a8f77fddf55639940fe6f6b026d17dd30dd42de6f87f extends Twig_Template
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
        $__internal_b60a348e38f256f417ff885aa97df5ed7dccd60fa46b3c243b86c2d071726a93 = $this->env->getExtension("native_profiler");
        $__internal_b60a348e38f256f417ff885aa97df5ed7dccd60fa46b3c243b86c2d071726a93->enter($__internal_b60a348e38f256f417ff885aa97df5ed7dccd60fa46b3c243b86c2d071726a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b60a348e38f256f417ff885aa97df5ed7dccd60fa46b3c243b86c2d071726a93->leave($__internal_b60a348e38f256f417ff885aa97df5ed7dccd60fa46b3c243b86c2d071726a93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

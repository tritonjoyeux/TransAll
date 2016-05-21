<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_20523beef9971123833fbbb69eb23cb731c4fb0eff0c16957ff3525445c2bec4 extends Twig_Template
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
        $__internal_989313824e8b2b4a44cf309c8db823308d78c3b88488d982c902d89ce0b416fd = $this->env->getExtension("native_profiler");
        $__internal_989313824e8b2b4a44cf309c8db823308d78c3b88488d982c902d89ce0b416fd->enter($__internal_989313824e8b2b4a44cf309c8db823308d78c3b88488d982c902d89ce0b416fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_989313824e8b2b4a44cf309c8db823308d78c3b88488d982c902d89ce0b416fd->leave($__internal_989313824e8b2b4a44cf309c8db823308d78c3b88488d982c902d89ce0b416fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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

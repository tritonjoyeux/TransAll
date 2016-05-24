<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_500dcf0f4b3ac7a0b51f863d78e5049fee183055eb76ee7b4360e7d90eb9e878 extends Twig_Template
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
        $__internal_cd6476aa3d6a6bfc7d04cbe16fcb37587975725c1f3b8bf3327b8e532a21b3f2 = $this->env->getExtension("native_profiler");
        $__internal_cd6476aa3d6a6bfc7d04cbe16fcb37587975725c1f3b8bf3327b8e532a21b3f2->enter($__internal_cd6476aa3d6a6bfc7d04cbe16fcb37587975725c1f3b8bf3327b8e532a21b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cd6476aa3d6a6bfc7d04cbe16fcb37587975725c1f3b8bf3327b8e532a21b3f2->leave($__internal_cd6476aa3d6a6bfc7d04cbe16fcb37587975725c1f3b8bf3327b8e532a21b3f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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

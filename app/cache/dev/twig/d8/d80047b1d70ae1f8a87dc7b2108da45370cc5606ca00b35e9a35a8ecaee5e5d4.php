<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c969a0f5a433f14a03756d457207ae5163017679b4202cb46ce37dc35d63ca38 extends Twig_Template
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
        $__internal_ac7b66b93ec95203040801445e8d381af02c1cff7be5f2ad704e442e4fa20e96 = $this->env->getExtension("native_profiler");
        $__internal_ac7b66b93ec95203040801445e8d381af02c1cff7be5f2ad704e442e4fa20e96->enter($__internal_ac7b66b93ec95203040801445e8d381af02c1cff7be5f2ad704e442e4fa20e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ac7b66b93ec95203040801445e8d381af02c1cff7be5f2ad704e442e4fa20e96->leave($__internal_ac7b66b93ec95203040801445e8d381af02c1cff7be5f2ad704e442e4fa20e96_prof);

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

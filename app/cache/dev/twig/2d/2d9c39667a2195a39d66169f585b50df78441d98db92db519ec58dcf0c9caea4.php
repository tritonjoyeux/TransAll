<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f7e7f6ba8af716d2548ba0e7c6a7b6ead2f835c1b75425b6261c72de9b6e03c4 extends Twig_Template
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
        $__internal_364abba26d0852bd2863db8f36ec405e36182ae161ba12711a52b5588f59b16d = $this->env->getExtension("native_profiler");
        $__internal_364abba26d0852bd2863db8f36ec405e36182ae161ba12711a52b5588f59b16d->enter($__internal_364abba26d0852bd2863db8f36ec405e36182ae161ba12711a52b5588f59b16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_364abba26d0852bd2863db8f36ec405e36182ae161ba12711a52b5588f59b16d->leave($__internal_364abba26d0852bd2863db8f36ec405e36182ae161ba12711a52b5588f59b16d_prof);

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

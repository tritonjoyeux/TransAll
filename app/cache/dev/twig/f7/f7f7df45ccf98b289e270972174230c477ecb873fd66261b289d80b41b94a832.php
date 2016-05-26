<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_52ccdf5402513819624ac1a396e9398063ba4778af313c02282fff85f203ffbe extends Twig_Template
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
        $__internal_590d5d4357188e2f6e18ad8c3f3a5d8f2d4976b2e42685db4ffab3dd61c30ab6 = $this->env->getExtension("native_profiler");
        $__internal_590d5d4357188e2f6e18ad8c3f3a5d8f2d4976b2e42685db4ffab3dd61c30ab6->enter($__internal_590d5d4357188e2f6e18ad8c3f3a5d8f2d4976b2e42685db4ffab3dd61c30ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_590d5d4357188e2f6e18ad8c3f3a5d8f2d4976b2e42685db4ffab3dd61c30ab6->leave($__internal_590d5d4357188e2f6e18ad8c3f3a5d8f2d4976b2e42685db4ffab3dd61c30ab6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

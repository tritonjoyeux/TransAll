<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2bc5a01414bc4aa062cd8adef8bb3f1d4b0e725b92ba2d9dc5f28ff2f04200dc extends Twig_Template
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
        $__internal_3d782cf462229809974e318349418ac34736214232013d9cf889cc3ea193bd2d = $this->env->getExtension("native_profiler");
        $__internal_3d782cf462229809974e318349418ac34736214232013d9cf889cc3ea193bd2d->enter($__internal_3d782cf462229809974e318349418ac34736214232013d9cf889cc3ea193bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3d782cf462229809974e318349418ac34736214232013d9cf889cc3ea193bd2d->leave($__internal_3d782cf462229809974e318349418ac34736214232013d9cf889cc3ea193bd2d_prof);

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

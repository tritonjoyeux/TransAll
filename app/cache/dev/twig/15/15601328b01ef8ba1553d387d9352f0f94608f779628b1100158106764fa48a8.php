<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_969be5aa02fcd6244c2e8a0df7375537770a31de2cb7c3e4a8ce03b102105c2e extends Twig_Template
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
        $__internal_2fc9d86c7028addc7044ad000a3241c6ab50174131892f644a9f7476f843c25d = $this->env->getExtension("native_profiler");
        $__internal_2fc9d86c7028addc7044ad000a3241c6ab50174131892f644a9f7476f843c25d->enter($__internal_2fc9d86c7028addc7044ad000a3241c6ab50174131892f644a9f7476f843c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2fc9d86c7028addc7044ad000a3241c6ab50174131892f644a9f7476f843c25d->leave($__internal_2fc9d86c7028addc7044ad000a3241c6ab50174131892f644a9f7476f843c25d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

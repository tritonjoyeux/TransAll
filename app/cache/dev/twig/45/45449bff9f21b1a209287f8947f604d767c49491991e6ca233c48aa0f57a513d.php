<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2f870aa20de6837ed7fe93ec91cc7696b572ca49f3b11b4ed3bfc5c0fe72f04f extends Twig_Template
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
        $__internal_e2d794fc8cbf190444f49a8f0f96fe437d0bdee75e3ee75f17d6ea3f39d3bf9b = $this->env->getExtension("native_profiler");
        $__internal_e2d794fc8cbf190444f49a8f0f96fe437d0bdee75e3ee75f17d6ea3f39d3bf9b->enter($__internal_e2d794fc8cbf190444f49a8f0f96fe437d0bdee75e3ee75f17d6ea3f39d3bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e2d794fc8cbf190444f49a8f0f96fe437d0bdee75e3ee75f17d6ea3f39d3bf9b->leave($__internal_e2d794fc8cbf190444f49a8f0f96fe437d0bdee75e3ee75f17d6ea3f39d3bf9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

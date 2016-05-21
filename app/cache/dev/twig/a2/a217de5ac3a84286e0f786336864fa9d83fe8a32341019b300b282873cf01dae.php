<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_55957bf321cd13a255ce5ee2adc43b26b59e604aa35a9f9f45aec6ae3cd66790 extends Twig_Template
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
        $__internal_7c6dd0baff1b1bc3bf52a1b4ba2019d9079917db2f391ece6c2325fc57a4591e = $this->env->getExtension("native_profiler");
        $__internal_7c6dd0baff1b1bc3bf52a1b4ba2019d9079917db2f391ece6c2325fc57a4591e->enter($__internal_7c6dd0baff1b1bc3bf52a1b4ba2019d9079917db2f391ece6c2325fc57a4591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7c6dd0baff1b1bc3bf52a1b4ba2019d9079917db2f391ece6c2325fc57a4591e->leave($__internal_7c6dd0baff1b1bc3bf52a1b4ba2019d9079917db2f391ece6c2325fc57a4591e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

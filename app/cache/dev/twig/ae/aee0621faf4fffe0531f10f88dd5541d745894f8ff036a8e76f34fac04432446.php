<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_808b1d916e0c839202ba924cc537c5758fbaf9253ccac1ec0351407045a0b924 extends Twig_Template
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
        $__internal_7f8e914760c9db62600d6678bf31ef439c2e859550ae0127ecb1f03035152de5 = $this->env->getExtension("native_profiler");
        $__internal_7f8e914760c9db62600d6678bf31ef439c2e859550ae0127ecb1f03035152de5->enter($__internal_7f8e914760c9db62600d6678bf31ef439c2e859550ae0127ecb1f03035152de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7f8e914760c9db62600d6678bf31ef439c2e859550ae0127ecb1f03035152de5->leave($__internal_7f8e914760c9db62600d6678bf31ef439c2e859550ae0127ecb1f03035152de5_prof);

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

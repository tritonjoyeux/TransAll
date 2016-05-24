<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e43a656461dd7a33df5f1dea5114d734e4c8d5f012fe06917c643d79148382be extends Twig_Template
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
        $__internal_30bc005aba75565f94f6d7d034ae92a23c533f2ec2669e40f42478cfa99cd4d1 = $this->env->getExtension("native_profiler");
        $__internal_30bc005aba75565f94f6d7d034ae92a23c533f2ec2669e40f42478cfa99cd4d1->enter($__internal_30bc005aba75565f94f6d7d034ae92a23c533f2ec2669e40f42478cfa99cd4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_30bc005aba75565f94f6d7d034ae92a23c533f2ec2669e40f42478cfa99cd4d1->leave($__internal_30bc005aba75565f94f6d7d034ae92a23c533f2ec2669e40f42478cfa99cd4d1_prof);

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

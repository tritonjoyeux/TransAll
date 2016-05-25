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
        $__internal_21ee50b96aa7162a3995273afb6f7b99b197acaf4634d2b9f93284e2915e60bf = $this->env->getExtension("native_profiler");
        $__internal_21ee50b96aa7162a3995273afb6f7b99b197acaf4634d2b9f93284e2915e60bf->enter($__internal_21ee50b96aa7162a3995273afb6f7b99b197acaf4634d2b9f93284e2915e60bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_21ee50b96aa7162a3995273afb6f7b99b197acaf4634d2b9f93284e2915e60bf->leave($__internal_21ee50b96aa7162a3995273afb6f7b99b197acaf4634d2b9f93284e2915e60bf_prof);

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

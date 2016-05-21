<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b5c9fcdfdf3f67cdf7c278a76264a83cbee9862a9bbf63aec9d85544218c54c7 extends Twig_Template
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
        $__internal_66fcd22873ad7ab33b72d65c300b9aa8af296d9ed8eebb6961b6d00d393873ac = $this->env->getExtension("native_profiler");
        $__internal_66fcd22873ad7ab33b72d65c300b9aa8af296d9ed8eebb6961b6d00d393873ac->enter($__internal_66fcd22873ad7ab33b72d65c300b9aa8af296d9ed8eebb6961b6d00d393873ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_66fcd22873ad7ab33b72d65c300b9aa8af296d9ed8eebb6961b6d00d393873ac->leave($__internal_66fcd22873ad7ab33b72d65c300b9aa8af296d9ed8eebb6961b6d00d393873ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

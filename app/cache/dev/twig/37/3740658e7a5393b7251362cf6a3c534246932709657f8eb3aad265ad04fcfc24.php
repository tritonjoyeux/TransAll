<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1cb582039941d46b9d5c1e9f9ec74491a644e9dde6c510767130e70acdee4ee4 extends Twig_Template
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
        $__internal_1e2f6b3841c3894a2a586cf9bd3a67f2888e237b96656022dc7e2efb20c08eae = $this->env->getExtension("native_profiler");
        $__internal_1e2f6b3841c3894a2a586cf9bd3a67f2888e237b96656022dc7e2efb20c08eae->enter($__internal_1e2f6b3841c3894a2a586cf9bd3a67f2888e237b96656022dc7e2efb20c08eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1e2f6b3841c3894a2a586cf9bd3a67f2888e237b96656022dc7e2efb20c08eae->leave($__internal_1e2f6b3841c3894a2a586cf9bd3a67f2888e237b96656022dc7e2efb20c08eae_prof);

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

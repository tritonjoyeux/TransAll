<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bb19eeee8f2fe226a10c2c42d141d37df05aaa8b69461219a6c9129fefbb426f extends Twig_Template
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
        $__internal_2e3ab4f3e0cdb98addff1aef902f5905cd7c745d5264e10bad8d8fd77e9bfb7a = $this->env->getExtension("native_profiler");
        $__internal_2e3ab4f3e0cdb98addff1aef902f5905cd7c745d5264e10bad8d8fd77e9bfb7a->enter($__internal_2e3ab4f3e0cdb98addff1aef902f5905cd7c745d5264e10bad8d8fd77e9bfb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2e3ab4f3e0cdb98addff1aef902f5905cd7c745d5264e10bad8d8fd77e9bfb7a->leave($__internal_2e3ab4f3e0cdb98addff1aef902f5905cd7c745d5264e10bad8d8fd77e9bfb7a_prof);

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

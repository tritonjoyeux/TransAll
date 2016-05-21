<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e357938e74b39040527c53330161ed3d3255b34411d9221e1e4cdea5c34bc946 extends Twig_Template
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
        $__internal_3a8293a1cfbebd70ca5093180c3e071d6e1d1a4f38b2cd2af6c3294091be5215 = $this->env->getExtension("native_profiler");
        $__internal_3a8293a1cfbebd70ca5093180c3e071d6e1d1a4f38b2cd2af6c3294091be5215->enter($__internal_3a8293a1cfbebd70ca5093180c3e071d6e1d1a4f38b2cd2af6c3294091be5215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3a8293a1cfbebd70ca5093180c3e071d6e1d1a4f38b2cd2af6c3294091be5215->leave($__internal_3a8293a1cfbebd70ca5093180c3e071d6e1d1a4f38b2cd2af6c3294091be5215_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

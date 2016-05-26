<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f1e75a99e0b37c168c1a7e5658edf2eb8b5b6a1823fba392d195da324e338764 extends Twig_Template
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
        $__internal_5b1a637d63f4cddef6ab65bf5ee92554dd4e138a489e6ab0f9e536d725285d86 = $this->env->getExtension("native_profiler");
        $__internal_5b1a637d63f4cddef6ab65bf5ee92554dd4e138a489e6ab0f9e536d725285d86->enter($__internal_5b1a637d63f4cddef6ab65bf5ee92554dd4e138a489e6ab0f9e536d725285d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5b1a637d63f4cddef6ab65bf5ee92554dd4e138a489e6ab0f9e536d725285d86->leave($__internal_5b1a637d63f4cddef6ab65bf5ee92554dd4e138a489e6ab0f9e536d725285d86_prof);

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

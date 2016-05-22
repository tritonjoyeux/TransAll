<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_324b3f9918960ac6693f5a1e3122a6497924aab923e7fc38a5dca470fa81a5af extends Twig_Template
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
        $__internal_07d2f67cb15f6d1aec90f2d7c09508e689d70f6d258c3a008f16e645df14777f = $this->env->getExtension("native_profiler");
        $__internal_07d2f67cb15f6d1aec90f2d7c09508e689d70f6d258c3a008f16e645df14777f->enter($__internal_07d2f67cb15f6d1aec90f2d7c09508e689d70f6d258c3a008f16e645df14777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_07d2f67cb15f6d1aec90f2d7c09508e689d70f6d258c3a008f16e645df14777f->leave($__internal_07d2f67cb15f6d1aec90f2d7c09508e689d70f6d258c3a008f16e645df14777f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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

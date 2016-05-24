<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5721bc30fc88606c2c4fb90d8af47986746fe2840407f9434cba6a56bf6fdb0f extends Twig_Template
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
        $__internal_22c8bcee844ca75ea3e4a2dee60668ba63732fdd0d7342ba1685ef8c22cf960e = $this->env->getExtension("native_profiler");
        $__internal_22c8bcee844ca75ea3e4a2dee60668ba63732fdd0d7342ba1685ef8c22cf960e->enter($__internal_22c8bcee844ca75ea3e4a2dee60668ba63732fdd0d7342ba1685ef8c22cf960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_22c8bcee844ca75ea3e4a2dee60668ba63732fdd0d7342ba1685ef8c22cf960e->leave($__internal_22c8bcee844ca75ea3e4a2dee60668ba63732fdd0d7342ba1685ef8c22cf960e_prof);

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

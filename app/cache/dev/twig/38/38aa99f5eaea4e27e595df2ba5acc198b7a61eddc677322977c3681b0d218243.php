<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab96e9272f392317ff74b2e9937d31da43ac6791df8fa9b83a4fee40c18b6775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7bc0597f021a08926a817418e36e81eb8b05c7ed2473a7263b7d15e386e59a4 = $this->env->getExtension("native_profiler");
        $__internal_f7bc0597f021a08926a817418e36e81eb8b05c7ed2473a7263b7d15e386e59a4->enter($__internal_f7bc0597f021a08926a817418e36e81eb8b05c7ed2473a7263b7d15e386e59a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7bc0597f021a08926a817418e36e81eb8b05c7ed2473a7263b7d15e386e59a4->leave($__internal_f7bc0597f021a08926a817418e36e81eb8b05c7ed2473a7263b7d15e386e59a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2edd0e519c9e1d7cbf32305f8ceb8a676ab729ba932d7b6536ef33c3273b5c99 = $this->env->getExtension("native_profiler");
        $__internal_2edd0e519c9e1d7cbf32305f8ceb8a676ab729ba932d7b6536ef33c3273b5c99->enter($__internal_2edd0e519c9e1d7cbf32305f8ceb8a676ab729ba932d7b6536ef33c3273b5c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2edd0e519c9e1d7cbf32305f8ceb8a676ab729ba932d7b6536ef33c3273b5c99->leave($__internal_2edd0e519c9e1d7cbf32305f8ceb8a676ab729ba932d7b6536ef33c3273b5c99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8de2f275d054bea00496f95b71ec8eda0f3f85181b5f55994f94efbfa4dafd1 = $this->env->getExtension("native_profiler");
        $__internal_b8de2f275d054bea00496f95b71ec8eda0f3f85181b5f55994f94efbfa4dafd1->enter($__internal_b8de2f275d054bea00496f95b71ec8eda0f3f85181b5f55994f94efbfa4dafd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8de2f275d054bea00496f95b71ec8eda0f3f85181b5f55994f94efbfa4dafd1->leave($__internal_b8de2f275d054bea00496f95b71ec8eda0f3f85181b5f55994f94efbfa4dafd1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_692d435a786cffc63b8fbe759bfe51c708ae0e77d3a23ea9aa6916afd15fb27a = $this->env->getExtension("native_profiler");
        $__internal_692d435a786cffc63b8fbe759bfe51c708ae0e77d3a23ea9aa6916afd15fb27a->enter($__internal_692d435a786cffc63b8fbe759bfe51c708ae0e77d3a23ea9aa6916afd15fb27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_692d435a786cffc63b8fbe759bfe51c708ae0e77d3a23ea9aa6916afd15fb27a->leave($__internal_692d435a786cffc63b8fbe759bfe51c708ae0e77d3a23ea9aa6916afd15fb27a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

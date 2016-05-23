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
        $__internal_b3133647eedac7f6d36c8680905cdcaf3f219aa9d6a1845751750ec23a460e66 = $this->env->getExtension("native_profiler");
        $__internal_b3133647eedac7f6d36c8680905cdcaf3f219aa9d6a1845751750ec23a460e66->enter($__internal_b3133647eedac7f6d36c8680905cdcaf3f219aa9d6a1845751750ec23a460e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3133647eedac7f6d36c8680905cdcaf3f219aa9d6a1845751750ec23a460e66->leave($__internal_b3133647eedac7f6d36c8680905cdcaf3f219aa9d6a1845751750ec23a460e66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cbbf74b144cd149b2a375765b34fb94053ac4fccaec754a9c10f82af5f8607e = $this->env->getExtension("native_profiler");
        $__internal_6cbbf74b144cd149b2a375765b34fb94053ac4fccaec754a9c10f82af5f8607e->enter($__internal_6cbbf74b144cd149b2a375765b34fb94053ac4fccaec754a9c10f82af5f8607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6cbbf74b144cd149b2a375765b34fb94053ac4fccaec754a9c10f82af5f8607e->leave($__internal_6cbbf74b144cd149b2a375765b34fb94053ac4fccaec754a9c10f82af5f8607e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9655f6434496eb0854b01bfafd215f86306781a66e10c719eac9b0ea192322f = $this->env->getExtension("native_profiler");
        $__internal_e9655f6434496eb0854b01bfafd215f86306781a66e10c719eac9b0ea192322f->enter($__internal_e9655f6434496eb0854b01bfafd215f86306781a66e10c719eac9b0ea192322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9655f6434496eb0854b01bfafd215f86306781a66e10c719eac9b0ea192322f->leave($__internal_e9655f6434496eb0854b01bfafd215f86306781a66e10c719eac9b0ea192322f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1a9b0f118ffebd678f89fb13c964075a3d86a5ea7726d47088515d7e327bf7 = $this->env->getExtension("native_profiler");
        $__internal_4e1a9b0f118ffebd678f89fb13c964075a3d86a5ea7726d47088515d7e327bf7->enter($__internal_4e1a9b0f118ffebd678f89fb13c964075a3d86a5ea7726d47088515d7e327bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4e1a9b0f118ffebd678f89fb13c964075a3d86a5ea7726d47088515d7e327bf7->leave($__internal_4e1a9b0f118ffebd678f89fb13c964075a3d86a5ea7726d47088515d7e327bf7_prof);

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

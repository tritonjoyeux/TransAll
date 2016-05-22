<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb5f601fd46625607d9c0fac2bf382f6950ff7b0d7a14b125a13dc643623b7dc extends Twig_Template
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
        $__internal_1126413ed1d9a77bbf1566122bd785e560d3604d2d20b54724699a7a48874c35 = $this->env->getExtension("native_profiler");
        $__internal_1126413ed1d9a77bbf1566122bd785e560d3604d2d20b54724699a7a48874c35->enter($__internal_1126413ed1d9a77bbf1566122bd785e560d3604d2d20b54724699a7a48874c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1126413ed1d9a77bbf1566122bd785e560d3604d2d20b54724699a7a48874c35->leave($__internal_1126413ed1d9a77bbf1566122bd785e560d3604d2d20b54724699a7a48874c35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4cb8d2b072a7c74f6a744dbf844bcb038af22b821b1e4a1dc3e21a1e5dd5278c = $this->env->getExtension("native_profiler");
        $__internal_4cb8d2b072a7c74f6a744dbf844bcb038af22b821b1e4a1dc3e21a1e5dd5278c->enter($__internal_4cb8d2b072a7c74f6a744dbf844bcb038af22b821b1e4a1dc3e21a1e5dd5278c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4cb8d2b072a7c74f6a744dbf844bcb038af22b821b1e4a1dc3e21a1e5dd5278c->leave($__internal_4cb8d2b072a7c74f6a744dbf844bcb038af22b821b1e4a1dc3e21a1e5dd5278c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fda110b734041cdc8de7bc0fa5581b3544846bbac99d0cd9530e1729534e94c9 = $this->env->getExtension("native_profiler");
        $__internal_fda110b734041cdc8de7bc0fa5581b3544846bbac99d0cd9530e1729534e94c9->enter($__internal_fda110b734041cdc8de7bc0fa5581b3544846bbac99d0cd9530e1729534e94c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fda110b734041cdc8de7bc0fa5581b3544846bbac99d0cd9530e1729534e94c9->leave($__internal_fda110b734041cdc8de7bc0fa5581b3544846bbac99d0cd9530e1729534e94c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2cf9b58884a742c05a23d086e7ec6ca950c2016cbbc9d21aa49c40794d6c293 = $this->env->getExtension("native_profiler");
        $__internal_b2cf9b58884a742c05a23d086e7ec6ca950c2016cbbc9d21aa49c40794d6c293->enter($__internal_b2cf9b58884a742c05a23d086e7ec6ca950c2016cbbc9d21aa49c40794d6c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b2cf9b58884a742c05a23d086e7ec6ca950c2016cbbc9d21aa49c40794d6c293->leave($__internal_b2cf9b58884a742c05a23d086e7ec6ca950c2016cbbc9d21aa49c40794d6c293_prof);

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

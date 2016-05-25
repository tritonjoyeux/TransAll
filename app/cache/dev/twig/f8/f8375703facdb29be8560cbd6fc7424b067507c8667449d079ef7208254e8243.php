<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_67c83067814901c920dee241a7993f67186c532f88a8cd2d07cb8059ef62fda2 extends Twig_Template
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
        $__internal_708506f6dd0bb7f6ae3bec623827a42e98021ac072b21648ee1ea89138fd122b = $this->env->getExtension("native_profiler");
        $__internal_708506f6dd0bb7f6ae3bec623827a42e98021ac072b21648ee1ea89138fd122b->enter($__internal_708506f6dd0bb7f6ae3bec623827a42e98021ac072b21648ee1ea89138fd122b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708506f6dd0bb7f6ae3bec623827a42e98021ac072b21648ee1ea89138fd122b->leave($__internal_708506f6dd0bb7f6ae3bec623827a42e98021ac072b21648ee1ea89138fd122b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e424256952f3268dc657dd69e9eeb5385838b1602a229623482c7f73ab5fee0a = $this->env->getExtension("native_profiler");
        $__internal_e424256952f3268dc657dd69e9eeb5385838b1602a229623482c7f73ab5fee0a->enter($__internal_e424256952f3268dc657dd69e9eeb5385838b1602a229623482c7f73ab5fee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e424256952f3268dc657dd69e9eeb5385838b1602a229623482c7f73ab5fee0a->leave($__internal_e424256952f3268dc657dd69e9eeb5385838b1602a229623482c7f73ab5fee0a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b3264d2506cd0de8ff4ee0eb376220134a5fd8c819f3a0940eab4134970f821 = $this->env->getExtension("native_profiler");
        $__internal_4b3264d2506cd0de8ff4ee0eb376220134a5fd8c819f3a0940eab4134970f821->enter($__internal_4b3264d2506cd0de8ff4ee0eb376220134a5fd8c819f3a0940eab4134970f821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b3264d2506cd0de8ff4ee0eb376220134a5fd8c819f3a0940eab4134970f821->leave($__internal_4b3264d2506cd0de8ff4ee0eb376220134a5fd8c819f3a0940eab4134970f821_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6e62b9e627020d620cd7f0bca3a01c66b17bb6d747b3e38c81bbe9c5332c1e = $this->env->getExtension("native_profiler");
        $__internal_aa6e62b9e627020d620cd7f0bca3a01c66b17bb6d747b3e38c81bbe9c5332c1e->enter($__internal_aa6e62b9e627020d620cd7f0bca3a01c66b17bb6d747b3e38c81bbe9c5332c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa6e62b9e627020d620cd7f0bca3a01c66b17bb6d747b3e38c81bbe9c5332c1e->leave($__internal_aa6e62b9e627020d620cd7f0bca3a01c66b17bb6d747b3e38c81bbe9c5332c1e_prof);

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

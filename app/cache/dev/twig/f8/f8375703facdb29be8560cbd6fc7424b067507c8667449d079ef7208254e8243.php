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
        $__internal_1412527da0a7cfea7dcc248e931e3031f8197d5e088f6164643d6aaf143e3d0f = $this->env->getExtension("native_profiler");
        $__internal_1412527da0a7cfea7dcc248e931e3031f8197d5e088f6164643d6aaf143e3d0f->enter($__internal_1412527da0a7cfea7dcc248e931e3031f8197d5e088f6164643d6aaf143e3d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1412527da0a7cfea7dcc248e931e3031f8197d5e088f6164643d6aaf143e3d0f->leave($__internal_1412527da0a7cfea7dcc248e931e3031f8197d5e088f6164643d6aaf143e3d0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ca5e89871d1f1f9de2d2f65a550f0e91942533cdd9e5fd4478ed3d2774d6011 = $this->env->getExtension("native_profiler");
        $__internal_3ca5e89871d1f1f9de2d2f65a550f0e91942533cdd9e5fd4478ed3d2774d6011->enter($__internal_3ca5e89871d1f1f9de2d2f65a550f0e91942533cdd9e5fd4478ed3d2774d6011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ca5e89871d1f1f9de2d2f65a550f0e91942533cdd9e5fd4478ed3d2774d6011->leave($__internal_3ca5e89871d1f1f9de2d2f65a550f0e91942533cdd9e5fd4478ed3d2774d6011_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9886a8db4417fc0550eb4b886c28c58e72fde5c22cb002993c46b7b789569926 = $this->env->getExtension("native_profiler");
        $__internal_9886a8db4417fc0550eb4b886c28c58e72fde5c22cb002993c46b7b789569926->enter($__internal_9886a8db4417fc0550eb4b886c28c58e72fde5c22cb002993c46b7b789569926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9886a8db4417fc0550eb4b886c28c58e72fde5c22cb002993c46b7b789569926->leave($__internal_9886a8db4417fc0550eb4b886c28c58e72fde5c22cb002993c46b7b789569926_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a991885292eb01796ef059de95e24fc0eb06973a1303c57524632fb7ad5b9d32 = $this->env->getExtension("native_profiler");
        $__internal_a991885292eb01796ef059de95e24fc0eb06973a1303c57524632fb7ad5b9d32->enter($__internal_a991885292eb01796ef059de95e24fc0eb06973a1303c57524632fb7ad5b9d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a991885292eb01796ef059de95e24fc0eb06973a1303c57524632fb7ad5b9d32->leave($__internal_a991885292eb01796ef059de95e24fc0eb06973a1303c57524632fb7ad5b9d32_prof);

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

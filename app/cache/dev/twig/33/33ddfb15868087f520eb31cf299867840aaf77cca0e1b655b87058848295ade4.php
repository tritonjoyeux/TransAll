<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_560fe96bb26ba3470ea16f65a002e95223dd2dd8dcf932d972195a32aebac064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c8d67981d320fbcb56eacabaa93dc93b370c922ce93fcd80a0cce1808b3ab461 = $this->env->getExtension("native_profiler");
        $__internal_c8d67981d320fbcb56eacabaa93dc93b370c922ce93fcd80a0cce1808b3ab461->enter($__internal_c8d67981d320fbcb56eacabaa93dc93b370c922ce93fcd80a0cce1808b3ab461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d67981d320fbcb56eacabaa93dc93b370c922ce93fcd80a0cce1808b3ab461->leave($__internal_c8d67981d320fbcb56eacabaa93dc93b370c922ce93fcd80a0cce1808b3ab461_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_313109583b1849dee2dfbd1db1e4e7d28c783485483af45419ed2fb82b59ae1c = $this->env->getExtension("native_profiler");
        $__internal_313109583b1849dee2dfbd1db1e4e7d28c783485483af45419ed2fb82b59ae1c->enter($__internal_313109583b1849dee2dfbd1db1e4e7d28c783485483af45419ed2fb82b59ae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_313109583b1849dee2dfbd1db1e4e7d28c783485483af45419ed2fb82b59ae1c->leave($__internal_313109583b1849dee2dfbd1db1e4e7d28c783485483af45419ed2fb82b59ae1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_000e71f50626859544acbab06d9ae7f8b46b1bfa8edf1d1f6faa2778723573e1 = $this->env->getExtension("native_profiler");
        $__internal_000e71f50626859544acbab06d9ae7f8b46b1bfa8edf1d1f6faa2778723573e1->enter($__internal_000e71f50626859544acbab06d9ae7f8b46b1bfa8edf1d1f6faa2778723573e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_000e71f50626859544acbab06d9ae7f8b46b1bfa8edf1d1f6faa2778723573e1->leave($__internal_000e71f50626859544acbab06d9ae7f8b46b1bfa8edf1d1f6faa2778723573e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02dc3e413f4d6a928d3b267bbb831e11300a3b097a739bf9a9284f75fe59a463 = $this->env->getExtension("native_profiler");
        $__internal_02dc3e413f4d6a928d3b267bbb831e11300a3b097a739bf9a9284f75fe59a463->enter($__internal_02dc3e413f4d6a928d3b267bbb831e11300a3b097a739bf9a9284f75fe59a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_02dc3e413f4d6a928d3b267bbb831e11300a3b097a739bf9a9284f75fe59a463->leave($__internal_02dc3e413f4d6a928d3b267bbb831e11300a3b097a739bf9a9284f75fe59a463_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

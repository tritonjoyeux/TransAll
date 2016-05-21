<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_84269fc50e6309e0511427e2146ecc59977d54e764a1f9f4ff06042783c13312 extends Twig_Template
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
        $__internal_28e1b7b215800f47469fc48ba4f6b66d821a398ce60c20408a066eb371e7c36b = $this->env->getExtension("native_profiler");
        $__internal_28e1b7b215800f47469fc48ba4f6b66d821a398ce60c20408a066eb371e7c36b->enter($__internal_28e1b7b215800f47469fc48ba4f6b66d821a398ce60c20408a066eb371e7c36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e1b7b215800f47469fc48ba4f6b66d821a398ce60c20408a066eb371e7c36b->leave($__internal_28e1b7b215800f47469fc48ba4f6b66d821a398ce60c20408a066eb371e7c36b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7875949a888520cb8889148b46382b0dbbd1b29b92f50c312eff66e81ac94537 = $this->env->getExtension("native_profiler");
        $__internal_7875949a888520cb8889148b46382b0dbbd1b29b92f50c312eff66e81ac94537->enter($__internal_7875949a888520cb8889148b46382b0dbbd1b29b92f50c312eff66e81ac94537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7875949a888520cb8889148b46382b0dbbd1b29b92f50c312eff66e81ac94537->leave($__internal_7875949a888520cb8889148b46382b0dbbd1b29b92f50c312eff66e81ac94537_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b52a52606fb358c453eae1a1a448415525a84705b9b4260f4ed2d0249e9d4aa = $this->env->getExtension("native_profiler");
        $__internal_3b52a52606fb358c453eae1a1a448415525a84705b9b4260f4ed2d0249e9d4aa->enter($__internal_3b52a52606fb358c453eae1a1a448415525a84705b9b4260f4ed2d0249e9d4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b52a52606fb358c453eae1a1a448415525a84705b9b4260f4ed2d0249e9d4aa->leave($__internal_3b52a52606fb358c453eae1a1a448415525a84705b9b4260f4ed2d0249e9d4aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3caa281c418cd84308a27f633bc18cb8734411995173f19b3c609e535643d45 = $this->env->getExtension("native_profiler");
        $__internal_a3caa281c418cd84308a27f633bc18cb8734411995173f19b3c609e535643d45->enter($__internal_a3caa281c418cd84308a27f633bc18cb8734411995173f19b3c609e535643d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a3caa281c418cd84308a27f633bc18cb8734411995173f19b3c609e535643d45->leave($__internal_a3caa281c418cd84308a27f633bc18cb8734411995173f19b3c609e535643d45_prof);

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

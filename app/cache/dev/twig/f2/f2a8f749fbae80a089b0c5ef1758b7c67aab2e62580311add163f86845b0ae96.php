<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_40332c2fe774aec31c2a4ef37e8524bcc36a27b1b4d5a415a5fd7c43262bc031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a4271a7f3888fb844c5a8fa4fd81686f1161f83650258783e896d94c5c32c2fb = $this->env->getExtension("native_profiler");
        $__internal_a4271a7f3888fb844c5a8fa4fd81686f1161f83650258783e896d94c5c32c2fb->enter($__internal_a4271a7f3888fb844c5a8fa4fd81686f1161f83650258783e896d94c5c32c2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4271a7f3888fb844c5a8fa4fd81686f1161f83650258783e896d94c5c32c2fb->leave($__internal_a4271a7f3888fb844c5a8fa4fd81686f1161f83650258783e896d94c5c32c2fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef18fc178f3e3474bd096f6db44d8269ed9628f33b42b90c0f2c0bf42476ab8e = $this->env->getExtension("native_profiler");
        $__internal_ef18fc178f3e3474bd096f6db44d8269ed9628f33b42b90c0f2c0bf42476ab8e->enter($__internal_ef18fc178f3e3474bd096f6db44d8269ed9628f33b42b90c0f2c0bf42476ab8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef18fc178f3e3474bd096f6db44d8269ed9628f33b42b90c0f2c0bf42476ab8e->leave($__internal_ef18fc178f3e3474bd096f6db44d8269ed9628f33b42b90c0f2c0bf42476ab8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9486e3d5aad8f37c2b5f71165cc5125822fec06df085a57f57d9d1971df582 = $this->env->getExtension("native_profiler");
        $__internal_9f9486e3d5aad8f37c2b5f71165cc5125822fec06df085a57f57d9d1971df582->enter($__internal_9f9486e3d5aad8f37c2b5f71165cc5125822fec06df085a57f57d9d1971df582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9f9486e3d5aad8f37c2b5f71165cc5125822fec06df085a57f57d9d1971df582->leave($__internal_9f9486e3d5aad8f37c2b5f71165cc5125822fec06df085a57f57d9d1971df582_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

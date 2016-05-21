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
        $__internal_f54f8e7d70386dcf1dae18d3f675483406423c866769e77f26e81b9a29965393 = $this->env->getExtension("native_profiler");
        $__internal_f54f8e7d70386dcf1dae18d3f675483406423c866769e77f26e81b9a29965393->enter($__internal_f54f8e7d70386dcf1dae18d3f675483406423c866769e77f26e81b9a29965393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f54f8e7d70386dcf1dae18d3f675483406423c866769e77f26e81b9a29965393->leave($__internal_f54f8e7d70386dcf1dae18d3f675483406423c866769e77f26e81b9a29965393_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd0ecdf1ecffd4fe04a951164d4ea9e2986cd9ded4b4b280bb0eff0fbf2fb8d9 = $this->env->getExtension("native_profiler");
        $__internal_dd0ecdf1ecffd4fe04a951164d4ea9e2986cd9ded4b4b280bb0eff0fbf2fb8d9->enter($__internal_dd0ecdf1ecffd4fe04a951164d4ea9e2986cd9ded4b4b280bb0eff0fbf2fb8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dd0ecdf1ecffd4fe04a951164d4ea9e2986cd9ded4b4b280bb0eff0fbf2fb8d9->leave($__internal_dd0ecdf1ecffd4fe04a951164d4ea9e2986cd9ded4b4b280bb0eff0fbf2fb8d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df6b0ac71d748e2d9871957a1e3cedcff84440ab604a3c3aabe0b20239fec48e = $this->env->getExtension("native_profiler");
        $__internal_df6b0ac71d748e2d9871957a1e3cedcff84440ab604a3c3aabe0b20239fec48e->enter($__internal_df6b0ac71d748e2d9871957a1e3cedcff84440ab604a3c3aabe0b20239fec48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df6b0ac71d748e2d9871957a1e3cedcff84440ab604a3c3aabe0b20239fec48e->leave($__internal_df6b0ac71d748e2d9871957a1e3cedcff84440ab604a3c3aabe0b20239fec48e_prof);

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

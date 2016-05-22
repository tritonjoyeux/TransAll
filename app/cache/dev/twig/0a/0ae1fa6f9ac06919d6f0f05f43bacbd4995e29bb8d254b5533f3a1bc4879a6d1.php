<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a541df5b3fabf782a31bd82c83be0ebfbd90ff422c64149f7f4cfd5aef7c59e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_916f38722181c97df28aaf2a8d1245aae61320a465afa42a97304f83ac5c1487 = $this->env->getExtension("native_profiler");
        $__internal_916f38722181c97df28aaf2a8d1245aae61320a465afa42a97304f83ac5c1487->enter($__internal_916f38722181c97df28aaf2a8d1245aae61320a465afa42a97304f83ac5c1487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916f38722181c97df28aaf2a8d1245aae61320a465afa42a97304f83ac5c1487->leave($__internal_916f38722181c97df28aaf2a8d1245aae61320a465afa42a97304f83ac5c1487_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bde353ffc805fe028976f44f3f98e5ecd938f7f1f6a5e1dcde1b48fdd6bbad7 = $this->env->getExtension("native_profiler");
        $__internal_6bde353ffc805fe028976f44f3f98e5ecd938f7f1f6a5e1dcde1b48fdd6bbad7->enter($__internal_6bde353ffc805fe028976f44f3f98e5ecd938f7f1f6a5e1dcde1b48fdd6bbad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6bde353ffc805fe028976f44f3f98e5ecd938f7f1f6a5e1dcde1b48fdd6bbad7->leave($__internal_6bde353ffc805fe028976f44f3f98e5ecd938f7f1f6a5e1dcde1b48fdd6bbad7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9ef3bb9cecc4a0a7c375c09073687aa8ec59275538b73d63a0eda9179b4aeb4 = $this->env->getExtension("native_profiler");
        $__internal_f9ef3bb9cecc4a0a7c375c09073687aa8ec59275538b73d63a0eda9179b4aeb4->enter($__internal_f9ef3bb9cecc4a0a7c375c09073687aa8ec59275538b73d63a0eda9179b4aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9ef3bb9cecc4a0a7c375c09073687aa8ec59275538b73d63a0eda9179b4aeb4->leave($__internal_f9ef3bb9cecc4a0a7c375c09073687aa8ec59275538b73d63a0eda9179b4aeb4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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

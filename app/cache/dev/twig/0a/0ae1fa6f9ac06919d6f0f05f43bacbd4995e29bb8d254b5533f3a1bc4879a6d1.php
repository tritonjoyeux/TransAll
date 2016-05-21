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
        $__internal_f1d64732d402904710772f334485b9c8169b9288a9d71b01694fc958c453060d = $this->env->getExtension("native_profiler");
        $__internal_f1d64732d402904710772f334485b9c8169b9288a9d71b01694fc958c453060d->enter($__internal_f1d64732d402904710772f334485b9c8169b9288a9d71b01694fc958c453060d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1d64732d402904710772f334485b9c8169b9288a9d71b01694fc958c453060d->leave($__internal_f1d64732d402904710772f334485b9c8169b9288a9d71b01694fc958c453060d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f45963a5991016e4adf51a4416efa7d5ab321b0487ad87686007a5fbca32916a = $this->env->getExtension("native_profiler");
        $__internal_f45963a5991016e4adf51a4416efa7d5ab321b0487ad87686007a5fbca32916a->enter($__internal_f45963a5991016e4adf51a4416efa7d5ab321b0487ad87686007a5fbca32916a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f45963a5991016e4adf51a4416efa7d5ab321b0487ad87686007a5fbca32916a->leave($__internal_f45963a5991016e4adf51a4416efa7d5ab321b0487ad87686007a5fbca32916a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0685592c762dfee05c60d42d175be578ebdb88506630e810d85f2b6e809481be = $this->env->getExtension("native_profiler");
        $__internal_0685592c762dfee05c60d42d175be578ebdb88506630e810d85f2b6e809481be->enter($__internal_0685592c762dfee05c60d42d175be578ebdb88506630e810d85f2b6e809481be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0685592c762dfee05c60d42d175be578ebdb88506630e810d85f2b6e809481be->leave($__internal_0685592c762dfee05c60d42d175be578ebdb88506630e810d85f2b6e809481be_prof);

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

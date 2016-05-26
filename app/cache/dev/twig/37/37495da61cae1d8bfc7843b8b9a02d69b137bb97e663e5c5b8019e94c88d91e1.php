<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_674ea0cacbb12a28395c5c977d86d55340ddefd4c3002b062d22ecb920a8822e extends Twig_Template
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
        $__internal_78bbdb4433794f0f533d50dbd10bc410984f3e0869ca8d3b89f98e9afc026ace = $this->env->getExtension("native_profiler");
        $__internal_78bbdb4433794f0f533d50dbd10bc410984f3e0869ca8d3b89f98e9afc026ace->enter($__internal_78bbdb4433794f0f533d50dbd10bc410984f3e0869ca8d3b89f98e9afc026ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bbdb4433794f0f533d50dbd10bc410984f3e0869ca8d3b89f98e9afc026ace->leave($__internal_78bbdb4433794f0f533d50dbd10bc410984f3e0869ca8d3b89f98e9afc026ace_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b35d101dc3c48678deafd7897ce55b0cdc6877298181aef6397ba1cbb9014537 = $this->env->getExtension("native_profiler");
        $__internal_b35d101dc3c48678deafd7897ce55b0cdc6877298181aef6397ba1cbb9014537->enter($__internal_b35d101dc3c48678deafd7897ce55b0cdc6877298181aef6397ba1cbb9014537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b35d101dc3c48678deafd7897ce55b0cdc6877298181aef6397ba1cbb9014537->leave($__internal_b35d101dc3c48678deafd7897ce55b0cdc6877298181aef6397ba1cbb9014537_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b6b9fe844c47a92e10ac260c68d063d4f700f27beed5c67ed4e1c8461078861 = $this->env->getExtension("native_profiler");
        $__internal_5b6b9fe844c47a92e10ac260c68d063d4f700f27beed5c67ed4e1c8461078861->enter($__internal_5b6b9fe844c47a92e10ac260c68d063d4f700f27beed5c67ed4e1c8461078861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b6b9fe844c47a92e10ac260c68d063d4f700f27beed5c67ed4e1c8461078861->leave($__internal_5b6b9fe844c47a92e10ac260c68d063d4f700f27beed5c67ed4e1c8461078861_prof);

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

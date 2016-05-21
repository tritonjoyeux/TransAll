<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_15afee2bad9ac838f3a8e5a3126a45b397348b0694b518fda5a99d042ec6ca37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23930efff209242f7f19766178ff624f0f0be029a908a19ca7b55467c93df3c4 = $this->env->getExtension("native_profiler");
        $__internal_23930efff209242f7f19766178ff624f0f0be029a908a19ca7b55467c93df3c4->enter($__internal_23930efff209242f7f19766178ff624f0f0be029a908a19ca7b55467c93df3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23930efff209242f7f19766178ff624f0f0be029a908a19ca7b55467c93df3c4->leave($__internal_23930efff209242f7f19766178ff624f0f0be029a908a19ca7b55467c93df3c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_915cc3255fa823ca90c9893dfe0bae5543638f0685ef8c2f112edbb4a03900f8 = $this->env->getExtension("native_profiler");
        $__internal_915cc3255fa823ca90c9893dfe0bae5543638f0685ef8c2f112edbb4a03900f8->enter($__internal_915cc3255fa823ca90c9893dfe0bae5543638f0685ef8c2f112edbb4a03900f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_915cc3255fa823ca90c9893dfe0bae5543638f0685ef8c2f112edbb4a03900f8->leave($__internal_915cc3255fa823ca90c9893dfe0bae5543638f0685ef8c2f112edbb4a03900f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79ff922d282f6ee126ddf6b2511afbedd8ece24b097df0aeeb132a44404e282d = $this->env->getExtension("native_profiler");
        $__internal_79ff922d282f6ee126ddf6b2511afbedd8ece24b097df0aeeb132a44404e282d->enter($__internal_79ff922d282f6ee126ddf6b2511afbedd8ece24b097df0aeeb132a44404e282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79ff922d282f6ee126ddf6b2511afbedd8ece24b097df0aeeb132a44404e282d->leave($__internal_79ff922d282f6ee126ddf6b2511afbedd8ece24b097df0aeeb132a44404e282d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dee763c88541a608fead53533903f68ddfab4f40140e986751f1e02c440cee09 = $this->env->getExtension("native_profiler");
        $__internal_dee763c88541a608fead53533903f68ddfab4f40140e986751f1e02c440cee09->enter($__internal_dee763c88541a608fead53533903f68ddfab4f40140e986751f1e02c440cee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dee763c88541a608fead53533903f68ddfab4f40140e986751f1e02c440cee09->leave($__internal_dee763c88541a608fead53533903f68ddfab4f40140e986751f1e02c440cee09_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

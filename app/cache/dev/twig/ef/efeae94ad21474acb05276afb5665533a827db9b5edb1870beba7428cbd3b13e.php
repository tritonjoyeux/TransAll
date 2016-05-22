<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6da3021cf0e6b85e31cfd3886da917ec885b0acfef72bfc9fc1a065b8c92109d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efaa66708efe8af878a097f046d11aebd672f1c0808b6758dd2cbbfb41c8eca3 = $this->env->getExtension("native_profiler");
        $__internal_efaa66708efe8af878a097f046d11aebd672f1c0808b6758dd2cbbfb41c8eca3->enter($__internal_efaa66708efe8af878a097f046d11aebd672f1c0808b6758dd2cbbfb41c8eca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_efaa66708efe8af878a097f046d11aebd672f1c0808b6758dd2cbbfb41c8eca3->leave($__internal_efaa66708efe8af878a097f046d11aebd672f1c0808b6758dd2cbbfb41c8eca3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf8ce0da1d014cad5c83f1437fff97be7ff3f6139f22fd9dfb8d45f5e3eec775 = $this->env->getExtension("native_profiler");
        $__internal_cf8ce0da1d014cad5c83f1437fff97be7ff3f6139f22fd9dfb8d45f5e3eec775->enter($__internal_cf8ce0da1d014cad5c83f1437fff97be7ff3f6139f22fd9dfb8d45f5e3eec775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cf8ce0da1d014cad5c83f1437fff97be7ff3f6139f22fd9dfb8d45f5e3eec775->leave($__internal_cf8ce0da1d014cad5c83f1437fff97be7ff3f6139f22fd9dfb8d45f5e3eec775_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

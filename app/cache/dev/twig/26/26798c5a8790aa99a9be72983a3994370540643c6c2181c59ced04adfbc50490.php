<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2dc32471c0d970ecad645ff47c387620543c771aa183d9c100e635c3dfda7bc8 extends Twig_Template
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
        $__internal_831581a4f83a4b995902d7d936a8d24653de2153cc6f85687f3ef0dc95b0b9c4 = $this->env->getExtension("native_profiler");
        $__internal_831581a4f83a4b995902d7d936a8d24653de2153cc6f85687f3ef0dc95b0b9c4->enter($__internal_831581a4f83a4b995902d7d936a8d24653de2153cc6f85687f3ef0dc95b0b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_831581a4f83a4b995902d7d936a8d24653de2153cc6f85687f3ef0dc95b0b9c4->leave($__internal_831581a4f83a4b995902d7d936a8d24653de2153cc6f85687f3ef0dc95b0b9c4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bd7fc20fcd039b4ae6c528a500af29b61af15cca23a4d64a8b045e2bc208cb8 = $this->env->getExtension("native_profiler");
        $__internal_0bd7fc20fcd039b4ae6c528a500af29b61af15cca23a4d64a8b045e2bc208cb8->enter($__internal_0bd7fc20fcd039b4ae6c528a500af29b61af15cca23a4d64a8b045e2bc208cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0bd7fc20fcd039b4ae6c528a500af29b61af15cca23a4d64a8b045e2bc208cb8->leave($__internal_0bd7fc20fcd039b4ae6c528a500af29b61af15cca23a4d64a8b045e2bc208cb8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

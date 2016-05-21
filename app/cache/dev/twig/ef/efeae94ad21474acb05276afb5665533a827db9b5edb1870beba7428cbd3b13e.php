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
        $__internal_a0406904d388d347a6a1da057aa63c9657fea3b5fa97304fd764723cd23dd545 = $this->env->getExtension("native_profiler");
        $__internal_a0406904d388d347a6a1da057aa63c9657fea3b5fa97304fd764723cd23dd545->enter($__internal_a0406904d388d347a6a1da057aa63c9657fea3b5fa97304fd764723cd23dd545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a0406904d388d347a6a1da057aa63c9657fea3b5fa97304fd764723cd23dd545->leave($__internal_a0406904d388d347a6a1da057aa63c9657fea3b5fa97304fd764723cd23dd545_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c2f79f3e4d7e67afd24dc761f8c06bb604674263d925504082a46333a147e9d = $this->env->getExtension("native_profiler");
        $__internal_7c2f79f3e4d7e67afd24dc761f8c06bb604674263d925504082a46333a147e9d->enter($__internal_7c2f79f3e4d7e67afd24dc761f8c06bb604674263d925504082a46333a147e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c2f79f3e4d7e67afd24dc761f8c06bb604674263d925504082a46333a147e9d->leave($__internal_7c2f79f3e4d7e67afd24dc761f8c06bb604674263d925504082a46333a147e9d_prof);

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

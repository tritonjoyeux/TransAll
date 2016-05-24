<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_107bc92ba40c6746f42e1e06ca5c30f602f07f680629f583939dd2dc22ac0673 extends Twig_Template
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
        $__internal_a53d0b3115c43477a76a7c82d2c3ea83118db6ba156cbb80523f0a615e4983c0 = $this->env->getExtension("native_profiler");
        $__internal_a53d0b3115c43477a76a7c82d2c3ea83118db6ba156cbb80523f0a615e4983c0->enter($__internal_a53d0b3115c43477a76a7c82d2c3ea83118db6ba156cbb80523f0a615e4983c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a53d0b3115c43477a76a7c82d2c3ea83118db6ba156cbb80523f0a615e4983c0->leave($__internal_a53d0b3115c43477a76a7c82d2c3ea83118db6ba156cbb80523f0a615e4983c0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cac3c570042df3bbedfc590605026e590fe641a683b71ce4244935189e9ff6f = $this->env->getExtension("native_profiler");
        $__internal_5cac3c570042df3bbedfc590605026e590fe641a683b71ce4244935189e9ff6f->enter($__internal_5cac3c570042df3bbedfc590605026e590fe641a683b71ce4244935189e9ff6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5cac3c570042df3bbedfc590605026e590fe641a683b71ce4244935189e9ff6f->leave($__internal_5cac3c570042df3bbedfc590605026e590fe641a683b71ce4244935189e9ff6f_prof);

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

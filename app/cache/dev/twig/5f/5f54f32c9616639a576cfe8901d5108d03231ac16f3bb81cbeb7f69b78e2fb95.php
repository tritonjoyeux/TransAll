<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8c1af4fa3729be03a329e4ffc9e8e3b46b3d940b7c9796d88a2d0e33db4f1b3b extends Twig_Template
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
        $__internal_db088bc567ff642322e9593fcb9b10758bd0c36e6c028c27200800146791882b = $this->env->getExtension("native_profiler");
        $__internal_db088bc567ff642322e9593fcb9b10758bd0c36e6c028c27200800146791882b->enter($__internal_db088bc567ff642322e9593fcb9b10758bd0c36e6c028c27200800146791882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db088bc567ff642322e9593fcb9b10758bd0c36e6c028c27200800146791882b->leave($__internal_db088bc567ff642322e9593fcb9b10758bd0c36e6c028c27200800146791882b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33fcc9cd7b597fdc562db4eb1387290408680b94c165ebadc1274d5f0f59fc09 = $this->env->getExtension("native_profiler");
        $__internal_33fcc9cd7b597fdc562db4eb1387290408680b94c165ebadc1274d5f0f59fc09->enter($__internal_33fcc9cd7b597fdc562db4eb1387290408680b94c165ebadc1274d5f0f59fc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33fcc9cd7b597fdc562db4eb1387290408680b94c165ebadc1274d5f0f59fc09->leave($__internal_33fcc9cd7b597fdc562db4eb1387290408680b94c165ebadc1274d5f0f59fc09_prof);

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

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
        $__internal_67966ecb4632d735f7b77ddb2f8961a9b412ab4f6915cc34783abdf18b363a9b = $this->env->getExtension("native_profiler");
        $__internal_67966ecb4632d735f7b77ddb2f8961a9b412ab4f6915cc34783abdf18b363a9b->enter($__internal_67966ecb4632d735f7b77ddb2f8961a9b412ab4f6915cc34783abdf18b363a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67966ecb4632d735f7b77ddb2f8961a9b412ab4f6915cc34783abdf18b363a9b->leave($__internal_67966ecb4632d735f7b77ddb2f8961a9b412ab4f6915cc34783abdf18b363a9b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_15b6282f021bef916a6027b11c16d44c4124a432670d2950a2b5017bdcb58263 = $this->env->getExtension("native_profiler");
        $__internal_15b6282f021bef916a6027b11c16d44c4124a432670d2950a2b5017bdcb58263->enter($__internal_15b6282f021bef916a6027b11c16d44c4124a432670d2950a2b5017bdcb58263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15b6282f021bef916a6027b11c16d44c4124a432670d2950a2b5017bdcb58263->leave($__internal_15b6282f021bef916a6027b11c16d44c4124a432670d2950a2b5017bdcb58263_prof);

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
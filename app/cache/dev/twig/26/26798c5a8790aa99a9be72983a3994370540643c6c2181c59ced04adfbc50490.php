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
        $__internal_fa44eb75f7c99ae2469560da680fcdc3e9ee6dc8c8c8d732d652d7bd72d10841 = $this->env->getExtension("native_profiler");
        $__internal_fa44eb75f7c99ae2469560da680fcdc3e9ee6dc8c8c8d732d652d7bd72d10841->enter($__internal_fa44eb75f7c99ae2469560da680fcdc3e9ee6dc8c8c8d732d652d7bd72d10841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa44eb75f7c99ae2469560da680fcdc3e9ee6dc8c8c8d732d652d7bd72d10841->leave($__internal_fa44eb75f7c99ae2469560da680fcdc3e9ee6dc8c8c8d732d652d7bd72d10841_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c339a1368524c031b02e1aba6aaed4905c0f83107e3a47e5afc9ba9e0f1ac43 = $this->env->getExtension("native_profiler");
        $__internal_3c339a1368524c031b02e1aba6aaed4905c0f83107e3a47e5afc9ba9e0f1ac43->enter($__internal_3c339a1368524c031b02e1aba6aaed4905c0f83107e3a47e5afc9ba9e0f1ac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3c339a1368524c031b02e1aba6aaed4905c0f83107e3a47e5afc9ba9e0f1ac43->leave($__internal_3c339a1368524c031b02e1aba6aaed4905c0f83107e3a47e5afc9ba9e0f1ac43_prof);

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

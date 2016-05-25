<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_83b00610853376fc8c08881bdc1d4213e767aa5e39b631dcad42862d178b1b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_466dcbc597f88118123380f80a4ab35c4fa169077fcceeebdb6144bb216ee2e5 = $this->env->getExtension("native_profiler");
        $__internal_466dcbc597f88118123380f80a4ab35c4fa169077fcceeebdb6144bb216ee2e5->enter($__internal_466dcbc597f88118123380f80a4ab35c4fa169077fcceeebdb6144bb216ee2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466dcbc597f88118123380f80a4ab35c4fa169077fcceeebdb6144bb216ee2e5->leave($__internal_466dcbc597f88118123380f80a4ab35c4fa169077fcceeebdb6144bb216ee2e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9996537c41cb1c15ec43640dee808b5400dc11d392d3f542c8359bf94e925bb6 = $this->env->getExtension("native_profiler");
        $__internal_9996537c41cb1c15ec43640dee808b5400dc11d392d3f542c8359bf94e925bb6->enter($__internal_9996537c41cb1c15ec43640dee808b5400dc11d392d3f542c8359bf94e925bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9996537c41cb1c15ec43640dee808b5400dc11d392d3f542c8359bf94e925bb6->leave($__internal_9996537c41cb1c15ec43640dee808b5400dc11d392d3f542c8359bf94e925bb6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_6a3305e950ae0c5f2484ff67d4c6c8f95935860dfdd2847a4c7d22fcb67a7cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_790e75a435ec45d0a63619eae836af3b862e15719b201c629b0a40bab7389efb = $this->env->getExtension("native_profiler");
        $__internal_790e75a435ec45d0a63619eae836af3b862e15719b201c629b0a40bab7389efb->enter($__internal_790e75a435ec45d0a63619eae836af3b862e15719b201c629b0a40bab7389efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_790e75a435ec45d0a63619eae836af3b862e15719b201c629b0a40bab7389efb->leave($__internal_790e75a435ec45d0a63619eae836af3b862e15719b201c629b0a40bab7389efb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dea3466107459c9744814e7e8b01baa486fcb7267113719cb301ba686181650b = $this->env->getExtension("native_profiler");
        $__internal_dea3466107459c9744814e7e8b01baa486fcb7267113719cb301ba686181650b->enter($__internal_dea3466107459c9744814e7e8b01baa486fcb7267113719cb301ba686181650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dea3466107459c9744814e7e8b01baa486fcb7267113719cb301ba686181650b->leave($__internal_dea3466107459c9744814e7e8b01baa486fcb7267113719cb301ba686181650b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

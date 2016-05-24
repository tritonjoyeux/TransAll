<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_40f5403af06ef81c932e267836e0c80ffa70937dabb55415674a1713e11f3598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_277e48d9228e435955f2fc354a76f92a4bfb9be0d64f27e006613d26982cda29 = $this->env->getExtension("native_profiler");
        $__internal_277e48d9228e435955f2fc354a76f92a4bfb9be0d64f27e006613d26982cda29->enter($__internal_277e48d9228e435955f2fc354a76f92a4bfb9be0d64f27e006613d26982cda29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277e48d9228e435955f2fc354a76f92a4bfb9be0d64f27e006613d26982cda29->leave($__internal_277e48d9228e435955f2fc354a76f92a4bfb9be0d64f27e006613d26982cda29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12bda05db0ef8d625bd69fbc697fb4a4f4ac69d7b01b0312d94a25785e1638be = $this->env->getExtension("native_profiler");
        $__internal_12bda05db0ef8d625bd69fbc697fb4a4f4ac69d7b01b0312d94a25785e1638be->enter($__internal_12bda05db0ef8d625bd69fbc697fb4a4f4ac69d7b01b0312d94a25785e1638be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_12bda05db0ef8d625bd69fbc697fb4a4f4ac69d7b01b0312d94a25785e1638be->leave($__internal_12bda05db0ef8d625bd69fbc697fb4a4f4ac69d7b01b0312d94a25785e1638be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

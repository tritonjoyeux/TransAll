<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7a857d8be79bd876f07be13ecd7bce699d3b4e6c9f94cef37c807b26ef953055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_78ad0570d924edd9ffd14f5745a1b77ff2d69ff855583f2a61b99a647022e4f0 = $this->env->getExtension("native_profiler");
        $__internal_78ad0570d924edd9ffd14f5745a1b77ff2d69ff855583f2a61b99a647022e4f0->enter($__internal_78ad0570d924edd9ffd14f5745a1b77ff2d69ff855583f2a61b99a647022e4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ad0570d924edd9ffd14f5745a1b77ff2d69ff855583f2a61b99a647022e4f0->leave($__internal_78ad0570d924edd9ffd14f5745a1b77ff2d69ff855583f2a61b99a647022e4f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbd59e7523f8547cb4288a114179770e7042f24e4289344c80f8b2641c8a8274 = $this->env->getExtension("native_profiler");
        $__internal_fbd59e7523f8547cb4288a114179770e7042f24e4289344c80f8b2641c8a8274->enter($__internal_fbd59e7523f8547cb4288a114179770e7042f24e4289344c80f8b2641c8a8274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fbd59e7523f8547cb4288a114179770e7042f24e4289344c80f8b2641c8a8274->leave($__internal_fbd59e7523f8547cb4288a114179770e7042f24e4289344c80f8b2641c8a8274_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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

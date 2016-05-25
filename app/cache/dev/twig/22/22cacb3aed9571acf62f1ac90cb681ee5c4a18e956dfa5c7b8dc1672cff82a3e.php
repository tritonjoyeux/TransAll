<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_888ddd6e20be25ce32fefdf7013471ce02127c12410b39dd2ec778cdb4463db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_0547950274f53ac666c0ab80debb736468d946525b6c2a428194c57c0dde777a = $this->env->getExtension("native_profiler");
        $__internal_0547950274f53ac666c0ab80debb736468d946525b6c2a428194c57c0dde777a->enter($__internal_0547950274f53ac666c0ab80debb736468d946525b6c2a428194c57c0dde777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0547950274f53ac666c0ab80debb736468d946525b6c2a428194c57c0dde777a->leave($__internal_0547950274f53ac666c0ab80debb736468d946525b6c2a428194c57c0dde777a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ad2c8e1eaaca2cb19884386357b4eca60c4505810f61a68ff8fd61234fdb556 = $this->env->getExtension("native_profiler");
        $__internal_8ad2c8e1eaaca2cb19884386357b4eca60c4505810f61a68ff8fd61234fdb556->enter($__internal_8ad2c8e1eaaca2cb19884386357b4eca60c4505810f61a68ff8fd61234fdb556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_8ad2c8e1eaaca2cb19884386357b4eca60c4505810f61a68ff8fd61234fdb556->leave($__internal_8ad2c8e1eaaca2cb19884386357b4eca60c4505810f61a68ff8fd61234fdb556_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

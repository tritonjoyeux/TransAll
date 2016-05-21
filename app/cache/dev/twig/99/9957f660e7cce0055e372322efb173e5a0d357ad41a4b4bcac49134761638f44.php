<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_ad14d2b8a94618eeb701e042ffa4eef93d4dc2f28104476cd87fc22aadb5c6f2 extends Twig_Template
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
        $__internal_de0339cbafc207e40487668be486fdb173da88c53a8d41c7ee421fe9020529ab = $this->env->getExtension("native_profiler");
        $__internal_de0339cbafc207e40487668be486fdb173da88c53a8d41c7ee421fe9020529ab->enter($__internal_de0339cbafc207e40487668be486fdb173da88c53a8d41c7ee421fe9020529ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0339cbafc207e40487668be486fdb173da88c53a8d41c7ee421fe9020529ab->leave($__internal_de0339cbafc207e40487668be486fdb173da88c53a8d41c7ee421fe9020529ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae3d9115425e8621f1c265938f0284e35ea27e20085da46c3e1f73f10e90a687 = $this->env->getExtension("native_profiler");
        $__internal_ae3d9115425e8621f1c265938f0284e35ea27e20085da46c3e1f73f10e90a687->enter($__internal_ae3d9115425e8621f1c265938f0284e35ea27e20085da46c3e1f73f10e90a687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ae3d9115425e8621f1c265938f0284e35ea27e20085da46c3e1f73f10e90a687->leave($__internal_ae3d9115425e8621f1c265938f0284e35ea27e20085da46c3e1f73f10e90a687_prof);

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

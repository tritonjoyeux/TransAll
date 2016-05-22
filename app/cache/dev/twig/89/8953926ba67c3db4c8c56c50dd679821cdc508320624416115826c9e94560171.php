<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c25631e740753389a857a080502fed6492d7397d7abfdcd90d46dab49bbdf828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d45db3a772040eb20d95fbb2eadfd4b8170b51ebbc0065f2eff4b0d454f3ae80 = $this->env->getExtension("native_profiler");
        $__internal_d45db3a772040eb20d95fbb2eadfd4b8170b51ebbc0065f2eff4b0d454f3ae80->enter($__internal_d45db3a772040eb20d95fbb2eadfd4b8170b51ebbc0065f2eff4b0d454f3ae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45db3a772040eb20d95fbb2eadfd4b8170b51ebbc0065f2eff4b0d454f3ae80->leave($__internal_d45db3a772040eb20d95fbb2eadfd4b8170b51ebbc0065f2eff4b0d454f3ae80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bf9de087fa5504e4ada8cc20f2eb4f4445b6f8ac635ceffbcea4e82cada0e66 = $this->env->getExtension("native_profiler");
        $__internal_2bf9de087fa5504e4ada8cc20f2eb4f4445b6f8ac635ceffbcea4e82cada0e66->enter($__internal_2bf9de087fa5504e4ada8cc20f2eb4f4445b6f8ac635ceffbcea4e82cada0e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2bf9de087fa5504e4ada8cc20f2eb4f4445b6f8ac635ceffbcea4e82cada0e66->leave($__internal_2bf9de087fa5504e4ada8cc20f2eb4f4445b6f8ac635ceffbcea4e82cada0e66_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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

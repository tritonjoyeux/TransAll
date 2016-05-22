<?php

/* @User/Group/edit.html.twig */
class __TwigTemplate_58bf15fe1e93dd744432b0c91fb8efc0772f4c841670f9d5242d77ea8ee2c784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/edit.html.twig", 1);
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
        $__internal_b4d9f4a8871b368c6bfb8843c74dfb059f6a92cab76a73cf039839e63a9b4664 = $this->env->getExtension("native_profiler");
        $__internal_b4d9f4a8871b368c6bfb8843c74dfb059f6a92cab76a73cf039839e63a9b4664->enter($__internal_b4d9f4a8871b368c6bfb8843c74dfb059f6a92cab76a73cf039839e63a9b4664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d9f4a8871b368c6bfb8843c74dfb059f6a92cab76a73cf039839e63a9b4664->leave($__internal_b4d9f4a8871b368c6bfb8843c74dfb059f6a92cab76a73cf039839e63a9b4664_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ef1c8939af4e98f9cffd771499ba66c8c9a4ad915156a1a11622f65ae05aad9 = $this->env->getExtension("native_profiler");
        $__internal_6ef1c8939af4e98f9cffd771499ba66c8c9a4ad915156a1a11622f65ae05aad9->enter($__internal_6ef1c8939af4e98f9cffd771499ba66c8c9a4ad915156a1a11622f65ae05aad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@User/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6ef1c8939af4e98f9cffd771499ba66c8c9a4ad915156a1a11622f65ae05aad9->leave($__internal_6ef1c8939af4e98f9cffd771499ba66c8c9a4ad915156a1a11622f65ae05aad9_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

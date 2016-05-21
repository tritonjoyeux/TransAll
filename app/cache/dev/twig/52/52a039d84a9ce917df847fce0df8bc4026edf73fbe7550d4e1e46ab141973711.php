<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_c70f54b548935e98be9bd6b18746c644631160ee0c4a6b7940caa826b0044610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/edit.html.twig", 1);
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
        $__internal_4e68021251cd44fca53b498d30df1827f1b19a0aa989ad0357a3a031d112d227 = $this->env->getExtension("native_profiler");
        $__internal_4e68021251cd44fca53b498d30df1827f1b19a0aa989ad0357a3a031d112d227->enter($__internal_4e68021251cd44fca53b498d30df1827f1b19a0aa989ad0357a3a031d112d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e68021251cd44fca53b498d30df1827f1b19a0aa989ad0357a3a031d112d227->leave($__internal_4e68021251cd44fca53b498d30df1827f1b19a0aa989ad0357a3a031d112d227_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31ab5aeb43dfbd00af1ee3caa7de15b7070a924b9a54ea60512027cc0cb5bb3e = $this->env->getExtension("native_profiler");
        $__internal_31ab5aeb43dfbd00af1ee3caa7de15b7070a924b9a54ea60512027cc0cb5bb3e->enter($__internal_31ab5aeb43dfbd00af1ee3caa7de15b7070a924b9a54ea60512027cc0cb5bb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_31ab5aeb43dfbd00af1ee3caa7de15b7070a924b9a54ea60512027cc0cb5bb3e->leave($__internal_31ab5aeb43dfbd00af1ee3caa7de15b7070a924b9a54ea60512027cc0cb5bb3e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

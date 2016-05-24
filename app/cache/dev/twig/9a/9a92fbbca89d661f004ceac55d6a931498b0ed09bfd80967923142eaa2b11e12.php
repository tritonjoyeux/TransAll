<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_3981f2fa0d6f777d3779f82fa02328be08fad8e8f1af97555aebdb0fa03cc7db extends Twig_Template
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
        $__internal_f4c16da847540c34ffc26b644f8d3ca00088cbff8630b1fe262d2b0d4303f4b0 = $this->env->getExtension("native_profiler");
        $__internal_f4c16da847540c34ffc26b644f8d3ca00088cbff8630b1fe262d2b0d4303f4b0->enter($__internal_f4c16da847540c34ffc26b644f8d3ca00088cbff8630b1fe262d2b0d4303f4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c16da847540c34ffc26b644f8d3ca00088cbff8630b1fe262d2b0d4303f4b0->leave($__internal_f4c16da847540c34ffc26b644f8d3ca00088cbff8630b1fe262d2b0d4303f4b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5c04abdce64cf3b63a97c68fd545afa48587ca99d954aef144c911d12d8c44a = $this->env->getExtension("native_profiler");
        $__internal_f5c04abdce64cf3b63a97c68fd545afa48587ca99d954aef144c911d12d8c44a->enter($__internal_f5c04abdce64cf3b63a97c68fd545afa48587ca99d954aef144c911d12d8c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_f5c04abdce64cf3b63a97c68fd545afa48587ca99d954aef144c911d12d8c44a->leave($__internal_f5c04abdce64cf3b63a97c68fd545afa48587ca99d954aef144c911d12d8c44a_prof);

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

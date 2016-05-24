<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_46b7b1d480bc29d5f31c0de7215c86ffe64bcc59fd2f4f5d9449609671e604e6 extends Twig_Template
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
        $__internal_fee17e69eafa7877597ac80a449cb1a4cb71303225d2e59e6861080922d4fae7 = $this->env->getExtension("native_profiler");
        $__internal_fee17e69eafa7877597ac80a449cb1a4cb71303225d2e59e6861080922d4fae7->enter($__internal_fee17e69eafa7877597ac80a449cb1a4cb71303225d2e59e6861080922d4fae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee17e69eafa7877597ac80a449cb1a4cb71303225d2e59e6861080922d4fae7->leave($__internal_fee17e69eafa7877597ac80a449cb1a4cb71303225d2e59e6861080922d4fae7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d53986c7eb551dcb135cc00b4420522b2a902bd496ab6d25e89b69f303c67bbb = $this->env->getExtension("native_profiler");
        $__internal_d53986c7eb551dcb135cc00b4420522b2a902bd496ab6d25e89b69f303c67bbb->enter($__internal_d53986c7eb551dcb135cc00b4420522b2a902bd496ab6d25e89b69f303c67bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d53986c7eb551dcb135cc00b4420522b2a902bd496ab6d25e89b69f303c67bbb->leave($__internal_d53986c7eb551dcb135cc00b4420522b2a902bd496ab6d25e89b69f303c67bbb_prof);

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

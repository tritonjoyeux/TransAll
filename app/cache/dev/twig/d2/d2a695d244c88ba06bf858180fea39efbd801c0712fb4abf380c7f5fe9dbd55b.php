<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_54ad5d0005b8642e7c00a09203bed50b10b1d2e4421ba1dd6c5da1227323c500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_7db03441c2b657aca725547cfcaaa719f8332668b3ee9bc6ba43ab2e2214d0de = $this->env->getExtension("native_profiler");
        $__internal_7db03441c2b657aca725547cfcaaa719f8332668b3ee9bc6ba43ab2e2214d0de->enter($__internal_7db03441c2b657aca725547cfcaaa719f8332668b3ee9bc6ba43ab2e2214d0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db03441c2b657aca725547cfcaaa719f8332668b3ee9bc6ba43ab2e2214d0de->leave($__internal_7db03441c2b657aca725547cfcaaa719f8332668b3ee9bc6ba43ab2e2214d0de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d58613fc017ed02f653144b4e07384329e11b1f2395cda549ddda9ab87aa8f2 = $this->env->getExtension("native_profiler");
        $__internal_7d58613fc017ed02f653144b4e07384329e11b1f2395cda549ddda9ab87aa8f2->enter($__internal_7d58613fc017ed02f653144b4e07384329e11b1f2395cda549ddda9ab87aa8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_7d58613fc017ed02f653144b4e07384329e11b1f2395cda549ddda9ab87aa8f2->leave($__internal_7d58613fc017ed02f653144b4e07384329e11b1f2395cda549ddda9ab87aa8f2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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

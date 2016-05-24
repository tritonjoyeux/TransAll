<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_a1a4ddad89b60de575b77c0ce0688ed48fa0d70deeaf9a4012a30f90f1120209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/show.html.twig", 1);
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
        $__internal_c0106a71141c59674f5faa0e8a257e4de46800b0fe48f8a1df2a4641838c15da = $this->env->getExtension("native_profiler");
        $__internal_c0106a71141c59674f5faa0e8a257e4de46800b0fe48f8a1df2a4641838c15da->enter($__internal_c0106a71141c59674f5faa0e8a257e4de46800b0fe48f8a1df2a4641838c15da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0106a71141c59674f5faa0e8a257e4de46800b0fe48f8a1df2a4641838c15da->leave($__internal_c0106a71141c59674f5faa0e8a257e4de46800b0fe48f8a1df2a4641838c15da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_161eb71cbc35baa8f3fecd05e2f7195c1428366e7599e9b950f66286881da70f = $this->env->getExtension("native_profiler");
        $__internal_161eb71cbc35baa8f3fecd05e2f7195c1428366e7599e9b950f66286881da70f->enter($__internal_161eb71cbc35baa8f3fecd05e2f7195c1428366e7599e9b950f66286881da70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_161eb71cbc35baa8f3fecd05e2f7195c1428366e7599e9b950f66286881da70f->leave($__internal_161eb71cbc35baa8f3fecd05e2f7195c1428366e7599e9b950f66286881da70f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @User/Group/edit.html.twig */
class __TwigTemplate_8c4eda180bfa0e8ef97341adc8d776b30bccac2073458ec500f43050068853f3 extends Twig_Template
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
        $__internal_f6ae0014d394461aaea4e3d3255bd1609852dd1f27585919f1872b7ccafe1667 = $this->env->getExtension("native_profiler");
        $__internal_f6ae0014d394461aaea4e3d3255bd1609852dd1f27585919f1872b7ccafe1667->enter($__internal_f6ae0014d394461aaea4e3d3255bd1609852dd1f27585919f1872b7ccafe1667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ae0014d394461aaea4e3d3255bd1609852dd1f27585919f1872b7ccafe1667->leave($__internal_f6ae0014d394461aaea4e3d3255bd1609852dd1f27585919f1872b7ccafe1667_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2697ee7489bee67478392c6fbfa2d4c25a06c856cd8f54273862e5d302b400b1 = $this->env->getExtension("native_profiler");
        $__internal_2697ee7489bee67478392c6fbfa2d4c25a06c856cd8f54273862e5d302b400b1->enter($__internal_2697ee7489bee67478392c6fbfa2d4c25a06c856cd8f54273862e5d302b400b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@User/Group/edit.html.twig", 4)->display($context);
        
        $__internal_2697ee7489bee67478392c6fbfa2d4c25a06c856cd8f54273862e5d302b400b1->leave($__internal_2697ee7489bee67478392c6fbfa2d4c25a06c856cd8f54273862e5d302b400b1_prof);

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

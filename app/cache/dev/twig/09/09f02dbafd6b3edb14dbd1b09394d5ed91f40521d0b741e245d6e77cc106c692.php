<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_e370da6e8a16296b26bfbf9b41b575fa1b20ba980704971c4c4d13bc7de0968e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_64d3446afb2d0386aa2909bf3700afa80dacc7273167e0894d9df9f697dd0e19 = $this->env->getExtension("native_profiler");
        $__internal_64d3446afb2d0386aa2909bf3700afa80dacc7273167e0894d9df9f697dd0e19->enter($__internal_64d3446afb2d0386aa2909bf3700afa80dacc7273167e0894d9df9f697dd0e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d3446afb2d0386aa2909bf3700afa80dacc7273167e0894d9df9f697dd0e19->leave($__internal_64d3446afb2d0386aa2909bf3700afa80dacc7273167e0894d9df9f697dd0e19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2618756c56fad84a2c4d37e403f8719d5c730e34590f1964b579034868d0e500 = $this->env->getExtension("native_profiler");
        $__internal_2618756c56fad84a2c4d37e403f8719d5c730e34590f1964b579034868d0e500->enter($__internal_2618756c56fad84a2c4d37e403f8719d5c730e34590f1964b579034868d0e500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2618756c56fad84a2c4d37e403f8719d5c730e34590f1964b579034868d0e500->leave($__internal_2618756c56fad84a2c4d37e403f8719d5c730e34590f1964b579034868d0e500_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

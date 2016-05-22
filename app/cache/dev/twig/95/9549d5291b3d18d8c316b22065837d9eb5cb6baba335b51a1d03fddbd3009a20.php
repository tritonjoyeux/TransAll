<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_9eb718ff5c8e82dd87aeecd20d157e5be5b31d292f694ae432e5f2ed9494d0c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_4e71fceed68e0c44670fab15b69673c8a87b0ffd1f3a2757b8d50266f77f94e5 = $this->env->getExtension("native_profiler");
        $__internal_4e71fceed68e0c44670fab15b69673c8a87b0ffd1f3a2757b8d50266f77f94e5->enter($__internal_4e71fceed68e0c44670fab15b69673c8a87b0ffd1f3a2757b8d50266f77f94e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e71fceed68e0c44670fab15b69673c8a87b0ffd1f3a2757b8d50266f77f94e5->leave($__internal_4e71fceed68e0c44670fab15b69673c8a87b0ffd1f3a2757b8d50266f77f94e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1254e66f02f351bb9609d95b449e58f22a943f92d6a53bcaff53a89732970998 = $this->env->getExtension("native_profiler");
        $__internal_1254e66f02f351bb9609d95b449e58f22a943f92d6a53bcaff53a89732970998->enter($__internal_1254e66f02f351bb9609d95b449e58f22a943f92d6a53bcaff53a89732970998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1254e66f02f351bb9609d95b449e58f22a943f92d6a53bcaff53a89732970998->leave($__internal_1254e66f02f351bb9609d95b449e58f22a943f92d6a53bcaff53a89732970998_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

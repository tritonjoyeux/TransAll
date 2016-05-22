<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_c4169817e91bafdb4718ce4406524dc9941cc584756c086d2a85e966704623c4 extends Twig_Template
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
        $__internal_93734b152c8bfc4ac5d10b8d82ad5bfff240bf552b2a9ed5333bea8f1ad4278d = $this->env->getExtension("native_profiler");
        $__internal_93734b152c8bfc4ac5d10b8d82ad5bfff240bf552b2a9ed5333bea8f1ad4278d->enter($__internal_93734b152c8bfc4ac5d10b8d82ad5bfff240bf552b2a9ed5333bea8f1ad4278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93734b152c8bfc4ac5d10b8d82ad5bfff240bf552b2a9ed5333bea8f1ad4278d->leave($__internal_93734b152c8bfc4ac5d10b8d82ad5bfff240bf552b2a9ed5333bea8f1ad4278d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c36e9e8c49f4321a2a86077d7a9c2d4fd45bebdce2bb3abc6a4c5f3b8f40a2fb = $this->env->getExtension("native_profiler");
        $__internal_c36e9e8c49f4321a2a86077d7a9c2d4fd45bebdce2bb3abc6a4c5f3b8f40a2fb->enter($__internal_c36e9e8c49f4321a2a86077d7a9c2d4fd45bebdce2bb3abc6a4c5f3b8f40a2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c36e9e8c49f4321a2a86077d7a9c2d4fd45bebdce2bb3abc6a4c5f3b8f40a2fb->leave($__internal_c36e9e8c49f4321a2a86077d7a9c2d4fd45bebdce2bb3abc6a4c5f3b8f40a2fb_prof);

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

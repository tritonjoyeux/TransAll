<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_c2170e31c121f64944aad254fec691b4a0bba5b61f23edd8d1f27ca2ec1c3346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_042695752fbde005fbafd8f143389303963218b6bbae851f12080beea019f9d9 = $this->env->getExtension("native_profiler");
        $__internal_042695752fbde005fbafd8f143389303963218b6bbae851f12080beea019f9d9->enter($__internal_042695752fbde005fbafd8f143389303963218b6bbae851f12080beea019f9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042695752fbde005fbafd8f143389303963218b6bbae851f12080beea019f9d9->leave($__internal_042695752fbde005fbafd8f143389303963218b6bbae851f12080beea019f9d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f02e689aa59e8d28151b56734e15c60493d9afe43f5133fa6a5f56f0469f6b77 = $this->env->getExtension("native_profiler");
        $__internal_f02e689aa59e8d28151b56734e15c60493d9afe43f5133fa6a5f56f0469f6b77->enter($__internal_f02e689aa59e8d28151b56734e15c60493d9afe43f5133fa6a5f56f0469f6b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f02e689aa59e8d28151b56734e15c60493d9afe43f5133fa6a5f56f0469f6b77->leave($__internal_f02e689aa59e8d28151b56734e15c60493d9afe43f5133fa6a5f56f0469f6b77_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

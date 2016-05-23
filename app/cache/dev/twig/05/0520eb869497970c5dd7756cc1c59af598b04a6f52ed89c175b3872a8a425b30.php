<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a9bcd0e537356989978544d25542d5a2f5abba6c8d8523dd504eea28864681eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7641ab8a4613b8ce06270ae72f8b31c271599ea3808fe134c4bca0afabc64371 = $this->env->getExtension("native_profiler");
        $__internal_7641ab8a4613b8ce06270ae72f8b31c271599ea3808fe134c4bca0afabc64371->enter($__internal_7641ab8a4613b8ce06270ae72f8b31c271599ea3808fe134c4bca0afabc64371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7641ab8a4613b8ce06270ae72f8b31c271599ea3808fe134c4bca0afabc64371->leave($__internal_7641ab8a4613b8ce06270ae72f8b31c271599ea3808fe134c4bca0afabc64371_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfeb396e4e7843b70d61245d61b6918ece62bfef5e5f56af19ec05106a9b371b = $this->env->getExtension("native_profiler");
        $__internal_cfeb396e4e7843b70d61245d61b6918ece62bfef5e5f56af19ec05106a9b371b->enter($__internal_cfeb396e4e7843b70d61245d61b6918ece62bfef5e5f56af19ec05106a9b371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cfeb396e4e7843b70d61245d61b6918ece62bfef5e5f56af19ec05106a9b371b->leave($__internal_cfeb396e4e7843b70d61245d61b6918ece62bfef5e5f56af19ec05106a9b371b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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

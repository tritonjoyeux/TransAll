<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_85f73b891233217c390c8df7ac9d4ad479b1da281e42bdcd8fd00ba80b4c87d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/register.html.twig", 1);
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
        $__internal_33c859824e83e428f41c5341a1482efaeb721b907577e5e5d2179a0e8f631fd9 = $this->env->getExtension("native_profiler");
        $__internal_33c859824e83e428f41c5341a1482efaeb721b907577e5e5d2179a0e8f631fd9->enter($__internal_33c859824e83e428f41c5341a1482efaeb721b907577e5e5d2179a0e8f631fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c859824e83e428f41c5341a1482efaeb721b907577e5e5d2179a0e8f631fd9->leave($__internal_33c859824e83e428f41c5341a1482efaeb721b907577e5e5d2179a0e8f631fd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afa49d4c354ef451baf6b0af88ecf43f0512fda8713446c6746af671f36f4741 = $this->env->getExtension("native_profiler");
        $__internal_afa49d4c354ef451baf6b0af88ecf43f0512fda8713446c6746af671f36f4741->enter($__internal_afa49d4c354ef451baf6b0af88ecf43f0512fda8713446c6746af671f36f4741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_afa49d4c354ef451baf6b0af88ecf43f0512fda8713446c6746af671f36f4741->leave($__internal_afa49d4c354ef451baf6b0af88ecf43f0512fda8713446c6746af671f36f4741_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
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

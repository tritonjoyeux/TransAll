<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_884a93b88186d5e64535de465404fec637f1e10948b285dcddd07e6b8a12b011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ea6b9ac1b1a58493df17560cef76ad0b0f7a71051200889039c7a725dccc2350 = $this->env->getExtension("native_profiler");
        $__internal_ea6b9ac1b1a58493df17560cef76ad0b0f7a71051200889039c7a725dccc2350->enter($__internal_ea6b9ac1b1a58493df17560cef76ad0b0f7a71051200889039c7a725dccc2350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6b9ac1b1a58493df17560cef76ad0b0f7a71051200889039c7a725dccc2350->leave($__internal_ea6b9ac1b1a58493df17560cef76ad0b0f7a71051200889039c7a725dccc2350_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60436cfc4f60c57f4b5b39d1bd2eddd3fc6b7ba7d3c9c589c507638bf23efc76 = $this->env->getExtension("native_profiler");
        $__internal_60436cfc4f60c57f4b5b39d1bd2eddd3fc6b7ba7d3c9c589c507638bf23efc76->enter($__internal_60436cfc4f60c57f4b5b39d1bd2eddd3fc6b7ba7d3c9c589c507638bf23efc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_60436cfc4f60c57f4b5b39d1bd2eddd3fc6b7ba7d3c9c589c507638bf23efc76->leave($__internal_60436cfc4f60c57f4b5b39d1bd2eddd3fc6b7ba7d3c9c589c507638bf23efc76_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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

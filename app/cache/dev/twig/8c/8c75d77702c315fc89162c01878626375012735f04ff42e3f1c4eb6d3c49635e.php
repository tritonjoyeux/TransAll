<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_422c3300dd8f4a163d071feb2ec3a98f278631539b5514f082660b904f272458 extends Twig_Template
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
        $__internal_6da846379dd80f9b3104d8e2c6bd3209b25c8dead0ac617cfa59532431d8a560 = $this->env->getExtension("native_profiler");
        $__internal_6da846379dd80f9b3104d8e2c6bd3209b25c8dead0ac617cfa59532431d8a560->enter($__internal_6da846379dd80f9b3104d8e2c6bd3209b25c8dead0ac617cfa59532431d8a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da846379dd80f9b3104d8e2c6bd3209b25c8dead0ac617cfa59532431d8a560->leave($__internal_6da846379dd80f9b3104d8e2c6bd3209b25c8dead0ac617cfa59532431d8a560_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9eb8a8a148f35b2a6ce125ddc139300473121dbb28510a2fd000ac31cabe4873 = $this->env->getExtension("native_profiler");
        $__internal_9eb8a8a148f35b2a6ce125ddc139300473121dbb28510a2fd000ac31cabe4873->enter($__internal_9eb8a8a148f35b2a6ce125ddc139300473121dbb28510a2fd000ac31cabe4873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_9eb8a8a148f35b2a6ce125ddc139300473121dbb28510a2fd000ac31cabe4873->leave($__internal_9eb8a8a148f35b2a6ce125ddc139300473121dbb28510a2fd000ac31cabe4873_prof);

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

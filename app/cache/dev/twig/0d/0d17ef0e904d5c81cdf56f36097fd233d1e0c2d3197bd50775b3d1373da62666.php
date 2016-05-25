<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_598b016689865821036a209d497e678b55182b5473d818d8f583f4c589270201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_027803c7a6980dd484bdd6ade2cd4e1afd9e169ff0142f21d19dd14b579dcc1b = $this->env->getExtension("native_profiler");
        $__internal_027803c7a6980dd484bdd6ade2cd4e1afd9e169ff0142f21d19dd14b579dcc1b->enter($__internal_027803c7a6980dd484bdd6ade2cd4e1afd9e169ff0142f21d19dd14b579dcc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027803c7a6980dd484bdd6ade2cd4e1afd9e169ff0142f21d19dd14b579dcc1b->leave($__internal_027803c7a6980dd484bdd6ade2cd4e1afd9e169ff0142f21d19dd14b579dcc1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24e9190af03803192735536d54d75ffc213ba6498081ae1e31a4cc28bbc57186 = $this->env->getExtension("native_profiler");
        $__internal_24e9190af03803192735536d54d75ffc213ba6498081ae1e31a4cc28bbc57186->enter($__internal_24e9190af03803192735536d54d75ffc213ba6498081ae1e31a4cc28bbc57186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_24e9190af03803192735536d54d75ffc213ba6498081ae1e31a4cc28bbc57186->leave($__internal_24e9190af03803192735536d54d75ffc213ba6498081ae1e31a4cc28bbc57186_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_abb6f3a86ff3feab086571f4b27663416faa7bc770ac775e7d7485e6a00c2281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_691be3d6e2a64feca30ff96adea05eefc0c7b95334bb7abb2529ad46d4b17a35 = $this->env->getExtension("native_profiler");
        $__internal_691be3d6e2a64feca30ff96adea05eefc0c7b95334bb7abb2529ad46d4b17a35->enter($__internal_691be3d6e2a64feca30ff96adea05eefc0c7b95334bb7abb2529ad46d4b17a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691be3d6e2a64feca30ff96adea05eefc0c7b95334bb7abb2529ad46d4b17a35->leave($__internal_691be3d6e2a64feca30ff96adea05eefc0c7b95334bb7abb2529ad46d4b17a35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f3f7cad3b566e7564200291f4f319a294e1a053eb810b9f7437337d069f44ae = $this->env->getExtension("native_profiler");
        $__internal_7f3f7cad3b566e7564200291f4f319a294e1a053eb810b9f7437337d069f44ae->enter($__internal_7f3f7cad3b566e7564200291f4f319a294e1a053eb810b9f7437337d069f44ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7f3f7cad3b566e7564200291f4f319a294e1a053eb810b9f7437337d069f44ae->leave($__internal_7f3f7cad3b566e7564200291f4f319a294e1a053eb810b9f7437337d069f44ae_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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

<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_eb226628459570eca6a30cc69b5efd529d56c15e42f3616a1333be9533a17cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_2e1329efab81b2ef2526f33bd557815d15acf666bac1c012704f3b1f3b6c061a = $this->env->getExtension("native_profiler");
        $__internal_2e1329efab81b2ef2526f33bd557815d15acf666bac1c012704f3b1f3b6c061a->enter($__internal_2e1329efab81b2ef2526f33bd557815d15acf666bac1c012704f3b1f3b6c061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1329efab81b2ef2526f33bd557815d15acf666bac1c012704f3b1f3b6c061a->leave($__internal_2e1329efab81b2ef2526f33bd557815d15acf666bac1c012704f3b1f3b6c061a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aabca2c8b76bbacd19760a436e90492e9c1e25312b8773315c96ba5180f85875 = $this->env->getExtension("native_profiler");
        $__internal_aabca2c8b76bbacd19760a436e90492e9c1e25312b8773315c96ba5180f85875->enter($__internal_aabca2c8b76bbacd19760a436e90492e9c1e25312b8773315c96ba5180f85875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_aabca2c8b76bbacd19760a436e90492e9c1e25312b8773315c96ba5180f85875->leave($__internal_aabca2c8b76bbacd19760a436e90492e9c1e25312b8773315c96ba5180f85875_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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

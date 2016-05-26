<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_dcae5fcd885dadb0a7880a0601099d50448457bbbc81a173f92c1b050dbe44ac extends Twig_Template
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
        $__internal_744fa9cb29c055adad35808996e63e325a1c94cee9c72b8b4e65e67af6dbc5de = $this->env->getExtension("native_profiler");
        $__internal_744fa9cb29c055adad35808996e63e325a1c94cee9c72b8b4e65e67af6dbc5de->enter($__internal_744fa9cb29c055adad35808996e63e325a1c94cee9c72b8b4e65e67af6dbc5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_744fa9cb29c055adad35808996e63e325a1c94cee9c72b8b4e65e67af6dbc5de->leave($__internal_744fa9cb29c055adad35808996e63e325a1c94cee9c72b8b4e65e67af6dbc5de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_026daf5f145cd79a45564572513d50780af49729578bc6a77bd6a2ee3adbe1ac = $this->env->getExtension("native_profiler");
        $__internal_026daf5f145cd79a45564572513d50780af49729578bc6a77bd6a2ee3adbe1ac->enter($__internal_026daf5f145cd79a45564572513d50780af49729578bc6a77bd6a2ee3adbe1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_026daf5f145cd79a45564572513d50780af49729578bc6a77bd6a2ee3adbe1ac->leave($__internal_026daf5f145cd79a45564572513d50780af49729578bc6a77bd6a2ee3adbe1ac_prof);

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

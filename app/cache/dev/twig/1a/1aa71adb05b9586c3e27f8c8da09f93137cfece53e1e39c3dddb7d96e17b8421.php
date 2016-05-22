<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a516052df0c92a2a124858d8a86ab307f678318b7903e1e5fd46efc5af0d8e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_e5a1fff58a1bc312248c1cd1907c9b80a88f5459c77af242f788d1ac008f90c1 = $this->env->getExtension("native_profiler");
        $__internal_e5a1fff58a1bc312248c1cd1907c9b80a88f5459c77af242f788d1ac008f90c1->enter($__internal_e5a1fff58a1bc312248c1cd1907c9b80a88f5459c77af242f788d1ac008f90c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a1fff58a1bc312248c1cd1907c9b80a88f5459c77af242f788d1ac008f90c1->leave($__internal_e5a1fff58a1bc312248c1cd1907c9b80a88f5459c77af242f788d1ac008f90c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a387898b48ce3bc9bf584d92b500a62c0eab8332c659fd59ddf06e91a17de7b3 = $this->env->getExtension("native_profiler");
        $__internal_a387898b48ce3bc9bf584d92b500a62c0eab8332c659fd59ddf06e91a17de7b3->enter($__internal_a387898b48ce3bc9bf584d92b500a62c0eab8332c659fd59ddf06e91a17de7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_a387898b48ce3bc9bf584d92b500a62c0eab8332c659fd59ddf06e91a17de7b3->leave($__internal_a387898b48ce3bc9bf584d92b500a62c0eab8332c659fd59ddf06e91a17de7b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

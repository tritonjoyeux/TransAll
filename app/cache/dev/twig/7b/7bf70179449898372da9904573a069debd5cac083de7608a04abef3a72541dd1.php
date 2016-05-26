<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_9a602ec6a1a1a8d5ddada5579f2ade812f33d450d93f42a536be56547922f6df extends Twig_Template
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
        $__internal_3487a0978676b6fa2a1c8d61229c7a05042b8cef239a3a3074f047206b389c33 = $this->env->getExtension("native_profiler");
        $__internal_3487a0978676b6fa2a1c8d61229c7a05042b8cef239a3a3074f047206b389c33->enter($__internal_3487a0978676b6fa2a1c8d61229c7a05042b8cef239a3a3074f047206b389c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3487a0978676b6fa2a1c8d61229c7a05042b8cef239a3a3074f047206b389c33->leave($__internal_3487a0978676b6fa2a1c8d61229c7a05042b8cef239a3a3074f047206b389c33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0da38be62b57f028f31887ac3910d75cea8602be686ac1d247b8ead46c7b0af = $this->env->getExtension("native_profiler");
        $__internal_d0da38be62b57f028f31887ac3910d75cea8602be686ac1d247b8ead46c7b0af->enter($__internal_d0da38be62b57f028f31887ac3910d75cea8602be686ac1d247b8ead46c7b0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d0da38be62b57f028f31887ac3910d75cea8602be686ac1d247b8ead46c7b0af->leave($__internal_d0da38be62b57f028f31887ac3910d75cea8602be686ac1d247b8ead46c7b0af_prof);

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

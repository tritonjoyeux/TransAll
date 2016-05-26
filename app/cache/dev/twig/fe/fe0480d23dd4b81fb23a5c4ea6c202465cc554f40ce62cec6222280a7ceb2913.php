<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_83b00610853376fc8c08881bdc1d4213e767aa5e39b631dcad42862d178b1b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_3fa2622e66358686e7eb36c6b7bc437c6e8121c155bcf243f6c1c686eaeefb7b = $this->env->getExtension("native_profiler");
        $__internal_3fa2622e66358686e7eb36c6b7bc437c6e8121c155bcf243f6c1c686eaeefb7b->enter($__internal_3fa2622e66358686e7eb36c6b7bc437c6e8121c155bcf243f6c1c686eaeefb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa2622e66358686e7eb36c6b7bc437c6e8121c155bcf243f6c1c686eaeefb7b->leave($__internal_3fa2622e66358686e7eb36c6b7bc437c6e8121c155bcf243f6c1c686eaeefb7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_315d2734e7a5fba8772426da280f96881a900b94d98102648dc341ef6e2ef356 = $this->env->getExtension("native_profiler");
        $__internal_315d2734e7a5fba8772426da280f96881a900b94d98102648dc341ef6e2ef356->enter($__internal_315d2734e7a5fba8772426da280f96881a900b94d98102648dc341ef6e2ef356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_315d2734e7a5fba8772426da280f96881a900b94d98102648dc341ef6e2ef356->leave($__internal_315d2734e7a5fba8772426da280f96881a900b94d98102648dc341ef6e2ef356_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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

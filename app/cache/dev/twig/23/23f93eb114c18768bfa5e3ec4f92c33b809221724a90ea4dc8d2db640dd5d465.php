<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_897bde251d55a362af6019087a58cfb54183b1b2fe00983726f3604473cee722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_733e9161f88486bd2889ebecf0a1891a5d32b03cde97b0525dc8db6dcd8b7847 = $this->env->getExtension("native_profiler");
        $__internal_733e9161f88486bd2889ebecf0a1891a5d32b03cde97b0525dc8db6dcd8b7847->enter($__internal_733e9161f88486bd2889ebecf0a1891a5d32b03cde97b0525dc8db6dcd8b7847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733e9161f88486bd2889ebecf0a1891a5d32b03cde97b0525dc8db6dcd8b7847->leave($__internal_733e9161f88486bd2889ebecf0a1891a5d32b03cde97b0525dc8db6dcd8b7847_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ceb5c43940f5a7ea5a118132081ec2579c56e5860bd0848ca1dfb21abbb562b = $this->env->getExtension("native_profiler");
        $__internal_0ceb5c43940f5a7ea5a118132081ec2579c56e5860bd0848ca1dfb21abbb562b->enter($__internal_0ceb5c43940f5a7ea5a118132081ec2579c56e5860bd0848ca1dfb21abbb562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0ceb5c43940f5a7ea5a118132081ec2579c56e5860bd0848ca1dfb21abbb562b->leave($__internal_0ceb5c43940f5a7ea5a118132081ec2579c56e5860bd0848ca1dfb21abbb562b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_9eb718ff5c8e82dd87aeecd20d157e5be5b31d292f694ae432e5f2ed9494d0c9 extends Twig_Template
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
        $__internal_b3e33440ade705763e20a5b28010ed6aa3e33ce20031dbc088dc4f605e67bc5c = $this->env->getExtension("native_profiler");
        $__internal_b3e33440ade705763e20a5b28010ed6aa3e33ce20031dbc088dc4f605e67bc5c->enter($__internal_b3e33440ade705763e20a5b28010ed6aa3e33ce20031dbc088dc4f605e67bc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3e33440ade705763e20a5b28010ed6aa3e33ce20031dbc088dc4f605e67bc5c->leave($__internal_b3e33440ade705763e20a5b28010ed6aa3e33ce20031dbc088dc4f605e67bc5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_122b58b178fe0c78c35f6cfb2a37313ce29f75320c6db1ebe8a16c2b1a8c1043 = $this->env->getExtension("native_profiler");
        $__internal_122b58b178fe0c78c35f6cfb2a37313ce29f75320c6db1ebe8a16c2b1a8c1043->enter($__internal_122b58b178fe0c78c35f6cfb2a37313ce29f75320c6db1ebe8a16c2b1a8c1043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_122b58b178fe0c78c35f6cfb2a37313ce29f75320c6db1ebe8a16c2b1a8c1043->leave($__internal_122b58b178fe0c78c35f6cfb2a37313ce29f75320c6db1ebe8a16c2b1a8c1043_prof);

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

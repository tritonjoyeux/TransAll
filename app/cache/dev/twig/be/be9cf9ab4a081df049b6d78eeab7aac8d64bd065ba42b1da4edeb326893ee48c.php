<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_6e284d6f4e3f2ad17e68f095112250cc4432f7f20e64f98042eb2be307ffe33b extends Twig_Template
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
        $__internal_fd59722313776c098e547ae3642e298c9bf6377d64f0f75edc0d59250a93c64f = $this->env->getExtension("native_profiler");
        $__internal_fd59722313776c098e547ae3642e298c9bf6377d64f0f75edc0d59250a93c64f->enter($__internal_fd59722313776c098e547ae3642e298c9bf6377d64f0f75edc0d59250a93c64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd59722313776c098e547ae3642e298c9bf6377d64f0f75edc0d59250a93c64f->leave($__internal_fd59722313776c098e547ae3642e298c9bf6377d64f0f75edc0d59250a93c64f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21b2cca5c409dd9edc97ff4581528ba043f508dc6ceccc175330510c87f0f853 = $this->env->getExtension("native_profiler");
        $__internal_21b2cca5c409dd9edc97ff4581528ba043f508dc6ceccc175330510c87f0f853->enter($__internal_21b2cca5c409dd9edc97ff4581528ba043f508dc6ceccc175330510c87f0f853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_21b2cca5c409dd9edc97ff4581528ba043f508dc6ceccc175330510c87f0f853->leave($__internal_21b2cca5c409dd9edc97ff4581528ba043f508dc6ceccc175330510c87f0f853_prof);

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

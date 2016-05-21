<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_367dc0b9a8b901020519816d17d372cec5238d440bb36f8bdae7ede39a9f7182 extends Twig_Template
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
        $__internal_7b30217b0e7a79b5b12127e1d8121e235907df45bec41bf08846a0a147c2e351 = $this->env->getExtension("native_profiler");
        $__internal_7b30217b0e7a79b5b12127e1d8121e235907df45bec41bf08846a0a147c2e351->enter($__internal_7b30217b0e7a79b5b12127e1d8121e235907df45bec41bf08846a0a147c2e351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b30217b0e7a79b5b12127e1d8121e235907df45bec41bf08846a0a147c2e351->leave($__internal_7b30217b0e7a79b5b12127e1d8121e235907df45bec41bf08846a0a147c2e351_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05bd0889daa4f587a2b921678ae7ca0393e3f62e142a122279a312799d2fb20b = $this->env->getExtension("native_profiler");
        $__internal_05bd0889daa4f587a2b921678ae7ca0393e3f62e142a122279a312799d2fb20b->enter($__internal_05bd0889daa4f587a2b921678ae7ca0393e3f62e142a122279a312799d2fb20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_05bd0889daa4f587a2b921678ae7ca0393e3f62e142a122279a312799d2fb20b->leave($__internal_05bd0889daa4f587a2b921678ae7ca0393e3f62e142a122279a312799d2fb20b_prof);

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

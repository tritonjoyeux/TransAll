<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_fb6c9fc83498f518c68062bae7d241fd53a578a1a0d858247880e3449b65c24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_ad029f1afa8f1b8017000d97afaf01b8fdc176b2a7bb8d5e0f93e0da48c36f3a = $this->env->getExtension("native_profiler");
        $__internal_ad029f1afa8f1b8017000d97afaf01b8fdc176b2a7bb8d5e0f93e0da48c36f3a->enter($__internal_ad029f1afa8f1b8017000d97afaf01b8fdc176b2a7bb8d5e0f93e0da48c36f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad029f1afa8f1b8017000d97afaf01b8fdc176b2a7bb8d5e0f93e0da48c36f3a->leave($__internal_ad029f1afa8f1b8017000d97afaf01b8fdc176b2a7bb8d5e0f93e0da48c36f3a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde6ee0e8ce18f1ad57eafb1906fd1eb7ccf7a70aaa34aa1758e615534761297 = $this->env->getExtension("native_profiler");
        $__internal_fde6ee0e8ce18f1ad57eafb1906fd1eb7ccf7a70aaa34aa1758e615534761297->enter($__internal_fde6ee0e8ce18f1ad57eafb1906fd1eb7ccf7a70aaa34aa1758e615534761297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fde6ee0e8ce18f1ad57eafb1906fd1eb7ccf7a70aaa34aa1758e615534761297->leave($__internal_fde6ee0e8ce18f1ad57eafb1906fd1eb7ccf7a70aaa34aa1758e615534761297_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */

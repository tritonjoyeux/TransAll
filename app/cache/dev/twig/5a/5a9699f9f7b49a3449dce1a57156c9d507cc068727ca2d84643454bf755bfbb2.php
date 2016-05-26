<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e6faed210de42323ec81b23aae45af0c2b324e2129b50ed580c3118433da118c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_15816087bb89fdd9cf91611137b93bc1b9adde755738cfeb6998fac43aeeb642 = $this->env->getExtension("native_profiler");
        $__internal_15816087bb89fdd9cf91611137b93bc1b9adde755738cfeb6998fac43aeeb642->enter($__internal_15816087bb89fdd9cf91611137b93bc1b9adde755738cfeb6998fac43aeeb642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15816087bb89fdd9cf91611137b93bc1b9adde755738cfeb6998fac43aeeb642->leave($__internal_15816087bb89fdd9cf91611137b93bc1b9adde755738cfeb6998fac43aeeb642_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83dba0afef530d23fc6d96252421cb4d0869869f6b0db18f28655f9a904983f2 = $this->env->getExtension("native_profiler");
        $__internal_83dba0afef530d23fc6d96252421cb4d0869869f6b0db18f28655f9a904983f2->enter($__internal_83dba0afef530d23fc6d96252421cb4d0869869f6b0db18f28655f9a904983f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_83dba0afef530d23fc6d96252421cb4d0869869f6b0db18f28655f9a904983f2->leave($__internal_83dba0afef530d23fc6d96252421cb4d0869869f6b0db18f28655f9a904983f2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:confirmed.html.twig";
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

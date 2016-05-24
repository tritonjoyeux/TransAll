<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_66bedb49a22f6fee2aeb1dfbe85a419405d03a1e52dc8a8897d45030d1f28bcc extends Twig_Template
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
        $__internal_8234a3fbea9c3a9bfaf3ce4b9978612eeaa702653e0d6bd5cf12df3dfabf6164 = $this->env->getExtension("native_profiler");
        $__internal_8234a3fbea9c3a9bfaf3ce4b9978612eeaa702653e0d6bd5cf12df3dfabf6164->enter($__internal_8234a3fbea9c3a9bfaf3ce4b9978612eeaa702653e0d6bd5cf12df3dfabf6164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8234a3fbea9c3a9bfaf3ce4b9978612eeaa702653e0d6bd5cf12df3dfabf6164->leave($__internal_8234a3fbea9c3a9bfaf3ce4b9978612eeaa702653e0d6bd5cf12df3dfabf6164_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2036a01fb1bc8a37ec49a55ec5ff16034011aa1474588c34ab8c212605c82d21 = $this->env->getExtension("native_profiler");
        $__internal_2036a01fb1bc8a37ec49a55ec5ff16034011aa1474588c34ab8c212605c82d21->enter($__internal_2036a01fb1bc8a37ec49a55ec5ff16034011aa1474588c34ab8c212605c82d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2036a01fb1bc8a37ec49a55ec5ff16034011aa1474588c34ab8c212605c82d21->leave($__internal_2036a01fb1bc8a37ec49a55ec5ff16034011aa1474588c34ab8c212605c82d21_prof);

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

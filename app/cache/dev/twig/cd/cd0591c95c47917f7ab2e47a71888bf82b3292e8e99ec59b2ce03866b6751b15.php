<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_fa08aeb51659cd5fc28933acd4c64a5b51d8c88aab5b9e909fad4672f411619d extends Twig_Template
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
        $__internal_05f9d46334ac0aeffcc53ecf4ee0be977123acd7c1414a616125abb58c595faa = $this->env->getExtension("native_profiler");
        $__internal_05f9d46334ac0aeffcc53ecf4ee0be977123acd7c1414a616125abb58c595faa->enter($__internal_05f9d46334ac0aeffcc53ecf4ee0be977123acd7c1414a616125abb58c595faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f9d46334ac0aeffcc53ecf4ee0be977123acd7c1414a616125abb58c595faa->leave($__internal_05f9d46334ac0aeffcc53ecf4ee0be977123acd7c1414a616125abb58c595faa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2163f772ff806649a8b5c2e0e09228168697e3876646dbbfe3679f7f81a9bcf1 = $this->env->getExtension("native_profiler");
        $__internal_2163f772ff806649a8b5c2e0e09228168697e3876646dbbfe3679f7f81a9bcf1->enter($__internal_2163f772ff806649a8b5c2e0e09228168697e3876646dbbfe3679f7f81a9bcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2163f772ff806649a8b5c2e0e09228168697e3876646dbbfe3679f7f81a9bcf1->leave($__internal_2163f772ff806649a8b5c2e0e09228168697e3876646dbbfe3679f7f81a9bcf1_prof);

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

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
        $__internal_e8841d3dd353d7623d7ddb1eb25b8fde0b4233ab2830b91124822690d08dd9bf = $this->env->getExtension("native_profiler");
        $__internal_e8841d3dd353d7623d7ddb1eb25b8fde0b4233ab2830b91124822690d08dd9bf->enter($__internal_e8841d3dd353d7623d7ddb1eb25b8fde0b4233ab2830b91124822690d08dd9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8841d3dd353d7623d7ddb1eb25b8fde0b4233ab2830b91124822690d08dd9bf->leave($__internal_e8841d3dd353d7623d7ddb1eb25b8fde0b4233ab2830b91124822690d08dd9bf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6aeb5e07dbe61421ef91dfd660aaf2a637696788c9a9116522b7c4885076872 = $this->env->getExtension("native_profiler");
        $__internal_f6aeb5e07dbe61421ef91dfd660aaf2a637696788c9a9116522b7c4885076872->enter($__internal_f6aeb5e07dbe61421ef91dfd660aaf2a637696788c9a9116522b7c4885076872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f6aeb5e07dbe61421ef91dfd660aaf2a637696788c9a9116522b7c4885076872->leave($__internal_f6aeb5e07dbe61421ef91dfd660aaf2a637696788c9a9116522b7c4885076872_prof);

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

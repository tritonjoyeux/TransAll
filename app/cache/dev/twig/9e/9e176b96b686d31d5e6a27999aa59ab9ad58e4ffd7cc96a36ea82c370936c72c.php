<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_a0b55f03d6f98f23125ff6e9ed8e9d54941de75cb006aa914cb85007dce801be extends Twig_Template
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
        $__internal_0f10c0891b3850408ab26dda015d28c9bfbe8a20afe63333a06ed73b24d6e4f6 = $this->env->getExtension("native_profiler");
        $__internal_0f10c0891b3850408ab26dda015d28c9bfbe8a20afe63333a06ed73b24d6e4f6->enter($__internal_0f10c0891b3850408ab26dda015d28c9bfbe8a20afe63333a06ed73b24d6e4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f10c0891b3850408ab26dda015d28c9bfbe8a20afe63333a06ed73b24d6e4f6->leave($__internal_0f10c0891b3850408ab26dda015d28c9bfbe8a20afe63333a06ed73b24d6e4f6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d535d27c5f9a47f3c492511adbec05ad9979434c171d0fb7c766ab31ae1545cf = $this->env->getExtension("native_profiler");
        $__internal_d535d27c5f9a47f3c492511adbec05ad9979434c171d0fb7c766ab31ae1545cf->enter($__internal_d535d27c5f9a47f3c492511adbec05ad9979434c171d0fb7c766ab31ae1545cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d535d27c5f9a47f3c492511adbec05ad9979434c171d0fb7c766ab31ae1545cf->leave($__internal_d535d27c5f9a47f3c492511adbec05ad9979434c171d0fb7c766ab31ae1545cf_prof);

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

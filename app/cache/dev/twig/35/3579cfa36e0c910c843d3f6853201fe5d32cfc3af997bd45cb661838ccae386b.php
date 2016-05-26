<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_58bac13e1b8a0f783605c2cad6d78da64223242e4b5ffcd853d31b358cf499ca extends Twig_Template
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
        $__internal_0bbd085b4ce434bedb2bc80ef98f2defac64d78a5cea0dcd17c2c4aef853576d = $this->env->getExtension("native_profiler");
        $__internal_0bbd085b4ce434bedb2bc80ef98f2defac64d78a5cea0dcd17c2c4aef853576d->enter($__internal_0bbd085b4ce434bedb2bc80ef98f2defac64d78a5cea0dcd17c2c4aef853576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bbd085b4ce434bedb2bc80ef98f2defac64d78a5cea0dcd17c2c4aef853576d->leave($__internal_0bbd085b4ce434bedb2bc80ef98f2defac64d78a5cea0dcd17c2c4aef853576d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e9bbdc871e1a0a72be3e1dcd1a9bd361eded8216335be8a0fc3e87285ed2b4b = $this->env->getExtension("native_profiler");
        $__internal_4e9bbdc871e1a0a72be3e1dcd1a9bd361eded8216335be8a0fc3e87285ed2b4b->enter($__internal_4e9bbdc871e1a0a72be3e1dcd1a9bd361eded8216335be8a0fc3e87285ed2b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4e9bbdc871e1a0a72be3e1dcd1a9bd361eded8216335be8a0fc3e87285ed2b4b->leave($__internal_4e9bbdc871e1a0a72be3e1dcd1a9bd361eded8216335be8a0fc3e87285ed2b4b_prof);

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

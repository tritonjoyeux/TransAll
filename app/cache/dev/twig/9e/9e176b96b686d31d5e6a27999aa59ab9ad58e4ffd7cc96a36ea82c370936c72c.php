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
        $__internal_bc91bb6ae68c92b46fcd09a30ff7d246cd11b6a737dec1621cd06cfda0c6ee60 = $this->env->getExtension("native_profiler");
        $__internal_bc91bb6ae68c92b46fcd09a30ff7d246cd11b6a737dec1621cd06cfda0c6ee60->enter($__internal_bc91bb6ae68c92b46fcd09a30ff7d246cd11b6a737dec1621cd06cfda0c6ee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc91bb6ae68c92b46fcd09a30ff7d246cd11b6a737dec1621cd06cfda0c6ee60->leave($__internal_bc91bb6ae68c92b46fcd09a30ff7d246cd11b6a737dec1621cd06cfda0c6ee60_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ce36fca5ba37ecaefa843acb9ab3957afb6a92ce314ef3f1e80d627449c318c = $this->env->getExtension("native_profiler");
        $__internal_4ce36fca5ba37ecaefa843acb9ab3957afb6a92ce314ef3f1e80d627449c318c->enter($__internal_4ce36fca5ba37ecaefa843acb9ab3957afb6a92ce314ef3f1e80d627449c318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4ce36fca5ba37ecaefa843acb9ab3957afb6a92ce314ef3f1e80d627449c318c->leave($__internal_4ce36fca5ba37ecaefa843acb9ab3957afb6a92ce314ef3f1e80d627449c318c_prof);

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

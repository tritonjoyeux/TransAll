<?php

/* @User/Registration/confirmed.html.twig */
class __TwigTemplate_451a40ea86b3d7f52955e1cec35a2595fb72cbf1f64603698e7a36e651f13146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/confirmed.html.twig", 1);
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
        $__internal_f46090c0f4c18eb69890c06a136a100607ee23b31865511d1605d3dfb026966b = $this->env->getExtension("native_profiler");
        $__internal_f46090c0f4c18eb69890c06a136a100607ee23b31865511d1605d3dfb026966b->enter($__internal_f46090c0f4c18eb69890c06a136a100607ee23b31865511d1605d3dfb026966b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46090c0f4c18eb69890c06a136a100607ee23b31865511d1605d3dfb026966b->leave($__internal_f46090c0f4c18eb69890c06a136a100607ee23b31865511d1605d3dfb026966b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0f1d6564d5d5a99bcd8429342bd784a24565c726241af2f3a646b389745ff0f = $this->env->getExtension("native_profiler");
        $__internal_a0f1d6564d5d5a99bcd8429342bd784a24565c726241af2f3a646b389745ff0f->enter($__internal_a0f1d6564d5d5a99bcd8429342bd784a24565c726241af2f3a646b389745ff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a0f1d6564d5d5a99bcd8429342bd784a24565c726241af2f3a646b389745ff0f->leave($__internal_a0f1d6564d5d5a99bcd8429342bd784a24565c726241af2f3a646b389745ff0f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/confirmed.html.twig";
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

<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7c73d1a8407710e6eae7a9d60e1cd4962286419c86f48d4f1ed97c87bbdf9518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_fb164fda5688056c01d138e930ffcf39e57db15327c83939826982aa8ed82cd2 = $this->env->getExtension("native_profiler");
        $__internal_fb164fda5688056c01d138e930ffcf39e57db15327c83939826982aa8ed82cd2->enter($__internal_fb164fda5688056c01d138e930ffcf39e57db15327c83939826982aa8ed82cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb164fda5688056c01d138e930ffcf39e57db15327c83939826982aa8ed82cd2->leave($__internal_fb164fda5688056c01d138e930ffcf39e57db15327c83939826982aa8ed82cd2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_557c28824f031d96e8812e629ae84b438bf35f46c4c348ad5707aaa735155d54 = $this->env->getExtension("native_profiler");
        $__internal_557c28824f031d96e8812e629ae84b438bf35f46c4c348ad5707aaa735155d54->enter($__internal_557c28824f031d96e8812e629ae84b438bf35f46c4c348ad5707aaa735155d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_557c28824f031d96e8812e629ae84b438bf35f46c4c348ad5707aaa735155d54->leave($__internal_557c28824f031d96e8812e629ae84b438bf35f46c4c348ad5707aaa735155d54_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

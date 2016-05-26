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
        $__internal_b96f69e65426d91f01c7a9cfbdafe0a4c18a013f994c266279597770aaa54f67 = $this->env->getExtension("native_profiler");
        $__internal_b96f69e65426d91f01c7a9cfbdafe0a4c18a013f994c266279597770aaa54f67->enter($__internal_b96f69e65426d91f01c7a9cfbdafe0a4c18a013f994c266279597770aaa54f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96f69e65426d91f01c7a9cfbdafe0a4c18a013f994c266279597770aaa54f67->leave($__internal_b96f69e65426d91f01c7a9cfbdafe0a4c18a013f994c266279597770aaa54f67_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_538f9576942b0cbcd8f8f52bc1bba61dff11ee537c9a98ffd0cb3e29b7af0508 = $this->env->getExtension("native_profiler");
        $__internal_538f9576942b0cbcd8f8f52bc1bba61dff11ee537c9a98ffd0cb3e29b7af0508->enter($__internal_538f9576942b0cbcd8f8f52bc1bba61dff11ee537c9a98ffd0cb3e29b7af0508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_538f9576942b0cbcd8f8f52bc1bba61dff11ee537c9a98ffd0cb3e29b7af0508->leave($__internal_538f9576942b0cbcd8f8f52bc1bba61dff11ee537c9a98ffd0cb3e29b7af0508_prof);

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

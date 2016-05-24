<?php

/* @User/Registration/checkEmail.html.twig */
class __TwigTemplate_d2cd6df067c41089110d42742be1c2be0882bcd9097cfbed3ee967db4086baa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/checkEmail.html.twig", 1);
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
        $__internal_e4438fee1f03869bef49886b02a59ea703f8f2b81801377ac116aead66e98551 = $this->env->getExtension("native_profiler");
        $__internal_e4438fee1f03869bef49886b02a59ea703f8f2b81801377ac116aead66e98551->enter($__internal_e4438fee1f03869bef49886b02a59ea703f8f2b81801377ac116aead66e98551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4438fee1f03869bef49886b02a59ea703f8f2b81801377ac116aead66e98551->leave($__internal_e4438fee1f03869bef49886b02a59ea703f8f2b81801377ac116aead66e98551_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1c1d39a9121abe0d9dc9a9e6cab3df5c71747227ce31f09a888e09494807c99 = $this->env->getExtension("native_profiler");
        $__internal_f1c1d39a9121abe0d9dc9a9e6cab3df5c71747227ce31f09a888e09494807c99->enter($__internal_f1c1d39a9121abe0d9dc9a9e6cab3df5c71747227ce31f09a888e09494807c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f1c1d39a9121abe0d9dc9a9e6cab3df5c71747227ce31f09a888e09494807c99->leave($__internal_f1c1d39a9121abe0d9dc9a9e6cab3df5c71747227ce31f09a888e09494807c99_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/checkEmail.html.twig";
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

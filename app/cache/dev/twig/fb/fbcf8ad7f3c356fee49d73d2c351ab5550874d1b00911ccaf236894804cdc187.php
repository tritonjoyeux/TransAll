<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_53d9b1a2cbde73fa51fdf79b47625e2a0761a36bf88b194040e130a9e88157a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_947d74f3b959b1d930a44c218a6892d570f82df9b6b20b16565d86ebab2fbcde = $this->env->getExtension("native_profiler");
        $__internal_947d74f3b959b1d930a44c218a6892d570f82df9b6b20b16565d86ebab2fbcde->enter($__internal_947d74f3b959b1d930a44c218a6892d570f82df9b6b20b16565d86ebab2fbcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_947d74f3b959b1d930a44c218a6892d570f82df9b6b20b16565d86ebab2fbcde->leave($__internal_947d74f3b959b1d930a44c218a6892d570f82df9b6b20b16565d86ebab2fbcde_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92f406c6ce8c6d99d14ada10ae7531883a2dcb82be5f24cddb4de4c381d4d81d = $this->env->getExtension("native_profiler");
        $__internal_92f406c6ce8c6d99d14ada10ae7531883a2dcb82be5f24cddb4de4c381d4d81d->enter($__internal_92f406c6ce8c6d99d14ada10ae7531883a2dcb82be5f24cddb4de4c381d4d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Nom utilisateur\" required=\"required\" />

    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\"  required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
<br>
";
        
        $__internal_92f406c6ce8c6d99d14ada10ae7531883a2dcb82be5f24cddb4de4c381d4d81d->leave($__internal_92f406c6ce8c6d99d14ada10ae7531883a2dcb82be5f24cddb4de4c381d4d81d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  60 => 13,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" placeholder="Nom utilisateur" required="required" />*/
/* */
/*     <input type="password" id="password" name="_password" placeholder="Mot de passe"  required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* <br>*/
/* {% endblock fos_user_content %}*/
/* */

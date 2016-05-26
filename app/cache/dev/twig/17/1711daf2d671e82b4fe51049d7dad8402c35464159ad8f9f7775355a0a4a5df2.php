<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_2e53b2019b5e5fcc0b15391051687f5a3d7f5111f2869f328e013d9b55f8a42d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35d177cb743b51e53c9fca194d5ed24b15a7fc53246ecf145a3abce96f0dbb41 = $this->env->getExtension("native_profiler");
        $__internal_35d177cb743b51e53c9fca194d5ed24b15a7fc53246ecf145a3abce96f0dbb41->enter($__internal_35d177cb743b51e53c9fca194d5ed24b15a7fc53246ecf145a3abce96f0dbb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_35d177cb743b51e53c9fca194d5ed24b15a7fc53246ecf145a3abce96f0dbb41->leave($__internal_35d177cb743b51e53c9fca194d5ed24b15a7fc53246ecf145a3abce96f0dbb41_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */

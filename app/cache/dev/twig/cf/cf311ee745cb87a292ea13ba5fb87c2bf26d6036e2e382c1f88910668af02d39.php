<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_873c51273c1a0982b450268e7ecd520740cfbb424a74a857bc4a715470ebae9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_5b374a5c6dd8337b63c085ea5004586be435be5ae3292d42c9e753870ff4a24f = $this->env->getExtension("native_profiler");
        $__internal_5b374a5c6dd8337b63c085ea5004586be435be5ae3292d42c9e753870ff4a24f->enter($__internal_5b374a5c6dd8337b63c085ea5004586be435be5ae3292d42c9e753870ff4a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b374a5c6dd8337b63c085ea5004586be435be5ae3292d42c9e753870ff4a24f->leave($__internal_5b374a5c6dd8337b63c085ea5004586be435be5ae3292d42c9e753870ff4a24f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_517b27b0166023f31a4c897679fba34a96d947070d1c570bf09e5e29126cf395 = $this->env->getExtension("native_profiler");
        $__internal_517b27b0166023f31a4c897679fba34a96d947070d1c570bf09e5e29126cf395->enter($__internal_517b27b0166023f31a4c897679fba34a96d947070d1c570bf09e5e29126cf395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_517b27b0166023f31a4c897679fba34a96d947070d1c570bf09e5e29126cf395->leave($__internal_517b27b0166023f31a4c897679fba34a96d947070d1c570bf09e5e29126cf395_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
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

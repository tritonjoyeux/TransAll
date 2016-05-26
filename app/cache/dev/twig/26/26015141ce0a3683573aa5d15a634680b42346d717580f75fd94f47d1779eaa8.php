<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_61d0ef2af748d3f2ae195f66f097e421d92b4c52349e637b398a2b4e7f2e5081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_590dc90c0ef4375dd1e463a607ed43e1f5221442f5e534088f2a8df3324bc990 = $this->env->getExtension("native_profiler");
        $__internal_590dc90c0ef4375dd1e463a607ed43e1f5221442f5e534088f2a8df3324bc990->enter($__internal_590dc90c0ef4375dd1e463a607ed43e1f5221442f5e534088f2a8df3324bc990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_590dc90c0ef4375dd1e463a607ed43e1f5221442f5e534088f2a8df3324bc990->leave($__internal_590dc90c0ef4375dd1e463a607ed43e1f5221442f5e534088f2a8df3324bc990_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d4a9f3f58442476fe7eceac3e4efc37af8d94a62d88932b38810ceedeb7dabc = $this->env->getExtension("native_profiler");
        $__internal_9d4a9f3f58442476fe7eceac3e4efc37af8d94a62d88932b38810ceedeb7dabc->enter($__internal_9d4a9f3f58442476fe7eceac3e4efc37af8d94a62d88932b38810ceedeb7dabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9d4a9f3f58442476fe7eceac3e4efc37af8d94a62d88932b38810ceedeb7dabc->leave($__internal_9d4a9f3f58442476fe7eceac3e4efc37af8d94a62d88932b38810ceedeb7dabc_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */

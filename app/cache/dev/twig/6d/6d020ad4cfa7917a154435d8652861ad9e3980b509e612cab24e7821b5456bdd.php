<?php

/* @User/Registration/checkEmail.html.twig */
class __TwigTemplate_2bf102d94f2bec654006153feecfd07becb8d04d933e51d378a48ef974106dd2 extends Twig_Template
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
        $__internal_117c6a99abf48675e1bc514ea6db3caf495af28653278a77d2416fa6b2e7f2fa = $this->env->getExtension("native_profiler");
        $__internal_117c6a99abf48675e1bc514ea6db3caf495af28653278a77d2416fa6b2e7f2fa->enter($__internal_117c6a99abf48675e1bc514ea6db3caf495af28653278a77d2416fa6b2e7f2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117c6a99abf48675e1bc514ea6db3caf495af28653278a77d2416fa6b2e7f2fa->leave($__internal_117c6a99abf48675e1bc514ea6db3caf495af28653278a77d2416fa6b2e7f2fa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1b23e5d7f885d62cc90629a9cb482f4c771ed94cd1fdd4b267d10180ce35ea2 = $this->env->getExtension("native_profiler");
        $__internal_d1b23e5d7f885d62cc90629a9cb482f4c771ed94cd1fdd4b267d10180ce35ea2->enter($__internal_d1b23e5d7f885d62cc90629a9cb482f4c771ed94cd1fdd4b267d10180ce35ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d1b23e5d7f885d62cc90629a9cb482f4c771ed94cd1fdd4b267d10180ce35ea2->leave($__internal_d1b23e5d7f885d62cc90629a9cb482f4c771ed94cd1fdd4b267d10180ce35ea2_prof);

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

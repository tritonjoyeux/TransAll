<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_6634aed09b14f3a80d2ccf67b33cf2a4141bbe684dd3bec15d44bacbf400fec1 extends Twig_Template
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
        $__internal_eacd019e2a956a76e52f17df746dbb8ab050665c824ae4e8f0f650f785f1308c = $this->env->getExtension("native_profiler");
        $__internal_eacd019e2a956a76e52f17df746dbb8ab050665c824ae4e8f0f650f785f1308c->enter($__internal_eacd019e2a956a76e52f17df746dbb8ab050665c824ae4e8f0f650f785f1308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eacd019e2a956a76e52f17df746dbb8ab050665c824ae4e8f0f650f785f1308c->leave($__internal_eacd019e2a956a76e52f17df746dbb8ab050665c824ae4e8f0f650f785f1308c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fb19ae10324463636412b0f8c5450f2278f776c423d49f8c073ac0744aaf2ee = $this->env->getExtension("native_profiler");
        $__internal_7fb19ae10324463636412b0f8c5450f2278f776c423d49f8c073ac0744aaf2ee->enter($__internal_7fb19ae10324463636412b0f8c5450f2278f776c423d49f8c073ac0744aaf2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7fb19ae10324463636412b0f8c5450f2278f776c423d49f8c073ac0744aaf2ee->leave($__internal_7fb19ae10324463636412b0f8c5450f2278f776c423d49f8c073ac0744aaf2ee_prof);

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

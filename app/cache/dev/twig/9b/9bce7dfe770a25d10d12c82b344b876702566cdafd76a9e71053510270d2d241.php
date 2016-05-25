<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_d9bc5a999ca6c7bc515e558ee09efbac8c87f976955238506f99f783f25a7d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_b28209a3fecfd54004effd1e85df07302301804a518924d4136f05a9d3366dc7 = $this->env->getExtension("native_profiler");
        $__internal_b28209a3fecfd54004effd1e85df07302301804a518924d4136f05a9d3366dc7->enter($__internal_b28209a3fecfd54004effd1e85df07302301804a518924d4136f05a9d3366dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b28209a3fecfd54004effd1e85df07302301804a518924d4136f05a9d3366dc7->leave($__internal_b28209a3fecfd54004effd1e85df07302301804a518924d4136f05a9d3366dc7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e87382d74282330fa645ec89257c63c6ee631a9b97f0fabea54aa74b073dc44e = $this->env->getExtension("native_profiler");
        $__internal_e87382d74282330fa645ec89257c63c6ee631a9b97f0fabea54aa74b073dc44e->enter($__internal_e87382d74282330fa645ec89257c63c6ee631a9b97f0fabea54aa74b073dc44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e87382d74282330fa645ec89257c63c6ee631a9b97f0fabea54aa74b073dc44e->leave($__internal_e87382d74282330fa645ec89257c63c6ee631a9b97f0fabea54aa74b073dc44e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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

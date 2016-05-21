<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_2d3a040887bb7c95f89c35e09b451dcf7c7c3c27edb5703840b4db75e5a46bc4 extends Twig_Template
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
        $__internal_6043b42a48145819a2d8c43c32b2a5169df8c303177ae5aeae8fb4a62f2339db = $this->env->getExtension("native_profiler");
        $__internal_6043b42a48145819a2d8c43c32b2a5169df8c303177ae5aeae8fb4a62f2339db->enter($__internal_6043b42a48145819a2d8c43c32b2a5169df8c303177ae5aeae8fb4a62f2339db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6043b42a48145819a2d8c43c32b2a5169df8c303177ae5aeae8fb4a62f2339db->leave($__internal_6043b42a48145819a2d8c43c32b2a5169df8c303177ae5aeae8fb4a62f2339db_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8de175bcba338c54dd4c9407fdc9295ef0e3b5724d7d0883639445c422ec754 = $this->env->getExtension("native_profiler");
        $__internal_c8de175bcba338c54dd4c9407fdc9295ef0e3b5724d7d0883639445c422ec754->enter($__internal_c8de175bcba338c54dd4c9407fdc9295ef0e3b5724d7d0883639445c422ec754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c8de175bcba338c54dd4c9407fdc9295ef0e3b5724d7d0883639445c422ec754->leave($__internal_c8de175bcba338c54dd4c9407fdc9295ef0e3b5724d7d0883639445c422ec754_prof);

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

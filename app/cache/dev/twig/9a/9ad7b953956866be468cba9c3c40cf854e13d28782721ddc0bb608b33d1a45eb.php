<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_34c44c7ef06da616679840fac9e1c8b5f6b02f7f5481473409782e4f34e8d0e3 extends Twig_Template
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
        $__internal_b593cc303b53fc1ff19b1796bdda106a235950c8432fffce400fd604bd166ec6 = $this->env->getExtension("native_profiler");
        $__internal_b593cc303b53fc1ff19b1796bdda106a235950c8432fffce400fd604bd166ec6->enter($__internal_b593cc303b53fc1ff19b1796bdda106a235950c8432fffce400fd604bd166ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b593cc303b53fc1ff19b1796bdda106a235950c8432fffce400fd604bd166ec6->leave($__internal_b593cc303b53fc1ff19b1796bdda106a235950c8432fffce400fd604bd166ec6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_978885204f26f8cbc2e800b2c7ebafb2c730cb0f8c31071f9e9188eca8c5a063 = $this->env->getExtension("native_profiler");
        $__internal_978885204f26f8cbc2e800b2c7ebafb2c730cb0f8c31071f9e9188eca8c5a063->enter($__internal_978885204f26f8cbc2e800b2c7ebafb2c730cb0f8c31071f9e9188eca8c5a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_978885204f26f8cbc2e800b2c7ebafb2c730cb0f8c31071f9e9188eca8c5a063->leave($__internal_978885204f26f8cbc2e800b2c7ebafb2c730cb0f8c31071f9e9188eca8c5a063_prof);

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

<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_a1b974bc1ae3ac2c8f6780920aeb79aa93c7f7cadc80b659e6ca2f4075f42cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/checkEmail.html.twig", 1);
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
        $__internal_de96a712c629f7cf92b48b098569e5b92d81cbc0766a0f129ad0ce4b4fe2f527 = $this->env->getExtension("native_profiler");
        $__internal_de96a712c629f7cf92b48b098569e5b92d81cbc0766a0f129ad0ce4b4fe2f527->enter($__internal_de96a712c629f7cf92b48b098569e5b92d81cbc0766a0f129ad0ce4b4fe2f527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de96a712c629f7cf92b48b098569e5b92d81cbc0766a0f129ad0ce4b4fe2f527->leave($__internal_de96a712c629f7cf92b48b098569e5b92d81cbc0766a0f129ad0ce4b4fe2f527_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94f5502b24496684964bc3af50ba1a31f1e9896320671bcd220dab0791742055 = $this->env->getExtension("native_profiler");
        $__internal_94f5502b24496684964bc3af50ba1a31f1e9896320671bcd220dab0791742055->enter($__internal_94f5502b24496684964bc3af50ba1a31f1e9896320671bcd220dab0791742055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_94f5502b24496684964bc3af50ba1a31f1e9896320671bcd220dab0791742055->leave($__internal_94f5502b24496684964bc3af50ba1a31f1e9896320671bcd220dab0791742055_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
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

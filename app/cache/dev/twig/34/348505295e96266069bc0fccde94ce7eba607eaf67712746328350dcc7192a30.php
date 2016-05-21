<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_be0f7a9c55aad676abafd07a760c1f08e23ac39123c1860bf15014673206019e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34974686c80b02ae706239c807ee769d41dc8e4155d8397404faaaad413ba274 = $this->env->getExtension("native_profiler");
        $__internal_34974686c80b02ae706239c807ee769d41dc8e4155d8397404faaaad413ba274->enter($__internal_34974686c80b02ae706239c807ee769d41dc8e4155d8397404faaaad413ba274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_34974686c80b02ae706239c807ee769d41dc8e4155d8397404faaaad413ba274->leave($__internal_34974686c80b02ae706239c807ee769d41dc8e4155d8397404faaaad413ba274_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_25442833c4b978e054e6f14bd73ec9df66a7077a8314f5fafb3571ffd78ca23e = $this->env->getExtension("native_profiler");
        $__internal_25442833c4b978e054e6f14bd73ec9df66a7077a8314f5fafb3571ffd78ca23e->enter($__internal_25442833c4b978e054e6f14bd73ec9df66a7077a8314f5fafb3571ffd78ca23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_25442833c4b978e054e6f14bd73ec9df66a7077a8314f5fafb3571ffd78ca23e->leave($__internal_25442833c4b978e054e6f14bd73ec9df66a7077a8314f5fafb3571ffd78ca23e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_97bd5b508cbc316c7a73f5cbe5ca98ded9a2af6717fa777f2c4be31a8aa8dfc9 = $this->env->getExtension("native_profiler");
        $__internal_97bd5b508cbc316c7a73f5cbe5ca98ded9a2af6717fa777f2c4be31a8aa8dfc9->enter($__internal_97bd5b508cbc316c7a73f5cbe5ca98ded9a2af6717fa777f2c4be31a8aa8dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_97bd5b508cbc316c7a73f5cbe5ca98ded9a2af6717fa777f2c4be31a8aa8dfc9->leave($__internal_97bd5b508cbc316c7a73f5cbe5ca98ded9a2af6717fa777f2c4be31a8aa8dfc9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_244af987438831ae23ed992b1475e2801aefc45b18100976e20abff6c340f918 = $this->env->getExtension("native_profiler");
        $__internal_244af987438831ae23ed992b1475e2801aefc45b18100976e20abff6c340f918->enter($__internal_244af987438831ae23ed992b1475e2801aefc45b18100976e20abff6c340f918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_244af987438831ae23ed992b1475e2801aefc45b18100976e20abff6c340f918->leave($__internal_244af987438831ae23ed992b1475e2801aefc45b18100976e20abff6c340f918_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

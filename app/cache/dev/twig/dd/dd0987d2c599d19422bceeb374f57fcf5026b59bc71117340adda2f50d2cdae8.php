<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_eb84f5395c3bd295bac1d1139e3a9f7b1d248e2afa2708dcabd1b184251f93f3 extends Twig_Template
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
        $__internal_178f682e3e4466122b9756cf10eaafe1e2f0bc3d820c46436a732d72cfd92511 = $this->env->getExtension("native_profiler");
        $__internal_178f682e3e4466122b9756cf10eaafe1e2f0bc3d820c46436a732d72cfd92511->enter($__internal_178f682e3e4466122b9756cf10eaafe1e2f0bc3d820c46436a732d72cfd92511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_178f682e3e4466122b9756cf10eaafe1e2f0bc3d820c46436a732d72cfd92511->leave($__internal_178f682e3e4466122b9756cf10eaafe1e2f0bc3d820c46436a732d72cfd92511_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5c5a020d934493e88aaa09060d63f09af6f90d7cac88f25c3602b61eab8d304d = $this->env->getExtension("native_profiler");
        $__internal_5c5a020d934493e88aaa09060d63f09af6f90d7cac88f25c3602b61eab8d304d->enter($__internal_5c5a020d934493e88aaa09060d63f09af6f90d7cac88f25c3602b61eab8d304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5c5a020d934493e88aaa09060d63f09af6f90d7cac88f25c3602b61eab8d304d->leave($__internal_5c5a020d934493e88aaa09060d63f09af6f90d7cac88f25c3602b61eab8d304d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de42f6014b6f83a9971bc3c6f6030da96d0d5aba5c99f8f0c610be556f0f6d4f = $this->env->getExtension("native_profiler");
        $__internal_de42f6014b6f83a9971bc3c6f6030da96d0d5aba5c99f8f0c610be556f0f6d4f->enter($__internal_de42f6014b6f83a9971bc3c6f6030da96d0d5aba5c99f8f0c610be556f0f6d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_de42f6014b6f83a9971bc3c6f6030da96d0d5aba5c99f8f0c610be556f0f6d4f->leave($__internal_de42f6014b6f83a9971bc3c6f6030da96d0d5aba5c99f8f0c610be556f0f6d4f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_943e59b6634280ec1d0f5ea775db8bdf9f1183a679687ddc115bc1640dc7d970 = $this->env->getExtension("native_profiler");
        $__internal_943e59b6634280ec1d0f5ea775db8bdf9f1183a679687ddc115bc1640dc7d970->enter($__internal_943e59b6634280ec1d0f5ea775db8bdf9f1183a679687ddc115bc1640dc7d970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_943e59b6634280ec1d0f5ea775db8bdf9f1183a679687ddc115bc1640dc7d970->leave($__internal_943e59b6634280ec1d0f5ea775db8bdf9f1183a679687ddc115bc1640dc7d970_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
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

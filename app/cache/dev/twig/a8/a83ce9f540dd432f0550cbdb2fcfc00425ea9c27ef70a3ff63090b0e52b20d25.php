<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6cf08b07cbed21822d5a5c55a3df75fc630c602d66de231d25bbb5b35329626d extends Twig_Template
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
        $__internal_95a41b6507f6bc8276d6e1284e7eea6600b754831168e6c94f32f8e07e4ea893 = $this->env->getExtension("native_profiler");
        $__internal_95a41b6507f6bc8276d6e1284e7eea6600b754831168e6c94f32f8e07e4ea893->enter($__internal_95a41b6507f6bc8276d6e1284e7eea6600b754831168e6c94f32f8e07e4ea893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_95a41b6507f6bc8276d6e1284e7eea6600b754831168e6c94f32f8e07e4ea893->leave($__internal_95a41b6507f6bc8276d6e1284e7eea6600b754831168e6c94f32f8e07e4ea893_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e4ce2e75b5e1d137ccb9f47b168182abb78c85522547f539d513d9925f2e18b = $this->env->getExtension("native_profiler");
        $__internal_7e4ce2e75b5e1d137ccb9f47b168182abb78c85522547f539d513d9925f2e18b->enter($__internal_7e4ce2e75b5e1d137ccb9f47b168182abb78c85522547f539d513d9925f2e18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7e4ce2e75b5e1d137ccb9f47b168182abb78c85522547f539d513d9925f2e18b->leave($__internal_7e4ce2e75b5e1d137ccb9f47b168182abb78c85522547f539d513d9925f2e18b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_23d5325d5c2975599ce03ea8cdece86ea397cbf85d6667398025eeaff8d9be95 = $this->env->getExtension("native_profiler");
        $__internal_23d5325d5c2975599ce03ea8cdece86ea397cbf85d6667398025eeaff8d9be95->enter($__internal_23d5325d5c2975599ce03ea8cdece86ea397cbf85d6667398025eeaff8d9be95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_23d5325d5c2975599ce03ea8cdece86ea397cbf85d6667398025eeaff8d9be95->leave($__internal_23d5325d5c2975599ce03ea8cdece86ea397cbf85d6667398025eeaff8d9be95_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_98c0cda46cc5c2bf64965b9807ea07f47e1a395479ae26ea7132641fc32426ef = $this->env->getExtension("native_profiler");
        $__internal_98c0cda46cc5c2bf64965b9807ea07f47e1a395479ae26ea7132641fc32426ef->enter($__internal_98c0cda46cc5c2bf64965b9807ea07f47e1a395479ae26ea7132641fc32426ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_98c0cda46cc5c2bf64965b9807ea07f47e1a395479ae26ea7132641fc32426ef->leave($__internal_98c0cda46cc5c2bf64965b9807ea07f47e1a395479ae26ea7132641fc32426ef_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

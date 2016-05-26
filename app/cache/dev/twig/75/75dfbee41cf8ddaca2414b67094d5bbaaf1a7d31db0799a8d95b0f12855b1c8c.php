<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6b7b6d7c63e63c01b536ea8c90ad2d52ecef0a5dc95cb9f258da7ac92bf88d08 extends Twig_Template
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
        $__internal_aa1244c31f7d363f53ca1c4f42b994b0c8c058bcc5d61048202955f44febfa09 = $this->env->getExtension("native_profiler");
        $__internal_aa1244c31f7d363f53ca1c4f42b994b0c8c058bcc5d61048202955f44febfa09->enter($__internal_aa1244c31f7d363f53ca1c4f42b994b0c8c058bcc5d61048202955f44febfa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aa1244c31f7d363f53ca1c4f42b994b0c8c058bcc5d61048202955f44febfa09->leave($__internal_aa1244c31f7d363f53ca1c4f42b994b0c8c058bcc5d61048202955f44febfa09_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6e0cfb737d3ff15cf9806e6c1486fb728e5241c84a4401d46aee84024cbf95f1 = $this->env->getExtension("native_profiler");
        $__internal_6e0cfb737d3ff15cf9806e6c1486fb728e5241c84a4401d46aee84024cbf95f1->enter($__internal_6e0cfb737d3ff15cf9806e6c1486fb728e5241c84a4401d46aee84024cbf95f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6e0cfb737d3ff15cf9806e6c1486fb728e5241c84a4401d46aee84024cbf95f1->leave($__internal_6e0cfb737d3ff15cf9806e6c1486fb728e5241c84a4401d46aee84024cbf95f1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fb9954b2db99d8341f33d71f0dc87840e1377d4447fa90d68397947c2db97d28 = $this->env->getExtension("native_profiler");
        $__internal_fb9954b2db99d8341f33d71f0dc87840e1377d4447fa90d68397947c2db97d28->enter($__internal_fb9954b2db99d8341f33d71f0dc87840e1377d4447fa90d68397947c2db97d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fb9954b2db99d8341f33d71f0dc87840e1377d4447fa90d68397947c2db97d28->leave($__internal_fb9954b2db99d8341f33d71f0dc87840e1377d4447fa90d68397947c2db97d28_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_08f9ab6e7e7b2cfaa4b2b68de9d02c3c7a8343eae2418f438b198607628f44a4 = $this->env->getExtension("native_profiler");
        $__internal_08f9ab6e7e7b2cfaa4b2b68de9d02c3c7a8343eae2418f438b198607628f44a4->enter($__internal_08f9ab6e7e7b2cfaa4b2b68de9d02c3c7a8343eae2418f438b198607628f44a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_08f9ab6e7e7b2cfaa4b2b68de9d02c3c7a8343eae2418f438b198607628f44a4->leave($__internal_08f9ab6e7e7b2cfaa4b2b68de9d02c3c7a8343eae2418f438b198607628f44a4_prof);

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

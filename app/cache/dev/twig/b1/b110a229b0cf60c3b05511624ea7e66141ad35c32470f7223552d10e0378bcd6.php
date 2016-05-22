<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_1cf317802d0ff3a49cf1c36297c056e76ceb2b0f514c8900ca318d124de6f83a extends Twig_Template
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
        $__internal_b62e7600e6524f0674a12af495ac7c69e13d04b1a314227b2addb1e6b0578417 = $this->env->getExtension("native_profiler");
        $__internal_b62e7600e6524f0674a12af495ac7c69e13d04b1a314227b2addb1e6b0578417->enter($__internal_b62e7600e6524f0674a12af495ac7c69e13d04b1a314227b2addb1e6b0578417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b62e7600e6524f0674a12af495ac7c69e13d04b1a314227b2addb1e6b0578417->leave($__internal_b62e7600e6524f0674a12af495ac7c69e13d04b1a314227b2addb1e6b0578417_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc4c8043055bbdbc4d77caea4160fbbe007d2d0c152a29bf0a1cd8b118bd40f4 = $this->env->getExtension("native_profiler");
        $__internal_dc4c8043055bbdbc4d77caea4160fbbe007d2d0c152a29bf0a1cd8b118bd40f4->enter($__internal_dc4c8043055bbdbc4d77caea4160fbbe007d2d0c152a29bf0a1cd8b118bd40f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_dc4c8043055bbdbc4d77caea4160fbbe007d2d0c152a29bf0a1cd8b118bd40f4->leave($__internal_dc4c8043055bbdbc4d77caea4160fbbe007d2d0c152a29bf0a1cd8b118bd40f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1c2693f0053d90647bc31694f97bd514a0daad7ab79ed757983a8e9767fa49c7 = $this->env->getExtension("native_profiler");
        $__internal_1c2693f0053d90647bc31694f97bd514a0daad7ab79ed757983a8e9767fa49c7->enter($__internal_1c2693f0053d90647bc31694f97bd514a0daad7ab79ed757983a8e9767fa49c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1c2693f0053d90647bc31694f97bd514a0daad7ab79ed757983a8e9767fa49c7->leave($__internal_1c2693f0053d90647bc31694f97bd514a0daad7ab79ed757983a8e9767fa49c7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d577841f69a199d2ccac3dae4e385c013d2988fd8b9e2605d14b108207dcc1c = $this->env->getExtension("native_profiler");
        $__internal_0d577841f69a199d2ccac3dae4e385c013d2988fd8b9e2605d14b108207dcc1c->enter($__internal_0d577841f69a199d2ccac3dae4e385c013d2988fd8b9e2605d14b108207dcc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d577841f69a199d2ccac3dae4e385c013d2988fd8b9e2605d14b108207dcc1c->leave($__internal_0d577841f69a199d2ccac3dae4e385c013d2988fd8b9e2605d14b108207dcc1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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

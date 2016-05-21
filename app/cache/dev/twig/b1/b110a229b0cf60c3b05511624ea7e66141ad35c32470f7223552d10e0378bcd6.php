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
        $__internal_4cd92dc28ab60ba7b18f2b2268155a49cbb972ef99ee220b78a2940f43dba808 = $this->env->getExtension("native_profiler");
        $__internal_4cd92dc28ab60ba7b18f2b2268155a49cbb972ef99ee220b78a2940f43dba808->enter($__internal_4cd92dc28ab60ba7b18f2b2268155a49cbb972ef99ee220b78a2940f43dba808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4cd92dc28ab60ba7b18f2b2268155a49cbb972ef99ee220b78a2940f43dba808->leave($__internal_4cd92dc28ab60ba7b18f2b2268155a49cbb972ef99ee220b78a2940f43dba808_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_89599aea757bb52ff9ead565185b26e00cf001edc958440de2dee9a2eb344370 = $this->env->getExtension("native_profiler");
        $__internal_89599aea757bb52ff9ead565185b26e00cf001edc958440de2dee9a2eb344370->enter($__internal_89599aea757bb52ff9ead565185b26e00cf001edc958440de2dee9a2eb344370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_89599aea757bb52ff9ead565185b26e00cf001edc958440de2dee9a2eb344370->leave($__internal_89599aea757bb52ff9ead565185b26e00cf001edc958440de2dee9a2eb344370_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5096738cc501447e95b03854c2fe80fb45ebc8976220c7adc671847b82e66448 = $this->env->getExtension("native_profiler");
        $__internal_5096738cc501447e95b03854c2fe80fb45ebc8976220c7adc671847b82e66448->enter($__internal_5096738cc501447e95b03854c2fe80fb45ebc8976220c7adc671847b82e66448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5096738cc501447e95b03854c2fe80fb45ebc8976220c7adc671847b82e66448->leave($__internal_5096738cc501447e95b03854c2fe80fb45ebc8976220c7adc671847b82e66448_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f581e6ea61586d52b52d2026d2be1de1d09417655898f908bfc43f0f60e0875b = $this->env->getExtension("native_profiler");
        $__internal_f581e6ea61586d52b52d2026d2be1de1d09417655898f908bfc43f0f60e0875b->enter($__internal_f581e6ea61586d52b52d2026d2be1de1d09417655898f908bfc43f0f60e0875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f581e6ea61586d52b52d2026d2be1de1d09417655898f908bfc43f0f60e0875b->leave($__internal_f581e6ea61586d52b52d2026d2be1de1d09417655898f908bfc43f0f60e0875b_prof);

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

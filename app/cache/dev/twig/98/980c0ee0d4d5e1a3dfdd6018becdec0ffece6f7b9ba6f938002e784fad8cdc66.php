<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_dd9ec511caed6712054a4011ce14045c6686e7cd5df5d79e07c51e1475d5ada0 extends Twig_Template
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
        $__internal_8f07ded6666ae9588ece46e7e4a98fc15b7a33e322dc53e6ac5de7d91b96df3f = $this->env->getExtension("native_profiler");
        $__internal_8f07ded6666ae9588ece46e7e4a98fc15b7a33e322dc53e6ac5de7d91b96df3f->enter($__internal_8f07ded6666ae9588ece46e7e4a98fc15b7a33e322dc53e6ac5de7d91b96df3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8f07ded6666ae9588ece46e7e4a98fc15b7a33e322dc53e6ac5de7d91b96df3f->leave($__internal_8f07ded6666ae9588ece46e7e4a98fc15b7a33e322dc53e6ac5de7d91b96df3f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e739fcac3ac2f5f8a2e062f5de85286cbcd7b6d5a1f5d01a90a0980fec1b5217 = $this->env->getExtension("native_profiler");
        $__internal_e739fcac3ac2f5f8a2e062f5de85286cbcd7b6d5a1f5d01a90a0980fec1b5217->enter($__internal_e739fcac3ac2f5f8a2e062f5de85286cbcd7b6d5a1f5d01a90a0980fec1b5217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e739fcac3ac2f5f8a2e062f5de85286cbcd7b6d5a1f5d01a90a0980fec1b5217->leave($__internal_e739fcac3ac2f5f8a2e062f5de85286cbcd7b6d5a1f5d01a90a0980fec1b5217_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_97d9d83ae29b5609e504e4b832339f28a4720835cf459756594209321e06985a = $this->env->getExtension("native_profiler");
        $__internal_97d9d83ae29b5609e504e4b832339f28a4720835cf459756594209321e06985a->enter($__internal_97d9d83ae29b5609e504e4b832339f28a4720835cf459756594209321e06985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_97d9d83ae29b5609e504e4b832339f28a4720835cf459756594209321e06985a->leave($__internal_97d9d83ae29b5609e504e4b832339f28a4720835cf459756594209321e06985a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_045328d1065a6aa293a9aad160679c965ee1cf89c22016b3100a4f0e177a7c1a = $this->env->getExtension("native_profiler");
        $__internal_045328d1065a6aa293a9aad160679c965ee1cf89c22016b3100a4f0e177a7c1a->enter($__internal_045328d1065a6aa293a9aad160679c965ee1cf89c22016b3100a4f0e177a7c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_045328d1065a6aa293a9aad160679c965ee1cf89c22016b3100a4f0e177a7c1a->leave($__internal_045328d1065a6aa293a9aad160679c965ee1cf89c22016b3100a4f0e177a7c1a_prof);

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

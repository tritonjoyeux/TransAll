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
        $__internal_6086a41970e0391bba69d5ba91c32cea598afadba6edb8cd58202189d16fd1ec = $this->env->getExtension("native_profiler");
        $__internal_6086a41970e0391bba69d5ba91c32cea598afadba6edb8cd58202189d16fd1ec->enter($__internal_6086a41970e0391bba69d5ba91c32cea598afadba6edb8cd58202189d16fd1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6086a41970e0391bba69d5ba91c32cea598afadba6edb8cd58202189d16fd1ec->leave($__internal_6086a41970e0391bba69d5ba91c32cea598afadba6edb8cd58202189d16fd1ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8681a932b48df4221992d7859f544620fc6a9600220485e52dc3c68766b9fe6d = $this->env->getExtension("native_profiler");
        $__internal_8681a932b48df4221992d7859f544620fc6a9600220485e52dc3c68766b9fe6d->enter($__internal_8681a932b48df4221992d7859f544620fc6a9600220485e52dc3c68766b9fe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8681a932b48df4221992d7859f544620fc6a9600220485e52dc3c68766b9fe6d->leave($__internal_8681a932b48df4221992d7859f544620fc6a9600220485e52dc3c68766b9fe6d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a38f37d4e80184b9f7ceaddfd63adda7d68c6f1f7426208d3f3c1c4fb70fdcaa = $this->env->getExtension("native_profiler");
        $__internal_a38f37d4e80184b9f7ceaddfd63adda7d68c6f1f7426208d3f3c1c4fb70fdcaa->enter($__internal_a38f37d4e80184b9f7ceaddfd63adda7d68c6f1f7426208d3f3c1c4fb70fdcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a38f37d4e80184b9f7ceaddfd63adda7d68c6f1f7426208d3f3c1c4fb70fdcaa->leave($__internal_a38f37d4e80184b9f7ceaddfd63adda7d68c6f1f7426208d3f3c1c4fb70fdcaa_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4477a115e4244f1c39f67baa15f2bc598013789bf908b535cf3ec6456558cae0 = $this->env->getExtension("native_profiler");
        $__internal_4477a115e4244f1c39f67baa15f2bc598013789bf908b535cf3ec6456558cae0->enter($__internal_4477a115e4244f1c39f67baa15f2bc598013789bf908b535cf3ec6456558cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4477a115e4244f1c39f67baa15f2bc598013789bf908b535cf3ec6456558cae0->leave($__internal_4477a115e4244f1c39f67baa15f2bc598013789bf908b535cf3ec6456558cae0_prof);

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

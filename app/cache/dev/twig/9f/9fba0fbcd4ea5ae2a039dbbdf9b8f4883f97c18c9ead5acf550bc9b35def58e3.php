<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_85505b3d71d90c577975a1b8313aca7c791726834697a895b3a5d87ffb427252 extends Twig_Template
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
        $__internal_39ae653deda15c7f338124b3ee8da408b98a0ab0d6b923599ef9db7bfb9c2b19 = $this->env->getExtension("native_profiler");
        $__internal_39ae653deda15c7f338124b3ee8da408b98a0ab0d6b923599ef9db7bfb9c2b19->enter($__internal_39ae653deda15c7f338124b3ee8da408b98a0ab0d6b923599ef9db7bfb9c2b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_39ae653deda15c7f338124b3ee8da408b98a0ab0d6b923599ef9db7bfb9c2b19->leave($__internal_39ae653deda15c7f338124b3ee8da408b98a0ab0d6b923599ef9db7bfb9c2b19_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_556022cff24aa1c76cd392786ebecf681957e0f3234327e48bc41915814033b8 = $this->env->getExtension("native_profiler");
        $__internal_556022cff24aa1c76cd392786ebecf681957e0f3234327e48bc41915814033b8->enter($__internal_556022cff24aa1c76cd392786ebecf681957e0f3234327e48bc41915814033b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_556022cff24aa1c76cd392786ebecf681957e0f3234327e48bc41915814033b8->leave($__internal_556022cff24aa1c76cd392786ebecf681957e0f3234327e48bc41915814033b8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8004bbbe2567082148ebea3b8d40abd584e7c3dd6626ccbce99d93950c3dc0cf = $this->env->getExtension("native_profiler");
        $__internal_8004bbbe2567082148ebea3b8d40abd584e7c3dd6626ccbce99d93950c3dc0cf->enter($__internal_8004bbbe2567082148ebea3b8d40abd584e7c3dd6626ccbce99d93950c3dc0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8004bbbe2567082148ebea3b8d40abd584e7c3dd6626ccbce99d93950c3dc0cf->leave($__internal_8004bbbe2567082148ebea3b8d40abd584e7c3dd6626ccbce99d93950c3dc0cf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9471b221e5d9f97aa4f2922a353ecb1b531513430e49c5b170d256f40e45992b = $this->env->getExtension("native_profiler");
        $__internal_9471b221e5d9f97aa4f2922a353ecb1b531513430e49c5b170d256f40e45992b->enter($__internal_9471b221e5d9f97aa4f2922a353ecb1b531513430e49c5b170d256f40e45992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9471b221e5d9f97aa4f2922a353ecb1b531513430e49c5b170d256f40e45992b->leave($__internal_9471b221e5d9f97aa4f2922a353ecb1b531513430e49c5b170d256f40e45992b_prof);

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

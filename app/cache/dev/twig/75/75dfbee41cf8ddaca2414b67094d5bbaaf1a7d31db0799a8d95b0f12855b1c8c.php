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
        $__internal_b3cbb606712415944583e3f521e280b3479a33c1ff5c5d9531705fd2d13476f4 = $this->env->getExtension("native_profiler");
        $__internal_b3cbb606712415944583e3f521e280b3479a33c1ff5c5d9531705fd2d13476f4->enter($__internal_b3cbb606712415944583e3f521e280b3479a33c1ff5c5d9531705fd2d13476f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b3cbb606712415944583e3f521e280b3479a33c1ff5c5d9531705fd2d13476f4->leave($__internal_b3cbb606712415944583e3f521e280b3479a33c1ff5c5d9531705fd2d13476f4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_80786841e4236d99062dee0681780ec3d8ad9a739e7ec04e1cd1c1836c7b2e12 = $this->env->getExtension("native_profiler");
        $__internal_80786841e4236d99062dee0681780ec3d8ad9a739e7ec04e1cd1c1836c7b2e12->enter($__internal_80786841e4236d99062dee0681780ec3d8ad9a739e7ec04e1cd1c1836c7b2e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_80786841e4236d99062dee0681780ec3d8ad9a739e7ec04e1cd1c1836c7b2e12->leave($__internal_80786841e4236d99062dee0681780ec3d8ad9a739e7ec04e1cd1c1836c7b2e12_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2b25ecbc13ca06f6ac691bfdde9316169a1e3a2fb2d8d278fe181dde69162855 = $this->env->getExtension("native_profiler");
        $__internal_2b25ecbc13ca06f6ac691bfdde9316169a1e3a2fb2d8d278fe181dde69162855->enter($__internal_2b25ecbc13ca06f6ac691bfdde9316169a1e3a2fb2d8d278fe181dde69162855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2b25ecbc13ca06f6ac691bfdde9316169a1e3a2fb2d8d278fe181dde69162855->leave($__internal_2b25ecbc13ca06f6ac691bfdde9316169a1e3a2fb2d8d278fe181dde69162855_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b3d6032a4213198eba2cb1e24f6a5273611a03475c2b7a2b653b81b3a8a62fc4 = $this->env->getExtension("native_profiler");
        $__internal_b3d6032a4213198eba2cb1e24f6a5273611a03475c2b7a2b653b81b3a8a62fc4->enter($__internal_b3d6032a4213198eba2cb1e24f6a5273611a03475c2b7a2b653b81b3a8a62fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b3d6032a4213198eba2cb1e24f6a5273611a03475c2b7a2b653b81b3a8a62fc4->leave($__internal_b3d6032a4213198eba2cb1e24f6a5273611a03475c2b7a2b653b81b3a8a62fc4_prof);

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

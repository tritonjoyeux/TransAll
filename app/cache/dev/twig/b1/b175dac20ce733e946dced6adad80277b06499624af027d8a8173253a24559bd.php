<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_680ba23168c0adc7269369d4cdad98be74934828c38e35cee365e39cee27950e extends Twig_Template
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
        $__internal_81e73207a4401f37d24ef104b27a3f4a77a6df7c1b40bad65e7ce15f9a2898ff = $this->env->getExtension("native_profiler");
        $__internal_81e73207a4401f37d24ef104b27a3f4a77a6df7c1b40bad65e7ce15f9a2898ff->enter($__internal_81e73207a4401f37d24ef104b27a3f4a77a6df7c1b40bad65e7ce15f9a2898ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_81e73207a4401f37d24ef104b27a3f4a77a6df7c1b40bad65e7ce15f9a2898ff->leave($__internal_81e73207a4401f37d24ef104b27a3f4a77a6df7c1b40bad65e7ce15f9a2898ff_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a778116976270843326a6bda530dadc8942e170f63c6dccd169093fbb4411a67 = $this->env->getExtension("native_profiler");
        $__internal_a778116976270843326a6bda530dadc8942e170f63c6dccd169093fbb4411a67->enter($__internal_a778116976270843326a6bda530dadc8942e170f63c6dccd169093fbb4411a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a778116976270843326a6bda530dadc8942e170f63c6dccd169093fbb4411a67->leave($__internal_a778116976270843326a6bda530dadc8942e170f63c6dccd169093fbb4411a67_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a12e092ae9d3619fe380c7f29f0af7dc19f93cc09ed811f806f5e7b9a899e0e0 = $this->env->getExtension("native_profiler");
        $__internal_a12e092ae9d3619fe380c7f29f0af7dc19f93cc09ed811f806f5e7b9a899e0e0->enter($__internal_a12e092ae9d3619fe380c7f29f0af7dc19f93cc09ed811f806f5e7b9a899e0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a12e092ae9d3619fe380c7f29f0af7dc19f93cc09ed811f806f5e7b9a899e0e0->leave($__internal_a12e092ae9d3619fe380c7f29f0af7dc19f93cc09ed811f806f5e7b9a899e0e0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6a55d32b1263cc012530f06d1f3f651d8436e812a790411e8b3b80568a670bbb = $this->env->getExtension("native_profiler");
        $__internal_6a55d32b1263cc012530f06d1f3f651d8436e812a790411e8b3b80568a670bbb->enter($__internal_6a55d32b1263cc012530f06d1f3f651d8436e812a790411e8b3b80568a670bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6a55d32b1263cc012530f06d1f3f651d8436e812a790411e8b3b80568a670bbb->leave($__internal_6a55d32b1263cc012530f06d1f3f651d8436e812a790411e8b3b80568a670bbb_prof);

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

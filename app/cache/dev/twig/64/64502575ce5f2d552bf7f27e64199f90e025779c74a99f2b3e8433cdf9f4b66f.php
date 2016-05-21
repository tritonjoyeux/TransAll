<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_7020dcfa7e50910df053e77a39d61d0be2a6ddbd67efee0f6164dd2368e12781 extends Twig_Template
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
        $__internal_516d4d7db6d58ed7724a2910ea4dbf75a6b1a78568b7a21a4d8e819c4b60c266 = $this->env->getExtension("native_profiler");
        $__internal_516d4d7db6d58ed7724a2910ea4dbf75a6b1a78568b7a21a4d8e819c4b60c266->enter($__internal_516d4d7db6d58ed7724a2910ea4dbf75a6b1a78568b7a21a4d8e819c4b60c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_516d4d7db6d58ed7724a2910ea4dbf75a6b1a78568b7a21a4d8e819c4b60c266->leave($__internal_516d4d7db6d58ed7724a2910ea4dbf75a6b1a78568b7a21a4d8e819c4b60c266_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_17ec818eae8359f973f6a21337ed2a16c55035316fd3755fe325189e40d3eb09 = $this->env->getExtension("native_profiler");
        $__internal_17ec818eae8359f973f6a21337ed2a16c55035316fd3755fe325189e40d3eb09->enter($__internal_17ec818eae8359f973f6a21337ed2a16c55035316fd3755fe325189e40d3eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_17ec818eae8359f973f6a21337ed2a16c55035316fd3755fe325189e40d3eb09->leave($__internal_17ec818eae8359f973f6a21337ed2a16c55035316fd3755fe325189e40d3eb09_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_170f434142afe52ba932331321cdfcc96897407617b82f48bbb928f82ad44c79 = $this->env->getExtension("native_profiler");
        $__internal_170f434142afe52ba932331321cdfcc96897407617b82f48bbb928f82ad44c79->enter($__internal_170f434142afe52ba932331321cdfcc96897407617b82f48bbb928f82ad44c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_170f434142afe52ba932331321cdfcc96897407617b82f48bbb928f82ad44c79->leave($__internal_170f434142afe52ba932331321cdfcc96897407617b82f48bbb928f82ad44c79_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd5566b2c0ec0d8e3e0c9ad3c268fb6d6bb904eeae694919bbe1d4e74f7f94ca = $this->env->getExtension("native_profiler");
        $__internal_bd5566b2c0ec0d8e3e0c9ad3c268fb6d6bb904eeae694919bbe1d4e74f7f94ca->enter($__internal_bd5566b2c0ec0d8e3e0c9ad3c268fb6d6bb904eeae694919bbe1d4e74f7f94ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bd5566b2c0ec0d8e3e0c9ad3c268fb6d6bb904eeae694919bbe1d4e74f7f94ca->leave($__internal_bd5566b2c0ec0d8e3e0c9ad3c268fb6d6bb904eeae694919bbe1d4e74f7f94ca_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
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

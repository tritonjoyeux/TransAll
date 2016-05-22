<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_be0f7a9c55aad676abafd07a760c1f08e23ac39123c1860bf15014673206019e extends Twig_Template
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
        $__internal_47947810ec75f780ba3367e5f3a3fdeaae2b8d44e57ef82ee1f7e33ec91bbe16 = $this->env->getExtension("native_profiler");
        $__internal_47947810ec75f780ba3367e5f3a3fdeaae2b8d44e57ef82ee1f7e33ec91bbe16->enter($__internal_47947810ec75f780ba3367e5f3a3fdeaae2b8d44e57ef82ee1f7e33ec91bbe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_47947810ec75f780ba3367e5f3a3fdeaae2b8d44e57ef82ee1f7e33ec91bbe16->leave($__internal_47947810ec75f780ba3367e5f3a3fdeaae2b8d44e57ef82ee1f7e33ec91bbe16_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2022a6295487c31cf3b846e8735b83fcf10b1f37556f817cf8c75fbff93d9f6f = $this->env->getExtension("native_profiler");
        $__internal_2022a6295487c31cf3b846e8735b83fcf10b1f37556f817cf8c75fbff93d9f6f->enter($__internal_2022a6295487c31cf3b846e8735b83fcf10b1f37556f817cf8c75fbff93d9f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2022a6295487c31cf3b846e8735b83fcf10b1f37556f817cf8c75fbff93d9f6f->leave($__internal_2022a6295487c31cf3b846e8735b83fcf10b1f37556f817cf8c75fbff93d9f6f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_adda32461de0720687797885a12f02c49945b4d6501f2807ca49abc162743178 = $this->env->getExtension("native_profiler");
        $__internal_adda32461de0720687797885a12f02c49945b4d6501f2807ca49abc162743178->enter($__internal_adda32461de0720687797885a12f02c49945b4d6501f2807ca49abc162743178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_adda32461de0720687797885a12f02c49945b4d6501f2807ca49abc162743178->leave($__internal_adda32461de0720687797885a12f02c49945b4d6501f2807ca49abc162743178_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9e533576cc784212703b3222b36f06d08de5025ed1f9eb34fd8f11e9e97da5d8 = $this->env->getExtension("native_profiler");
        $__internal_9e533576cc784212703b3222b36f06d08de5025ed1f9eb34fd8f11e9e97da5d8->enter($__internal_9e533576cc784212703b3222b36f06d08de5025ed1f9eb34fd8f11e9e97da5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9e533576cc784212703b3222b36f06d08de5025ed1f9eb34fd8f11e9e97da5d8->leave($__internal_9e533576cc784212703b3222b36f06d08de5025ed1f9eb34fd8f11e9e97da5d8_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
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

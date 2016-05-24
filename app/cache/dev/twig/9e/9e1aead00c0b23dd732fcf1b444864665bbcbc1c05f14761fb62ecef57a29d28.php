<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e11b23f52795d1ef454e616effad338b09cdf3109030ac69723159a845403fef extends Twig_Template
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
        $__internal_6f01600c1c838ac3c44165359db0851ed5fc61553a4c517784b75108fe76fefb = $this->env->getExtension("native_profiler");
        $__internal_6f01600c1c838ac3c44165359db0851ed5fc61553a4c517784b75108fe76fefb->enter($__internal_6f01600c1c838ac3c44165359db0851ed5fc61553a4c517784b75108fe76fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f01600c1c838ac3c44165359db0851ed5fc61553a4c517784b75108fe76fefb->leave($__internal_6f01600c1c838ac3c44165359db0851ed5fc61553a4c517784b75108fe76fefb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_db57a659d84dfb4687766dd6fecdeeab0f3a52cb7bc47a022fc266f0b0f934b3 = $this->env->getExtension("native_profiler");
        $__internal_db57a659d84dfb4687766dd6fecdeeab0f3a52cb7bc47a022fc266f0b0f934b3->enter($__internal_db57a659d84dfb4687766dd6fecdeeab0f3a52cb7bc47a022fc266f0b0f934b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_db57a659d84dfb4687766dd6fecdeeab0f3a52cb7bc47a022fc266f0b0f934b3->leave($__internal_db57a659d84dfb4687766dd6fecdeeab0f3a52cb7bc47a022fc266f0b0f934b3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_45469a47af1805eafd82000bcaed1bd69e1314c4a554f97bb432e177a8d2ac37 = $this->env->getExtension("native_profiler");
        $__internal_45469a47af1805eafd82000bcaed1bd69e1314c4a554f97bb432e177a8d2ac37->enter($__internal_45469a47af1805eafd82000bcaed1bd69e1314c4a554f97bb432e177a8d2ac37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_45469a47af1805eafd82000bcaed1bd69e1314c4a554f97bb432e177a8d2ac37->leave($__internal_45469a47af1805eafd82000bcaed1bd69e1314c4a554f97bb432e177a8d2ac37_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cf938686819f19539f4a36b78c24326ac9e4699e00a5b87b7e7b6737c97c9621 = $this->env->getExtension("native_profiler");
        $__internal_cf938686819f19539f4a36b78c24326ac9e4699e00a5b87b7e7b6737c97c9621->enter($__internal_cf938686819f19539f4a36b78c24326ac9e4699e00a5b87b7e7b6737c97c9621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf938686819f19539f4a36b78c24326ac9e4699e00a5b87b7e7b6737c97c9621->leave($__internal_cf938686819f19539f4a36b78c24326ac9e4699e00a5b87b7e7b6737c97c9621_prof);

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

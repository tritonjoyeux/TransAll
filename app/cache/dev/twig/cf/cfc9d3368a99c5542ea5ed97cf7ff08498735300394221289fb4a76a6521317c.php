<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_2c10c261a1e1b4d78009fe94d9dbb7343c24903d8f37b1547cea30585e7a5fad extends Twig_Template
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
        $__internal_777717dc0170020b63149bb486e2a82357aca60fa1dcb33969a7b591f9f3c138 = $this->env->getExtension("native_profiler");
        $__internal_777717dc0170020b63149bb486e2a82357aca60fa1dcb33969a7b591f9f3c138->enter($__internal_777717dc0170020b63149bb486e2a82357aca60fa1dcb33969a7b591f9f3c138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_777717dc0170020b63149bb486e2a82357aca60fa1dcb33969a7b591f9f3c138->leave($__internal_777717dc0170020b63149bb486e2a82357aca60fa1dcb33969a7b591f9f3c138_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8b89301f8ebc57536e40c4ee5ffcfb2acbc127d26c5e04952169872b97f1a817 = $this->env->getExtension("native_profiler");
        $__internal_8b89301f8ebc57536e40c4ee5ffcfb2acbc127d26c5e04952169872b97f1a817->enter($__internal_8b89301f8ebc57536e40c4ee5ffcfb2acbc127d26c5e04952169872b97f1a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8b89301f8ebc57536e40c4ee5ffcfb2acbc127d26c5e04952169872b97f1a817->leave($__internal_8b89301f8ebc57536e40c4ee5ffcfb2acbc127d26c5e04952169872b97f1a817_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_055d17ec8f52d12e0deb6954359ee6ce6daed3fff5c35d9b511b2dda4394fe3d = $this->env->getExtension("native_profiler");
        $__internal_055d17ec8f52d12e0deb6954359ee6ce6daed3fff5c35d9b511b2dda4394fe3d->enter($__internal_055d17ec8f52d12e0deb6954359ee6ce6daed3fff5c35d9b511b2dda4394fe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_055d17ec8f52d12e0deb6954359ee6ce6daed3fff5c35d9b511b2dda4394fe3d->leave($__internal_055d17ec8f52d12e0deb6954359ee6ce6daed3fff5c35d9b511b2dda4394fe3d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_292fd0593499d98f40d30c83d5fd8480067e3cefc07533a17445e3524c39f268 = $this->env->getExtension("native_profiler");
        $__internal_292fd0593499d98f40d30c83d5fd8480067e3cefc07533a17445e3524c39f268->enter($__internal_292fd0593499d98f40d30c83d5fd8480067e3cefc07533a17445e3524c39f268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_292fd0593499d98f40d30c83d5fd8480067e3cefc07533a17445e3524c39f268->leave($__internal_292fd0593499d98f40d30c83d5fd8480067e3cefc07533a17445e3524c39f268_prof);

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

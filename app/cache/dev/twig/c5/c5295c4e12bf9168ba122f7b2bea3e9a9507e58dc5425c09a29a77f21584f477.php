<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_296b4bfd2efdc251e25b0b8e000e66a62f5b50443f337d98f5a6baa3188265c2 extends Twig_Template
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
        $__internal_9e9087dfdb289ba2545fe2523a47f9f862960776599d9d4ec7e6b7393dea9327 = $this->env->getExtension("native_profiler");
        $__internal_9e9087dfdb289ba2545fe2523a47f9f862960776599d9d4ec7e6b7393dea9327->enter($__internal_9e9087dfdb289ba2545fe2523a47f9f862960776599d9d4ec7e6b7393dea9327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e9087dfdb289ba2545fe2523a47f9f862960776599d9d4ec7e6b7393dea9327->leave($__internal_9e9087dfdb289ba2545fe2523a47f9f862960776599d9d4ec7e6b7393dea9327_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4f10b279ae05846cb4af401a2bfd162d84915c47977da4162f2f7a59365516b8 = $this->env->getExtension("native_profiler");
        $__internal_4f10b279ae05846cb4af401a2bfd162d84915c47977da4162f2f7a59365516b8->enter($__internal_4f10b279ae05846cb4af401a2bfd162d84915c47977da4162f2f7a59365516b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f10b279ae05846cb4af401a2bfd162d84915c47977da4162f2f7a59365516b8->leave($__internal_4f10b279ae05846cb4af401a2bfd162d84915c47977da4162f2f7a59365516b8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8eb06e1e0dcc23c12da9bff2b168be1de0ed1294bbc0480873ed5863c5178ba4 = $this->env->getExtension("native_profiler");
        $__internal_8eb06e1e0dcc23c12da9bff2b168be1de0ed1294bbc0480873ed5863c5178ba4->enter($__internal_8eb06e1e0dcc23c12da9bff2b168be1de0ed1294bbc0480873ed5863c5178ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8eb06e1e0dcc23c12da9bff2b168be1de0ed1294bbc0480873ed5863c5178ba4->leave($__internal_8eb06e1e0dcc23c12da9bff2b168be1de0ed1294bbc0480873ed5863c5178ba4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b077de1258f135f97bb1b0797aba61530e69eb8216e50bf94b9b123f196ec15c = $this->env->getExtension("native_profiler");
        $__internal_b077de1258f135f97bb1b0797aba61530e69eb8216e50bf94b9b123f196ec15c->enter($__internal_b077de1258f135f97bb1b0797aba61530e69eb8216e50bf94b9b123f196ec15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b077de1258f135f97bb1b0797aba61530e69eb8216e50bf94b9b123f196ec15c->leave($__internal_b077de1258f135f97bb1b0797aba61530e69eb8216e50bf94b9b123f196ec15c_prof);

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

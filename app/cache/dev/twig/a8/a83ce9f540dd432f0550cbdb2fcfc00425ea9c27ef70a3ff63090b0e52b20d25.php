<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6cf08b07cbed21822d5a5c55a3df75fc630c602d66de231d25bbb5b35329626d extends Twig_Template
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
        $__internal_baec88caabeeeb199f7caff1199d7c176942e9aaf957455e729146900bf5724c = $this->env->getExtension("native_profiler");
        $__internal_baec88caabeeeb199f7caff1199d7c176942e9aaf957455e729146900bf5724c->enter($__internal_baec88caabeeeb199f7caff1199d7c176942e9aaf957455e729146900bf5724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_baec88caabeeeb199f7caff1199d7c176942e9aaf957455e729146900bf5724c->leave($__internal_baec88caabeeeb199f7caff1199d7c176942e9aaf957455e729146900bf5724c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7046da36a22bb5e8a9459edbe9d0a65ffddb3eeff283f27a3ce4dc214d951d89 = $this->env->getExtension("native_profiler");
        $__internal_7046da36a22bb5e8a9459edbe9d0a65ffddb3eeff283f27a3ce4dc214d951d89->enter($__internal_7046da36a22bb5e8a9459edbe9d0a65ffddb3eeff283f27a3ce4dc214d951d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7046da36a22bb5e8a9459edbe9d0a65ffddb3eeff283f27a3ce4dc214d951d89->leave($__internal_7046da36a22bb5e8a9459edbe9d0a65ffddb3eeff283f27a3ce4dc214d951d89_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7660c5a38747272c26ea9ca84a7a02921a4b31a0be31bf20c20f0c005de503e4 = $this->env->getExtension("native_profiler");
        $__internal_7660c5a38747272c26ea9ca84a7a02921a4b31a0be31bf20c20f0c005de503e4->enter($__internal_7660c5a38747272c26ea9ca84a7a02921a4b31a0be31bf20c20f0c005de503e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7660c5a38747272c26ea9ca84a7a02921a4b31a0be31bf20c20f0c005de503e4->leave($__internal_7660c5a38747272c26ea9ca84a7a02921a4b31a0be31bf20c20f0c005de503e4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b684fcb96d3f305ce4118d7cb0a2ad12c3f519070719f37cd21fca6e24769ee5 = $this->env->getExtension("native_profiler");
        $__internal_b684fcb96d3f305ce4118d7cb0a2ad12c3f519070719f37cd21fca6e24769ee5->enter($__internal_b684fcb96d3f305ce4118d7cb0a2ad12c3f519070719f37cd21fca6e24769ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b684fcb96d3f305ce4118d7cb0a2ad12c3f519070719f37cd21fca6e24769ee5->leave($__internal_b684fcb96d3f305ce4118d7cb0a2ad12c3f519070719f37cd21fca6e24769ee5_prof);

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

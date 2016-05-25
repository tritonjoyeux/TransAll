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
        $__internal_8e8456dee9dd446b12fdb3498c81d4cfdf81fec3d9b874ba10c700daad43d2ee = $this->env->getExtension("native_profiler");
        $__internal_8e8456dee9dd446b12fdb3498c81d4cfdf81fec3d9b874ba10c700daad43d2ee->enter($__internal_8e8456dee9dd446b12fdb3498c81d4cfdf81fec3d9b874ba10c700daad43d2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e8456dee9dd446b12fdb3498c81d4cfdf81fec3d9b874ba10c700daad43d2ee->leave($__internal_8e8456dee9dd446b12fdb3498c81d4cfdf81fec3d9b874ba10c700daad43d2ee_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b1079998c77b4662e94ac2763e58045d22c0dbb31904af9f9147535924bcb8b = $this->env->getExtension("native_profiler");
        $__internal_6b1079998c77b4662e94ac2763e58045d22c0dbb31904af9f9147535924bcb8b->enter($__internal_6b1079998c77b4662e94ac2763e58045d22c0dbb31904af9f9147535924bcb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6b1079998c77b4662e94ac2763e58045d22c0dbb31904af9f9147535924bcb8b->leave($__internal_6b1079998c77b4662e94ac2763e58045d22c0dbb31904af9f9147535924bcb8b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8f89e0823942fcf3bb19e279cf75b16daee7cf582643069748fc61e71968a160 = $this->env->getExtension("native_profiler");
        $__internal_8f89e0823942fcf3bb19e279cf75b16daee7cf582643069748fc61e71968a160->enter($__internal_8f89e0823942fcf3bb19e279cf75b16daee7cf582643069748fc61e71968a160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8f89e0823942fcf3bb19e279cf75b16daee7cf582643069748fc61e71968a160->leave($__internal_8f89e0823942fcf3bb19e279cf75b16daee7cf582643069748fc61e71968a160_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b69a0df662ac8667feb720e5f7e090e5552bcbd0e25e92db25e08e75344aa4c8 = $this->env->getExtension("native_profiler");
        $__internal_b69a0df662ac8667feb720e5f7e090e5552bcbd0e25e92db25e08e75344aa4c8->enter($__internal_b69a0df662ac8667feb720e5f7e090e5552bcbd0e25e92db25e08e75344aa4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b69a0df662ac8667feb720e5f7e090e5552bcbd0e25e92db25e08e75344aa4c8->leave($__internal_b69a0df662ac8667feb720e5f7e090e5552bcbd0e25e92db25e08e75344aa4c8_prof);

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

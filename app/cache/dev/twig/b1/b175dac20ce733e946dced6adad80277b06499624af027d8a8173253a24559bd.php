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
        $__internal_0b823ea2153afd78273c1986b3f283715a01dbe5511aaaefd342e0b4731985cb = $this->env->getExtension("native_profiler");
        $__internal_0b823ea2153afd78273c1986b3f283715a01dbe5511aaaefd342e0b4731985cb->enter($__internal_0b823ea2153afd78273c1986b3f283715a01dbe5511aaaefd342e0b4731985cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b823ea2153afd78273c1986b3f283715a01dbe5511aaaefd342e0b4731985cb->leave($__internal_0b823ea2153afd78273c1986b3f283715a01dbe5511aaaefd342e0b4731985cb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_753bc8e60052a815a188a32cfebff8aa93c32a5976b0993c1a715ccaa8c1f804 = $this->env->getExtension("native_profiler");
        $__internal_753bc8e60052a815a188a32cfebff8aa93c32a5976b0993c1a715ccaa8c1f804->enter($__internal_753bc8e60052a815a188a32cfebff8aa93c32a5976b0993c1a715ccaa8c1f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_753bc8e60052a815a188a32cfebff8aa93c32a5976b0993c1a715ccaa8c1f804->leave($__internal_753bc8e60052a815a188a32cfebff8aa93c32a5976b0993c1a715ccaa8c1f804_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e86410c6f3cd0ee6a06f96234177bd91034f8e7ee2f5462df8d283fe3b004194 = $this->env->getExtension("native_profiler");
        $__internal_e86410c6f3cd0ee6a06f96234177bd91034f8e7ee2f5462df8d283fe3b004194->enter($__internal_e86410c6f3cd0ee6a06f96234177bd91034f8e7ee2f5462df8d283fe3b004194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e86410c6f3cd0ee6a06f96234177bd91034f8e7ee2f5462df8d283fe3b004194->leave($__internal_e86410c6f3cd0ee6a06f96234177bd91034f8e7ee2f5462df8d283fe3b004194_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1a6ea940a9f30730196a10d0df3e9b921b3125fd8d010cf6094c3c79a8e1333b = $this->env->getExtension("native_profiler");
        $__internal_1a6ea940a9f30730196a10d0df3e9b921b3125fd8d010cf6094c3c79a8e1333b->enter($__internal_1a6ea940a9f30730196a10d0df3e9b921b3125fd8d010cf6094c3c79a8e1333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1a6ea940a9f30730196a10d0df3e9b921b3125fd8d010cf6094c3c79a8e1333b->leave($__internal_1a6ea940a9f30730196a10d0df3e9b921b3125fd8d010cf6094c3c79a8e1333b_prof);

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

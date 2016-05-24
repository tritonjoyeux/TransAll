<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_a9bcd0e537356989978544d25542d5a2f5abba6c8d8523dd504eea28864681eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25001ee04cff6dd9b8106d9923d2cbfe2cedaac967c7fa8f608f6d4f511df48f = $this->env->getExtension("native_profiler");
        $__internal_25001ee04cff6dd9b8106d9923d2cbfe2cedaac967c7fa8f608f6d4f511df48f->enter($__internal_25001ee04cff6dd9b8106d9923d2cbfe2cedaac967c7fa8f608f6d4f511df48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25001ee04cff6dd9b8106d9923d2cbfe2cedaac967c7fa8f608f6d4f511df48f->leave($__internal_25001ee04cff6dd9b8106d9923d2cbfe2cedaac967c7fa8f608f6d4f511df48f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ee4fb181473a3fe181f1fb1af7c20ae3c8bbee626bb238f73f9ae615e8c9d39 = $this->env->getExtension("native_profiler");
        $__internal_3ee4fb181473a3fe181f1fb1af7c20ae3c8bbee626bb238f73f9ae615e8c9d39->enter($__internal_3ee4fb181473a3fe181f1fb1af7c20ae3c8bbee626bb238f73f9ae615e8c9d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3ee4fb181473a3fe181f1fb1af7c20ae3c8bbee626bb238f73f9ae615e8c9d39->leave($__internal_3ee4fb181473a3fe181f1fb1af7c20ae3c8bbee626bb238f73f9ae615e8c9d39_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

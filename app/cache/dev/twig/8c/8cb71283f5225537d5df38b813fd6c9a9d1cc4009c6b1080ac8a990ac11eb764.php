<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_5252c1306270e1a53639553cf5d38155e3c1a60c8b43c3ca8217b894b2b5df22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_0100e4cd8362a22dda24bc9bee1e248c1f0f7bf7ae9f4509d99d029325fe474d = $this->env->getExtension("native_profiler");
        $__internal_0100e4cd8362a22dda24bc9bee1e248c1f0f7bf7ae9f4509d99d029325fe474d->enter($__internal_0100e4cd8362a22dda24bc9bee1e248c1f0f7bf7ae9f4509d99d029325fe474d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0100e4cd8362a22dda24bc9bee1e248c1f0f7bf7ae9f4509d99d029325fe474d->leave($__internal_0100e4cd8362a22dda24bc9bee1e248c1f0f7bf7ae9f4509d99d029325fe474d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2f97e4d45ce342e24ed221815a50d86ab817902ba8aca5a3c06c7fe15e2a958 = $this->env->getExtension("native_profiler");
        $__internal_b2f97e4d45ce342e24ed221815a50d86ab817902ba8aca5a3c06c7fe15e2a958->enter($__internal_b2f97e4d45ce342e24ed221815a50d86ab817902ba8aca5a3c06c7fe15e2a958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b2f97e4d45ce342e24ed221815a50d86ab817902ba8aca5a3c06c7fe15e2a958->leave($__internal_b2f97e4d45ce342e24ed221815a50d86ab817902ba8aca5a3c06c7fe15e2a958_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a516052df0c92a2a124858d8a86ab307f678318b7903e1e5fd46efc5af0d8e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_0ad1ac3c9ab054f341a34d804e6ff8740b0913dafc00b2bb9470810506e8fe70 = $this->env->getExtension("native_profiler");
        $__internal_0ad1ac3c9ab054f341a34d804e6ff8740b0913dafc00b2bb9470810506e8fe70->enter($__internal_0ad1ac3c9ab054f341a34d804e6ff8740b0913dafc00b2bb9470810506e8fe70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad1ac3c9ab054f341a34d804e6ff8740b0913dafc00b2bb9470810506e8fe70->leave($__internal_0ad1ac3c9ab054f341a34d804e6ff8740b0913dafc00b2bb9470810506e8fe70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8736f1e08cba5e77bfcc7b25f3423ee7080c2bd97902fd7ebc2031f074437750 = $this->env->getExtension("native_profiler");
        $__internal_8736f1e08cba5e77bfcc7b25f3423ee7080c2bd97902fd7ebc2031f074437750->enter($__internal_8736f1e08cba5e77bfcc7b25f3423ee7080c2bd97902fd7ebc2031f074437750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8736f1e08cba5e77bfcc7b25f3423ee7080c2bd97902fd7ebc2031f074437750->leave($__internal_8736f1e08cba5e77bfcc7b25f3423ee7080c2bd97902fd7ebc2031f074437750_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

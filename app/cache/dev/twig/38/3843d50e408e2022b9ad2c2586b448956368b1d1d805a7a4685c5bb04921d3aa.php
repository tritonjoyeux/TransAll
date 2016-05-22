<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5ee74090486d83ad6c2887949c33410940faf11f6d4c37fbb91960e4ff302eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_17c85a2d1f9499e800777687de5e6802ed1c14d2e68230190e81c313754d7e6f = $this->env->getExtension("native_profiler");
        $__internal_17c85a2d1f9499e800777687de5e6802ed1c14d2e68230190e81c313754d7e6f->enter($__internal_17c85a2d1f9499e800777687de5e6802ed1c14d2e68230190e81c313754d7e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c85a2d1f9499e800777687de5e6802ed1c14d2e68230190e81c313754d7e6f->leave($__internal_17c85a2d1f9499e800777687de5e6802ed1c14d2e68230190e81c313754d7e6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4914b2f4df9e669ea08ad8124e5380ef91236b114e3b0f6762497bf5082122b3 = $this->env->getExtension("native_profiler");
        $__internal_4914b2f4df9e669ea08ad8124e5380ef91236b114e3b0f6762497bf5082122b3->enter($__internal_4914b2f4df9e669ea08ad8124e5380ef91236b114e3b0f6762497bf5082122b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4914b2f4df9e669ea08ad8124e5380ef91236b114e3b0f6762497bf5082122b3->leave($__internal_4914b2f4df9e669ea08ad8124e5380ef91236b114e3b0f6762497bf5082122b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

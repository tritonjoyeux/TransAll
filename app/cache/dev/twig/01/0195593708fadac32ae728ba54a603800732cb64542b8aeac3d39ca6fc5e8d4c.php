<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cf2fa362ebceb3c65bea48d4df872f030ffd287df7386d5d283df55277859445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e0e9aaef99fdab8983d68a3fbdfded15d4aa124a5227a74f209b127a34c9172f = $this->env->getExtension("native_profiler");
        $__internal_e0e9aaef99fdab8983d68a3fbdfded15d4aa124a5227a74f209b127a34c9172f->enter($__internal_e0e9aaef99fdab8983d68a3fbdfded15d4aa124a5227a74f209b127a34c9172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e9aaef99fdab8983d68a3fbdfded15d4aa124a5227a74f209b127a34c9172f->leave($__internal_e0e9aaef99fdab8983d68a3fbdfded15d4aa124a5227a74f209b127a34c9172f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cea544dce27f9b6b921b0b0dd64122ceb6d82ba9166403e8a542e6f15c9a92d = $this->env->getExtension("native_profiler");
        $__internal_0cea544dce27f9b6b921b0b0dd64122ceb6d82ba9166403e8a542e6f15c9a92d->enter($__internal_0cea544dce27f9b6b921b0b0dd64122ceb6d82ba9166403e8a542e6f15c9a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0cea544dce27f9b6b921b0b0dd64122ceb6d82ba9166403e8a542e6f15c9a92d->leave($__internal_0cea544dce27f9b6b921b0b0dd64122ceb6d82ba9166403e8a542e6f15c9a92d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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

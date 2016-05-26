<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_022027739b49209c045eb5337ae17a93031b1482c8ad9bbfbc8be10aaa1d3fb4 extends Twig_Template
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
        $__internal_c93d7922da008552e332cfe321778f63a28ed03cdc759a336097849664836a30 = $this->env->getExtension("native_profiler");
        $__internal_c93d7922da008552e332cfe321778f63a28ed03cdc759a336097849664836a30->enter($__internal_c93d7922da008552e332cfe321778f63a28ed03cdc759a336097849664836a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93d7922da008552e332cfe321778f63a28ed03cdc759a336097849664836a30->leave($__internal_c93d7922da008552e332cfe321778f63a28ed03cdc759a336097849664836a30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42a30e0b71822bae2683844351303761dec210ff133272c6ca36fdb1c3bd6fcf = $this->env->getExtension("native_profiler");
        $__internal_42a30e0b71822bae2683844351303761dec210ff133272c6ca36fdb1c3bd6fcf->enter($__internal_42a30e0b71822bae2683844351303761dec210ff133272c6ca36fdb1c3bd6fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_42a30e0b71822bae2683844351303761dec210ff133272c6ca36fdb1c3bd6fcf->leave($__internal_42a30e0b71822bae2683844351303761dec210ff133272c6ca36fdb1c3bd6fcf_prof);

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

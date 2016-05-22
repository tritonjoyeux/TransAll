<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_429f2b0cd22261428b74cea6dd537b182a98d6e638d4ed6829d612f56d3d4e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_2d131f0da17fcf2b0603f0d7b5d4bd511264614ce231e041c3a7b22402a64d0c = $this->env->getExtension("native_profiler");
        $__internal_2d131f0da17fcf2b0603f0d7b5d4bd511264614ce231e041c3a7b22402a64d0c->enter($__internal_2d131f0da17fcf2b0603f0d7b5d4bd511264614ce231e041c3a7b22402a64d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d131f0da17fcf2b0603f0d7b5d4bd511264614ce231e041c3a7b22402a64d0c->leave($__internal_2d131f0da17fcf2b0603f0d7b5d4bd511264614ce231e041c3a7b22402a64d0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_779f167daf13a1e17735cd3e66008aff2ef853c6a2e773718262e950dd422427 = $this->env->getExtension("native_profiler");
        $__internal_779f167daf13a1e17735cd3e66008aff2ef853c6a2e773718262e950dd422427->enter($__internal_779f167daf13a1e17735cd3e66008aff2ef853c6a2e773718262e950dd422427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_779f167daf13a1e17735cd3e66008aff2ef853c6a2e773718262e950dd422427->leave($__internal_779f167daf13a1e17735cd3e66008aff2ef853c6a2e773718262e950dd422427_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

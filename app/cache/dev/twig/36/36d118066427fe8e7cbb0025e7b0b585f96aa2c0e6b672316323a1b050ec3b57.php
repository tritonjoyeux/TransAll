<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_60cc38b72a705dbf0eff3452b9d5a4970b25da95c688c9e887785a36c37f0c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_40f0498cb5ada177c6046706f66655eab22a400f49c700c34cf66314d2d6284b = $this->env->getExtension("native_profiler");
        $__internal_40f0498cb5ada177c6046706f66655eab22a400f49c700c34cf66314d2d6284b->enter($__internal_40f0498cb5ada177c6046706f66655eab22a400f49c700c34cf66314d2d6284b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f0498cb5ada177c6046706f66655eab22a400f49c700c34cf66314d2d6284b->leave($__internal_40f0498cb5ada177c6046706f66655eab22a400f49c700c34cf66314d2d6284b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4213b4881d4dc4d69e1fdb7c0d123d1bb38924420cd4d203f1e4ee77dd30ea59 = $this->env->getExtension("native_profiler");
        $__internal_4213b4881d4dc4d69e1fdb7c0d123d1bb38924420cd4d203f1e4ee77dd30ea59->enter($__internal_4213b4881d4dc4d69e1fdb7c0d123d1bb38924420cd4d203f1e4ee77dd30ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4213b4881d4dc4d69e1fdb7c0d123d1bb38924420cd4d203f1e4ee77dd30ea59->leave($__internal_4213b4881d4dc4d69e1fdb7c0d123d1bb38924420cd4d203f1e4ee77dd30ea59_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

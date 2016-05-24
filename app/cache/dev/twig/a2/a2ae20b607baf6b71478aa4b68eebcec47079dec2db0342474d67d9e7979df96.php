<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6190fccdca6e4007ced54745409ac13378fc48b80cfa08a0488dd9eb0920fd29 extends Twig_Template
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
        $__internal_c35b87bd3b49908ce08cfb69d7580bdee2f44e9aed68281221298766e7ffad5a = $this->env->getExtension("native_profiler");
        $__internal_c35b87bd3b49908ce08cfb69d7580bdee2f44e9aed68281221298766e7ffad5a->enter($__internal_c35b87bd3b49908ce08cfb69d7580bdee2f44e9aed68281221298766e7ffad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35b87bd3b49908ce08cfb69d7580bdee2f44e9aed68281221298766e7ffad5a->leave($__internal_c35b87bd3b49908ce08cfb69d7580bdee2f44e9aed68281221298766e7ffad5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aff191149c805d898fec197606b31e316a8d3b273f5e6d7548273d847c48df5b = $this->env->getExtension("native_profiler");
        $__internal_aff191149c805d898fec197606b31e316a8d3b273f5e6d7548273d847c48df5b->enter($__internal_aff191149c805d898fec197606b31e316a8d3b273f5e6d7548273d847c48df5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_aff191149c805d898fec197606b31e316a8d3b273f5e6d7548273d847c48df5b->leave($__internal_aff191149c805d898fec197606b31e316a8d3b273f5e6d7548273d847c48df5b_prof);

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

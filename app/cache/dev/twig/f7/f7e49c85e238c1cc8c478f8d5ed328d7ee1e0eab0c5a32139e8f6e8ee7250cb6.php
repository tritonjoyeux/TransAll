<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_6dbb28e3773d195dfb4b9ae7015d1bab47d861edbeccc3a71b694940f73f296b extends Twig_Template
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
        $__internal_ba1b8d33d04e2c321a54df7d5644f62b2125df999ca972128a056b38e8d10f3a = $this->env->getExtension("native_profiler");
        $__internal_ba1b8d33d04e2c321a54df7d5644f62b2125df999ca972128a056b38e8d10f3a->enter($__internal_ba1b8d33d04e2c321a54df7d5644f62b2125df999ca972128a056b38e8d10f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1b8d33d04e2c321a54df7d5644f62b2125df999ca972128a056b38e8d10f3a->leave($__internal_ba1b8d33d04e2c321a54df7d5644f62b2125df999ca972128a056b38e8d10f3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4825e7a70570cb743791e8937672acb678b39c7da08145c53094657b9a0ca93 = $this->env->getExtension("native_profiler");
        $__internal_e4825e7a70570cb743791e8937672acb678b39c7da08145c53094657b9a0ca93->enter($__internal_e4825e7a70570cb743791e8937672acb678b39c7da08145c53094657b9a0ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e4825e7a70570cb743791e8937672acb678b39c7da08145c53094657b9a0ca93->leave($__internal_e4825e7a70570cb743791e8937672acb678b39c7da08145c53094657b9a0ca93_prof);

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

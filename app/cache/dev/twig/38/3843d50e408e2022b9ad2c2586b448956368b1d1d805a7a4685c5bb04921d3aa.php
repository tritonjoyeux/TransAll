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
        $__internal_1e409b4132af8c50652b788103bc17ddf85df3471593678ccc332d9c6e939f2a = $this->env->getExtension("native_profiler");
        $__internal_1e409b4132af8c50652b788103bc17ddf85df3471593678ccc332d9c6e939f2a->enter($__internal_1e409b4132af8c50652b788103bc17ddf85df3471593678ccc332d9c6e939f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e409b4132af8c50652b788103bc17ddf85df3471593678ccc332d9c6e939f2a->leave($__internal_1e409b4132af8c50652b788103bc17ddf85df3471593678ccc332d9c6e939f2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f97dd26e3d8ec09c2015731bf46f24c7b296757334b8d051a14a022b59b1698b = $this->env->getExtension("native_profiler");
        $__internal_f97dd26e3d8ec09c2015731bf46f24c7b296757334b8d051a14a022b59b1698b->enter($__internal_f97dd26e3d8ec09c2015731bf46f24c7b296757334b8d051a14a022b59b1698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f97dd26e3d8ec09c2015731bf46f24c7b296757334b8d051a14a022b59b1698b->leave($__internal_f97dd26e3d8ec09c2015731bf46f24c7b296757334b8d051a14a022b59b1698b_prof);

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

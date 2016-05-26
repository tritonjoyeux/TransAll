<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c9f71c24e9eb97381b92c3650c20de9bd2ef255b377cdf272ad43de2e6abe2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_955f42fba97f900534f3d5f4086f3d4617a1c6cab55eef54333defe7f6c58034 = $this->env->getExtension("native_profiler");
        $__internal_955f42fba97f900534f3d5f4086f3d4617a1c6cab55eef54333defe7f6c58034->enter($__internal_955f42fba97f900534f3d5f4086f3d4617a1c6cab55eef54333defe7f6c58034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955f42fba97f900534f3d5f4086f3d4617a1c6cab55eef54333defe7f6c58034->leave($__internal_955f42fba97f900534f3d5f4086f3d4617a1c6cab55eef54333defe7f6c58034_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22654987332e481f22bbc0dc1280c74276544d3af21c4eb58f2164191455c815 = $this->env->getExtension("native_profiler");
        $__internal_22654987332e481f22bbc0dc1280c74276544d3af21c4eb58f2164191455c815->enter($__internal_22654987332e481f22bbc0dc1280c74276544d3af21c4eb58f2164191455c815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_22654987332e481f22bbc0dc1280c74276544d3af21c4eb58f2164191455c815->leave($__internal_22654987332e481f22bbc0dc1280c74276544d3af21c4eb58f2164191455c815_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

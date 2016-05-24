<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e5d33961c4b8fe10ddd40aed167dad4681cdfa6ffdd95e7f2aee721e43f3e77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d1a24ca67f0c0ddebf5f517a6fae6fd303573201d51771cd9d10f1755b27ad91 = $this->env->getExtension("native_profiler");
        $__internal_d1a24ca67f0c0ddebf5f517a6fae6fd303573201d51771cd9d10f1755b27ad91->enter($__internal_d1a24ca67f0c0ddebf5f517a6fae6fd303573201d51771cd9d10f1755b27ad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a24ca67f0c0ddebf5f517a6fae6fd303573201d51771cd9d10f1755b27ad91->leave($__internal_d1a24ca67f0c0ddebf5f517a6fae6fd303573201d51771cd9d10f1755b27ad91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c48e33c46ae9cf993d08ba15b58d568f3d1a49c1fa5282335485bed349f314ab = $this->env->getExtension("native_profiler");
        $__internal_c48e33c46ae9cf993d08ba15b58d568f3d1a49c1fa5282335485bed349f314ab->enter($__internal_c48e33c46ae9cf993d08ba15b58d568f3d1a49c1fa5282335485bed349f314ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c48e33c46ae9cf993d08ba15b58d568f3d1a49c1fa5282335485bed349f314ab->leave($__internal_c48e33c46ae9cf993d08ba15b58d568f3d1a49c1fa5282335485bed349f314ab_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

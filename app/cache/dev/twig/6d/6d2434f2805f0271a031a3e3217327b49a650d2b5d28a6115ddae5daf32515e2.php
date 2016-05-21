<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_9a0de1894b5bd55d18ac49ec7f0ba4b6a86c95a4c106291dabeae75397f98783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_9ff36442a7bbdb24b59fbe772e7a927f44940a81d5d127b6f099480b5d9942d8 = $this->env->getExtension("native_profiler");
        $__internal_9ff36442a7bbdb24b59fbe772e7a927f44940a81d5d127b6f099480b5d9942d8->enter($__internal_9ff36442a7bbdb24b59fbe772e7a927f44940a81d5d127b6f099480b5d9942d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff36442a7bbdb24b59fbe772e7a927f44940a81d5d127b6f099480b5d9942d8->leave($__internal_9ff36442a7bbdb24b59fbe772e7a927f44940a81d5d127b6f099480b5d9942d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c73bc860de5dd743140c6bd56d53de52020a329beafc94f44153657dd1427d6 = $this->env->getExtension("native_profiler");
        $__internal_4c73bc860de5dd743140c6bd56d53de52020a329beafc94f44153657dd1427d6->enter($__internal_4c73bc860de5dd743140c6bd56d53de52020a329beafc94f44153657dd1427d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4c73bc860de5dd743140c6bd56d53de52020a329beafc94f44153657dd1427d6->leave($__internal_4c73bc860de5dd743140c6bd56d53de52020a329beafc94f44153657dd1427d6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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

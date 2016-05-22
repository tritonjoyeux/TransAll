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
        $__internal_b2236681afc5fc00411d1745fbac9b9375936e2e76861dc53f12e7b51bfc29d0 = $this->env->getExtension("native_profiler");
        $__internal_b2236681afc5fc00411d1745fbac9b9375936e2e76861dc53f12e7b51bfc29d0->enter($__internal_b2236681afc5fc00411d1745fbac9b9375936e2e76861dc53f12e7b51bfc29d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2236681afc5fc00411d1745fbac9b9375936e2e76861dc53f12e7b51bfc29d0->leave($__internal_b2236681afc5fc00411d1745fbac9b9375936e2e76861dc53f12e7b51bfc29d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1346187d68a81652784152e8f4742791744cfd41d6ad878197d42d0650e1b8e6 = $this->env->getExtension("native_profiler");
        $__internal_1346187d68a81652784152e8f4742791744cfd41d6ad878197d42d0650e1b8e6->enter($__internal_1346187d68a81652784152e8f4742791744cfd41d6ad878197d42d0650e1b8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1346187d68a81652784152e8f4742791744cfd41d6ad878197d42d0650e1b8e6->leave($__internal_1346187d68a81652784152e8f4742791744cfd41d6ad878197d42d0650e1b8e6_prof);

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

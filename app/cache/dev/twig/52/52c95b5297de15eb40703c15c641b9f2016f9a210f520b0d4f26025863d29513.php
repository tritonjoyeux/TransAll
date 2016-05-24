<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_0cdd4d71bc6e2551d388d3d261c29432ee40d492f60d0e846c9a4f4040f54923 extends Twig_Template
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
        $__internal_b1f72518b67d3bbab348760a0e6788e33d7ace5be8c9f73515f803cd5c425ff1 = $this->env->getExtension("native_profiler");
        $__internal_b1f72518b67d3bbab348760a0e6788e33d7ace5be8c9f73515f803cd5c425ff1->enter($__internal_b1f72518b67d3bbab348760a0e6788e33d7ace5be8c9f73515f803cd5c425ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f72518b67d3bbab348760a0e6788e33d7ace5be8c9f73515f803cd5c425ff1->leave($__internal_b1f72518b67d3bbab348760a0e6788e33d7ace5be8c9f73515f803cd5c425ff1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_080820fef00f27dfaf454a8b46636ec1dfd90a8e386747720976c8a4f6f3f769 = $this->env->getExtension("native_profiler");
        $__internal_080820fef00f27dfaf454a8b46636ec1dfd90a8e386747720976c8a4f6f3f769->enter($__internal_080820fef00f27dfaf454a8b46636ec1dfd90a8e386747720976c8a4f6f3f769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_080820fef00f27dfaf454a8b46636ec1dfd90a8e386747720976c8a4f6f3f769->leave($__internal_080820fef00f27dfaf454a8b46636ec1dfd90a8e386747720976c8a4f6f3f769_prof);

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

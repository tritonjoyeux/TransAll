<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_30e46665d98833da95efee7e85c3df83d65e9fd936c23aa24e1eed87552be570 extends Twig_Template
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
        $__internal_a0a7d1b73326af9ddf9139525d09e9b35c6272e9e085f57dff4d25f19d0b3c6b = $this->env->getExtension("native_profiler");
        $__internal_a0a7d1b73326af9ddf9139525d09e9b35c6272e9e085f57dff4d25f19d0b3c6b->enter($__internal_a0a7d1b73326af9ddf9139525d09e9b35c6272e9e085f57dff4d25f19d0b3c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a7d1b73326af9ddf9139525d09e9b35c6272e9e085f57dff4d25f19d0b3c6b->leave($__internal_a0a7d1b73326af9ddf9139525d09e9b35c6272e9e085f57dff4d25f19d0b3c6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01d4c738e7550b31562d1c20056388dce0100fb412053abfd93d64d4ec666185 = $this->env->getExtension("native_profiler");
        $__internal_01d4c738e7550b31562d1c20056388dce0100fb412053abfd93d64d4ec666185->enter($__internal_01d4c738e7550b31562d1c20056388dce0100fb412053abfd93d64d4ec666185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_01d4c738e7550b31562d1c20056388dce0100fb412053abfd93d64d4ec666185->leave($__internal_01d4c738e7550b31562d1c20056388dce0100fb412053abfd93d64d4ec666185_prof);

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

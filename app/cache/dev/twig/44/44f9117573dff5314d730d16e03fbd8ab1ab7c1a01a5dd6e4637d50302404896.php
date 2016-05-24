<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_0f8e6b82df6f9a43c8b34435c01f2a069f77305e3729d141230db97df403499d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_dcc1788cd845afcab93b95933d8a99900d597906a8222d9c4cea49ed9593ef82 = $this->env->getExtension("native_profiler");
        $__internal_dcc1788cd845afcab93b95933d8a99900d597906a8222d9c4cea49ed9593ef82->enter($__internal_dcc1788cd845afcab93b95933d8a99900d597906a8222d9c4cea49ed9593ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc1788cd845afcab93b95933d8a99900d597906a8222d9c4cea49ed9593ef82->leave($__internal_dcc1788cd845afcab93b95933d8a99900d597906a8222d9c4cea49ed9593ef82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32c84686be4d22b7e763ce0ecb7ac235fe83963f932268bf6e1934aa918e2ada = $this->env->getExtension("native_profiler");
        $__internal_32c84686be4d22b7e763ce0ecb7ac235fe83963f932268bf6e1934aa918e2ada->enter($__internal_32c84686be4d22b7e763ce0ecb7ac235fe83963f932268bf6e1934aa918e2ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_32c84686be4d22b7e763ce0ecb7ac235fe83963f932268bf6e1934aa918e2ada->leave($__internal_32c84686be4d22b7e763ce0ecb7ac235fe83963f932268bf6e1934aa918e2ada_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

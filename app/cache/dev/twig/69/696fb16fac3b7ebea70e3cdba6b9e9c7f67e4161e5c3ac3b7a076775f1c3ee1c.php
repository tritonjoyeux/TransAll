<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_abb6f3a86ff3feab086571f4b27663416faa7bc770ac775e7d7485e6a00c2281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_8ffd2524b8cc96e3b9fa97e4770a04ac0eded1c6eb620e88d6b934d45775c7e6 = $this->env->getExtension("native_profiler");
        $__internal_8ffd2524b8cc96e3b9fa97e4770a04ac0eded1c6eb620e88d6b934d45775c7e6->enter($__internal_8ffd2524b8cc96e3b9fa97e4770a04ac0eded1c6eb620e88d6b934d45775c7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffd2524b8cc96e3b9fa97e4770a04ac0eded1c6eb620e88d6b934d45775c7e6->leave($__internal_8ffd2524b8cc96e3b9fa97e4770a04ac0eded1c6eb620e88d6b934d45775c7e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88ea986d9b032f4dfa5ec9cfbd91208a5bc908e4f65248a9a45288baaa5bfbd5 = $this->env->getExtension("native_profiler");
        $__internal_88ea986d9b032f4dfa5ec9cfbd91208a5bc908e4f65248a9a45288baaa5bfbd5->enter($__internal_88ea986d9b032f4dfa5ec9cfbd91208a5bc908e4f65248a9a45288baaa5bfbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_88ea986d9b032f4dfa5ec9cfbd91208a5bc908e4f65248a9a45288baaa5bfbd5->leave($__internal_88ea986d9b032f4dfa5ec9cfbd91208a5bc908e4f65248a9a45288baaa5bfbd5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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

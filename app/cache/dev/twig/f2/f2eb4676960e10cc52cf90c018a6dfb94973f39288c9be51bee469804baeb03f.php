<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_2250fe14c3f54aa1787ebf7fe4b7ba59f8b124670f0abf63b69e86ad2b2c6fe4 extends Twig_Template
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
        $__internal_6fd2d0c6077653e04b73328cee9fc569c3239f27412107a5b9a3f2825e0f979b = $this->env->getExtension("native_profiler");
        $__internal_6fd2d0c6077653e04b73328cee9fc569c3239f27412107a5b9a3f2825e0f979b->enter($__internal_6fd2d0c6077653e04b73328cee9fc569c3239f27412107a5b9a3f2825e0f979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd2d0c6077653e04b73328cee9fc569c3239f27412107a5b9a3f2825e0f979b->leave($__internal_6fd2d0c6077653e04b73328cee9fc569c3239f27412107a5b9a3f2825e0f979b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dd69dcb25aa30ff24be0557831ea1f461f043126a93493f63bc227b902eda57 = $this->env->getExtension("native_profiler");
        $__internal_1dd69dcb25aa30ff24be0557831ea1f461f043126a93493f63bc227b902eda57->enter($__internal_1dd69dcb25aa30ff24be0557831ea1f461f043126a93493f63bc227b902eda57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1dd69dcb25aa30ff24be0557831ea1f461f043126a93493f63bc227b902eda57->leave($__internal_1dd69dcb25aa30ff24be0557831ea1f461f043126a93493f63bc227b902eda57_prof);

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

<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_897bde251d55a362af6019087a58cfb54183b1b2fe00983726f3604473cee722 extends Twig_Template
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
        $__internal_9779c5cd98e46b0c3d07d04a5e57b3c615ec69cd18c535ed078b41276d46bb4c = $this->env->getExtension("native_profiler");
        $__internal_9779c5cd98e46b0c3d07d04a5e57b3c615ec69cd18c535ed078b41276d46bb4c->enter($__internal_9779c5cd98e46b0c3d07d04a5e57b3c615ec69cd18c535ed078b41276d46bb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9779c5cd98e46b0c3d07d04a5e57b3c615ec69cd18c535ed078b41276d46bb4c->leave($__internal_9779c5cd98e46b0c3d07d04a5e57b3c615ec69cd18c535ed078b41276d46bb4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8582b57f2d4e3bd3f7a228e4ac1f59ee48cbc1c8a7fc629dfe767cb6cfa8714 = $this->env->getExtension("native_profiler");
        $__internal_d8582b57f2d4e3bd3f7a228e4ac1f59ee48cbc1c8a7fc629dfe767cb6cfa8714->enter($__internal_d8582b57f2d4e3bd3f7a228e4ac1f59ee48cbc1c8a7fc629dfe767cb6cfa8714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d8582b57f2d4e3bd3f7a228e4ac1f59ee48cbc1c8a7fc629dfe767cb6cfa8714->leave($__internal_d8582b57f2d4e3bd3f7a228e4ac1f59ee48cbc1c8a7fc629dfe767cb6cfa8714_prof);

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

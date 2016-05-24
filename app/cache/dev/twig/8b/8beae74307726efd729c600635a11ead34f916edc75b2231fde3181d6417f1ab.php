<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_ac49d3baa476932d08c97a42838359ca2777a73d6cbd42f5a4ed520212f9fd16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/register.html.twig", 1);
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
        $__internal_fd8338a3611060918e7ff6105236a301e9b72b6ef0fe5296353c5af06a9ad357 = $this->env->getExtension("native_profiler");
        $__internal_fd8338a3611060918e7ff6105236a301e9b72b6ef0fe5296353c5af06a9ad357->enter($__internal_fd8338a3611060918e7ff6105236a301e9b72b6ef0fe5296353c5af06a9ad357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd8338a3611060918e7ff6105236a301e9b72b6ef0fe5296353c5af06a9ad357->leave($__internal_fd8338a3611060918e7ff6105236a301e9b72b6ef0fe5296353c5af06a9ad357_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20539ebb696fd2f73b815c3bdcea98b3749e6ff210c3a26c58857f451b1c3c03 = $this->env->getExtension("native_profiler");
        $__internal_20539ebb696fd2f73b815c3bdcea98b3749e6ff210c3a26c58857f451b1c3c03->enter($__internal_20539ebb696fd2f73b815c3bdcea98b3749e6ff210c3a26c58857f451b1c3c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_20539ebb696fd2f73b815c3bdcea98b3749e6ff210c3a26c58857f451b1c3c03->leave($__internal_20539ebb696fd2f73b815c3bdcea98b3749e6ff210c3a26c58857f451b1c3c03_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

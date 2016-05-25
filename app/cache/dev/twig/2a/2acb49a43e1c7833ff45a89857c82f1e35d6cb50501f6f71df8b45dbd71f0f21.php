<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_72c25ba857883c13abda0d4d3d89c16f9ea5e5f169d504a840368abdcb25140c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_fc6cfd8147a4130e86debedd057ebdf8e60a0172e4387518c5463a0d81fdda7f = $this->env->getExtension("native_profiler");
        $__internal_fc6cfd8147a4130e86debedd057ebdf8e60a0172e4387518c5463a0d81fdda7f->enter($__internal_fc6cfd8147a4130e86debedd057ebdf8e60a0172e4387518c5463a0d81fdda7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc6cfd8147a4130e86debedd057ebdf8e60a0172e4387518c5463a0d81fdda7f->leave($__internal_fc6cfd8147a4130e86debedd057ebdf8e60a0172e4387518c5463a0d81fdda7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6721fb833adcabccb5572bf9b6c3fa124a3faeccc660871f95b5e491313041b8 = $this->env->getExtension("native_profiler");
        $__internal_6721fb833adcabccb5572bf9b6c3fa124a3faeccc660871f95b5e491313041b8->enter($__internal_6721fb833adcabccb5572bf9b6c3fa124a3faeccc660871f95b5e491313041b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6721fb833adcabccb5572bf9b6c3fa124a3faeccc660871f95b5e491313041b8->leave($__internal_6721fb833adcabccb5572bf9b6c3fa124a3faeccc660871f95b5e491313041b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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

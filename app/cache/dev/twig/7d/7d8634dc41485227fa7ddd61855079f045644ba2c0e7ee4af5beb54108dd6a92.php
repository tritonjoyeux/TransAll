<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_2d2ec99a5372b78d084a8b68c25a853ed5d432fe60b2edb37b6a84fbd7da40b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_ad67a8505585856c84ecbe2d55b32cac2717c021dc88e4a0570860ea4190ecc0 = $this->env->getExtension("native_profiler");
        $__internal_ad67a8505585856c84ecbe2d55b32cac2717c021dc88e4a0570860ea4190ecc0->enter($__internal_ad67a8505585856c84ecbe2d55b32cac2717c021dc88e4a0570860ea4190ecc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad67a8505585856c84ecbe2d55b32cac2717c021dc88e4a0570860ea4190ecc0->leave($__internal_ad67a8505585856c84ecbe2d55b32cac2717c021dc88e4a0570860ea4190ecc0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80a7ea92832d87b53b43cf35858ddc95da211935b39578c4963d2e6aae6b1d5e = $this->env->getExtension("native_profiler");
        $__internal_80a7ea92832d87b53b43cf35858ddc95da211935b39578c4963d2e6aae6b1d5e->enter($__internal_80a7ea92832d87b53b43cf35858ddc95da211935b39578c4963d2e6aae6b1d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_80a7ea92832d87b53b43cf35858ddc95da211935b39578c4963d2e6aae6b1d5e->leave($__internal_80a7ea92832d87b53b43cf35858ddc95da211935b39578c4963d2e6aae6b1d5e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

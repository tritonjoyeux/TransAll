<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ed4d37f7b1f9ca415e4c00d6ce97332a35dbf1791e44c1246ab3204f0e2839a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_1cdd7036e41ffe8ec4b4ff52432736b9d95c9ca46bfd90501cfee38dc4baf56c = $this->env->getExtension("native_profiler");
        $__internal_1cdd7036e41ffe8ec4b4ff52432736b9d95c9ca46bfd90501cfee38dc4baf56c->enter($__internal_1cdd7036e41ffe8ec4b4ff52432736b9d95c9ca46bfd90501cfee38dc4baf56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cdd7036e41ffe8ec4b4ff52432736b9d95c9ca46bfd90501cfee38dc4baf56c->leave($__internal_1cdd7036e41ffe8ec4b4ff52432736b9d95c9ca46bfd90501cfee38dc4baf56c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9b8b5cea011adfdfbb51bab7e9c89d1cfa5fab644dc5d17a8fe9a67eba2ed75 = $this->env->getExtension("native_profiler");
        $__internal_c9b8b5cea011adfdfbb51bab7e9c89d1cfa5fab644dc5d17a8fe9a67eba2ed75->enter($__internal_c9b8b5cea011adfdfbb51bab7e9c89d1cfa5fab644dc5d17a8fe9a67eba2ed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c9b8b5cea011adfdfbb51bab7e9c89d1cfa5fab644dc5d17a8fe9a67eba2ed75->leave($__internal_c9b8b5cea011adfdfbb51bab7e9c89d1cfa5fab644dc5d17a8fe9a67eba2ed75_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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

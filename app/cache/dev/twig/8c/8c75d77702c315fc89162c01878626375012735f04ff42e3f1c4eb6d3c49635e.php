<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_422c3300dd8f4a163d071feb2ec3a98f278631539b5514f082660b904f272458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_630d08d5c3c19ca2b3ae16f84fc5a7ebdc1dfbb00915cf965bb8eedc49d78771 = $this->env->getExtension("native_profiler");
        $__internal_630d08d5c3c19ca2b3ae16f84fc5a7ebdc1dfbb00915cf965bb8eedc49d78771->enter($__internal_630d08d5c3c19ca2b3ae16f84fc5a7ebdc1dfbb00915cf965bb8eedc49d78771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630d08d5c3c19ca2b3ae16f84fc5a7ebdc1dfbb00915cf965bb8eedc49d78771->leave($__internal_630d08d5c3c19ca2b3ae16f84fc5a7ebdc1dfbb00915cf965bb8eedc49d78771_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc55916c1d75e8f1960886dc251ba31d16b6c1bf89211b18986d71051303bb6a = $this->env->getExtension("native_profiler");
        $__internal_dc55916c1d75e8f1960886dc251ba31d16b6c1bf89211b18986d71051303bb6a->enter($__internal_dc55916c1d75e8f1960886dc251ba31d16b6c1bf89211b18986d71051303bb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_dc55916c1d75e8f1960886dc251ba31d16b6c1bf89211b18986d71051303bb6a->leave($__internal_dc55916c1d75e8f1960886dc251ba31d16b6c1bf89211b18986d71051303bb6a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

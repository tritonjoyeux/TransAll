<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6dd84f370fe6182514aef8559a1501c2f3d59bdaa914ae493c28d506126949d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e545050701f7e3585485659ba8d4242bbf7ebe1c832abec9df5142c658d1ddc0 = $this->env->getExtension("native_profiler");
        $__internal_e545050701f7e3585485659ba8d4242bbf7ebe1c832abec9df5142c658d1ddc0->enter($__internal_e545050701f7e3585485659ba8d4242bbf7ebe1c832abec9df5142c658d1ddc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e545050701f7e3585485659ba8d4242bbf7ebe1c832abec9df5142c658d1ddc0->leave($__internal_e545050701f7e3585485659ba8d4242bbf7ebe1c832abec9df5142c658d1ddc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bdf6687387590a7706539b8657f985299757d81567bbdb62ef975c18ed19f2f = $this->env->getExtension("native_profiler");
        $__internal_7bdf6687387590a7706539b8657f985299757d81567bbdb62ef975c18ed19f2f->enter($__internal_7bdf6687387590a7706539b8657f985299757d81567bbdb62ef975c18ed19f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7bdf6687387590a7706539b8657f985299757d81567bbdb62ef975c18ed19f2f->leave($__internal_7bdf6687387590a7706539b8657f985299757d81567bbdb62ef975c18ed19f2f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

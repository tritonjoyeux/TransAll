<?php

/* @User/Group/new.html.twig */
class __TwigTemplate_f2ffb9a30bad2d43473fd60f70c6b6ba561967448c35611117f86dc92b8f4e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/new.html.twig", 1);
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
        $__internal_52bc064fbffc03e4c4e99504e98479af2a795d0ad248301bf01ba8822cb34196 = $this->env->getExtension("native_profiler");
        $__internal_52bc064fbffc03e4c4e99504e98479af2a795d0ad248301bf01ba8822cb34196->enter($__internal_52bc064fbffc03e4c4e99504e98479af2a795d0ad248301bf01ba8822cb34196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bc064fbffc03e4c4e99504e98479af2a795d0ad248301bf01ba8822cb34196->leave($__internal_52bc064fbffc03e4c4e99504e98479af2a795d0ad248301bf01ba8822cb34196_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ef7d4745097893d20116b12bdda360948dd78e0b4429942e449fc03816b190c = $this->env->getExtension("native_profiler");
        $__internal_3ef7d4745097893d20116b12bdda360948dd78e0b4429942e449fc03816b190c->enter($__internal_3ef7d4745097893d20116b12bdda360948dd78e0b4429942e449fc03816b190c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@User/Group/new.html.twig", 4)->display($context);
        
        $__internal_3ef7d4745097893d20116b12bdda360948dd78e0b4429942e449fc03816b190c->leave($__internal_3ef7d4745097893d20116b12bdda360948dd78e0b4429942e449fc03816b190c_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/new.html.twig";
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

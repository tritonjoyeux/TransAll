<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_7337dbc854480229f83b3e2f2bdbf602509b7c4acafa26a3f1717d2d25f0e303 extends Twig_Template
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
        $__internal_e81f9baafac26ac8f3480d0a0ea78129006a991f523015badbf49d5126b4efab = $this->env->getExtension("native_profiler");
        $__internal_e81f9baafac26ac8f3480d0a0ea78129006a991f523015badbf49d5126b4efab->enter($__internal_e81f9baafac26ac8f3480d0a0ea78129006a991f523015badbf49d5126b4efab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e81f9baafac26ac8f3480d0a0ea78129006a991f523015badbf49d5126b4efab->leave($__internal_e81f9baafac26ac8f3480d0a0ea78129006a991f523015badbf49d5126b4efab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e9dec28f7882dbdabbf8c5727b19142804d7d610cd603c3e50a9655a7534f97 = $this->env->getExtension("native_profiler");
        $__internal_5e9dec28f7882dbdabbf8c5727b19142804d7d610cd603c3e50a9655a7534f97->enter($__internal_5e9dec28f7882dbdabbf8c5727b19142804d7d610cd603c3e50a9655a7534f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_5e9dec28f7882dbdabbf8c5727b19142804d7d610cd603c3e50a9655a7534f97->leave($__internal_5e9dec28f7882dbdabbf8c5727b19142804d7d610cd603c3e50a9655a7534f97_prof);

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

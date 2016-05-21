<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_884a93b88186d5e64535de465404fec637f1e10948b285dcddd07e6b8a12b011 extends Twig_Template
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
        $__internal_dd66b4f773ec0cc589dea87111a11aad8da542dfc12e69f5408d59420ad15efa = $this->env->getExtension("native_profiler");
        $__internal_dd66b4f773ec0cc589dea87111a11aad8da542dfc12e69f5408d59420ad15efa->enter($__internal_dd66b4f773ec0cc589dea87111a11aad8da542dfc12e69f5408d59420ad15efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd66b4f773ec0cc589dea87111a11aad8da542dfc12e69f5408d59420ad15efa->leave($__internal_dd66b4f773ec0cc589dea87111a11aad8da542dfc12e69f5408d59420ad15efa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e9ec34a82e7acfbf5a3e7904a7cdd0f68e1fd1eb73fbca88e1b3004abdeb213 = $this->env->getExtension("native_profiler");
        $__internal_0e9ec34a82e7acfbf5a3e7904a7cdd0f68e1fd1eb73fbca88e1b3004abdeb213->enter($__internal_0e9ec34a82e7acfbf5a3e7904a7cdd0f68e1fd1eb73fbca88e1b3004abdeb213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0e9ec34a82e7acfbf5a3e7904a7cdd0f68e1fd1eb73fbca88e1b3004abdeb213->leave($__internal_0e9ec34a82e7acfbf5a3e7904a7cdd0f68e1fd1eb73fbca88e1b3004abdeb213_prof);

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

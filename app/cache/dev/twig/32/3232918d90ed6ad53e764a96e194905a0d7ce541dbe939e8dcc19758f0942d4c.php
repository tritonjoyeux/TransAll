<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0fe0925e7e95274fa937e6f79412b4125f30df6f1d11d57adb095d1df6a3443a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_eb13f142dff69134013a5ede738fe536717df0e36823cb59a66a438030951be4 = $this->env->getExtension("native_profiler");
        $__internal_eb13f142dff69134013a5ede738fe536717df0e36823cb59a66a438030951be4->enter($__internal_eb13f142dff69134013a5ede738fe536717df0e36823cb59a66a438030951be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb13f142dff69134013a5ede738fe536717df0e36823cb59a66a438030951be4->leave($__internal_eb13f142dff69134013a5ede738fe536717df0e36823cb59a66a438030951be4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6805a992204df636ae07df31fc2ed5dc7e92deb6e4b23fb7d7303def487bbc4 = $this->env->getExtension("native_profiler");
        $__internal_e6805a992204df636ae07df31fc2ed5dc7e92deb6e4b23fb7d7303def487bbc4->enter($__internal_e6805a992204df636ae07df31fc2ed5dc7e92deb6e4b23fb7d7303def487bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e6805a992204df636ae07df31fc2ed5dc7e92deb6e4b23fb7d7303def487bbc4->leave($__internal_e6805a992204df636ae07df31fc2ed5dc7e92deb6e4b23fb7d7303def487bbc4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

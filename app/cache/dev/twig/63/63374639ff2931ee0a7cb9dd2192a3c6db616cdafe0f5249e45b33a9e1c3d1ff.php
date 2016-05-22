<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_439231004c1de5253faa04766b8c68284d0c848a5b94b29ff886de58cf01ba72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d29367635723511a42aed835956cedddc7ed01b48e7505a007038ab7f2ce32b7 = $this->env->getExtension("native_profiler");
        $__internal_d29367635723511a42aed835956cedddc7ed01b48e7505a007038ab7f2ce32b7->enter($__internal_d29367635723511a42aed835956cedddc7ed01b48e7505a007038ab7f2ce32b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29367635723511a42aed835956cedddc7ed01b48e7505a007038ab7f2ce32b7->leave($__internal_d29367635723511a42aed835956cedddc7ed01b48e7505a007038ab7f2ce32b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_458075bf36b23559266924be0a52696391bdbce3e0d72e92256e6cf527649b91 = $this->env->getExtension("native_profiler");
        $__internal_458075bf36b23559266924be0a52696391bdbce3e0d72e92256e6cf527649b91->enter($__internal_458075bf36b23559266924be0a52696391bdbce3e0d72e92256e6cf527649b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_458075bf36b23559266924be0a52696391bdbce3e0d72e92256e6cf527649b91->leave($__internal_458075bf36b23559266924be0a52696391bdbce3e0d72e92256e6cf527649b91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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

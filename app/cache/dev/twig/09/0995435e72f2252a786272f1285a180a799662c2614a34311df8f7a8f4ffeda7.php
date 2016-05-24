<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_50c89ad1f1a3c17aa78724232221d285456f70e978a11335f7b0408fe4292dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_572a6de649171f2caa99de11677a2177c07d4cf818288b39f4b816eaf56400b9 = $this->env->getExtension("native_profiler");
        $__internal_572a6de649171f2caa99de11677a2177c07d4cf818288b39f4b816eaf56400b9->enter($__internal_572a6de649171f2caa99de11677a2177c07d4cf818288b39f4b816eaf56400b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572a6de649171f2caa99de11677a2177c07d4cf818288b39f4b816eaf56400b9->leave($__internal_572a6de649171f2caa99de11677a2177c07d4cf818288b39f4b816eaf56400b9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_733ed8c41619965d9e93affd2b75fa736049ae767fcec210a626cf3044c5f4fa = $this->env->getExtension("native_profiler");
        $__internal_733ed8c41619965d9e93affd2b75fa736049ae767fcec210a626cf3044c5f4fa->enter($__internal_733ed8c41619965d9e93affd2b75fa736049ae767fcec210a626cf3044c5f4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_733ed8c41619965d9e93affd2b75fa736049ae767fcec210a626cf3044c5f4fa->leave($__internal_733ed8c41619965d9e93affd2b75fa736049ae767fcec210a626cf3044c5f4fa_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */

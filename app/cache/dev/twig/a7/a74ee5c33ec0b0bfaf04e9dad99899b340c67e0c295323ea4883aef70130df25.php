<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_84b0dfdceff488ea9b304b40c8434234faefb2afd71f9bb0e4c18879982f409b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/checkEmail.html.twig", 1);
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
        $__internal_de0fd77807cd376a23ac7cb2d7a0acfa1013293546621f725d1817a02bbea15a = $this->env->getExtension("native_profiler");
        $__internal_de0fd77807cd376a23ac7cb2d7a0acfa1013293546621f725d1817a02bbea15a->enter($__internal_de0fd77807cd376a23ac7cb2d7a0acfa1013293546621f725d1817a02bbea15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0fd77807cd376a23ac7cb2d7a0acfa1013293546621f725d1817a02bbea15a->leave($__internal_de0fd77807cd376a23ac7cb2d7a0acfa1013293546621f725d1817a02bbea15a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1348c56e7461fc62283e839791678c81ec907a9baeef81e112784b4c178d142a = $this->env->getExtension("native_profiler");
        $__internal_1348c56e7461fc62283e839791678c81ec907a9baeef81e112784b4c178d142a->enter($__internal_1348c56e7461fc62283e839791678c81ec907a9baeef81e112784b4c178d142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1348c56e7461fc62283e839791678c81ec907a9baeef81e112784b4c178d142a->leave($__internal_1348c56e7461fc62283e839791678c81ec907a9baeef81e112784b4c178d142a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
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

<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_61d0ef2af748d3f2ae195f66f097e421d92b4c52349e637b398a2b4e7f2e5081 extends Twig_Template
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
        $__internal_8e207428a55f2f27f36e8f51f5993b82741f75834384309eab9746a4fa4eadd9 = $this->env->getExtension("native_profiler");
        $__internal_8e207428a55f2f27f36e8f51f5993b82741f75834384309eab9746a4fa4eadd9->enter($__internal_8e207428a55f2f27f36e8f51f5993b82741f75834384309eab9746a4fa4eadd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e207428a55f2f27f36e8f51f5993b82741f75834384309eab9746a4fa4eadd9->leave($__internal_8e207428a55f2f27f36e8f51f5993b82741f75834384309eab9746a4fa4eadd9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c2e460f7ec4417feb1d4fbb26f79e276ff33c9aa6e0ca9e867f4631ccdf8a00 = $this->env->getExtension("native_profiler");
        $__internal_2c2e460f7ec4417feb1d4fbb26f79e276ff33c9aa6e0ca9e867f4631ccdf8a00->enter($__internal_2c2e460f7ec4417feb1d4fbb26f79e276ff33c9aa6e0ca9e867f4631ccdf8a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2c2e460f7ec4417feb1d4fbb26f79e276ff33c9aa6e0ca9e867f4631ccdf8a00->leave($__internal_2c2e460f7ec4417feb1d4fbb26f79e276ff33c9aa6e0ca9e867f4631ccdf8a00_prof);

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

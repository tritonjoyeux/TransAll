<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_d9bc5a999ca6c7bc515e558ee09efbac8c87f976955238506f99f783f25a7d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_bc89f163f5c39e4eba996c1a188ab45a682c9771400fcf1424a240ab009f8965 = $this->env->getExtension("native_profiler");
        $__internal_bc89f163f5c39e4eba996c1a188ab45a682c9771400fcf1424a240ab009f8965->enter($__internal_bc89f163f5c39e4eba996c1a188ab45a682c9771400fcf1424a240ab009f8965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc89f163f5c39e4eba996c1a188ab45a682c9771400fcf1424a240ab009f8965->leave($__internal_bc89f163f5c39e4eba996c1a188ab45a682c9771400fcf1424a240ab009f8965_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25863c5db3bc63e492406ebdcc441cdf7877ec27169dca09969185a900ed2b62 = $this->env->getExtension("native_profiler");
        $__internal_25863c5db3bc63e492406ebdcc441cdf7877ec27169dca09969185a900ed2b62->enter($__internal_25863c5db3bc63e492406ebdcc441cdf7877ec27169dca09969185a900ed2b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_25863c5db3bc63e492406ebdcc441cdf7877ec27169dca09969185a900ed2b62->leave($__internal_25863c5db3bc63e492406ebdcc441cdf7877ec27169dca09969185a900ed2b62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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

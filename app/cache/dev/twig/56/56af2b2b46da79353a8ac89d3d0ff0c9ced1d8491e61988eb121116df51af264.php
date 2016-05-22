<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_2d3a040887bb7c95f89c35e09b451dcf7c7c3c27edb5703840b4db75e5a46bc4 extends Twig_Template
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
        $__internal_d8ec26c5222bccf3bdf529c33f00a476adced8704f82673101c48c075fe33c90 = $this->env->getExtension("native_profiler");
        $__internal_d8ec26c5222bccf3bdf529c33f00a476adced8704f82673101c48c075fe33c90->enter($__internal_d8ec26c5222bccf3bdf529c33f00a476adced8704f82673101c48c075fe33c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ec26c5222bccf3bdf529c33f00a476adced8704f82673101c48c075fe33c90->leave($__internal_d8ec26c5222bccf3bdf529c33f00a476adced8704f82673101c48c075fe33c90_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac2e338ecc9f4a5685c9574e90febd8588fc11a20070c652e67e6e7ddefe7e46 = $this->env->getExtension("native_profiler");
        $__internal_ac2e338ecc9f4a5685c9574e90febd8588fc11a20070c652e67e6e7ddefe7e46->enter($__internal_ac2e338ecc9f4a5685c9574e90febd8588fc11a20070c652e67e6e7ddefe7e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ac2e338ecc9f4a5685c9574e90febd8588fc11a20070c652e67e6e7ddefe7e46->leave($__internal_ac2e338ecc9f4a5685c9574e90febd8588fc11a20070c652e67e6e7ddefe7e46_prof);

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

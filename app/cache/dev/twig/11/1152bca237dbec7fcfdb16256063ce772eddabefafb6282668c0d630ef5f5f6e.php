<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7628f5cab49c82b3bd0b81335cfb559e384134cbe7190862a5a0207bb5f9ef63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_c871ee19e1901a03599fd59be3caf528a8d78cb4bebdebf88e0e0d139024a089 = $this->env->getExtension("native_profiler");
        $__internal_c871ee19e1901a03599fd59be3caf528a8d78cb4bebdebf88e0e0d139024a089->enter($__internal_c871ee19e1901a03599fd59be3caf528a8d78cb4bebdebf88e0e0d139024a089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c871ee19e1901a03599fd59be3caf528a8d78cb4bebdebf88e0e0d139024a089->leave($__internal_c871ee19e1901a03599fd59be3caf528a8d78cb4bebdebf88e0e0d139024a089_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8568f4635966c3bd612642c7f61c1068d8b0d18ce30f0e62e1f06ad7c1f352f2 = $this->env->getExtension("native_profiler");
        $__internal_8568f4635966c3bd612642c7f61c1068d8b0d18ce30f0e62e1f06ad7c1f352f2->enter($__internal_8568f4635966c3bd612642c7f61c1068d8b0d18ce30f0e62e1f06ad7c1f352f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8568f4635966c3bd612642c7f61c1068d8b0d18ce30f0e62e1f06ad7c1f352f2->leave($__internal_8568f4635966c3bd612642c7f61c1068d8b0d18ce30f0e62e1f06ad7c1f352f2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

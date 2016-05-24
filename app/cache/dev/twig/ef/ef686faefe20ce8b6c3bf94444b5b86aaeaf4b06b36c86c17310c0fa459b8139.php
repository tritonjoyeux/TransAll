<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_ccf3ca1f9e11fb1223b54e1e12f6a72a92b569d3ae8eaec88a62356bea2b7858 extends Twig_Template
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
        $__internal_0b0f3ef23fd4003130833725af464fac2b2830afb61176de1e0c9ec04dcc0763 = $this->env->getExtension("native_profiler");
        $__internal_0b0f3ef23fd4003130833725af464fac2b2830afb61176de1e0c9ec04dcc0763->enter($__internal_0b0f3ef23fd4003130833725af464fac2b2830afb61176de1e0c9ec04dcc0763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0f3ef23fd4003130833725af464fac2b2830afb61176de1e0c9ec04dcc0763->leave($__internal_0b0f3ef23fd4003130833725af464fac2b2830afb61176de1e0c9ec04dcc0763_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5d3ebbdb661ef5ea61ef76af06a748129c823656ca4922e14b44be22ef173c9 = $this->env->getExtension("native_profiler");
        $__internal_e5d3ebbdb661ef5ea61ef76af06a748129c823656ca4922e14b44be22ef173c9->enter($__internal_e5d3ebbdb661ef5ea61ef76af06a748129c823656ca4922e14b44be22ef173c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e5d3ebbdb661ef5ea61ef76af06a748129c823656ca4922e14b44be22ef173c9->leave($__internal_e5d3ebbdb661ef5ea61ef76af06a748129c823656ca4922e14b44be22ef173c9_prof);

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

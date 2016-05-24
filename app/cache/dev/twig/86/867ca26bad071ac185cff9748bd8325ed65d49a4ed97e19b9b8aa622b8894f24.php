<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_1c325f0a42b91e250e08abe89235cf98faf24656a3dd37594dd6bd3f11eda863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d6cd1b3304f98206d495bdfd5707f5c8865ced2b68e433900a46ea2d9a542bec = $this->env->getExtension("native_profiler");
        $__internal_d6cd1b3304f98206d495bdfd5707f5c8865ced2b68e433900a46ea2d9a542bec->enter($__internal_d6cd1b3304f98206d495bdfd5707f5c8865ced2b68e433900a46ea2d9a542bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cd1b3304f98206d495bdfd5707f5c8865ced2b68e433900a46ea2d9a542bec->leave($__internal_d6cd1b3304f98206d495bdfd5707f5c8865ced2b68e433900a46ea2d9a542bec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c23eee5d68774e5392766ed4098415e7ad024a52e7b74aa86af71d35a6f44174 = $this->env->getExtension("native_profiler");
        $__internal_c23eee5d68774e5392766ed4098415e7ad024a52e7b74aa86af71d35a6f44174->enter($__internal_c23eee5d68774e5392766ed4098415e7ad024a52e7b74aa86af71d35a6f44174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c23eee5d68774e5392766ed4098415e7ad024a52e7b74aa86af71d35a6f44174->leave($__internal_c23eee5d68774e5392766ed4098415e7ad024a52e7b74aa86af71d35a6f44174_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
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

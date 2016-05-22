<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7beda2adffb0812c3275c87f6f1ccf9e8587d41dc2f79496ac48877eed49421c extends Twig_Template
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
        $__internal_9bd4d59db90169500a0bea2110fcc4591d1335a4092abe4922f9d24e1a10971e = $this->env->getExtension("native_profiler");
        $__internal_9bd4d59db90169500a0bea2110fcc4591d1335a4092abe4922f9d24e1a10971e->enter($__internal_9bd4d59db90169500a0bea2110fcc4591d1335a4092abe4922f9d24e1a10971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd4d59db90169500a0bea2110fcc4591d1335a4092abe4922f9d24e1a10971e->leave($__internal_9bd4d59db90169500a0bea2110fcc4591d1335a4092abe4922f9d24e1a10971e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9949aedd76434409ede2374def75b61cb08602e7ba53c003037d681a748426d9 = $this->env->getExtension("native_profiler");
        $__internal_9949aedd76434409ede2374def75b61cb08602e7ba53c003037d681a748426d9->enter($__internal_9949aedd76434409ede2374def75b61cb08602e7ba53c003037d681a748426d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9949aedd76434409ede2374def75b61cb08602e7ba53c003037d681a748426d9->leave($__internal_9949aedd76434409ede2374def75b61cb08602e7ba53c003037d681a748426d9_prof);

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

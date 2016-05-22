<?php

/* @User/Registration/checkEmail.html.twig */
class __TwigTemplate_2bf102d94f2bec654006153feecfd07becb8d04d933e51d378a48ef974106dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/checkEmail.html.twig", 1);
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
        $__internal_6a41c04d7330f9bbb84de8ce7ee82a536bb46606b240ad0503037a88ca90d1bc = $this->env->getExtension("native_profiler");
        $__internal_6a41c04d7330f9bbb84de8ce7ee82a536bb46606b240ad0503037a88ca90d1bc->enter($__internal_6a41c04d7330f9bbb84de8ce7ee82a536bb46606b240ad0503037a88ca90d1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a41c04d7330f9bbb84de8ce7ee82a536bb46606b240ad0503037a88ca90d1bc->leave($__internal_6a41c04d7330f9bbb84de8ce7ee82a536bb46606b240ad0503037a88ca90d1bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae6dee90998a7c221cd9dbea7d57ab6edb4eccad158f2ca7489ed04535e1624b = $this->env->getExtension("native_profiler");
        $__internal_ae6dee90998a7c221cd9dbea7d57ab6edb4eccad158f2ca7489ed04535e1624b->enter($__internal_ae6dee90998a7c221cd9dbea7d57ab6edb4eccad158f2ca7489ed04535e1624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ae6dee90998a7c221cd9dbea7d57ab6edb4eccad158f2ca7489ed04535e1624b->leave($__internal_ae6dee90998a7c221cd9dbea7d57ab6edb4eccad158f2ca7489ed04535e1624b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/checkEmail.html.twig";
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

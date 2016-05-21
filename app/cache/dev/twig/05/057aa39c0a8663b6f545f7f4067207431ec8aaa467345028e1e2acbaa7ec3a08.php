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
        $__internal_a4181d91c54e0a42edee61b1f4eb1cecf57639bee54fb1def43e64273fc35216 = $this->env->getExtension("native_profiler");
        $__internal_a4181d91c54e0a42edee61b1f4eb1cecf57639bee54fb1def43e64273fc35216->enter($__internal_a4181d91c54e0a42edee61b1f4eb1cecf57639bee54fb1def43e64273fc35216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4181d91c54e0a42edee61b1f4eb1cecf57639bee54fb1def43e64273fc35216->leave($__internal_a4181d91c54e0a42edee61b1f4eb1cecf57639bee54fb1def43e64273fc35216_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d515a0e2d88b61b7abebc60b0e3d31dd73e5e541ca5ac15df2e680654e24db9 = $this->env->getExtension("native_profiler");
        $__internal_8d515a0e2d88b61b7abebc60b0e3d31dd73e5e541ca5ac15df2e680654e24db9->enter($__internal_8d515a0e2d88b61b7abebc60b0e3d31dd73e5e541ca5ac15df2e680654e24db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8d515a0e2d88b61b7abebc60b0e3d31dd73e5e541ca5ac15df2e680654e24db9->leave($__internal_8d515a0e2d88b61b7abebc60b0e3d31dd73e5e541ca5ac15df2e680654e24db9_prof);

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

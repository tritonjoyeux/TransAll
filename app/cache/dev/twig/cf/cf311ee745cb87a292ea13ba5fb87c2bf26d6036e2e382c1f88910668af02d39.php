<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_873c51273c1a0982b450268e7ecd520740cfbb424a74a857bc4a715470ebae9c extends Twig_Template
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
        $__internal_dd0a161b7ce4f29b8732924b01e8b3517af6f0f5a5e7c69c3d09c29651224ee9 = $this->env->getExtension("native_profiler");
        $__internal_dd0a161b7ce4f29b8732924b01e8b3517af6f0f5a5e7c69c3d09c29651224ee9->enter($__internal_dd0a161b7ce4f29b8732924b01e8b3517af6f0f5a5e7c69c3d09c29651224ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0a161b7ce4f29b8732924b01e8b3517af6f0f5a5e7c69c3d09c29651224ee9->leave($__internal_dd0a161b7ce4f29b8732924b01e8b3517af6f0f5a5e7c69c3d09c29651224ee9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41fc006261c03b8b7d98f143812a84cf270ce5354759fde582ba476c65dd8640 = $this->env->getExtension("native_profiler");
        $__internal_41fc006261c03b8b7d98f143812a84cf270ce5354759fde582ba476c65dd8640->enter($__internal_41fc006261c03b8b7d98f143812a84cf270ce5354759fde582ba476c65dd8640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_41fc006261c03b8b7d98f143812a84cf270ce5354759fde582ba476c65dd8640->leave($__internal_41fc006261c03b8b7d98f143812a84cf270ce5354759fde582ba476c65dd8640_prof);

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

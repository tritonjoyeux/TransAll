<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_6634aed09b14f3a80d2ccf67b33cf2a4141bbe684dd3bec15d44bacbf400fec1 extends Twig_Template
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
        $__internal_ff6c43ae61d5282b6763abb18cc3fdd171cde7dabbd8da325b917892edceb636 = $this->env->getExtension("native_profiler");
        $__internal_ff6c43ae61d5282b6763abb18cc3fdd171cde7dabbd8da325b917892edceb636->enter($__internal_ff6c43ae61d5282b6763abb18cc3fdd171cde7dabbd8da325b917892edceb636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff6c43ae61d5282b6763abb18cc3fdd171cde7dabbd8da325b917892edceb636->leave($__internal_ff6c43ae61d5282b6763abb18cc3fdd171cde7dabbd8da325b917892edceb636_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db706033e16df0d7e134e6ccef3427467fdb5fd2a3bda897bfeed244644b43a9 = $this->env->getExtension("native_profiler");
        $__internal_db706033e16df0d7e134e6ccef3427467fdb5fd2a3bda897bfeed244644b43a9->enter($__internal_db706033e16df0d7e134e6ccef3427467fdb5fd2a3bda897bfeed244644b43a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_db706033e16df0d7e134e6ccef3427467fdb5fd2a3bda897bfeed244644b43a9->leave($__internal_db706033e16df0d7e134e6ccef3427467fdb5fd2a3bda897bfeed244644b43a9_prof);

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

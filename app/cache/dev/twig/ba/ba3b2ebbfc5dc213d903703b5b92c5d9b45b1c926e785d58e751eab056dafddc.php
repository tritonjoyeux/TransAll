<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_395d0698a671fa4d11e46dce67205a12d2c8640a794672b735fb9d73b136c87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eafc4eeedc605f23f230a8b902e8f0a3294779d436330e517c20ce4a6e40c2b4 = $this->env->getExtension("native_profiler");
        $__internal_eafc4eeedc605f23f230a8b902e8f0a3294779d436330e517c20ce4a6e40c2b4->enter($__internal_eafc4eeedc605f23f230a8b902e8f0a3294779d436330e517c20ce4a6e40c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_eafc4eeedc605f23f230a8b902e8f0a3294779d436330e517c20ce4a6e40c2b4->leave($__internal_eafc4eeedc605f23f230a8b902e8f0a3294779d436330e517c20ce4a6e40c2b4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

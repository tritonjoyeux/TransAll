<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_7f819b964f148deaf4accd857a69a8ee7cdec9abf19262f5d98da83598c6efb1 extends Twig_Template
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
        $__internal_f40535491369a5f831b3846064097bf52be04d979bbd847d78bc26c0a25b406e = $this->env->getExtension("native_profiler");
        $__internal_f40535491369a5f831b3846064097bf52be04d979bbd847d78bc26c0a25b406e->enter($__internal_f40535491369a5f831b3846064097bf52be04d979bbd847d78bc26c0a25b406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_f40535491369a5f831b3846064097bf52be04d979bbd847d78bc26c0a25b406e->leave($__internal_f40535491369a5f831b3846064097bf52be04d979bbd847d78bc26c0a25b406e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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

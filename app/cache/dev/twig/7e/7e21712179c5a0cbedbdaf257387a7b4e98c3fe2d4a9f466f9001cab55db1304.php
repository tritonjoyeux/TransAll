<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_391b8e3a423786205078a7eea38d826ade6e74631eb529a150f6d8ed779986f2 extends Twig_Template
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
        $__internal_abc7e79d062d288cc26e7973bbaf3145dc497634808d2658e11a4626cb96b616 = $this->env->getExtension("native_profiler");
        $__internal_abc7e79d062d288cc26e7973bbaf3145dc497634808d2658e11a4626cb96b616->enter($__internal_abc7e79d062d288cc26e7973bbaf3145dc497634808d2658e11a4626cb96b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_abc7e79d062d288cc26e7973bbaf3145dc497634808d2658e11a4626cb96b616->leave($__internal_abc7e79d062d288cc26e7973bbaf3145dc497634808d2658e11a4626cb96b616_prof);

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

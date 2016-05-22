<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_6365e711ed62ab2cd1478678c76fdd9237ed1ed0c45d24db15be2dd4a4e1d8aa extends Twig_Template
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
        $__internal_4d695ca8ca0b6f4d36eea16a6fbb8c04c46a691544693f9c1399fdccc6a427ec = $this->env->getExtension("native_profiler");
        $__internal_4d695ca8ca0b6f4d36eea16a6fbb8c04c46a691544693f9c1399fdccc6a427ec->enter($__internal_4d695ca8ca0b6f4d36eea16a6fbb8c04c46a691544693f9c1399fdccc6a427ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_4d695ca8ca0b6f4d36eea16a6fbb8c04c46a691544693f9c1399fdccc6a427ec->leave($__internal_4d695ca8ca0b6f4d36eea16a6fbb8c04c46a691544693f9c1399fdccc6a427ec_prof);

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

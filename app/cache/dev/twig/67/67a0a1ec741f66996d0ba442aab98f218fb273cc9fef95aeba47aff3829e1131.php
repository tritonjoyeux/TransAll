<?php

/* @User/Group/show_content.html.twig */
class __TwigTemplate_cf825056530ec7aa97f078b29a0cc3b5c7ac82b71d57419d7056242a9c74ffe9 extends Twig_Template
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
        $__internal_f0644ba57d5468d2b90f401370425c5dfdd065f2ff2306d2928af58addaebec4 = $this->env->getExtension("native_profiler");
        $__internal_f0644ba57d5468d2b90f401370425c5dfdd065f2ff2306d2928af58addaebec4->enter($__internal_f0644ba57d5468d2b90f401370425c5dfdd065f2ff2306d2928af58addaebec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show_content.html.twig"));

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
        
        $__internal_f0644ba57d5468d2b90f401370425c5dfdd065f2ff2306d2928af58addaebec4->leave($__internal_f0644ba57d5468d2b90f401370425c5dfdd065f2ff2306d2928af58addaebec4_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show_content.html.twig";
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

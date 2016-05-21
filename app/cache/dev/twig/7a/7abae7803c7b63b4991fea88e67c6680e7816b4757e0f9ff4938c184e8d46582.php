<?php

/* @User/Group/show_content.html.twig */
class __TwigTemplate_166f674d7a06440b90ca39e2113c826f35013b04eb1242c25950a43667b32341 extends Twig_Template
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
        $__internal_0d46458dacc438b902ddf067cf462371d7fa2e6d3e274092c987ea5659ae14d9 = $this->env->getExtension("native_profiler");
        $__internal_0d46458dacc438b902ddf067cf462371d7fa2e6d3e274092c987ea5659ae14d9->enter($__internal_0d46458dacc438b902ddf067cf462371d7fa2e6d3e274092c987ea5659ae14d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show_content.html.twig"));

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
        
        $__internal_0d46458dacc438b902ddf067cf462371d7fa2e6d3e274092c987ea5659ae14d9->leave($__internal_0d46458dacc438b902ddf067cf462371d7fa2e6d3e274092c987ea5659ae14d9_prof);

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

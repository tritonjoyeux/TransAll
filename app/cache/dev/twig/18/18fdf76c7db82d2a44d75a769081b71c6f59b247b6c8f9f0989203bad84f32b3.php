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
        $__internal_4cc3075c4cca707a29636be2db701bf3bde62fc93d27300077d7bb0fa442d279 = $this->env->getExtension("native_profiler");
        $__internal_4cc3075c4cca707a29636be2db701bf3bde62fc93d27300077d7bb0fa442d279->enter($__internal_4cc3075c4cca707a29636be2db701bf3bde62fc93d27300077d7bb0fa442d279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_4cc3075c4cca707a29636be2db701bf3bde62fc93d27300077d7bb0fa442d279->leave($__internal_4cc3075c4cca707a29636be2db701bf3bde62fc93d27300077d7bb0fa442d279_prof);

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

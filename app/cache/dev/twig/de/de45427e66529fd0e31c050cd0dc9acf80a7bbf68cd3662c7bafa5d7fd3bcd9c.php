<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_52a0c190a3c771e1c3b7cd04c68f97bf811cd77ceb7fc279f137414a3b037ed2 extends Twig_Template
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
        $__internal_e0081444f9d5b17bbe8656cf12720d28578a4a1251bd27c618c7e35b38a5d4b6 = $this->env->getExtension("native_profiler");
        $__internal_e0081444f9d5b17bbe8656cf12720d28578a4a1251bd27c618c7e35b38a5d4b6->enter($__internal_e0081444f9d5b17bbe8656cf12720d28578a4a1251bd27c618c7e35b38a5d4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_e0081444f9d5b17bbe8656cf12720d28578a4a1251bd27c618c7e35b38a5d4b6->leave($__internal_e0081444f9d5b17bbe8656cf12720d28578a4a1251bd27c618c7e35b38a5d4b6_prof);

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

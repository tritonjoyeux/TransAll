<?php

/* @User/Group/list_content.html.twig */
class __TwigTemplate_4376cc62b0a1cb1c2f5cae627585da3bd511d31bdf3027572d5780f74cdb308f extends Twig_Template
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
        $__internal_6791a1b41a49954bf6b5026e3c873b99d1fb52e47d393e0a1d3968bc131abc54 = $this->env->getExtension("native_profiler");
        $__internal_6791a1b41a49954bf6b5026e3c873b99d1fb52e47d393e0a1d3968bc131abc54->enter($__internal_6791a1b41a49954bf6b5026e3c873b99d1fb52e47d393e0a1d3968bc131abc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_6791a1b41a49954bf6b5026e3c873b99d1fb52e47d393e0a1d3968bc131abc54->leave($__internal_6791a1b41a49954bf6b5026e3c873b99d1fb52e47d393e0a1d3968bc131abc54_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="fos_user_group_list">*/
/*     <ul>*/
/*     {% for group in groups %}*/
/*         <li><a href="{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}">{{ group.getName() }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */

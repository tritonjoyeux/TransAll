<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4da25176e3fbba862ae9383ae773656f48b1c1c32682435e1e411bfe0a6c6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5049d4d416a8e55f12b2b4225951743980754ba06d3048a85b99c4739e4bc094 = $this->env->getExtension("native_profiler");
        $__internal_5049d4d416a8e55f12b2b4225951743980754ba06d3048a85b99c4739e4bc094->enter($__internal_5049d4d416a8e55f12b2b4225951743980754ba06d3048a85b99c4739e4bc094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5049d4d416a8e55f12b2b4225951743980754ba06d3048a85b99c4739e4bc094->leave($__internal_5049d4d416a8e55f12b2b4225951743980754ba06d3048a85b99c4739e4bc094_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47b11dc9ccc339e264b8ccafbb38b6b7d7212afd21a13d6b1b83a0f67dce7556 = $this->env->getExtension("native_profiler");
        $__internal_47b11dc9ccc339e264b8ccafbb38b6b7d7212afd21a13d6b1b83a0f67dce7556->enter($__internal_47b11dc9ccc339e264b8ccafbb38b6b7d7212afd21a13d6b1b83a0f67dce7556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47b11dc9ccc339e264b8ccafbb38b6b7d7212afd21a13d6b1b83a0f67dce7556->leave($__internal_47b11dc9ccc339e264b8ccafbb38b6b7d7212afd21a13d6b1b83a0f67dce7556_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b70b4616a44846339b6c6062a965e64327e2ca9a9d53401bda585e7b4510abbc = $this->env->getExtension("native_profiler");
        $__internal_b70b4616a44846339b6c6062a965e64327e2ca9a9d53401bda585e7b4510abbc->enter($__internal_b70b4616a44846339b6c6062a965e64327e2ca9a9d53401bda585e7b4510abbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b70b4616a44846339b6c6062a965e64327e2ca9a9d53401bda585e7b4510abbc->leave($__internal_b70b4616a44846339b6c6062a965e64327e2ca9a9d53401bda585e7b4510abbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10d6af9d475efe94885446927492f5b33720c5068076f8abec7043a302e8266a = $this->env->getExtension("native_profiler");
        $__internal_10d6af9d475efe94885446927492f5b33720c5068076f8abec7043a302e8266a->enter($__internal_10d6af9d475efe94885446927492f5b33720c5068076f8abec7043a302e8266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10d6af9d475efe94885446927492f5b33720c5068076f8abec7043a302e8266a->leave($__internal_10d6af9d475efe94885446927492f5b33720c5068076f8abec7043a302e8266a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

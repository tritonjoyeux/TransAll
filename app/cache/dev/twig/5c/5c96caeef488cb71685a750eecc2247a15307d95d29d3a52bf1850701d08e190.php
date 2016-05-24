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
        $__internal_597b5d73a8551650cd746b2a7352c703da8f025b1836931b4310f86ec3043b8f = $this->env->getExtension("native_profiler");
        $__internal_597b5d73a8551650cd746b2a7352c703da8f025b1836931b4310f86ec3043b8f->enter($__internal_597b5d73a8551650cd746b2a7352c703da8f025b1836931b4310f86ec3043b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_597b5d73a8551650cd746b2a7352c703da8f025b1836931b4310f86ec3043b8f->leave($__internal_597b5d73a8551650cd746b2a7352c703da8f025b1836931b4310f86ec3043b8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5415fc5de5bfa33d42f2e9a05c7c42829c048ee3c32d469b756b3cc9d9c88b9a = $this->env->getExtension("native_profiler");
        $__internal_5415fc5de5bfa33d42f2e9a05c7c42829c048ee3c32d469b756b3cc9d9c88b9a->enter($__internal_5415fc5de5bfa33d42f2e9a05c7c42829c048ee3c32d469b756b3cc9d9c88b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5415fc5de5bfa33d42f2e9a05c7c42829c048ee3c32d469b756b3cc9d9c88b9a->leave($__internal_5415fc5de5bfa33d42f2e9a05c7c42829c048ee3c32d469b756b3cc9d9c88b9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57168725e80d6dd2047f1f999a3e4a1beefa7a3255fceddfb07db8b9bbddb9a8 = $this->env->getExtension("native_profiler");
        $__internal_57168725e80d6dd2047f1f999a3e4a1beefa7a3255fceddfb07db8b9bbddb9a8->enter($__internal_57168725e80d6dd2047f1f999a3e4a1beefa7a3255fceddfb07db8b9bbddb9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57168725e80d6dd2047f1f999a3e4a1beefa7a3255fceddfb07db8b9bbddb9a8->leave($__internal_57168725e80d6dd2047f1f999a3e4a1beefa7a3255fceddfb07db8b9bbddb9a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67da25a3728d656dfa7f962e999d5ca82b9321c8f80809931666e0491c790a23 = $this->env->getExtension("native_profiler");
        $__internal_67da25a3728d656dfa7f962e999d5ca82b9321c8f80809931666e0491c790a23->enter($__internal_67da25a3728d656dfa7f962e999d5ca82b9321c8f80809931666e0491c790a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67da25a3728d656dfa7f962e999d5ca82b9321c8f80809931666e0491c790a23->leave($__internal_67da25a3728d656dfa7f962e999d5ca82b9321c8f80809931666e0491c790a23_prof);

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

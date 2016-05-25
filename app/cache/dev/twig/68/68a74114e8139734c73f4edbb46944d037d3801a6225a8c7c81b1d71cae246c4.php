<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_28b2c885c036054197b34c0b5e3ad5fc6ca852f39c409fac9e673392d52f026b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3f6d1a32b67478edb92b8a32a3f4f4041b05c7a0e04147ce463e8e9e1616ed65 = $this->env->getExtension("native_profiler");
        $__internal_3f6d1a32b67478edb92b8a32a3f4f4041b05c7a0e04147ce463e8e9e1616ed65->enter($__internal_3f6d1a32b67478edb92b8a32a3f4f4041b05c7a0e04147ce463e8e9e1616ed65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6d1a32b67478edb92b8a32a3f4f4041b05c7a0e04147ce463e8e9e1616ed65->leave($__internal_3f6d1a32b67478edb92b8a32a3f4f4041b05c7a0e04147ce463e8e9e1616ed65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50b177400d5df30f3af4f23b5cabb10572ad8c5d84ed5f97c3134874a064b25d = $this->env->getExtension("native_profiler");
        $__internal_50b177400d5df30f3af4f23b5cabb10572ad8c5d84ed5f97c3134874a064b25d->enter($__internal_50b177400d5df30f3af4f23b5cabb10572ad8c5d84ed5f97c3134874a064b25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50b177400d5df30f3af4f23b5cabb10572ad8c5d84ed5f97c3134874a064b25d->leave($__internal_50b177400d5df30f3af4f23b5cabb10572ad8c5d84ed5f97c3134874a064b25d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a65e1e2668eef971779dfe45a743b328c08aaa57931b1a3124106a897063078b = $this->env->getExtension("native_profiler");
        $__internal_a65e1e2668eef971779dfe45a743b328c08aaa57931b1a3124106a897063078b->enter($__internal_a65e1e2668eef971779dfe45a743b328c08aaa57931b1a3124106a897063078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a65e1e2668eef971779dfe45a743b328c08aaa57931b1a3124106a897063078b->leave($__internal_a65e1e2668eef971779dfe45a743b328c08aaa57931b1a3124106a897063078b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a92198c1b721c3e8f236880ec770df85cf12b566828fe5553f7029e0a7d42cd = $this->env->getExtension("native_profiler");
        $__internal_1a92198c1b721c3e8f236880ec770df85cf12b566828fe5553f7029e0a7d42cd->enter($__internal_1a92198c1b721c3e8f236880ec770df85cf12b566828fe5553f7029e0a7d42cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a92198c1b721c3e8f236880ec770df85cf12b566828fe5553f7029e0a7d42cd->leave($__internal_1a92198c1b721c3e8f236880ec770df85cf12b566828fe5553f7029e0a7d42cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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

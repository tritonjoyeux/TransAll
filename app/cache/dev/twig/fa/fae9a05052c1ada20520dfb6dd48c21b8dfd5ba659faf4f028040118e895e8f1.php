<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0ab29c44e46d23c442d487c5645155849b20f61fbfa69cf8a62922699fc4c3d7 extends Twig_Template
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
        $__internal_05e8aed51d4a6a588d784e151578d10d66bb339b7b6e814904e1ff57b220dbb5 = $this->env->getExtension("native_profiler");
        $__internal_05e8aed51d4a6a588d784e151578d10d66bb339b7b6e814904e1ff57b220dbb5->enter($__internal_05e8aed51d4a6a588d784e151578d10d66bb339b7b6e814904e1ff57b220dbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05e8aed51d4a6a588d784e151578d10d66bb339b7b6e814904e1ff57b220dbb5->leave($__internal_05e8aed51d4a6a588d784e151578d10d66bb339b7b6e814904e1ff57b220dbb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91a4504e69ddfda831f1e593299b1ce51bb4ef2e5c65af338ab713ca25c2852f = $this->env->getExtension("native_profiler");
        $__internal_91a4504e69ddfda831f1e593299b1ce51bb4ef2e5c65af338ab713ca25c2852f->enter($__internal_91a4504e69ddfda831f1e593299b1ce51bb4ef2e5c65af338ab713ca25c2852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_91a4504e69ddfda831f1e593299b1ce51bb4ef2e5c65af338ab713ca25c2852f->leave($__internal_91a4504e69ddfda831f1e593299b1ce51bb4ef2e5c65af338ab713ca25c2852f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f42afa948ee01e4988ca62d88e5b6e39abbcd09e03ee81ed90019058847d5284 = $this->env->getExtension("native_profiler");
        $__internal_f42afa948ee01e4988ca62d88e5b6e39abbcd09e03ee81ed90019058847d5284->enter($__internal_f42afa948ee01e4988ca62d88e5b6e39abbcd09e03ee81ed90019058847d5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f42afa948ee01e4988ca62d88e5b6e39abbcd09e03ee81ed90019058847d5284->leave($__internal_f42afa948ee01e4988ca62d88e5b6e39abbcd09e03ee81ed90019058847d5284_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_877d762797e44b925a2b476e75380fd64d0bdc566a566d25274462acdc984874 = $this->env->getExtension("native_profiler");
        $__internal_877d762797e44b925a2b476e75380fd64d0bdc566a566d25274462acdc984874->enter($__internal_877d762797e44b925a2b476e75380fd64d0bdc566a566d25274462acdc984874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_877d762797e44b925a2b476e75380fd64d0bdc566a566d25274462acdc984874->leave($__internal_877d762797e44b925a2b476e75380fd64d0bdc566a566d25274462acdc984874_prof);

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

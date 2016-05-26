<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_28b2c885c036054197b34c0b5e3ad5fc6ca852f39c409fac9e673392d52f026b extends Twig_Template
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
        $__internal_4ca63546cdf0142dc83f291543ff871555420a18dce2f31c8e736a8b201a107b = $this->env->getExtension("native_profiler");
        $__internal_4ca63546cdf0142dc83f291543ff871555420a18dce2f31c8e736a8b201a107b->enter($__internal_4ca63546cdf0142dc83f291543ff871555420a18dce2f31c8e736a8b201a107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca63546cdf0142dc83f291543ff871555420a18dce2f31c8e736a8b201a107b->leave($__internal_4ca63546cdf0142dc83f291543ff871555420a18dce2f31c8e736a8b201a107b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_328656a999c17027961b178cb271ce03d51767352d1229ebadeac68162b7f6d1 = $this->env->getExtension("native_profiler");
        $__internal_328656a999c17027961b178cb271ce03d51767352d1229ebadeac68162b7f6d1->enter($__internal_328656a999c17027961b178cb271ce03d51767352d1229ebadeac68162b7f6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_328656a999c17027961b178cb271ce03d51767352d1229ebadeac68162b7f6d1->leave($__internal_328656a999c17027961b178cb271ce03d51767352d1229ebadeac68162b7f6d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d43d601573f260685abb5ece8be6795a4708c140eb020fbcd1d196f276c79c2c = $this->env->getExtension("native_profiler");
        $__internal_d43d601573f260685abb5ece8be6795a4708c140eb020fbcd1d196f276c79c2c->enter($__internal_d43d601573f260685abb5ece8be6795a4708c140eb020fbcd1d196f276c79c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d43d601573f260685abb5ece8be6795a4708c140eb020fbcd1d196f276c79c2c->leave($__internal_d43d601573f260685abb5ece8be6795a4708c140eb020fbcd1d196f276c79c2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acfeca3bd4ce01a43c9887c785d5c701d9bde44c37fdef6dd7d4aa21c599c6d5 = $this->env->getExtension("native_profiler");
        $__internal_acfeca3bd4ce01a43c9887c785d5c701d9bde44c37fdef6dd7d4aa21c599c6d5->enter($__internal_acfeca3bd4ce01a43c9887c785d5c701d9bde44c37fdef6dd7d4aa21c599c6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_acfeca3bd4ce01a43c9887c785d5c701d9bde44c37fdef6dd7d4aa21c599c6d5->leave($__internal_acfeca3bd4ce01a43c9887c785d5c701d9bde44c37fdef6dd7d4aa21c599c6d5_prof);

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

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fb7cea2b2f178b037be4f1add248ce502144fdc7a4909cbaf0d9f285e012a481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_491b90d2895b519a6bc182bd122faee15cbb4082cb1ef8233bc6b2a977c7ef3d = $this->env->getExtension("native_profiler");
        $__internal_491b90d2895b519a6bc182bd122faee15cbb4082cb1ef8233bc6b2a977c7ef3d->enter($__internal_491b90d2895b519a6bc182bd122faee15cbb4082cb1ef8233bc6b2a977c7ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491b90d2895b519a6bc182bd122faee15cbb4082cb1ef8233bc6b2a977c7ef3d->leave($__internal_491b90d2895b519a6bc182bd122faee15cbb4082cb1ef8233bc6b2a977c7ef3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61fcd6c4fed14093ae6a88b8f6b1dfadb29d6f6898e90a7a224a6693148649cd = $this->env->getExtension("native_profiler");
        $__internal_61fcd6c4fed14093ae6a88b8f6b1dfadb29d6f6898e90a7a224a6693148649cd->enter($__internal_61fcd6c4fed14093ae6a88b8f6b1dfadb29d6f6898e90a7a224a6693148649cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_61fcd6c4fed14093ae6a88b8f6b1dfadb29d6f6898e90a7a224a6693148649cd->leave($__internal_61fcd6c4fed14093ae6a88b8f6b1dfadb29d6f6898e90a7a224a6693148649cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9bd68ff8574e576a71726fd91edcc88e1f16e9575b33e78d1ccbbe31c35f36a = $this->env->getExtension("native_profiler");
        $__internal_a9bd68ff8574e576a71726fd91edcc88e1f16e9575b33e78d1ccbbe31c35f36a->enter($__internal_a9bd68ff8574e576a71726fd91edcc88e1f16e9575b33e78d1ccbbe31c35f36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a9bd68ff8574e576a71726fd91edcc88e1f16e9575b33e78d1ccbbe31c35f36a->leave($__internal_a9bd68ff8574e576a71726fd91edcc88e1f16e9575b33e78d1ccbbe31c35f36a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b4b6c67e648d988e637e71e7709807b743527d6b151eb51a0af8a4db6f7b319 = $this->env->getExtension("native_profiler");
        $__internal_4b4b6c67e648d988e637e71e7709807b743527d6b151eb51a0af8a4db6f7b319->enter($__internal_4b4b6c67e648d988e637e71e7709807b743527d6b151eb51a0af8a4db6f7b319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4b4b6c67e648d988e637e71e7709807b743527d6b151eb51a0af8a4db6f7b319->leave($__internal_4b4b6c67e648d988e637e71e7709807b743527d6b151eb51a0af8a4db6f7b319_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

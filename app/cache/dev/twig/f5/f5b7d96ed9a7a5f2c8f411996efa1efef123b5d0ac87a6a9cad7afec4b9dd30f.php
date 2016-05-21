<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_769932ba57c93d3d08560fd14224cb72842cfb2be97a31943a46e21c02ef77db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_44f1403b049a0d5d6fd48889a4dcaae276aa8e58a46452d9d706d96123bdfda7 = $this->env->getExtension("native_profiler");
        $__internal_44f1403b049a0d5d6fd48889a4dcaae276aa8e58a46452d9d706d96123bdfda7->enter($__internal_44f1403b049a0d5d6fd48889a4dcaae276aa8e58a46452d9d706d96123bdfda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f1403b049a0d5d6fd48889a4dcaae276aa8e58a46452d9d706d96123bdfda7->leave($__internal_44f1403b049a0d5d6fd48889a4dcaae276aa8e58a46452d9d706d96123bdfda7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c77f50293839a5478da2c4e16ed192eeae26cfcc7039fef5fa222f59fbb8e8c = $this->env->getExtension("native_profiler");
        $__internal_8c77f50293839a5478da2c4e16ed192eeae26cfcc7039fef5fa222f59fbb8e8c->enter($__internal_8c77f50293839a5478da2c4e16ed192eeae26cfcc7039fef5fa222f59fbb8e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8c77f50293839a5478da2c4e16ed192eeae26cfcc7039fef5fa222f59fbb8e8c->leave($__internal_8c77f50293839a5478da2c4e16ed192eeae26cfcc7039fef5fa222f59fbb8e8c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd23246dede6d3af602ded6f7bb31ceb41abe1e9ae7d397834a961dbab0f83ff = $this->env->getExtension("native_profiler");
        $__internal_bd23246dede6d3af602ded6f7bb31ceb41abe1e9ae7d397834a961dbab0f83ff->enter($__internal_bd23246dede6d3af602ded6f7bb31ceb41abe1e9ae7d397834a961dbab0f83ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bd23246dede6d3af602ded6f7bb31ceb41abe1e9ae7d397834a961dbab0f83ff->leave($__internal_bd23246dede6d3af602ded6f7bb31ceb41abe1e9ae7d397834a961dbab0f83ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2caf89db24d997441c01fdce9f7b9cc16f9347232e2c041bcc23446d6d12d92 = $this->env->getExtension("native_profiler");
        $__internal_e2caf89db24d997441c01fdce9f7b9cc16f9347232e2c041bcc23446d6d12d92->enter($__internal_e2caf89db24d997441c01fdce9f7b9cc16f9347232e2c041bcc23446d6d12d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e2caf89db24d997441c01fdce9f7b9cc16f9347232e2c041bcc23446d6d12d92->leave($__internal_e2caf89db24d997441c01fdce9f7b9cc16f9347232e2c041bcc23446d6d12d92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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

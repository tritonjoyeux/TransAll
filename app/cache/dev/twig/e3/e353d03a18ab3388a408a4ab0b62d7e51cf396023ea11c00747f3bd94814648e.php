<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_15afee2bad9ac838f3a8e5a3126a45b397348b0694b518fda5a99d042ec6ca37 extends Twig_Template
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
        $__internal_3f6b2256ad5c9a0dcc68bf042bdb18ff6808921a05143bc6f2123f4c7213eb2b = $this->env->getExtension("native_profiler");
        $__internal_3f6b2256ad5c9a0dcc68bf042bdb18ff6808921a05143bc6f2123f4c7213eb2b->enter($__internal_3f6b2256ad5c9a0dcc68bf042bdb18ff6808921a05143bc6f2123f4c7213eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f6b2256ad5c9a0dcc68bf042bdb18ff6808921a05143bc6f2123f4c7213eb2b->leave($__internal_3f6b2256ad5c9a0dcc68bf042bdb18ff6808921a05143bc6f2123f4c7213eb2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_981c357f39e5b0a9b5d9452a275854cb33b1c18af76f685b1e263fccbc978409 = $this->env->getExtension("native_profiler");
        $__internal_981c357f39e5b0a9b5d9452a275854cb33b1c18af76f685b1e263fccbc978409->enter($__internal_981c357f39e5b0a9b5d9452a275854cb33b1c18af76f685b1e263fccbc978409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_981c357f39e5b0a9b5d9452a275854cb33b1c18af76f685b1e263fccbc978409->leave($__internal_981c357f39e5b0a9b5d9452a275854cb33b1c18af76f685b1e263fccbc978409_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd88dea5d951b89537c6e9f105572803c99b3da2711a95cb34e9eba999184636 = $this->env->getExtension("native_profiler");
        $__internal_fd88dea5d951b89537c6e9f105572803c99b3da2711a95cb34e9eba999184636->enter($__internal_fd88dea5d951b89537c6e9f105572803c99b3da2711a95cb34e9eba999184636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd88dea5d951b89537c6e9f105572803c99b3da2711a95cb34e9eba999184636->leave($__internal_fd88dea5d951b89537c6e9f105572803c99b3da2711a95cb34e9eba999184636_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_811afbb2bf204d0404531a78ad0707f84a37d63b325677550772f0ff3948ed4c = $this->env->getExtension("native_profiler");
        $__internal_811afbb2bf204d0404531a78ad0707f84a37d63b325677550772f0ff3948ed4c->enter($__internal_811afbb2bf204d0404531a78ad0707f84a37d63b325677550772f0ff3948ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_811afbb2bf204d0404531a78ad0707f84a37d63b325677550772f0ff3948ed4c->leave($__internal_811afbb2bf204d0404531a78ad0707f84a37d63b325677550772f0ff3948ed4c_prof);

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

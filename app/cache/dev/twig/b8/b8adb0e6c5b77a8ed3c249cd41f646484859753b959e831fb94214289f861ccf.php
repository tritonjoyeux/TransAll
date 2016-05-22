<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_735bb427590ae28bc2fe7e772b15ad6f895cd6383648e8dbb03d387da855009e extends Twig_Template
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
        $__internal_91678c88e972e961386f4f734221bbb2cb3515ff22b693a4e3b6b97f122f442e = $this->env->getExtension("native_profiler");
        $__internal_91678c88e972e961386f4f734221bbb2cb3515ff22b693a4e3b6b97f122f442e->enter($__internal_91678c88e972e961386f4f734221bbb2cb3515ff22b693a4e3b6b97f122f442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91678c88e972e961386f4f734221bbb2cb3515ff22b693a4e3b6b97f122f442e->leave($__internal_91678c88e972e961386f4f734221bbb2cb3515ff22b693a4e3b6b97f122f442e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_992a6aad9b2d5195a6fcdf1344fae2c358bd23d9dd38bddb73b28e400355243b = $this->env->getExtension("native_profiler");
        $__internal_992a6aad9b2d5195a6fcdf1344fae2c358bd23d9dd38bddb73b28e400355243b->enter($__internal_992a6aad9b2d5195a6fcdf1344fae2c358bd23d9dd38bddb73b28e400355243b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_992a6aad9b2d5195a6fcdf1344fae2c358bd23d9dd38bddb73b28e400355243b->leave($__internal_992a6aad9b2d5195a6fcdf1344fae2c358bd23d9dd38bddb73b28e400355243b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0e95053c6c4a9e742f1568bed8f49bf828ff46d07567319a8b6b2231e379a59 = $this->env->getExtension("native_profiler");
        $__internal_c0e95053c6c4a9e742f1568bed8f49bf828ff46d07567319a8b6b2231e379a59->enter($__internal_c0e95053c6c4a9e742f1568bed8f49bf828ff46d07567319a8b6b2231e379a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0e95053c6c4a9e742f1568bed8f49bf828ff46d07567319a8b6b2231e379a59->leave($__internal_c0e95053c6c4a9e742f1568bed8f49bf828ff46d07567319a8b6b2231e379a59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb38c9c04a402a1769f2616f149d97a4fec8f89f7b2b2583f55c2009e86d557f = $this->env->getExtension("native_profiler");
        $__internal_fb38c9c04a402a1769f2616f149d97a4fec8f89f7b2b2583f55c2009e86d557f->enter($__internal_fb38c9c04a402a1769f2616f149d97a4fec8f89f7b2b2583f55c2009e86d557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb38c9c04a402a1769f2616f149d97a4fec8f89f7b2b2583f55c2009e86d557f->leave($__internal_fb38c9c04a402a1769f2616f149d97a4fec8f89f7b2b2583f55c2009e86d557f_prof);

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

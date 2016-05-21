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
        $__internal_cf214d5a63b7947dce7c426ede50025270bdbbeeec97624a49d23eae900c3098 = $this->env->getExtension("native_profiler");
        $__internal_cf214d5a63b7947dce7c426ede50025270bdbbeeec97624a49d23eae900c3098->enter($__internal_cf214d5a63b7947dce7c426ede50025270bdbbeeec97624a49d23eae900c3098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf214d5a63b7947dce7c426ede50025270bdbbeeec97624a49d23eae900c3098->leave($__internal_cf214d5a63b7947dce7c426ede50025270bdbbeeec97624a49d23eae900c3098_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5275b7e7699a90d386deb9c8c448d8d537f9de0114928a658ef8e1d70f2ac98b = $this->env->getExtension("native_profiler");
        $__internal_5275b7e7699a90d386deb9c8c448d8d537f9de0114928a658ef8e1d70f2ac98b->enter($__internal_5275b7e7699a90d386deb9c8c448d8d537f9de0114928a658ef8e1d70f2ac98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5275b7e7699a90d386deb9c8c448d8d537f9de0114928a658ef8e1d70f2ac98b->leave($__internal_5275b7e7699a90d386deb9c8c448d8d537f9de0114928a658ef8e1d70f2ac98b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e73990486eb4b3598ba54dd602927cc04f810c078030c44ad29198894a37a62 = $this->env->getExtension("native_profiler");
        $__internal_7e73990486eb4b3598ba54dd602927cc04f810c078030c44ad29198894a37a62->enter($__internal_7e73990486eb4b3598ba54dd602927cc04f810c078030c44ad29198894a37a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e73990486eb4b3598ba54dd602927cc04f810c078030c44ad29198894a37a62->leave($__internal_7e73990486eb4b3598ba54dd602927cc04f810c078030c44ad29198894a37a62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30fc71113e30e4e461b78b3d24504f9eabe7b62b8ab2693f4f7d5b2db7f20f08 = $this->env->getExtension("native_profiler");
        $__internal_30fc71113e30e4e461b78b3d24504f9eabe7b62b8ab2693f4f7d5b2db7f20f08->enter($__internal_30fc71113e30e4e461b78b3d24504f9eabe7b62b8ab2693f4f7d5b2db7f20f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_30fc71113e30e4e461b78b3d24504f9eabe7b62b8ab2693f4f7d5b2db7f20f08->leave($__internal_30fc71113e30e4e461b78b3d24504f9eabe7b62b8ab2693f4f7d5b2db7f20f08_prof);

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

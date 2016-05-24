<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b7d68c5f83e1a616b336e741989a59126022bddf39e36de9aaa3431238e62ff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63407b36aea87bf49bee38c2bb228f8c26ea2fffbeb3d1bbc9d2469586ee57bb = $this->env->getExtension("native_profiler");
        $__internal_63407b36aea87bf49bee38c2bb228f8c26ea2fffbeb3d1bbc9d2469586ee57bb->enter($__internal_63407b36aea87bf49bee38c2bb228f8c26ea2fffbeb3d1bbc9d2469586ee57bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63407b36aea87bf49bee38c2bb228f8c26ea2fffbeb3d1bbc9d2469586ee57bb->leave($__internal_63407b36aea87bf49bee38c2bb228f8c26ea2fffbeb3d1bbc9d2469586ee57bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e89bc7cbc4f0f16843b5d02455316805b97ec54012030d0e3fafde00b983afa = $this->env->getExtension("native_profiler");
        $__internal_4e89bc7cbc4f0f16843b5d02455316805b97ec54012030d0e3fafde00b983afa->enter($__internal_4e89bc7cbc4f0f16843b5d02455316805b97ec54012030d0e3fafde00b983afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4e89bc7cbc4f0f16843b5d02455316805b97ec54012030d0e3fafde00b983afa->leave($__internal_4e89bc7cbc4f0f16843b5d02455316805b97ec54012030d0e3fafde00b983afa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a146d240b178aa2c4bb7ba81b4f390334a2e1cb5273ade977e41da5ed746d88b = $this->env->getExtension("native_profiler");
        $__internal_a146d240b178aa2c4bb7ba81b4f390334a2e1cb5273ade977e41da5ed746d88b->enter($__internal_a146d240b178aa2c4bb7ba81b4f390334a2e1cb5273ade977e41da5ed746d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a146d240b178aa2c4bb7ba81b4f390334a2e1cb5273ade977e41da5ed746d88b->leave($__internal_a146d240b178aa2c4bb7ba81b4f390334a2e1cb5273ade977e41da5ed746d88b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

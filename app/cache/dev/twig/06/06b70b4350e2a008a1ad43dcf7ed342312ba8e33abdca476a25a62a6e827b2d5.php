<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a4fca08d02a93aaec874f9471b652e4a0723f67c49aa5382d194d3e9e88a549a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6dbfcfe41bbc63aea303e34e6a5dc0d7fccf724cee539192cd72e1dadf5880aa = $this->env->getExtension("native_profiler");
        $__internal_6dbfcfe41bbc63aea303e34e6a5dc0d7fccf724cee539192cd72e1dadf5880aa->enter($__internal_6dbfcfe41bbc63aea303e34e6a5dc0d7fccf724cee539192cd72e1dadf5880aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbfcfe41bbc63aea303e34e6a5dc0d7fccf724cee539192cd72e1dadf5880aa->leave($__internal_6dbfcfe41bbc63aea303e34e6a5dc0d7fccf724cee539192cd72e1dadf5880aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_614c3878e2f6f6aedbf2696a656e0a09cf4595b0ce13986e7687cf05dc5398b9 = $this->env->getExtension("native_profiler");
        $__internal_614c3878e2f6f6aedbf2696a656e0a09cf4595b0ce13986e7687cf05dc5398b9->enter($__internal_614c3878e2f6f6aedbf2696a656e0a09cf4595b0ce13986e7687cf05dc5398b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_614c3878e2f6f6aedbf2696a656e0a09cf4595b0ce13986e7687cf05dc5398b9->leave($__internal_614c3878e2f6f6aedbf2696a656e0a09cf4595b0ce13986e7687cf05dc5398b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a363e3c460f6ed1b5c8758d9d1d1cd9a86e8876f3d9e6dfbc2725b88d7d2ca = $this->env->getExtension("native_profiler");
        $__internal_a2a363e3c460f6ed1b5c8758d9d1d1cd9a86e8876f3d9e6dfbc2725b88d7d2ca->enter($__internal_a2a363e3c460f6ed1b5c8758d9d1d1cd9a86e8876f3d9e6dfbc2725b88d7d2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2a363e3c460f6ed1b5c8758d9d1d1cd9a86e8876f3d9e6dfbc2725b88d7d2ca->leave($__internal_a2a363e3c460f6ed1b5c8758d9d1d1cd9a86e8876f3d9e6dfbc2725b88d7d2ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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

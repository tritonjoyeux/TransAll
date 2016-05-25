<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_674ea0cacbb12a28395c5c977d86d55340ddefd4c3002b062d22ecb920a8822e extends Twig_Template
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
        $__internal_3e8a716996cd395afe9d70801be0b504292d5b783085526008e805004d5dff39 = $this->env->getExtension("native_profiler");
        $__internal_3e8a716996cd395afe9d70801be0b504292d5b783085526008e805004d5dff39->enter($__internal_3e8a716996cd395afe9d70801be0b504292d5b783085526008e805004d5dff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8a716996cd395afe9d70801be0b504292d5b783085526008e805004d5dff39->leave($__internal_3e8a716996cd395afe9d70801be0b504292d5b783085526008e805004d5dff39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c283ec3b660310c0b47e4cb496d1d4ae1983adc6060796df2592b56432755a28 = $this->env->getExtension("native_profiler");
        $__internal_c283ec3b660310c0b47e4cb496d1d4ae1983adc6060796df2592b56432755a28->enter($__internal_c283ec3b660310c0b47e4cb496d1d4ae1983adc6060796df2592b56432755a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c283ec3b660310c0b47e4cb496d1d4ae1983adc6060796df2592b56432755a28->leave($__internal_c283ec3b660310c0b47e4cb496d1d4ae1983adc6060796df2592b56432755a28_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb6c12f6065a5ee7d62b1c5df86e425d450aaee96f6584b90bde24d8bd4d9034 = $this->env->getExtension("native_profiler");
        $__internal_cb6c12f6065a5ee7d62b1c5df86e425d450aaee96f6584b90bde24d8bd4d9034->enter($__internal_cb6c12f6065a5ee7d62b1c5df86e425d450aaee96f6584b90bde24d8bd4d9034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb6c12f6065a5ee7d62b1c5df86e425d450aaee96f6584b90bde24d8bd4d9034->leave($__internal_cb6c12f6065a5ee7d62b1c5df86e425d450aaee96f6584b90bde24d8bd4d9034_prof);

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

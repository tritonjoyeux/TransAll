<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_14fba9e16bb5e1cffa63ca8db5200561d70cedc68744eded4ce259f455c26ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ba12f2fa9cdff77edd93b2e05135f13562ca0a7c7bf330225fd8d918bc85c7f = $this->env->getExtension("native_profiler");
        $__internal_3ba12f2fa9cdff77edd93b2e05135f13562ca0a7c7bf330225fd8d918bc85c7f->enter($__internal_3ba12f2fa9cdff77edd93b2e05135f13562ca0a7c7bf330225fd8d918bc85c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3ba12f2fa9cdff77edd93b2e05135f13562ca0a7c7bf330225fd8d918bc85c7f->leave($__internal_3ba12f2fa9cdff77edd93b2e05135f13562ca0a7c7bf330225fd8d918bc85c7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

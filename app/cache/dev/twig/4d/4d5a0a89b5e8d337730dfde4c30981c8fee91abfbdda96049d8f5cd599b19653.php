<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1b3ae8692e125c1a5c6a4c2e1cbbd1e446f0cbcd3861e00063a7e4ee7c1aec93 extends Twig_Template
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
        $__internal_ef08799c4aa20b35c476eabd3bf606b8a8ca88c2902bcfb199e9b315a5dc8640 = $this->env->getExtension("native_profiler");
        $__internal_ef08799c4aa20b35c476eabd3bf606b8a8ca88c2902bcfb199e9b315a5dc8640->enter($__internal_ef08799c4aa20b35c476eabd3bf606b8a8ca88c2902bcfb199e9b315a5dc8640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_ef08799c4aa20b35c476eabd3bf606b8a8ca88c2902bcfb199e9b315a5dc8640->leave($__internal_ef08799c4aa20b35c476eabd3bf606b8a8ca88c2902bcfb199e9b315a5dc8640_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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

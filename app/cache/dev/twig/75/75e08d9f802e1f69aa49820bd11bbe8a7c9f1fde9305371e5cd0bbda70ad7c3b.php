<?php

/* Cook4usBundle:Working:index.html.twig */
class __TwigTemplate_0c2e5a97568c53f962ec5838f327d8e9ff2a6ff6c2edc135818cd517a7559cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1919f0e8bc7f9a650f360b34f56059a6ce9dfe23de122e7b184a64032d13ab9f = $this->env->getExtension("native_profiler");
        $__internal_1919f0e8bc7f9a650f360b34f56059a6ce9dfe23de122e7b184a64032d13ab9f->enter($__internal_1919f0e8bc7f9a650f360b34f56059a6ce9dfe23de122e7b184a64032d13ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Working:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 22
        echo "</html>";
        
        $__internal_1919f0e8bc7f9a650f360b34f56059a6ce9dfe23de122e7b184a64032d13ab9f->leave($__internal_1919f0e8bc7f9a650f360b34f56059a6ce9dfe23de122e7b184a64032d13ab9f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bfef4a2653f6a378a3f9bb20eeb3add5b1e66bccd7a2bdcc470136774a8410a = $this->env->getExtension("native_profiler");
        $__internal_7bfef4a2653f6a378a3f9bb20eeb3add5b1e66bccd7a2bdcc470136774a8410a->enter($__internal_7bfef4a2653f6a378a3f9bb20eeb3add5b1e66bccd7a2bdcc470136774a8410a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/working.css"), "html", null, true);
        echo "\">

</head>


";
        
        $__internal_7bfef4a2653f6a378a3f9bb20eeb3add5b1e66bccd7a2bdcc470136774a8410a->leave($__internal_7bfef4a2653f6a378a3f9bb20eeb3add5b1e66bccd7a2bdcc470136774a8410a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0dff8d88ba218402464620896e6997ab90c37216cf7f5f6d41bb6278402e85d = $this->env->getExtension("native_profiler");
        $__internal_d0dff8d88ba218402464620896e6997ab90c37216cf7f5f6d41bb6278402e85d->enter($__internal_d0dff8d88ba218402464620896e6997ab90c37216cf7f5f6d41bb6278402e85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_d0dff8d88ba218402464620896e6997ab90c37216cf7f5f6d41bb6278402e85d->leave($__internal_d0dff8d88ba218402464620896e6997ab90c37216cf7f5f6d41bb6278402e85d_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_04db9626d5d81de7a723cd839b48d419011c1304549a9857c501144326f3cf9b = $this->env->getExtension("native_profiler");
        $__internal_04db9626d5d81de7a723cd839b48d419011c1304549a9857c501144326f3cf9b->enter($__internal_04db9626d5d81de7a723cd839b48d419011c1304549a9857c501144326f3cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "    <body>
        <header></header>
    </body>

";
        
        $__internal_04db9626d5d81de7a723cd839b48d419011c1304549a9857c501144326f3cf9b->leave($__internal_04db9626d5d81de7a723cd839b48d419011c1304549a9857c501144326f3cf9b_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Working:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  82 => 16,  70 => 7,  57 => 9,  52 => 7,  45 => 2,  39 => 1,  32 => 22,  30 => 16,  27 => 15,  25 => 1,);
    }
}
/* {% block head %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Accueil{% endblock %}</title>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/working.css') }}">*/
/* */
/* </head>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/*     <body>*/
/*         <header></header>*/
/*     </body>*/
/* */
/* {% endblock %}*/
/* </html>*/

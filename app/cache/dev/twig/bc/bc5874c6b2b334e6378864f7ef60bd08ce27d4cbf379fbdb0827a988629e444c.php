<?php

/* @Cook4us/Working/index.html.twig */
class __TwigTemplate_e0049df761c4e4496177b7cd5dc3da6cea29d6ef557e1e71ff6cc460104ed2ae extends Twig_Template
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
        $__internal_50bd1905e4719af6be2dcb6bde77a44103c9fe5f4424d6e489eb53b8a9b53df1 = $this->env->getExtension("native_profiler");
        $__internal_50bd1905e4719af6be2dcb6bde77a44103c9fe5f4424d6e489eb53b8a9b53df1->enter($__internal_50bd1905e4719af6be2dcb6bde77a44103c9fe5f4424d6e489eb53b8a9b53df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Working/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 22
        echo "</html>";
        
        $__internal_50bd1905e4719af6be2dcb6bde77a44103c9fe5f4424d6e489eb53b8a9b53df1->leave($__internal_50bd1905e4719af6be2dcb6bde77a44103c9fe5f4424d6e489eb53b8a9b53df1_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_31b68189142a2bac94e6d983d8df885ad2893a8b642ea29d1a26e7de60129275 = $this->env->getExtension("native_profiler");
        $__internal_31b68189142a2bac94e6d983d8df885ad2893a8b642ea29d1a26e7de60129275->enter($__internal_31b68189142a2bac94e6d983d8df885ad2893a8b642ea29d1a26e7de60129275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_31b68189142a2bac94e6d983d8df885ad2893a8b642ea29d1a26e7de60129275->leave($__internal_31b68189142a2bac94e6d983d8df885ad2893a8b642ea29d1a26e7de60129275_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cd3c76c8bbf917e1947238203c1b073a0594c802a6896c4fb2d188b96add4f0 = $this->env->getExtension("native_profiler");
        $__internal_2cd3c76c8bbf917e1947238203c1b073a0594c802a6896c4fb2d188b96add4f0->enter($__internal_2cd3c76c8bbf917e1947238203c1b073a0594c802a6896c4fb2d188b96add4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_2cd3c76c8bbf917e1947238203c1b073a0594c802a6896c4fb2d188b96add4f0->leave($__internal_2cd3c76c8bbf917e1947238203c1b073a0594c802a6896c4fb2d188b96add4f0_prof);

    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        $__internal_d65271c78ba8775f9e8045d1242670a4833624947fd3d2f7dfb90c780d020f86 = $this->env->getExtension("native_profiler");
        $__internal_d65271c78ba8775f9e8045d1242670a4833624947fd3d2f7dfb90c780d020f86->enter($__internal_d65271c78ba8775f9e8045d1242670a4833624947fd3d2f7dfb90c780d020f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "    <body>
        <header></header>
    </body>

";
        
        $__internal_d65271c78ba8775f9e8045d1242670a4833624947fd3d2f7dfb90c780d020f86->leave($__internal_d65271c78ba8775f9e8045d1242670a4833624947fd3d2f7dfb90c780d020f86_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Working/index.html.twig";
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

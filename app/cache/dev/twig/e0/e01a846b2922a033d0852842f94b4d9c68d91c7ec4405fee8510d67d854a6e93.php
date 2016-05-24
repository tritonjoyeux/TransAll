<?php

/* ::base.html.twig */
class __TwigTemplate_576d7983a170ce4d2308e6e6b9c229a5eb52fb6beab2d91549c1f7dbe4b5d93f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49ba9e61787f670330d214b9397a53c1938dab3e57495e38f0bf1acc52a0bf84 = $this->env->getExtension("native_profiler");
        $__internal_49ba9e61787f670330d214b9397a53c1938dab3e57495e38f0bf1acc52a0bf84->enter($__internal_49ba9e61787f670330d214b9397a53c1938dab3e57495e38f0bf1acc52a0bf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_49ba9e61787f670330d214b9397a53c1938dab3e57495e38f0bf1acc52a0bf84->leave($__internal_49ba9e61787f670330d214b9397a53c1938dab3e57495e38f0bf1acc52a0bf84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd85c06fd1dc69e44fa6c0963b59e82c329248281640582f3de5e8653ec0051c = $this->env->getExtension("native_profiler");
        $__internal_dd85c06fd1dc69e44fa6c0963b59e82c329248281640582f3de5e8653ec0051c->enter($__internal_dd85c06fd1dc69e44fa6c0963b59e82c329248281640582f3de5e8653ec0051c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd85c06fd1dc69e44fa6c0963b59e82c329248281640582f3de5e8653ec0051c->leave($__internal_dd85c06fd1dc69e44fa6c0963b59e82c329248281640582f3de5e8653ec0051c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_910b068f95ee537a3e8e4db68efae9dabf537a870451c1a6d7502ee3ef25cfac = $this->env->getExtension("native_profiler");
        $__internal_910b068f95ee537a3e8e4db68efae9dabf537a870451c1a6d7502ee3ef25cfac->enter($__internal_910b068f95ee537a3e8e4db68efae9dabf537a870451c1a6d7502ee3ef25cfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_910b068f95ee537a3e8e4db68efae9dabf537a870451c1a6d7502ee3ef25cfac->leave($__internal_910b068f95ee537a3e8e4db68efae9dabf537a870451c1a6d7502ee3ef25cfac_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc272e1b1fcadf27f5e2b61b371a1626592e1b87aae0c7c2d570d376526f347 = $this->env->getExtension("native_profiler");
        $__internal_7dc272e1b1fcadf27f5e2b61b371a1626592e1b87aae0c7c2d570d376526f347->enter($__internal_7dc272e1b1fcadf27f5e2b61b371a1626592e1b87aae0c7c2d570d376526f347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7dc272e1b1fcadf27f5e2b61b371a1626592e1b87aae0c7c2d570d376526f347->leave($__internal_7dc272e1b1fcadf27f5e2b61b371a1626592e1b87aae0c7c2d570d376526f347_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ae95d7163b594508c6995d8a30c4630abbda9ba04cb69a199173d2b5fca0a1d = $this->env->getExtension("native_profiler");
        $__internal_5ae95d7163b594508c6995d8a30c4630abbda9ba04cb69a199173d2b5fca0a1d->enter($__internal_5ae95d7163b594508c6995d8a30c4630abbda9ba04cb69a199173d2b5fca0a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5ae95d7163b594508c6995d8a30c4630abbda9ba04cb69a199173d2b5fca0a1d->leave($__internal_5ae95d7163b594508c6995d8a30c4630abbda9ba04cb69a199173d2b5fca0a1d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

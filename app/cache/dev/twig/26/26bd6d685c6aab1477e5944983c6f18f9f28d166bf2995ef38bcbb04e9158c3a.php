<?php

/* base.html.twig */
class __TwigTemplate_fa8e703865f91e1c7c5f24b7a40d622ea548e02eb90063fd2309d850c4133946 extends Twig_Template
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
        $__internal_7af47c03085e49f1fd0fabebe86c3872a083c297623fa823d7510cd42b3688ac = $this->env->getExtension("native_profiler");
        $__internal_7af47c03085e49f1fd0fabebe86c3872a083c297623fa823d7510cd42b3688ac->enter($__internal_7af47c03085e49f1fd0fabebe86c3872a083c297623fa823d7510cd42b3688ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7af47c03085e49f1fd0fabebe86c3872a083c297623fa823d7510cd42b3688ac->leave($__internal_7af47c03085e49f1fd0fabebe86c3872a083c297623fa823d7510cd42b3688ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b54e26d5bb333a5d265281954c99bf55deb8284c8e269a5523ea1179592fc24 = $this->env->getExtension("native_profiler");
        $__internal_6b54e26d5bb333a5d265281954c99bf55deb8284c8e269a5523ea1179592fc24->enter($__internal_6b54e26d5bb333a5d265281954c99bf55deb8284c8e269a5523ea1179592fc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b54e26d5bb333a5d265281954c99bf55deb8284c8e269a5523ea1179592fc24->leave($__internal_6b54e26d5bb333a5d265281954c99bf55deb8284c8e269a5523ea1179592fc24_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81ad99250e5f38fe42ca79f66f303446edf2dcb6bb230b9b6cca2c9e9a77f2d9 = $this->env->getExtension("native_profiler");
        $__internal_81ad99250e5f38fe42ca79f66f303446edf2dcb6bb230b9b6cca2c9e9a77f2d9->enter($__internal_81ad99250e5f38fe42ca79f66f303446edf2dcb6bb230b9b6cca2c9e9a77f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81ad99250e5f38fe42ca79f66f303446edf2dcb6bb230b9b6cca2c9e9a77f2d9->leave($__internal_81ad99250e5f38fe42ca79f66f303446edf2dcb6bb230b9b6cca2c9e9a77f2d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_603cf872e625a3296071d5c84072a98e513d9057bc2b870f73202ad21784a3a8 = $this->env->getExtension("native_profiler");
        $__internal_603cf872e625a3296071d5c84072a98e513d9057bc2b870f73202ad21784a3a8->enter($__internal_603cf872e625a3296071d5c84072a98e513d9057bc2b870f73202ad21784a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_603cf872e625a3296071d5c84072a98e513d9057bc2b870f73202ad21784a3a8->leave($__internal_603cf872e625a3296071d5c84072a98e513d9057bc2b870f73202ad21784a3a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f19b9adb172d6a43697693dfd7dd345afd52a01152ceb47c12fb7017da0899ae = $this->env->getExtension("native_profiler");
        $__internal_f19b9adb172d6a43697693dfd7dd345afd52a01152ceb47c12fb7017da0899ae->enter($__internal_f19b9adb172d6a43697693dfd7dd345afd52a01152ceb47c12fb7017da0899ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f19b9adb172d6a43697693dfd7dd345afd52a01152ceb47c12fb7017da0899ae->leave($__internal_f19b9adb172d6a43697693dfd7dd345afd52a01152ceb47c12fb7017da0899ae_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

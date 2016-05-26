<?php

/* ::base.html.twig */
class __TwigTemplate_fb6e7814f75770829bcd75b269aebf14bdb3a00530e31fb607b68636b31b1da7 extends Twig_Template
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
        $__internal_44df2235273a2cf969b2388a0039a4de8606a5e9cd49ca7dfce77ea995f6150d = $this->env->getExtension("native_profiler");
        $__internal_44df2235273a2cf969b2388a0039a4de8606a5e9cd49ca7dfce77ea995f6150d->enter($__internal_44df2235273a2cf969b2388a0039a4de8606a5e9cd49ca7dfce77ea995f6150d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_44df2235273a2cf969b2388a0039a4de8606a5e9cd49ca7dfce77ea995f6150d->leave($__internal_44df2235273a2cf969b2388a0039a4de8606a5e9cd49ca7dfce77ea995f6150d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a8dbc2df5d8dc67588d9ef635b72313eda52c62827986be333316d75f8a337f = $this->env->getExtension("native_profiler");
        $__internal_2a8dbc2df5d8dc67588d9ef635b72313eda52c62827986be333316d75f8a337f->enter($__internal_2a8dbc2df5d8dc67588d9ef635b72313eda52c62827986be333316d75f8a337f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a8dbc2df5d8dc67588d9ef635b72313eda52c62827986be333316d75f8a337f->leave($__internal_2a8dbc2df5d8dc67588d9ef635b72313eda52c62827986be333316d75f8a337f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_998c98976e6c4fd1cb2c1e7fcb17be07e784d13716f80e59130f752f0953a6db = $this->env->getExtension("native_profiler");
        $__internal_998c98976e6c4fd1cb2c1e7fcb17be07e784d13716f80e59130f752f0953a6db->enter($__internal_998c98976e6c4fd1cb2c1e7fcb17be07e784d13716f80e59130f752f0953a6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_998c98976e6c4fd1cb2c1e7fcb17be07e784d13716f80e59130f752f0953a6db->leave($__internal_998c98976e6c4fd1cb2c1e7fcb17be07e784d13716f80e59130f752f0953a6db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6996b19d931964ba6eefc84174894160064e36d6bdc1928949d42890360a80fb = $this->env->getExtension("native_profiler");
        $__internal_6996b19d931964ba6eefc84174894160064e36d6bdc1928949d42890360a80fb->enter($__internal_6996b19d931964ba6eefc84174894160064e36d6bdc1928949d42890360a80fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6996b19d931964ba6eefc84174894160064e36d6bdc1928949d42890360a80fb->leave($__internal_6996b19d931964ba6eefc84174894160064e36d6bdc1928949d42890360a80fb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4466a2d61006669a830fe4c41cf2549a9bfdc554cfd70885824dff4dcdeeb40 = $this->env->getExtension("native_profiler");
        $__internal_a4466a2d61006669a830fe4c41cf2549a9bfdc554cfd70885824dff4dcdeeb40->enter($__internal_a4466a2d61006669a830fe4c41cf2549a9bfdc554cfd70885824dff4dcdeeb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4466a2d61006669a830fe4c41cf2549a9bfdc554cfd70885824dff4dcdeeb40->leave($__internal_a4466a2d61006669a830fe4c41cf2549a9bfdc554cfd70885824dff4dcdeeb40_prof);

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

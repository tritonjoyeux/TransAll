<?php

/* ::base.html.twig */
class __TwigTemplate_d6b13c072ef752557c557537ed242314d3b75f1ebc1a601bfcea5959a3c65732 extends Twig_Template
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
        $__internal_e366a5d311af1ce384cffcf4b9aedd8933ce986ee151d6ac42c63819aef1d492 = $this->env->getExtension("native_profiler");
        $__internal_e366a5d311af1ce384cffcf4b9aedd8933ce986ee151d6ac42c63819aef1d492->enter($__internal_e366a5d311af1ce384cffcf4b9aedd8933ce986ee151d6ac42c63819aef1d492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e366a5d311af1ce384cffcf4b9aedd8933ce986ee151d6ac42c63819aef1d492->leave($__internal_e366a5d311af1ce384cffcf4b9aedd8933ce986ee151d6ac42c63819aef1d492_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_344fb1260a3a8b0d601efc6c6ed8f0e86497bf6bea713ae8bcb2ddc3775b4dbe = $this->env->getExtension("native_profiler");
        $__internal_344fb1260a3a8b0d601efc6c6ed8f0e86497bf6bea713ae8bcb2ddc3775b4dbe->enter($__internal_344fb1260a3a8b0d601efc6c6ed8f0e86497bf6bea713ae8bcb2ddc3775b4dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_344fb1260a3a8b0d601efc6c6ed8f0e86497bf6bea713ae8bcb2ddc3775b4dbe->leave($__internal_344fb1260a3a8b0d601efc6c6ed8f0e86497bf6bea713ae8bcb2ddc3775b4dbe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_114244bd3e5e030be0eb6c7d412bd3e6a7ea328bf057a72e5e375a85450add97 = $this->env->getExtension("native_profiler");
        $__internal_114244bd3e5e030be0eb6c7d412bd3e6a7ea328bf057a72e5e375a85450add97->enter($__internal_114244bd3e5e030be0eb6c7d412bd3e6a7ea328bf057a72e5e375a85450add97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_114244bd3e5e030be0eb6c7d412bd3e6a7ea328bf057a72e5e375a85450add97->leave($__internal_114244bd3e5e030be0eb6c7d412bd3e6a7ea328bf057a72e5e375a85450add97_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_67bbd18f1a23a9ce0f7ed22c1b3b36e41179ceebfebfd674329d1cf7f4932f21 = $this->env->getExtension("native_profiler");
        $__internal_67bbd18f1a23a9ce0f7ed22c1b3b36e41179ceebfebfd674329d1cf7f4932f21->enter($__internal_67bbd18f1a23a9ce0f7ed22c1b3b36e41179ceebfebfd674329d1cf7f4932f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67bbd18f1a23a9ce0f7ed22c1b3b36e41179ceebfebfd674329d1cf7f4932f21->leave($__internal_67bbd18f1a23a9ce0f7ed22c1b3b36e41179ceebfebfd674329d1cf7f4932f21_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d060965f1e3cce52cb6aa2ba1d1236996df9b8b99b824236d19bfd990dd800d = $this->env->getExtension("native_profiler");
        $__internal_9d060965f1e3cce52cb6aa2ba1d1236996df9b8b99b824236d19bfd990dd800d->enter($__internal_9d060965f1e3cce52cb6aa2ba1d1236996df9b8b99b824236d19bfd990dd800d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9d060965f1e3cce52cb6aa2ba1d1236996df9b8b99b824236d19bfd990dd800d->leave($__internal_9d060965f1e3cce52cb6aa2ba1d1236996df9b8b99b824236d19bfd990dd800d_prof);

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

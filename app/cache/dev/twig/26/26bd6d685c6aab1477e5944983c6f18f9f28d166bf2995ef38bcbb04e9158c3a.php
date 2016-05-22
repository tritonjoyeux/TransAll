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
        $__internal_3c96ef5852e6f60a6782af1dbcba949b4e409b8278098ecac57af8c83decf60e = $this->env->getExtension("native_profiler");
        $__internal_3c96ef5852e6f60a6782af1dbcba949b4e409b8278098ecac57af8c83decf60e->enter($__internal_3c96ef5852e6f60a6782af1dbcba949b4e409b8278098ecac57af8c83decf60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3c96ef5852e6f60a6782af1dbcba949b4e409b8278098ecac57af8c83decf60e->leave($__internal_3c96ef5852e6f60a6782af1dbcba949b4e409b8278098ecac57af8c83decf60e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c02598c2c5e08b7192c3b963b01b851eafea13ae41c0aee6e556fc16612739ed = $this->env->getExtension("native_profiler");
        $__internal_c02598c2c5e08b7192c3b963b01b851eafea13ae41c0aee6e556fc16612739ed->enter($__internal_c02598c2c5e08b7192c3b963b01b851eafea13ae41c0aee6e556fc16612739ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c02598c2c5e08b7192c3b963b01b851eafea13ae41c0aee6e556fc16612739ed->leave($__internal_c02598c2c5e08b7192c3b963b01b851eafea13ae41c0aee6e556fc16612739ed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e19549aaad2f973424ee5f8d0304b82ec9f2d93777a367bbc93d256c670b70c4 = $this->env->getExtension("native_profiler");
        $__internal_e19549aaad2f973424ee5f8d0304b82ec9f2d93777a367bbc93d256c670b70c4->enter($__internal_e19549aaad2f973424ee5f8d0304b82ec9f2d93777a367bbc93d256c670b70c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e19549aaad2f973424ee5f8d0304b82ec9f2d93777a367bbc93d256c670b70c4->leave($__internal_e19549aaad2f973424ee5f8d0304b82ec9f2d93777a367bbc93d256c670b70c4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c9fad61b529247e8cd52b334aeceb8a204834d996d693621c8e32029a32c2f1 = $this->env->getExtension("native_profiler");
        $__internal_4c9fad61b529247e8cd52b334aeceb8a204834d996d693621c8e32029a32c2f1->enter($__internal_4c9fad61b529247e8cd52b334aeceb8a204834d996d693621c8e32029a32c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c9fad61b529247e8cd52b334aeceb8a204834d996d693621c8e32029a32c2f1->leave($__internal_4c9fad61b529247e8cd52b334aeceb8a204834d996d693621c8e32029a32c2f1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7fcefc585f0df07814d5e160a6520e2de121ffbfe3b162f1480217c12098d93 = $this->env->getExtension("native_profiler");
        $__internal_e7fcefc585f0df07814d5e160a6520e2de121ffbfe3b162f1480217c12098d93->enter($__internal_e7fcefc585f0df07814d5e160a6520e2de121ffbfe3b162f1480217c12098d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e7fcefc585f0df07814d5e160a6520e2de121ffbfe3b162f1480217c12098d93->leave($__internal_e7fcefc585f0df07814d5e160a6520e2de121ffbfe3b162f1480217c12098d93_prof);

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

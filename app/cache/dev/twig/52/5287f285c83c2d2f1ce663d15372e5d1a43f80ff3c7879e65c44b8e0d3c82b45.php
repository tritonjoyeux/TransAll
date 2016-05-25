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
        $__internal_c48b64cd020d094c85c06975c98f0d7da19a2796afb6cc4c67b96abd4355ddce = $this->env->getExtension("native_profiler");
        $__internal_c48b64cd020d094c85c06975c98f0d7da19a2796afb6cc4c67b96abd4355ddce->enter($__internal_c48b64cd020d094c85c06975c98f0d7da19a2796afb6cc4c67b96abd4355ddce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c48b64cd020d094c85c06975c98f0d7da19a2796afb6cc4c67b96abd4355ddce->leave($__internal_c48b64cd020d094c85c06975c98f0d7da19a2796afb6cc4c67b96abd4355ddce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e3923d27d305803e31deb5e5ea98826af4b50e46c4d970ce071155212703c0 = $this->env->getExtension("native_profiler");
        $__internal_c4e3923d27d305803e31deb5e5ea98826af4b50e46c4d970ce071155212703c0->enter($__internal_c4e3923d27d305803e31deb5e5ea98826af4b50e46c4d970ce071155212703c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c4e3923d27d305803e31deb5e5ea98826af4b50e46c4d970ce071155212703c0->leave($__internal_c4e3923d27d305803e31deb5e5ea98826af4b50e46c4d970ce071155212703c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b13c0245526fee5f6da3def5ead254a81c15478cefd0a24a400eb0870fc0816 = $this->env->getExtension("native_profiler");
        $__internal_5b13c0245526fee5f6da3def5ead254a81c15478cefd0a24a400eb0870fc0816->enter($__internal_5b13c0245526fee5f6da3def5ead254a81c15478cefd0a24a400eb0870fc0816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b13c0245526fee5f6da3def5ead254a81c15478cefd0a24a400eb0870fc0816->leave($__internal_5b13c0245526fee5f6da3def5ead254a81c15478cefd0a24a400eb0870fc0816_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d528fd1a7a23baaa29fad436b3e2c7a9597d1a855dbaf8b09a8d5f88c7741dc1 = $this->env->getExtension("native_profiler");
        $__internal_d528fd1a7a23baaa29fad436b3e2c7a9597d1a855dbaf8b09a8d5f88c7741dc1->enter($__internal_d528fd1a7a23baaa29fad436b3e2c7a9597d1a855dbaf8b09a8d5f88c7741dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d528fd1a7a23baaa29fad436b3e2c7a9597d1a855dbaf8b09a8d5f88c7741dc1->leave($__internal_d528fd1a7a23baaa29fad436b3e2c7a9597d1a855dbaf8b09a8d5f88c7741dc1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66ecf3b0963dafb0cc9e4a7f90dfd206a550b56eab6972a5e8cbc178c1ed076b = $this->env->getExtension("native_profiler");
        $__internal_66ecf3b0963dafb0cc9e4a7f90dfd206a550b56eab6972a5e8cbc178c1ed076b->enter($__internal_66ecf3b0963dafb0cc9e4a7f90dfd206a550b56eab6972a5e8cbc178c1ed076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66ecf3b0963dafb0cc9e4a7f90dfd206a550b56eab6972a5e8cbc178c1ed076b->leave($__internal_66ecf3b0963dafb0cc9e4a7f90dfd206a550b56eab6972a5e8cbc178c1ed076b_prof);

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

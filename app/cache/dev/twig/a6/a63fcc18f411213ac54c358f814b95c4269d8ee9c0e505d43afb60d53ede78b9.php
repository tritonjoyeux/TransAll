<?php

/* base.html.twig */
class __TwigTemplate_edaf7918c43ab159fad9890f04d7e5caf8f41392d25e83f2538b00881fd5389d extends Twig_Template
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
        $__internal_19ac11852d22b1080e7ebd378ebee21ef2db693380e0ec29c76683a0dc4c5cff = $this->env->getExtension("native_profiler");
        $__internal_19ac11852d22b1080e7ebd378ebee21ef2db693380e0ec29c76683a0dc4c5cff->enter($__internal_19ac11852d22b1080e7ebd378ebee21ef2db693380e0ec29c76683a0dc4c5cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_19ac11852d22b1080e7ebd378ebee21ef2db693380e0ec29c76683a0dc4c5cff->leave($__internal_19ac11852d22b1080e7ebd378ebee21ef2db693380e0ec29c76683a0dc4c5cff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_433dec5f5cc3bff831051c8041d917b00872acf130f7206d18c2caf924980c49 = $this->env->getExtension("native_profiler");
        $__internal_433dec5f5cc3bff831051c8041d917b00872acf130f7206d18c2caf924980c49->enter($__internal_433dec5f5cc3bff831051c8041d917b00872acf130f7206d18c2caf924980c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_433dec5f5cc3bff831051c8041d917b00872acf130f7206d18c2caf924980c49->leave($__internal_433dec5f5cc3bff831051c8041d917b00872acf130f7206d18c2caf924980c49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c6290649a1e2e402e864f788f1b39e2128f436ba7278e1d429720efb6654844 = $this->env->getExtension("native_profiler");
        $__internal_0c6290649a1e2e402e864f788f1b39e2128f436ba7278e1d429720efb6654844->enter($__internal_0c6290649a1e2e402e864f788f1b39e2128f436ba7278e1d429720efb6654844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0c6290649a1e2e402e864f788f1b39e2128f436ba7278e1d429720efb6654844->leave($__internal_0c6290649a1e2e402e864f788f1b39e2128f436ba7278e1d429720efb6654844_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c094afe4c2701a4bca4c3c6f160dd7e24346870c617b539f0469fa81e8597d02 = $this->env->getExtension("native_profiler");
        $__internal_c094afe4c2701a4bca4c3c6f160dd7e24346870c617b539f0469fa81e8597d02->enter($__internal_c094afe4c2701a4bca4c3c6f160dd7e24346870c617b539f0469fa81e8597d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c094afe4c2701a4bca4c3c6f160dd7e24346870c617b539f0469fa81e8597d02->leave($__internal_c094afe4c2701a4bca4c3c6f160dd7e24346870c617b539f0469fa81e8597d02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d9185fd3c35b3edbb037e7a8609fc611ec6c7efd35e90631d84e8f32f286867 = $this->env->getExtension("native_profiler");
        $__internal_5d9185fd3c35b3edbb037e7a8609fc611ec6c7efd35e90631d84e8f32f286867->enter($__internal_5d9185fd3c35b3edbb037e7a8609fc611ec6c7efd35e90631d84e8f32f286867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5d9185fd3c35b3edbb037e7a8609fc611ec6c7efd35e90631d84e8f32f286867->leave($__internal_5d9185fd3c35b3edbb037e7a8609fc611ec6c7efd35e90631d84e8f32f286867_prof);

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

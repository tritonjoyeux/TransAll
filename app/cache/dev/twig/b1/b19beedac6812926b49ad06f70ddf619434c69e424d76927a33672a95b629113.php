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
        $__internal_bdc7759e588ac70987b08adc7bb9037e810e28865eaa5be4ae99db8161f5f4cc = $this->env->getExtension("native_profiler");
        $__internal_bdc7759e588ac70987b08adc7bb9037e810e28865eaa5be4ae99db8161f5f4cc->enter($__internal_bdc7759e588ac70987b08adc7bb9037e810e28865eaa5be4ae99db8161f5f4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bdc7759e588ac70987b08adc7bb9037e810e28865eaa5be4ae99db8161f5f4cc->leave($__internal_bdc7759e588ac70987b08adc7bb9037e810e28865eaa5be4ae99db8161f5f4cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5641ff4e75e6c2fa44f9eefd1104c68d65c6eca94c7f69beb384db857f60d3ce = $this->env->getExtension("native_profiler");
        $__internal_5641ff4e75e6c2fa44f9eefd1104c68d65c6eca94c7f69beb384db857f60d3ce->enter($__internal_5641ff4e75e6c2fa44f9eefd1104c68d65c6eca94c7f69beb384db857f60d3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5641ff4e75e6c2fa44f9eefd1104c68d65c6eca94c7f69beb384db857f60d3ce->leave($__internal_5641ff4e75e6c2fa44f9eefd1104c68d65c6eca94c7f69beb384db857f60d3ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8739acb0537635ab301c8667027af29b61b3ad588c8393539ac90d3b303481a9 = $this->env->getExtension("native_profiler");
        $__internal_8739acb0537635ab301c8667027af29b61b3ad588c8393539ac90d3b303481a9->enter($__internal_8739acb0537635ab301c8667027af29b61b3ad588c8393539ac90d3b303481a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8739acb0537635ab301c8667027af29b61b3ad588c8393539ac90d3b303481a9->leave($__internal_8739acb0537635ab301c8667027af29b61b3ad588c8393539ac90d3b303481a9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b54a84699c92eb35c15ea2e72b98e860420a51c30eaac15e936b1f43ed709bf6 = $this->env->getExtension("native_profiler");
        $__internal_b54a84699c92eb35c15ea2e72b98e860420a51c30eaac15e936b1f43ed709bf6->enter($__internal_b54a84699c92eb35c15ea2e72b98e860420a51c30eaac15e936b1f43ed709bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b54a84699c92eb35c15ea2e72b98e860420a51c30eaac15e936b1f43ed709bf6->leave($__internal_b54a84699c92eb35c15ea2e72b98e860420a51c30eaac15e936b1f43ed709bf6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f9ae7865d4dbd2c37a5e5933ea71cd27776ce4afddff87f2b40370fe3a68a32 = $this->env->getExtension("native_profiler");
        $__internal_7f9ae7865d4dbd2c37a5e5933ea71cd27776ce4afddff87f2b40370fe3a68a32->enter($__internal_7f9ae7865d4dbd2c37a5e5933ea71cd27776ce4afddff87f2b40370fe3a68a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f9ae7865d4dbd2c37a5e5933ea71cd27776ce4afddff87f2b40370fe3a68a32->leave($__internal_7f9ae7865d4dbd2c37a5e5933ea71cd27776ce4afddff87f2b40370fe3a68a32_prof);

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

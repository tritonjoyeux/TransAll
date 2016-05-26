<?php

/* Cook4usBundle:Mention:index.html.twig */
class __TwigTemplate_ca8f13e0fedf3fed28bcdfc8a067850ab8db920857d71eef43c4f86d3588f847 extends Twig_Template
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
        $__internal_c13100acd5cb4308ff5e104ea74e8f8c859d25d41e8dab0d068d4fc1652386e9 = $this->env->getExtension("native_profiler");
        $__internal_c13100acd5cb4308ff5e104ea74e8f8c859d25d41e8dab0d068d4fc1652386e9->enter($__internal_c13100acd5cb4308ff5e104ea74e8f8c859d25d41e8dab0d068d4fc1652386e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Mention:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->loadTemplate("Cook4usBundle:Base:menu.html.twig", "Cook4usBundle:Mention:index.html.twig", 22)->display($context);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('container', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->loadTemplate("Cook4usBundle:Base:footer.html.twig", "Cook4usBundle:Mention:index.html.twig", 57)->display($context);
        
        $__internal_c13100acd5cb4308ff5e104ea74e8f8c859d25d41e8dab0d068d4fc1652386e9->leave($__internal_c13100acd5cb4308ff5e104ea74e8f8c859d25d41e8dab0d068d4fc1652386e9_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_70ce8540a8da7c542e61a7236bfe2acca5d222266405e2beaa1f1ff5d681d617 = $this->env->getExtension("native_profiler");
        $__internal_70ce8540a8da7c542e61a7236bfe2acca5d222266405e2beaa1f1ff5d681d617->enter($__internal_70ce8540a8da7c542e61a7236bfe2acca5d222266405e2beaa1f1ff5d681d617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/flickity.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flickity.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.reflection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cloud9carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuMobile.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/hygiene.css"), "html", null, true);
        echo "\">
</head>

";
        
        $__internal_70ce8540a8da7c542e61a7236bfe2acca5d222266405e2beaa1f1ff5d681d617->leave($__internal_70ce8540a8da7c542e61a7236bfe2acca5d222266405e2beaa1f1ff5d681d617_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4296da48b16b426c5d2dd785a29dc994b52ca0fbdec5d1dc8a61fdd88236242d = $this->env->getExtension("native_profiler");
        $__internal_4296da48b16b426c5d2dd785a29dc994b52ca0fbdec5d1dc8a61fdd88236242d->enter($__internal_4296da48b16b426c5d2dd785a29dc994b52ca0fbdec5d1dc8a61fdd88236242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mentions Légales";
        
        $__internal_4296da48b16b426c5d2dd785a29dc994b52ca0fbdec5d1dc8a61fdd88236242d->leave($__internal_4296da48b16b426c5d2dd785a29dc994b52ca0fbdec5d1dc8a61fdd88236242d_prof);

    }

    // line 24
    public function block_container($context, array $blocks = array())
    {
        $__internal_f5e7860d5e7e4b01781c898d06fc9736a4be4ca5000e0b2488b9e30122953557 = $this->env->getExtension("native_profiler");
        $__internal_f5e7860d5e7e4b01781c898d06fc9736a4be4ca5000e0b2488b9e30122953557->enter($__internal_f5e7860d5e7e4b01781c898d06fc9736a4be4ca5000e0b2488b9e30122953557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 25
        echo "    <div class=\"hygiene\">
        <p class=\"titreHygiene\">Mentions Légales</p>

        <div class=\"hygienebloc\">
            <p> Chaque Cookist est soumis aux avis de ses convives</p>
            <p>Lorsque les cookists s'inscrivent
            </p>
        </div>

        <div class=\"hygienebloc\">
            <p> De plus, pour prévenir de certaines allergies, <span>le cookists sont tenus de préciser les ingrédients
                principaux de chacun de leur plat.</span> Ainsi les convives peuvent demander le changement d'un ingrédient.
            </p>
        </div>

        <div class=\"hygienebloc\">
            <p> <span>En cas de gros dommage causé involontairement à un convive</span> (allergie, réaction à la nourriture, etc.),
                votre assurance de responsabilité civile consiste à se substituer au responsable pour indemniser la
                victime. <span>Les assureurs incluent systématiquement une garantie de responsabilité civile vie privée</span>
                dans les contrats multirisques habitation. Ainsi <span>Cookists et Convives sont protégés par la loi.</span>
            </p>
        </div>

        <p class=\"titreHygiene3\">Votre santé nous préoccupe </p>
        <p class=\"titreHygiene4\">L'hygiène est donc au coeur de nos priorité</p>

        <div class=\"imageHygiene\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Illustration2.png"), "html", null, true);
        echo "\"></div>

    </div>

";
        
        $__internal_f5e7860d5e7e4b01781c898d06fc9736a4be4ca5000e0b2488b9e30122953557->leave($__internal_f5e7860d5e7e4b01781c898d06fc9736a4be4ca5000e0b2488b9e30122953557_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Mention:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  126 => 25,  120 => 24,  108 => 7,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  53 => 2,  47 => 1,  40 => 57,  37 => 56,  35 => 24,  32 => 23,  30 => 22,  27 => 21,  25 => 1,);
    }
}
/* {% block head %}*/
/*     <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Mentions Légales{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">*/
/*     <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery.reflection.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery.cloud9carousel.js') }}"></script>*/
/*     <script src="{{ asset('js/carousel.js') }}"></script>*/
/*     <script src="{{ asset('js/menuMobile.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('css/hygiene.css') }}">*/
/* </head>*/
/* */
/* {% endblock %}*/
/* */
/* {% include 'Cook4usBundle:Base:menu.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <div class="hygiene">*/
/*         <p class="titreHygiene">Mentions Légales</p>*/
/* */
/*         <div class="hygienebloc">*/
/*             <p> Chaque Cookist est soumis aux avis de ses convives</p>*/
/*             <p>Lorsque les cookists s'inscrivent*/
/*             </p>*/
/*         </div>*/
/* */
/*         <div class="hygienebloc">*/
/*             <p> De plus, pour prévenir de certaines allergies, <span>le cookists sont tenus de préciser les ingrédients*/
/*                 principaux de chacun de leur plat.</span> Ainsi les convives peuvent demander le changement d'un ingrédient.*/
/*             </p>*/
/*         </div>*/
/* */
/*         <div class="hygienebloc">*/
/*             <p> <span>En cas de gros dommage causé involontairement à un convive</span> (allergie, réaction à la nourriture, etc.),*/
/*                 votre assurance de responsabilité civile consiste à se substituer au responsable pour indemniser la*/
/*                 victime. <span>Les assureurs incluent systématiquement une garantie de responsabilité civile vie privée</span>*/
/*                 dans les contrats multirisques habitation. Ainsi <span>Cookists et Convives sont protégés par la loi.</span>*/
/*             </p>*/
/*         </div>*/
/* */
/*         <p class="titreHygiene3">Votre santé nous préoccupe </p>*/
/*         <p class="titreHygiene4">L'hygiène est donc au coeur de nos priorité</p>*/
/* */
/*         <div class="imageHygiene"><img src="{{ asset('img/Illustration2.png') }}"></div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% include 'Cook4usBundle:Base:footer.html.twig' %}*/

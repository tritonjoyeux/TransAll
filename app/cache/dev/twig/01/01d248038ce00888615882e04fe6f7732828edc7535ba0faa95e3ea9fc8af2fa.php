<?php

/* @Cook4us/Default/index.html.twig */
class __TwigTemplate_d86949c1d465cfa7278608200fd7a3f16b8b3ca7d4e4fa3d1df274c2664aec50 extends Twig_Template
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
        $__internal_e3aad617198d61c1e8c0f15c424319012deecc710dcf82a1b7134fc40acab0a1 = $this->env->getExtension("native_profiler");
        $__internal_e3aad617198d61c1e8c0f15c424319012deecc710dcf82a1b7134fc40acab0a1->enter($__internal_e3aad617198d61c1e8c0f15c424319012deecc710dcf82a1b7134fc40acab0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Default/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('container', $context, $blocks);
        // line 161
        echo "</html>";
        
        $__internal_e3aad617198d61c1e8c0f15c424319012deecc710dcf82a1b7134fc40acab0a1->leave($__internal_e3aad617198d61c1e8c0f15c424319012deecc710dcf82a1b7134fc40acab0a1_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa5751cceccde788886600699dbf4786ad631031ace8b3e085aace5dfbae94f4 = $this->env->getExtension("native_profiler");
        $__internal_fa5751cceccde788886600699dbf4786ad631031ace8b3e085aace5dfbae94f4->enter($__internal_fa5751cceccde788886600699dbf4786ad631031ace8b3e085aace5dfbae94f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
</head>


";
        
        $__internal_fa5751cceccde788886600699dbf4786ad631031ace8b3e085aace5dfbae94f4->leave($__internal_fa5751cceccde788886600699dbf4786ad631031ace8b3e085aace5dfbae94f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9c902b4431d4b78a10bd52a133f883f9040d36314205fd34c384dc0ffe72e8f = $this->env->getExtension("native_profiler");
        $__internal_b9c902b4431d4b78a10bd52a133f883f9040d36314205fd34c384dc0ffe72e8f->enter($__internal_b9c902b4431d4b78a10bd52a133f883f9040d36314205fd34c384dc0ffe72e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_b9c902b4431d4b78a10bd52a133f883f9040d36314205fd34c384dc0ffe72e8f->leave($__internal_b9c902b4431d4b78a10bd52a133f883f9040d36314205fd34c384dc0ffe72e8f_prof);

    }

    // line 21
    public function block_container($context, array $blocks = array())
    {
        $__internal_1c47c9af3a48d921e0181d8d8a49cdcf2a9d661269d0f61b25a89014c5c924ac = $this->env->getExtension("native_profiler");
        $__internal_1c47c9af3a48d921e0181d8d8a49cdcf2a9d661269d0f61b25a89014c5c924ac->enter($__internal_1c47c9af3a48d921e0181d8d8a49cdcf2a9d661269d0f61b25a89014c5c924ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 22
        echo "    <body>
    <section class=\"top\">

        <section class=\"menuTablet\">
            <ul>
                <li>COMMENT ÇA MARCHE ?</li>
                <li>NOTRE ÉQUIPE</li>
                <li><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"</li>
                <li>CONNEXION</li>
                <li>
                    <button class=\"chiefTab\">DEVENIR CHEF</button>
                </li>
            </ul>
        </section>

        <button class=\"chief\">DEVENIR CHEF</button>
        <ul class=\"menu\">
            <a href=\"#\">
                <li></li>
                <li></li>
                <li></li>
            </a>
        </ul>
        <div class=\"logo\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></div>
        <p class=\"topText\">Ne vous occupez plus<br> jamais du dîner, laissez<br>
            nos cookists s'en charger.</p>
        <p class=\"topTextTablet\">NE VOUS OCCUPEZ PLUS JAMAIS <br> DU DÎNER, LAISSEZ NOS COOKISTS<br>
            S'EN CHARGER.</p><br>

        <input type=\"search\" class=\"cookType\" placeholder=\"Type de cuisine\">
        <button class=\"cookTypeSubmit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
        <input type=\"search\" class=\"topInputTab1\" placeholder=\"Type de cuisine\"><input type=\"search\"
                                                                                       class=\"topInputTab2\"
                                                                                       placeholder=\"Nombre de personnes\">
        <input type=\"search\" class=\"topInputTab3\" placeholder=\"Prix\">
        <input type=\"submit\" class=\"topSubmitTablet\" value=\"Recherche\">

    </section>

    <section class=\"cookist\">
        <ul class=\"findTab\">
            <li><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_81.png"), "html", null, true);
        echo "\">Bordel de merde</li>
            <li><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_80.png"), "html", null, true);
        echo "\">putain</li>
            <li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_09.png"), "html", null, true);
        echo "\">connard</li>
            <li><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_82.png"), "html", null, true);
        echo "\">de merde</li>
        </ul>

        <div class=\"gallery js-flickity\">
            <div class=\"gallery-cell\">
                <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND </p>
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_81.png"), "html", null, true);
        echo "\">
                <p class=\"choose\">CHOISISSEZ VOTRE TYPE DE CUISINE</p>
            </div>
            <div class=\"gallery-cell\">
                <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
                <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_80.png"), "html", null, true);
        echo "\">
                <p class=\"choose\">CHERCHEZ LE COOKIST ADAPTÉ</p>
            </div>
            <div class=\"gallery-cell\">
                <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
                <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_09.png"), "html", null, true);
        echo "\">
                <p class=\"choose\">IL CUISINE POUR VOUS</p>
            </div>
            <div class=\"gallery-cell\">
                <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_82.png"), "html", null, true);
        echo "\">
                <p class=\"choose\">PAIEMENT VIA LE SITE OU L'APPLI</p>
            </div>
        </div>
    </section>


    <section class=\"imgPeople\">

        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People1.png"), "html", null, true);
        echo "\">
        <p class=\"pStyle\">Japan style</p>
        <p class=\"pMenu\">8 menus disponibles</p>

    </section>

    <section class=\"imgPeople2\">
        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People2.png"), "html", null, true);
        echo "\">
        <p class=\"pStyle\">Le plaisir français</p>
        <p class=\"pMenu\">5 menus disponibles</p>
    </section>

    <section class=\"imgPeople3\">
        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People3.png"), "html", null, true);
        echo "\">
        <p class=\"pStyle\">Pas qu'un sandwich</p>
        <p class=\"pMenu\">6 menus disponibles</p>

    </section>

    <section class=\"imgPeople4\">
        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People4.png"), "html", null, true);
        echo "\">
        <p class=\"pStyle\">Meat avant tout</p>
        <p class=\"pMenu\">3 menus disponibles</p>

    </section>

    <section class=\"discover\">
        <p class=\"pTypeCook\"> Venez découvrir tous nos types de cuisine et cocktails</p><br>
        <p class=\"pWant\"> De quoi avez-vous envie aujourd'hui ?</p>
        <div id=\"showcase\" class=\"noselect\">
            <img class=\"cloud9-item\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1.png"), "html", null, true);
        echo "\" alt=\"Firefox\">
            <img class=\"cloud9-item\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2.png"), "html", null, true);
        echo "\" alt=\"Wyzo\">
            <img class=\"cloud9-item\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3.png"), "html", null, true);
        echo "\" alt=\"Opera\">
            <img class=\"cloud9-item\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4.png"), "html", null, true);
        echo "\" alt=\"Chrome\">
            <img class=\"cloud9-item\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/5.png"), "html", null, true);
        echo "\" alt=\"Internet Explorer\">
            <img class=\"cloud9-item\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/6.png"), "html", null, true);
        echo "\" alt=\"Safari\">
            <img class=\"cloud9-item\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/7.png"), "html", null, true);
        echo "\" alt=\"Safari\">
        </div>
        <p class=\"pCocktail\"> Dégustez un cocktail entre amis</p>
        <div class=\"pDiscover\"> DÉCOUVRIR</div>
    </section>

    <section class=\"grossery\">
        <p class=\"pGrossery1\">ET VOUS SAVEZ QUOI ?</p>
        <p class=\"pGrossery2\"> NOS COOKIST FONT MÊME LES COURSES</p>
        <p class=\"pGrossery3\"> Vous n'avez pas le temps de faire les courses pour vos invités ? Pas de panique !<br>
            En plus de se charger du dîner, nos cookists prennent le temps d'acheter tous les ingrédients
            nécessaires
            à la préparation de leurs plats.</p>
        <p class=\"pGrossery4\"> Allez, vous pouvez souffler ! </p>
    </section>

    <section class=\"certified\">
        <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/IconeCertified.png"), "html", null, true);
        echo "\" alt=\"certified\">
        <h1> NOS COOKIST SONT CERTIFIÉS !</h1>
        <p> La plupart de <span>nos cookists sont certifés</span>, ils suivent une formation à leur inscription afin
            d'être
            conscient des normes de sécurité et d'hygiène. Une petite icone apparaîtra sur leur profil afin
            que vous puissiez les différencier des autres cookists n'ayant pas suivi la formation.</p>
        <p> Faites-leur confiance ! </p>

    </section>
    </body>

";
        
        $__internal_1c47c9af3a48d921e0181d8d8a49cdcf2a9d661269d0f61b25a89014c5c924ac->leave($__internal_1c47c9af3a48d921e0181d8d8a49cdcf2a9d661269d0f61b25a89014c5c924ac_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  303 => 149,  283 => 132,  279 => 131,  275 => 130,  271 => 129,  267 => 128,  263 => 127,  259 => 126,  246 => 116,  236 => 109,  227 => 103,  217 => 96,  205 => 87,  197 => 82,  189 => 77,  181 => 72,  172 => 66,  168 => 65,  164 => 64,  160 => 63,  139 => 45,  120 => 29,  111 => 22,  105 => 21,  93 => 7,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  45 => 2,  39 => 1,  32 => 161,  30 => 21,  27 => 20,  25 => 1,);
    }
}
/* {% block head %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Accueil{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">*/
/*     <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery.reflection.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery.cloud9carousel.js') }}"></script>*/
/*     <script src="{{ asset('js/carousel.js') }}"></script>*/
/* </head>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/*     <body>*/
/*     <section class="top">*/
/* */
/*         <section class="menuTablet">*/
/*             <ul>*/
/*                 <li>COMMENT ÇA MARCHE ?</li>*/
/*                 <li>NOTRE ÉQUIPE</li>*/
/*                 <li><img src="{{ asset('img/logoTablette.png') }}"</li>*/
/*                 <li>CONNEXION</li>*/
/*                 <li>*/
/*                     <button class="chiefTab">DEVENIR CHEF</button>*/
/*                 </li>*/
/*             </ul>*/
/*         </section>*/
/* */
/*         <button class="chief">DEVENIR CHEF</button>*/
/*         <ul class="menu">*/
/*             <a href="#">*/
/*                 <li></li>*/
/*                 <li></li>*/
/*                 <li></li>*/
/*             </a>*/
/*         </ul>*/
/*         <div class="logo"><img src="{{ asset('img/logo.png') }}"></div>*/
/*         <p class="topText">Ne vous occupez plus<br> jamais du dîner, laissez<br>*/
/*             nos cookists s'en charger.</p>*/
/*         <p class="topTextTablet">NE VOUS OCCUPEZ PLUS JAMAIS <br> DU DÎNER, LAISSEZ NOS COOKISTS<br>*/
/*             S'EN CHARGER.</p><br>*/
/* */
/*         <input type="search" class="cookType" placeholder="Type de cuisine">*/
/*         <button class="cookTypeSubmit"><i class="fa fa-search" aria-hidden="true"></i></button>*/
/*         <input type="search" class="topInputTab1" placeholder="Type de cuisine"><input type="search"*/
/*                                                                                        class="topInputTab2"*/
/*                                                                                        placeholder="Nombre de personnes">*/
/*         <input type="search" class="topInputTab3" placeholder="Prix">*/
/*         <input type="submit" class="topSubmitTablet" value="Recherche">*/
/* */
/*     </section>*/
/* */
/*     <section class="cookist">*/
/*         <ul class="findTab">*/
/*             <li><img src="{{ asset('img/cook4us-tablette_81.png') }}">Bordel de merde</li>*/
/*             <li><img src="{{ asset('img/cook4us-tablette_80.png') }}">putain</li>*/
/*             <li><img src="{{ asset('img/cook4us-tablette_09.png') }}">connard</li>*/
/*             <li><img src="{{ asset('img/cook4us-tablette_82.png') }}">de merde</li>*/
/*         </ul>*/
/* */
/*         <div class="gallery js-flickity">*/
/*             <div class="gallery-cell">*/
/*                 <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND </p>*/
/*                 <img src="{{ asset('img/cook4us-tablette_81.png') }}">*/
/*                 <p class="choose">CHOISISSEZ VOTRE TYPE DE CUISINE</p>*/
/*             </div>*/
/*             <div class="gallery-cell">*/
/*                 <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*                 <img src="{{ asset('img/cook4us-tablette_80.png') }}">*/
/*                 <p class="choose">CHERCHEZ LE COOKIST ADAPTÉ</p>*/
/*             </div>*/
/*             <div class="gallery-cell">*/
/*                 <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*                 <img src="{{ asset('img/cook4us-tablette_09.png') }}">*/
/*                 <p class="choose">IL CUISINE POUR VOUS</p>*/
/*             </div>*/
/*             <div class="gallery-cell">*/
/*                 <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*                 <img src="{{ asset('img/cook4us-tablette_82.png') }}">*/
/*                 <p class="choose">PAIEMENT VIA LE SITE OU L'APPLI</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/*     <section class="imgPeople">*/
/* */
/*         <img src="{{ asset('img/People1.png') }}">*/
/*         <p class="pStyle">Japan style</p>*/
/*         <p class="pMenu">8 menus disponibles</p>*/
/* */
/*     </section>*/
/* */
/*     <section class="imgPeople2">*/
/*         <img src="{{ asset('img/People2.png') }}">*/
/*         <p class="pStyle">Le plaisir français</p>*/
/*         <p class="pMenu">5 menus disponibles</p>*/
/*     </section>*/
/* */
/*     <section class="imgPeople3">*/
/*         <img src="{{ asset('img/People3.png') }}">*/
/*         <p class="pStyle">Pas qu'un sandwich</p>*/
/*         <p class="pMenu">6 menus disponibles</p>*/
/* */
/*     </section>*/
/* */
/*     <section class="imgPeople4">*/
/*         <img src="{{ asset('img/People4.png') }}">*/
/*         <p class="pStyle">Meat avant tout</p>*/
/*         <p class="pMenu">3 menus disponibles</p>*/
/* */
/*     </section>*/
/* */
/*     <section class="discover">*/
/*         <p class="pTypeCook"> Venez découvrir tous nos types de cuisine et cocktails</p><br>*/
/*         <p class="pWant"> De quoi avez-vous envie aujourd'hui ?</p>*/
/*         <div id="showcase" class="noselect">*/
/*             <img class="cloud9-item" src="{{ asset('img/1.png') }}" alt="Firefox">*/
/*             <img class="cloud9-item" src="{{ asset('img/2.png') }}" alt="Wyzo">*/
/*             <img class="cloud9-item" src="{{ asset('img/3.png') }}" alt="Opera">*/
/*             <img class="cloud9-item" src="{{ asset('img/4.png') }}" alt="Chrome">*/
/*             <img class="cloud9-item" src="{{ asset('img/5.png') }}" alt="Internet Explorer">*/
/*             <img class="cloud9-item" src="{{ asset('img/6.png') }}" alt="Safari">*/
/*             <img class="cloud9-item" src="{{ asset('img/7.png') }}" alt="Safari">*/
/*         </div>*/
/*         <p class="pCocktail"> Dégustez un cocktail entre amis</p>*/
/*         <div class="pDiscover"> DÉCOUVRIR</div>*/
/*     </section>*/
/* */
/*     <section class="grossery">*/
/*         <p class="pGrossery1">ET VOUS SAVEZ QUOI ?</p>*/
/*         <p class="pGrossery2"> NOS COOKIST FONT MÊME LES COURSES</p>*/
/*         <p class="pGrossery3"> Vous n'avez pas le temps de faire les courses pour vos invités ? Pas de panique !<br>*/
/*             En plus de se charger du dîner, nos cookists prennent le temps d'acheter tous les ingrédients*/
/*             nécessaires*/
/*             à la préparation de leurs plats.</p>*/
/*         <p class="pGrossery4"> Allez, vous pouvez souffler ! </p>*/
/*     </section>*/
/* */
/*     <section class="certified">*/
/*         <img src="{{ asset('img/IconeCertified.png') }}" alt="certified">*/
/*         <h1> NOS COOKIST SONT CERTIFIÉS !</h1>*/
/*         <p> La plupart de <span>nos cookists sont certifés</span>, ils suivent une formation à leur inscription afin*/
/*             d'être*/
/*             conscient des normes de sécurité et d'hygiène. Une petite icone apparaîtra sur leur profil afin*/
/*             que vous puissiez les différencier des autres cookists n'ayant pas suivi la formation.</p>*/
/*         <p> Faites-leur confiance ! </p>*/
/* */
/*     </section>*/
/*     </body>*/
/* */
/* {% endblock %}*/
/* </html>*/

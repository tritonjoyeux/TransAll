<?php

/* Cook4usBundle:Chef:index.html.twig */
class __TwigTemplate_9029ab9d534478a857fe779f2527a3aef71349067ab09641b76eeddc4c7ddead extends Twig_Template
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
        $__internal_4eff509ba4ac46e060e542e3fd657d1dd19cd9db93e2bc40211e4ee40c424828 = $this->env->getExtension("native_profiler");
        $__internal_4eff509ba4ac46e060e542e3fd657d1dd19cd9db93e2bc40211e4ee40c424828->enter($__internal_4eff509ba4ac46e060e542e3fd657d1dd19cd9db93e2bc40211e4ee40c424828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Chef:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('container', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->loadTemplate("Cook4usBundle:Base:footer.html.twig", "Cook4usBundle:Chef:index.html.twig", 132)->display($context);
        
        $__internal_4eff509ba4ac46e060e542e3fd657d1dd19cd9db93e2bc40211e4ee40c424828->leave($__internal_4eff509ba4ac46e060e542e3fd657d1dd19cd9db93e2bc40211e4ee40c424828_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a0be19fe10c7ec1ba28f16234bbc8c678888fe22f81e6374f661bc4fdd4ff30 = $this->env->getExtension("native_profiler");
        $__internal_9a0be19fe10c7ec1ba28f16234bbc8c678888fe22f81e6374f661bc4fdd4ff30->enter($__internal_9a0be19fe10c7ec1ba28f16234bbc8c678888fe22f81e6374f661bc4fdd4ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/chef.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/flickity.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flickity.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.reflection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.cloud9carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuMobile.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/hygiene.css"), "html", null, true);
        echo "\">
</head>

";
        
        $__internal_9a0be19fe10c7ec1ba28f16234bbc8c678888fe22f81e6374f661bc4fdd4ff30->leave($__internal_9a0be19fe10c7ec1ba28f16234bbc8c678888fe22f81e6374f661bc4fdd4ff30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c45ef7feea49c80e0448081c7d1d39b825f78349f7d92af92cb105930735a95 = $this->env->getExtension("native_profiler");
        $__internal_4c45ef7feea49c80e0448081c7d1d39b825f78349f7d92af92cb105930735a95->enter($__internal_4c45ef7feea49c80e0448081c7d1d39b825f78349f7d92af92cb105930735a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_4c45ef7feea49c80e0448081c7d1d39b825f78349f7d92af92cb105930735a95->leave($__internal_4c45ef7feea49c80e0448081c7d1d39b825f78349f7d92af92cb105930735a95_prof);

    }

    // line 23
    public function block_container($context, array $blocks = array())
    {
        $__internal_e7643ae9f24c96b95e667651af31ef7044315d5192ce296cf88c183bec6e6190 = $this->env->getExtension("native_profiler");
        $__internal_e7643ae9f24c96b95e667651af31ef7044315d5192ce296cf88c183bec6e6190->enter($__internal_e7643ae9f24c96b95e667651af31ef7044315d5192ce296cf88c183bec6e6190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 24
        echo "
<header>
    <aside class=\"menuAside\">
        <ul class=\"ulClose\">
            <li class=\"close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></li>
            <li class=\"menuLogo\"><a href=\"/\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></a></li>
        </ul>

        <ul class=\"menuApp\">
            <li><button class=\"download\">TÉLÉCHARGER L'APPLI</button></li>
            <li><button class=\"become\">DEVENIR CHEF</button></li>
            <li class=\"connexion\">CONNEXION</li>
            <li class=\"connexion\">COMMENT ÇA MARCHE</li>
            <li class=\"connexion\"><a href=\"/hygiene\">HYGIÈNE</a></li>
        </ul>
    </aside>

    <ul class=\"menu\">
        <a href=\"#\">
            <li></li>
            <li></li>
            <li></li>
        </a>
    </ul>
    <div class=\"logoHygiene\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></div>
</header>

<div class=\"pageChefbecome\">

    <div class=\"how\">COMMENT DEVENIR COOKIST CHEZ COOK4US</div>
    <div class=\"why\">POURQUOI DEVENIR COOKIST CHEZ NOUS</div>
    <div class=\"why\">NOTRE FORMATION SUPPLEMENTAIRE</div>
    <hr>
    <p class=\"titre1\">COMMENT DEVENIR COOKIST<br> CHEZ COOK4US</p>

    <div class=\"securityChef\">
        <p class=\"security1\">Confort et sécurité</p>
        <p class=\"security2\">Lorsque le cookist prépare ses plats, il s'engage à les faire
            avec convivialité et dans la propreté. Il s'immice dans l'intimité
         des clients et doit donc faire preuve de respect
        </p>
        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/icon1.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"securityChef\">
        <p class=\"security1\">Fraîcheur des produits</p>
        <p class=\"security2\">Le cookist s'engage à utiliser des produits frais,
            afin de ne pas porter atteinte à la santé des consommateurs.
            Toute fraude à cette règle sera punie.
        </p>
        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/icon2.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"securityChef\">
        <p class=\"security1\">Contenu des plats</p>
        <p class=\"security2\">Le cookist s'engage à notifier sur sa fiche de plats
            les ingrédients contenus das sa proposition culinaire et entrerdans les détails
            si les clients el lui demandent afin de prévenir les risques d'allergies.
        </p>
        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/icon3.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"securityChef\">
        <p class=\"security1\">Hygiène</p>
        <p class=\"security2\">Le cookist s'engage à respecter les règlements en vigueur
            pour assurer l'hygiène garantie d'une alimentation saine, conformément à l'Arrêté
            du 9 mai 1995.
        </p>
        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/icon4.png"), "html", null, true);
        echo "\">
    </div>
    <hr>

    <p class=\"titre1\">POURQUOI DEVENIR COOKIST<br> CHEZ NOUS</p>

    <div class=\"whyCookist\">
        <p class=\"security1\">Devenez chef de nos convives</p>
        <p class=\"security2\">Vous avez toujours rêvez de faire goûter vos délicieux
            plats faits maison à vos convives ? Vous êtes au bon endroit ! Si vous êtes un mordu de cuisine,
            amoureux fait maison et du bien manger, votre place vous attend en tant que cookist chez nous !
        </p>
        <img class=\"tarte\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/tarte.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"whyCookist\">
        <p class=\"security1\">Arrondissez vos fins de mois</p>
        <p class=\"security2\">Et si votre passion devenait bien plus qu'un passe-temps ? Cook4us c'est LA plateforme
            qui profite à tous. Régalez vos clients en les épatant avec vos talents culinaires et empochez  de l'argent en retour.
            Rien de plus simple; Allez, lancez-vous !
        </p>
        <img class=\"tarte\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/saladepomme.png"), "html", null, true);
        echo "\">
    </div>
    <div class=\"how\">ACCÉDEZ À L'INSCRIPTION</div>
    <hr>
    <p class=\"titre1\">NOTRE FORMATION</p>
    <div class=\"whyCookist\">
        <p class=\"security1\">Participez à notre formation et soyez<br> certifié en tant que cookist d'exception</p>
        <p class=\"security2\">Cette formation est au prix de 35€ et dure une demi-journée. Elle vous permet d'optenir
            le statut \"certifié\" sur votre futur profil  de cookist. Les clientss seront alors plus attirés vers vous.
            C'est parti !
        </p>
        <hr>
        <p class=\"security2\"> Pour participer rien de plus simple . Cochez l'icône <div></div> lors de votre inscription.
        Vous serez alors contacté pour connaître  toutes les informations supplémentaires. À vous de jouer !</p>
    </div>
    <div class=\"how\">ACCÉDEZ À L'INSCRIPTION</div>
</div>
";
        
        $__internal_e7643ae9f24c96b95e667651af31ef7044315d5192ce296cf88c183bec6e6190->leave($__internal_e7643ae9f24c96b95e667651af31ef7044315d5192ce296cf88c183bec6e6190_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Chef:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 113,  225 => 104,  210 => 92,  198 => 83,  186 => 74,  174 => 65,  154 => 48,  132 => 29,  125 => 24,  119 => 23,  107 => 7,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  48 => 2,  42 => 1,  35 => 132,  32 => 131,  30 => 23,  27 => 22,  25 => 1,);
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
/*     <link rel="stylesheet" href="{{ asset('css/chef.css') }}">*/
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
/* {% block container %}*/
/* */
/* <header>*/
/*     <aside class="menuAside">*/
/*         <ul class="ulClose">*/
/*             <li class="close"><i class="fa fa-times" aria-hidden="true"></i></li>*/
/*             <li class="menuLogo"><a href="/"><img src="{{ asset('img/logoTablette.png') }}"></a></li>*/
/*         </ul>*/
/* */
/*         <ul class="menuApp">*/
/*             <li><button class="download">TÉLÉCHARGER L'APPLI</button></li>*/
/*             <li><button class="become">DEVENIR CHEF</button></li>*/
/*             <li class="connexion">CONNEXION</li>*/
/*             <li class="connexion">COMMENT ÇA MARCHE</li>*/
/*             <li class="connexion"><a href="/hygiene">HYGIÈNE</a></li>*/
/*         </ul>*/
/*     </aside>*/
/* */
/*     <ul class="menu">*/
/*         <a href="#">*/
/*             <li></li>*/
/*             <li></li>*/
/*             <li></li>*/
/*         </a>*/
/*     </ul>*/
/*     <div class="logoHygiene"><img src="{{ asset('img/logoTablette.png') }}"></div>*/
/* </header>*/
/* */
/* <div class="pageChefbecome">*/
/* */
/*     <div class="how">COMMENT DEVENIR COOKIST CHEZ COOK4US</div>*/
/*     <div class="why">POURQUOI DEVENIR COOKIST CHEZ NOUS</div>*/
/*     <div class="why">NOTRE FORMATION SUPPLEMENTAIRE</div>*/
/*     <hr>*/
/*     <p class="titre1">COMMENT DEVENIR COOKIST<br> CHEZ COOK4US</p>*/
/* */
/*     <div class="securityChef">*/
/*         <p class="security1">Confort et sécurité</p>*/
/*         <p class="security2">Lorsque le cookist prépare ses plats, il s'engage à les faire*/
/*             avec convivialité et dans la propreté. Il s'immice dans l'intimité*/
/*          des clients et doit donc faire preuve de respect*/
/*         </p>*/
/*         <img src="{{ asset('img/icon1.png') }}">*/
/*     </div>*/
/* */
/*     <div class="securityChef">*/
/*         <p class="security1">Fraîcheur des produits</p>*/
/*         <p class="security2">Le cookist s'engage à utiliser des produits frais,*/
/*             afin de ne pas porter atteinte à la santé des consommateurs.*/
/*             Toute fraude à cette règle sera punie.*/
/*         </p>*/
/*         <img src="{{ asset('img/icon2.png') }}">*/
/*     </div>*/
/* */
/*     <div class="securityChef">*/
/*         <p class="security1">Contenu des plats</p>*/
/*         <p class="security2">Le cookist s'engage à notifier sur sa fiche de plats*/
/*             les ingrédients contenus das sa proposition culinaire et entrerdans les détails*/
/*             si les clients el lui demandent afin de prévenir les risques d'allergies.*/
/*         </p>*/
/*         <img src="{{ asset('img/icon3.png') }}">*/
/*     </div>*/
/* */
/*     <div class="securityChef">*/
/*         <p class="security1">Hygiène</p>*/
/*         <p class="security2">Le cookist s'engage à respecter les règlements en vigueur*/
/*             pour assurer l'hygiène garantie d'une alimentation saine, conformément à l'Arrêté*/
/*             du 9 mai 1995.*/
/*         </p>*/
/*         <img src="{{ asset('img/icon4.png') }}">*/
/*     </div>*/
/*     <hr>*/
/* */
/*     <p class="titre1">POURQUOI DEVENIR COOKIST<br> CHEZ NOUS</p>*/
/* */
/*     <div class="whyCookist">*/
/*         <p class="security1">Devenez chef de nos convives</p>*/
/*         <p class="security2">Vous avez toujours rêvez de faire goûter vos délicieux*/
/*             plats faits maison à vos convives ? Vous êtes au bon endroit ! Si vous êtes un mordu de cuisine,*/
/*             amoureux fait maison et du bien manger, votre place vous attend en tant que cookist chez nous !*/
/*         </p>*/
/*         <img class="tarte" src="{{ asset('img/tarte.png') }}">*/
/*     </div>*/
/* */
/*     <div class="whyCookist">*/
/*         <p class="security1">Arrondissez vos fins de mois</p>*/
/*         <p class="security2">Et si votre passion devenait bien plus qu'un passe-temps ? Cook4us c'est LA plateforme*/
/*             qui profite à tous. Régalez vos clients en les épatant avec vos talents culinaires et empochez  de l'argent en retour.*/
/*             Rien de plus simple; Allez, lancez-vous !*/
/*         </p>*/
/*         <img class="tarte" src="{{ asset('img/saladepomme.png') }}">*/
/*     </div>*/
/*     <div class="how">ACCÉDEZ À L'INSCRIPTION</div>*/
/*     <hr>*/
/*     <p class="titre1">NOTRE FORMATION</p>*/
/*     <div class="whyCookist">*/
/*         <p class="security1">Participez à notre formation et soyez<br> certifié en tant que cookist d'exception</p>*/
/*         <p class="security2">Cette formation est au prix de 35€ et dure une demi-journée. Elle vous permet d'optenir*/
/*             le statut "certifié" sur votre futur profil  de cookist. Les clientss seront alors plus attirés vers vous.*/
/*             C'est parti !*/
/*         </p>*/
/*         <hr>*/
/*         <p class="security2"> Pour participer rien de plus simple . Cochez l'icône <div></div> lors de votre inscription.*/
/*         Vous serez alors contacté pour connaître  toutes les informations supplémentaires. À vous de jouer !</p>*/
/*     </div>*/
/*     <div class="how">ACCÉDEZ À L'INSCRIPTION</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% include 'Cook4usBundle:Base:footer.html.twig' %}*/

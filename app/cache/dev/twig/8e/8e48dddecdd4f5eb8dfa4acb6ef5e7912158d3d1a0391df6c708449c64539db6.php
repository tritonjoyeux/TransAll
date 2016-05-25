<?php

/* Cook4usBundle:Default:index.html.twig */
class __TwigTemplate_4251e09684dbbb42720f890018cf6bf172512c3b668c0e04ea080dc6f0f58f03 extends Twig_Template
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
        $__internal_e7209cd1726991d7448952d6bb3c67657b8e88b88da7a700e50ea2d6d8bc247a = $this->env->getExtension("native_profiler");
        $__internal_e7209cd1726991d7448952d6bb3c67657b8e88b88da7a700e50ea2d6d8bc247a->enter($__internal_e7209cd1726991d7448952d6bb3c67657b8e88b88da7a700e50ea2d6d8bc247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_e7209cd1726991d7448952d6bb3c67657b8e88b88da7a700e50ea2d6d8bc247a->leave($__internal_e7209cd1726991d7448952d6bb3c67657b8e88b88da7a700e50ea2d6d8bc247a_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_9db4177df0a3c56fe69b3c0d94844a78cf65b35b4ebe4b3cab1c727b82981e2e = $this->env->getExtension("native_profiler");
        $__internal_9db4177df0a3c56fe69b3c0d94844a78cf65b35b4ebe4b3cab1c727b82981e2e->enter($__internal_9db4177df0a3c56fe69b3c0d94844a78cf65b35b4ebe4b3cab1c727b82981e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
</head>

";
        
        $__internal_9db4177df0a3c56fe69b3c0d94844a78cf65b35b4ebe4b3cab1c727b82981e2e->leave($__internal_9db4177df0a3c56fe69b3c0d94844a78cf65b35b4ebe4b3cab1c727b82981e2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7002840fee415103f9ea5272dc750592608d26f091d30f3ce42b1265c19b1e97 = $this->env->getExtension("native_profiler");
        $__internal_7002840fee415103f9ea5272dc750592608d26f091d30f3ce42b1265c19b1e97->enter($__internal_7002840fee415103f9ea5272dc750592608d26f091d30f3ce42b1265c19b1e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_7002840fee415103f9ea5272dc750592608d26f091d30f3ce42b1265c19b1e97->leave($__internal_7002840fee415103f9ea5272dc750592608d26f091d30f3ce42b1265c19b1e97_prof);

    }

    // line 21
    public function block_container($context, array $blocks = array())
    {
        $__internal_986882310170656612c0583e305e03107c4e51fa2900df9292a65e84bceefb9c = $this->env->getExtension("native_profiler");
        $__internal_986882310170656612c0583e305e03107c4e51fa2900df9292a65e84bceefb9c->enter($__internal_986882310170656612c0583e305e03107c4e51fa2900df9292a65e84bceefb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 22
        echo "<aside class=\"menuAside\">
    <ul class=\"ulClose\">
        <li class=\"close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></li>
        <li class=\"menuLogo\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></li>
    </ul>

    <ul class=\"menuApp\">
        <li><button class=\"download\">TÉLÉCHARGER L'APPLI</button></li>
        <li><button class=\"become\">DEVENIR CHEF</button></li>
        <li class=\"connexion\">CONNEXION</li>
        <li class=\"connexion\">COMMENT ÇA MARCHE</li>
        <li class=\"connexion\"><a href=\"/hygiene\">HYGIÈNE</a></li>
    </ul>
</aside>

<section class=\"top\">

    <section class=\"menuTablet\">
        <ul>
            <li>COMMENT ÇA MARCHE ?</li>
            <li>NOTRE ÉQUIPE</li>
            <li><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></li>
            <li>CONNEXION</li>
            <li><button class=\"chiefTab\">DEVENIR CHEF</button></li>
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
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></div>
    <p class=\"topText\">Ne vous occupez plus<br> jamais du dîner, laissez<br>
        nos cookists s'en charger.</p>
    <p class=\"topTextTablet\">NE VOUS OCCUPEZ PLUS JAMAIS <br> DU DÎNER, LAISSEZ NOS COOKISTS<br>
        S'EN CHARGER.</p><br>

    <input type=\"search\" class=\"cookType\" placeholder=\"Type de cuisine\">
    <button class=\"cookTypeSubmit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
    <input type=\"search\" class=\"topInputTab1\" placeholder=\"Type de cuisine\">
    <input type=\"submit\" class=\"topSubmitTablet\" value=\"Recherche\">

</section>

<section class=\"cookist\">
    <p class=\"pFindTab\">TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
    <ul class=\"findTab\">
        <li class=\"tab1\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_81.png"), "html", null, true);
        echo "\"><p class=\"chooseTab\">CHOISISSEZ VOTRE TYPE DE CUISINE</p></li>
        <li class=\"tab2\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_80.png"), "html", null, true);
        echo "\"><p class=\"chooseTab2\">CHERCHEZ LE COOKIST ADAPTÉ</p></li>
        <li class=\"tab3\"> <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_09.png"), "html", null, true);
        echo "\"><p class=\"chooseTab3\">IL CUISINE POUR VOUS</p></li>
        <li> <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_82.png"), "html", null, true);
        echo "\"><p class=\"chooseTab4\">PAIEMENT VIA LE SITE OU L'APPLI</p></li>
    </ul>

    <div class=\"gallery js-flickity\">
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND </p>
            <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_81.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">CHOISISSEZ VOTRE TYPE DE CUISINE</p>
        </div>
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_80.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">CHERCHEZ LE COOKIST ADAPTÉ</p>
        </div>
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
            <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_09.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">IL CUISINE POUR VOUS</p>
        </div>
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
            <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_82.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">PAIEMENT VIA LE SITE OU L'APPLI</p>
        </div>
    </div>
</section>

<section class=\"famousChief\">

    <div class=\"chiefMobile\">
        <article class=\"imgPeople\">
            <img  src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People1.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Japan style</p>
            <p class=\"pMenu\">8 menus disponibles</p>
        </article>

        <article class=\"imgPeople2\">
            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People2.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Le plaisir français</p>
            <p class=\"pMenu\">5 menus disponibles</p>
        </article>

        <article class=\"imgPeople3\">
            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People3.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Pas qu'un sandwich</p>
            <p class=\"pMenu\">6 menus disponibles</p>

        </article>

        <article class=\"imgPeople4\">
            <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People4.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Meat avant tout</p>
            <p class=\"pMenu\">3 menus disponibles</p>

        </article>
    </div>

    <div class=\"chiefTablette\">
        <div class=\"chiefList\">
            <p class=\"pharesChief\"> Les cookist phares du moment</p>
            <p class=\"selection\">Découvrez dès à présent une sélection de six des meilleurs cookists</p>
            <article>
                <div class=\"rectangle\"><p class=\"price\">à partir de</p><p class=\"price2\"> 25€</p></div>
                <div class=\"triangle\"></div>
                <img class=\"ramen\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/RamenTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Michael</p>
                <img  class=\"michael\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People1.png"), "html", null, true);
        echo "\">
                <div class=\"textTablette\">
                    <p class=\"japanStyle\"> Japan style </p>
                    <p class=\"menuDispo\"> 8 menus disponibles</p>
                    <p class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i>  <a href=\"#\"> voir le profil + </a></p>
                </div>
            </article>

            <article>
                <div class=\"rectangle\"><p class=\"price\">à partir de</p><p class=\"price2\"> 20€</p></div>
                <div class=\"triangle\"></div>
                <img class=\"sandwich\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/SandwichTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Antoine</p>
                <img  class=\"michael\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People3.png"), "html", null, true);
        echo "\">
                <div class=\"textTablette\">
                    <p class=\"japanStyle\"> Japan style </p>
                    <p class=\"menuDispo\"> 8 menus disponibles</p>
                    <p class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i> <a href=\"#\"> voir le profil + </a></p>
                </div>
            </article>

            <article>
                <div class=\"rectangle\"><p class=\"price\">à partir de</p><p class=\"price2\"> 30€</p></div>
                <div class=\"triangle\"></div>
                <img class=\"salade\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/SaladeTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Emilie</p>
                <img  class=\"michael\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People2.png"), "html", null, true);
        echo "\">
                <div class=\"textTablette\">
                    <p class=\"japanStyle\"> Japan style </p>
                    <p class=\"menuDispo\"> 8 menus disponibles</p>
                    <p class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i> <a href=\"#\"> voir le profil + </a></p>
                </div>
            </article>

            <article>
                <div class=\"rectangle\"><p class=\"price\">à partir de</p><p class=\"price2\"> 18€</p></div>
                <div class=\"triangle\"></div>
                <img class=\"hamburger\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/HamburgerTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Kate</p>
                <img  class=\"michael\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People5.png"), "html", null, true);
        echo "\">
                <div class=\"textTablette\">
                    <p class=\"japanStyle\"> Japan style </p>
                    <p class=\"menuDispo\"> 8 menus disponibles</p>
                    <p class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i> <a href=\"#\"> voir le profil + </a></p>
                </div>
            </article>

            <article>
                <div class=\"rectangle\"><p class=\"price\">à partir de</p><p class=\"price2\"> 40€</p></div>
                <div class=\"triangle\"></div>
                <img class=\"viande\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ViandeTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Jordan</p>
                <img  class=\"michael\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People4.png"), "html", null, true);
        echo "\">
                <div class=\"textTablette\">
                    <p class=\"japanStyle\"> Japan style </p>
                    <p class=\"menuDispo\"> 8 menus disponibles</p>
                    <p class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i> <a href=\"#\"> voir le profil + </a></p>
                </div>
            </article>

            <article>
                <div class=\"rectangle\"><p class=\"price\">à partir de</p><p class=\"price2\"> 40€</p></div>
                <div class=\"triangle\"></div>
                <img class=\"oeuf\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/OeufTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Kanye</p>
                <img  class=\"michael\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People6.png"), "html", null, true);
        echo "\">
                <div class=\"textTablette\">
                    <p class=\"japanStyle\"> Japan style </p>
                    <p class=\"menuDispo\"> 8 menus disponibles</p>
                    <p class=\"star\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i> <a href=\"#\"> voir le profil + </a></p>
                </div>

            </article>
        </div>
    </div>



</section>

<section class=\"discover\">
    <p class=\"pTypeCook\"> Venez découvrir tous nos types de cuisine et cocktails</p><br>
    <p class=\"pWant\"> De quoi avez-vous envie aujourd'hui ?</p>

    <div class=\"carousel\">
        <div id=\"showcase\" class=\"noselect\">
            <img class=\"cloud9-item\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1.png"), "html", null, true);
        echo "\" alt=\"1\">
            <img class=\"cloud9-item\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2.png"), "html", null, true);
        echo "\" alt=\"2\">
            <img class=\"cloud9-item\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3.png"), "html", null, true);
        echo "\" alt=\"3\">
            <img class=\"cloud9-item\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4.png"), "html", null, true);
        echo "\" alt=\"4\">
            <img class=\"cloud9-item\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/5.png"), "html", null, true);
        echo "\" alt=\"5\">
            <img class=\"cloud9-item\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/6.png"), "html", null, true);
        echo "\" alt=\"6\">
            <img class=\"cloud9-item\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/7.png"), "html", null, true);
        echo "\" alt=\"7\">
        </div>
    </div>

    <div class=\"carouselTablette\">
        <ul>
            <li><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4Tablette.png"), "html", null, true);
        echo "\" alt=\"1\"></li>
            <li><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2Tablette.png"), "html", null, true);
        echo "\" alt=\"2\"></li>
            <li><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3Tablette.png"), "html", null, true);
        echo "\" alt=\"3\"></li>
            <li><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1Tablette.png"), "html", null, true);
        echo "\" alt=\"4\"></li>
            <li><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/5Tablette.png"), "html", null, true);
        echo "\" alt=\"5\"></li>
            <li><img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/6Tablette.png"), "html", null, true);
        echo "\" alt=\"6\"></li>
            <li><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/7Tablette.png"), "html", null, true);
        echo "\" alt=\"7\"></li>
        </ul>
    </div>

    <p class=\"pCocktail\"> Dégustez un cocktail entre amis</p>
    <div class=\"pDiscover\"> DÉCOUVRIR </div>
    <button class=\"discoverTablette\"> Découvrir</button>
</section>

<section class=\"grossery\">
    <p class=\"pGrossery1\">ET VOUS SAVEZ QUOI ?</p>
    <p class=\"pGrossery2\"> NOS COOKIST FONT MÊME LES COURSES</p>
    <div class=\"borderTablette\"></div>
    <p class=\"pGrossery3\"> Vous n'avez pas le temps de faire les courses pour vos invités ? Pas de panique !<br>
        En plus de se charger du dîner, nos cookists prennent le temps d'acheter tous les ingrédients nécessaires
        à la préparation de leurs plats.</p>
    <p class=\"pGrossery4\"> Allez, vous pouvez souffler ! </p>
</section>

<section class=\"certified\">
    <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/IconeCertified.png"), "html", null, true);
        echo "\" alt=\"certified\">
    <h1> NOS COOKIST SONT CERTIFIÉS !</h1>
    <p> La plupart de <span>nos cookists sont certifés</span>, ils suivent une formation à leur inscription afin d'être
        conscient des normes de sécurité et d'hygiène. Une petite icone apparaîtra sur leur profil afin
        que vous puissiez les différencier des autres cookists n'ayant pas suivi la formation.</p>
    <p> Faites-leur confiance ! </p>

</section>

<section class=\"certifiedTablette\">

    <div class=\"appli\">
        <img class=\"appliImg\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/app.png"), "html", null, true);
        echo "\">
        <div class=\"appliText\">
            <p class=\"certifiedTitle\"> VOUS N'ÊTES PAS TOUJOURS CHEZ VOUS </p>
            <p class=\"cookistCertified\"> Notre <span>application Cook4us</span>, vous suit n'importe où dans la journée !<br>
                Téléchargez-la et contactez nos cookists où que vous soyiez. <br> Prévoyez un dîner entre amis seulement 3h
                à l'avance et tout sera prêt.<br> Vous pouvez vous détendre</p>
            <p class=\"trust\"> Nous n'attendons plus que vous !
                <img class=\"googleplay\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/GooglePlay.png"), "html", null, true);
        echo "\"><img class=\"appstore\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/AppStore.png"), "html", null, true);
        echo "\"></p>
        </div>
    </div>

    <div class=\"certifiedBloc2\">
        <p class=\"certifiedTitle\"> NOS COOKIST SONT CERTIFIÉS !</p>
        <p class=\"cookistCertified\"> La plupart de <span>nos cookists sont certifés</span>, ils suivent une formation à leur inscription afin d'être
            conscient des normes de sécurité et d'hygiène.<br> Une petite icone apparaîtra sur leur profil afin
            que vous puissiez les différencier des autres cookists n'ayant pas suivi la formation.</p>
        <p class=\"trust\"> Faites-leur confiance ! </p>
        <p class=\"join\">Rejoignez notre communauté de cookist dès maintenant</p>
        <p class=\"site\">Postulez sur <span class=\"siteName\">www.cook4us/cookist.fr</span></p>
        <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Certification.png"), "html", null, true);
        echo "\">
    </div>

</section>

<section class=\"contactChief\">
    <div class=\"imgSelect\">

        <div class=\"contactImg\"><img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo1.png"), "html", null, true);
        echo "\"></div>
        <div class=\"contactImg2\"><img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo2.png"), "html", null, true);
        echo "\"></div>

        <div class=\"contactSelect\">
            <div class=\"contactText\">
                <p class=\"contactTitle\"> RECHERCHEZ LE COOKIST IDÉAL </p>
                <p class=\"contactCertified\"> Trouvez le cookist idéal et épatez vos amis !<br>
                    Choisissez votre type de cuisine, le nombre de personne,<br>
                    votre fourchette de prix et la date de votre choix.</p>
            </div>

            <div class=\"select\">
                <table class=\"choose\">
                    <tr>
                        <th>Type de cuisine</th>
                        <th>Nombre de personne</th>
                    </tr>

                    <tr>
                        <td>
                            <select>
                                <option>Sélectionner un type</option>
                                <option>Japan Style</option>
                                <option>Pas qu'un sandwich</option>
                                <option>Le plaisir français</option>
                                <option>O'Burgers</option>
                                <option>Meat avant tout</option>
                                <option>Traditionnel asiatique</option>
                            </select>
                        </td>
                        <td><input type=\"number\" placeholder=\"Sélectionnez un nombre\"></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Fourchette de prix</th>
                    </tr>

                    <tr>
                        <td><input type=\"date\" placeholder=\"Choisissez une date\"></td>
                        <td><input type=\"number\" placeholder=\"Choisissez une fourchette\"></td>
                    </tr>

                </table>
                <button class=\"searchButton\"> Rechercher</button>
            </div>

        </div>
    </div>
</section>


";
        
        $__internal_986882310170656612c0583e305e03107c4e51fa2900df9292a65e84bceefb9c->leave($__internal_986882310170656612c0583e305e03107c4e51fa2900df9292a65e84bceefb9c_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  538 => 306,  534 => 305,  523 => 297,  506 => 285,  496 => 278,  481 => 266,  458 => 246,  454 => 245,  450 => 244,  446 => 243,  442 => 242,  438 => 241,  434 => 240,  425 => 234,  421 => 233,  417 => 232,  413 => 231,  409 => 230,  405 => 229,  401 => 228,  377 => 207,  372 => 205,  358 => 194,  353 => 192,  339 => 181,  334 => 179,  320 => 168,  315 => 166,  301 => 155,  296 => 153,  282 => 142,  277 => 140,  260 => 126,  250 => 119,  241 => 113,  232 => 107,  219 => 97,  211 => 92,  203 => 87,  195 => 82,  186 => 76,  182 => 75,  178 => 74,  174 => 73,  155 => 57,  138 => 43,  117 => 25,  112 => 22,  106 => 21,  94 => 7,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  43 => 2,  37 => 1,  30 => 21,  27 => 20,  25 => 1,);
    }
}
/* {% block head %}*/
/*     <!DOCTYPE html>*/
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
/*     <script src="{{ asset('js/menuMobile.js') }}"></script>*/
/* </head>*/
/* */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <aside class="menuAside">*/
/*     <ul class="ulClose">*/
/*         <li class="close"><i class="fa fa-times" aria-hidden="true"></i></li>*/
/*         <li class="menuLogo"><img src="{{ asset('img/logoTablette.png') }}"></li>*/
/*     </ul>*/
/* */
/*     <ul class="menuApp">*/
/*         <li><button class="download">TÉLÉCHARGER L'APPLI</button></li>*/
/*         <li><button class="become">DEVENIR CHEF</button></li>*/
/*         <li class="connexion">CONNEXION</li>*/
/*         <li class="connexion">COMMENT ÇA MARCHE</li>*/
/*         <li class="connexion"><a href="/hygiene">HYGIÈNE</a></li>*/
/*     </ul>*/
/* </aside>*/
/* */
/* <section class="top">*/
/* */
/*     <section class="menuTablet">*/
/*         <ul>*/
/*             <li>COMMENT ÇA MARCHE ?</li>*/
/*             <li>NOTRE ÉQUIPE</li>*/
/*             <li><img src="{{ asset('img/logoTablette.png') }}"></li>*/
/*             <li>CONNEXION</li>*/
/*             <li><button class="chiefTab">DEVENIR CHEF</button></li>*/
/*         </ul>*/
/*     </section>*/
/* */
/*     <button class="chief">DEVENIR CHEF</button>*/
/*     <ul class="menu">*/
/*         <a href="#">*/
/*             <li></li>*/
/*             <li></li>*/
/*             <li></li>*/
/*         </a>*/
/*     </ul>*/
/*     <div class="logo"><img src="{{ asset('img/logo.png') }}"></div>*/
/*     <p class="topText">Ne vous occupez plus<br> jamais du dîner, laissez<br>*/
/*         nos cookists s'en charger.</p>*/
/*     <p class="topTextTablet">NE VOUS OCCUPEZ PLUS JAMAIS <br> DU DÎNER, LAISSEZ NOS COOKISTS<br>*/
/*         S'EN CHARGER.</p><br>*/
/* */
/*     <input type="search" class="cookType" placeholder="Type de cuisine">*/
/*     <button class="cookTypeSubmit"><i class="fa fa-search" aria-hidden="true"></i></button>*/
/*     <input type="search" class="topInputTab1" placeholder="Type de cuisine">*/
/*     <input type="submit" class="topSubmitTablet" value="Recherche">*/
/* */
/* </section>*/
/* */
/* <section class="cookist">*/
/*     <p class="pFindTab">TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*     <ul class="findTab">*/
/*         <li class="tab1"><img src="{{ asset('img/cook4us-tablette_81.png') }}"><p class="chooseTab">CHOISISSEZ VOTRE TYPE DE CUISINE</p></li>*/
/*         <li class="tab2"><img src="{{ asset('img/cook4us-tablette_80.png') }}"><p class="chooseTab2">CHERCHEZ LE COOKIST ADAPTÉ</p></li>*/
/*         <li class="tab3"> <img src="{{ asset('img/cook4us-tablette_09.png') }}"><p class="chooseTab3">IL CUISINE POUR VOUS</p></li>*/
/*         <li> <img src="{{ asset('img/cook4us-tablette_82.png') }}"><p class="chooseTab4">PAIEMENT VIA LE SITE OU L'APPLI</p></li>*/
/*     </ul>*/
/* */
/*     <div class="gallery js-flickity">*/
/*         <div class="gallery-cell">*/
/*             <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND </p>*/
/*             <img src="{{ asset('img/cook4us-tablette_81.png') }}">*/
/*             <p class="choose">CHOISISSEZ VOTRE TYPE DE CUISINE</p>*/
/*         </div>*/
/*         <div class="gallery-cell">*/
/*             <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*             <img src="{{ asset('img/cook4us-tablette_80.png') }}">*/
/*             <p class="choose">CHERCHEZ LE COOKIST ADAPTÉ</p>*/
/*         </div>*/
/*         <div class="gallery-cell">*/
/*             <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*             <img src="{{ asset('img/cook4us-tablette_09.png') }}">*/
/*             <p class="choose">IL CUISINE POUR VOUS</p>*/
/*         </div>*/
/*         <div class="gallery-cell">*/
/*             <p class="find"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>*/
/*             <img src="{{ asset('img/cook4us-tablette_82.png') }}">*/
/*             <p class="choose">PAIEMENT VIA LE SITE OU L'APPLI</p>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="famousChief">*/
/* */
/*     <div class="chiefMobile">*/
/*         <article class="imgPeople">*/
/*             <img  src="{{ asset('img/People1.png') }}">*/
/*             <p class="pStyle">Japan style</p>*/
/*             <p class="pMenu">8 menus disponibles</p>*/
/*         </article>*/
/* */
/*         <article class="imgPeople2">*/
/*             <img src="{{ asset('img/People2.png') }}">*/
/*             <p class="pStyle">Le plaisir français</p>*/
/*             <p class="pMenu">5 menus disponibles</p>*/
/*         </article>*/
/* */
/*         <article class="imgPeople3">*/
/*             <img src="{{ asset('img/People3.png') }}">*/
/*             <p class="pStyle">Pas qu'un sandwich</p>*/
/*             <p class="pMenu">6 menus disponibles</p>*/
/* */
/*         </article>*/
/* */
/*         <article class="imgPeople4">*/
/*             <img src="{{ asset('img/People4.png') }}">*/
/*             <p class="pStyle">Meat avant tout</p>*/
/*             <p class="pMenu">3 menus disponibles</p>*/
/* */
/*         </article>*/
/*     </div>*/
/* */
/*     <div class="chiefTablette">*/
/*         <div class="chiefList">*/
/*             <p class="pharesChief"> Les cookist phares du moment</p>*/
/*             <p class="selection">Découvrez dès à présent une sélection de six des meilleurs cookists</p>*/
/*             <article>*/
/*                 <div class="rectangle"><p class="price">à partir de</p><p class="price2"> 25€</p></div>*/
/*                 <div class="triangle"></div>*/
/*                 <img class="ramen" src="{{ asset('img/RamenTablette.png') }}">*/
/*                 <p class="nameChief">Michael</p>*/
/*                 <img  class="michael" src="{{ asset('img/People1.png') }}">*/
/*                 <div class="textTablette">*/
/*                     <p class="japanStyle"> Japan style </p>*/
/*                     <p class="menuDispo"> 8 menus disponibles</p>*/
/*                     <p class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>  <a href="#"> voir le profil + </a></p>*/
/*                 </div>*/
/*             </article>*/
/* */
/*             <article>*/
/*                 <div class="rectangle"><p class="price">à partir de</p><p class="price2"> 20€</p></div>*/
/*                 <div class="triangle"></div>*/
/*                 <img class="sandwich" src="{{ asset('img/SandwichTablette.png') }}">*/
/*                 <p class="nameChief">Antoine</p>*/
/*                 <img  class="michael" src="{{ asset('img/People3.png') }}">*/
/*                 <div class="textTablette">*/
/*                     <p class="japanStyle"> Japan style </p>*/
/*                     <p class="menuDispo"> 8 menus disponibles</p>*/
/*                     <p class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <a href="#"> voir le profil + </a></p>*/
/*                 </div>*/
/*             </article>*/
/* */
/*             <article>*/
/*                 <div class="rectangle"><p class="price">à partir de</p><p class="price2"> 30€</p></div>*/
/*                 <div class="triangle"></div>*/
/*                 <img class="salade" src="{{ asset('img/SaladeTablette.png') }}">*/
/*                 <p class="nameChief">Emilie</p>*/
/*                 <img  class="michael" src="{{ asset('img/People2.png') }}">*/
/*                 <div class="textTablette">*/
/*                     <p class="japanStyle"> Japan style </p>*/
/*                     <p class="menuDispo"> 8 menus disponibles</p>*/
/*                     <p class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <a href="#"> voir le profil + </a></p>*/
/*                 </div>*/
/*             </article>*/
/* */
/*             <article>*/
/*                 <div class="rectangle"><p class="price">à partir de</p><p class="price2"> 18€</p></div>*/
/*                 <div class="triangle"></div>*/
/*                 <img class="hamburger" src="{{ asset('img/HamburgerTablette.png') }}">*/
/*                 <p class="nameChief">Kate</p>*/
/*                 <img  class="michael" src="{{ asset('img/People5.png') }}">*/
/*                 <div class="textTablette">*/
/*                     <p class="japanStyle"> Japan style </p>*/
/*                     <p class="menuDispo"> 8 menus disponibles</p>*/
/*                     <p class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <a href="#"> voir le profil + </a></p>*/
/*                 </div>*/
/*             </article>*/
/* */
/*             <article>*/
/*                 <div class="rectangle"><p class="price">à partir de</p><p class="price2"> 40€</p></div>*/
/*                 <div class="triangle"></div>*/
/*                 <img class="viande" src="{{ asset('img/ViandeTablette.png') }}">*/
/*                 <p class="nameChief">Jordan</p>*/
/*                 <img  class="michael" src="{{ asset('img/People4.png') }}">*/
/*                 <div class="textTablette">*/
/*                     <p class="japanStyle"> Japan style </p>*/
/*                     <p class="menuDispo"> 8 menus disponibles</p>*/
/*                     <p class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <a href="#"> voir le profil + </a></p>*/
/*                 </div>*/
/*             </article>*/
/* */
/*             <article>*/
/*                 <div class="rectangle"><p class="price">à partir de</p><p class="price2"> 40€</p></div>*/
/*                 <div class="triangle"></div>*/
/*                 <img class="oeuf" src="{{ asset('img/OeufTablette.png') }}">*/
/*                 <p class="nameChief">Kanye</p>*/
/*                 <img  class="michael" src="{{ asset('img/People6.png') }}">*/
/*                 <div class="textTablette">*/
/*                     <p class="japanStyle"> Japan style </p>*/
/*                     <p class="menuDispo"> 8 menus disponibles</p>*/
/*                     <p class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <a href="#"> voir le profil + </a></p>*/
/*                 </div>*/
/* */
/*             </article>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* </section>*/
/* */
/* <section class="discover">*/
/*     <p class="pTypeCook"> Venez découvrir tous nos types de cuisine et cocktails</p><br>*/
/*     <p class="pWant"> De quoi avez-vous envie aujourd'hui ?</p>*/
/* */
/*     <div class="carousel">*/
/*         <div id="showcase" class="noselect">*/
/*             <img class="cloud9-item" src="{{ asset('img/1.png') }}" alt="1">*/
/*             <img class="cloud9-item" src="{{ asset('img/2.png') }}" alt="2">*/
/*             <img class="cloud9-item" src="{{ asset('img/3.png') }}" alt="3">*/
/*             <img class="cloud9-item" src="{{ asset('img/4.png') }}" alt="4">*/
/*             <img class="cloud9-item" src="{{ asset('img/5.png') }}" alt="5">*/
/*             <img class="cloud9-item" src="{{ asset('img/6.png') }}" alt="6">*/
/*             <img class="cloud9-item" src="{{ asset('img/7.png') }}" alt="7">*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="carouselTablette">*/
/*         <ul>*/
/*             <li><img src="{{ asset('img/4Tablette.png') }}" alt="1"></li>*/
/*             <li><img src="{{ asset('img/2Tablette.png') }}" alt="2"></li>*/
/*             <li><img src="{{ asset('img/3Tablette.png') }}" alt="3"></li>*/
/*             <li><img src="{{ asset('img/1Tablette.png') }}" alt="4"></li>*/
/*             <li><img src="{{ asset('img/5Tablette.png') }}" alt="5"></li>*/
/*             <li><img src="{{ asset('img/6Tablette.png') }}" alt="6"></li>*/
/*             <li><img src="{{ asset('img/7Tablette.png') }}" alt="7"></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <p class="pCocktail"> Dégustez un cocktail entre amis</p>*/
/*     <div class="pDiscover"> DÉCOUVRIR </div>*/
/*     <button class="discoverTablette"> Découvrir</button>*/
/* </section>*/
/* */
/* <section class="grossery">*/
/*     <p class="pGrossery1">ET VOUS SAVEZ QUOI ?</p>*/
/*     <p class="pGrossery2"> NOS COOKIST FONT MÊME LES COURSES</p>*/
/*     <div class="borderTablette"></div>*/
/*     <p class="pGrossery3"> Vous n'avez pas le temps de faire les courses pour vos invités ? Pas de panique !<br>*/
/*         En plus de se charger du dîner, nos cookists prennent le temps d'acheter tous les ingrédients nécessaires*/
/*         à la préparation de leurs plats.</p>*/
/*     <p class="pGrossery4"> Allez, vous pouvez souffler ! </p>*/
/* </section>*/
/* */
/* <section class="certified">*/
/*     <img src="{{ asset('img/IconeCertified.png') }}" alt="certified">*/
/*     <h1> NOS COOKIST SONT CERTIFIÉS !</h1>*/
/*     <p> La plupart de <span>nos cookists sont certifés</span>, ils suivent une formation à leur inscription afin d'être*/
/*         conscient des normes de sécurité et d'hygiène. Une petite icone apparaîtra sur leur profil afin*/
/*         que vous puissiez les différencier des autres cookists n'ayant pas suivi la formation.</p>*/
/*     <p> Faites-leur confiance ! </p>*/
/* */
/* </section>*/
/* */
/* <section class="certifiedTablette">*/
/* */
/*     <div class="appli">*/
/*         <img class="appliImg" src="{{ asset('img/app.png') }}">*/
/*         <div class="appliText">*/
/*             <p class="certifiedTitle"> VOUS N'ÊTES PAS TOUJOURS CHEZ VOUS </p>*/
/*             <p class="cookistCertified"> Notre <span>application Cook4us</span>, vous suit n'importe où dans la journée !<br>*/
/*                 Téléchargez-la et contactez nos cookists où que vous soyiez. <br> Prévoyez un dîner entre amis seulement 3h*/
/*                 à l'avance et tout sera prêt.<br> Vous pouvez vous détendre</p>*/
/*             <p class="trust"> Nous n'attendons plus que vous !*/
/*                 <img class="googleplay" src="{{ asset('img/GooglePlay.png') }}"><img class="appstore" src="{{ asset('img/AppStore.png') }}"></p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="certifiedBloc2">*/
/*         <p class="certifiedTitle"> NOS COOKIST SONT CERTIFIÉS !</p>*/
/*         <p class="cookistCertified"> La plupart de <span>nos cookists sont certifés</span>, ils suivent une formation à leur inscription afin d'être*/
/*             conscient des normes de sécurité et d'hygiène.<br> Une petite icone apparaîtra sur leur profil afin*/
/*             que vous puissiez les différencier des autres cookists n'ayant pas suivi la formation.</p>*/
/*         <p class="trust"> Faites-leur confiance ! </p>*/
/*         <p class="join">Rejoignez notre communauté de cookist dès maintenant</p>*/
/*         <p class="site">Postulez sur <span class="siteName">www.cook4us/cookist.fr</span></p>*/
/*         <img src="{{ asset('img/Certification.png') }}">*/
/*     </div>*/
/* */
/* </section>*/
/* */
/* <section class="contactChief">*/
/*     <div class="imgSelect">*/
/* */
/*         <div class="contactImg"><img src="{{ asset('img/photo1.png') }}"></div>*/
/*         <div class="contactImg2"><img src="{{ asset('img/photo2.png') }}"></div>*/
/* */
/*         <div class="contactSelect">*/
/*             <div class="contactText">*/
/*                 <p class="contactTitle"> RECHERCHEZ LE COOKIST IDÉAL </p>*/
/*                 <p class="contactCertified"> Trouvez le cookist idéal et épatez vos amis !<br>*/
/*                     Choisissez votre type de cuisine, le nombre de personne,<br>*/
/*                     votre fourchette de prix et la date de votre choix.</p>*/
/*             </div>*/
/* */
/*             <div class="select">*/
/*                 <table class="choose">*/
/*                     <tr>*/
/*                         <th>Type de cuisine</th>*/
/*                         <th>Nombre de personne</th>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <td>*/
/*                             <select>*/
/*                                 <option>Sélectionner un type</option>*/
/*                                 <option>Japan Style</option>*/
/*                                 <option>Pas qu'un sandwich</option>*/
/*                                 <option>Le plaisir français</option>*/
/*                                 <option>O'Burgers</option>*/
/*                                 <option>Meat avant tout</option>*/
/*                                 <option>Traditionnel asiatique</option>*/
/*                             </select>*/
/*                         </td>*/
/*                         <td><input type="number" placeholder="Sélectionnez un nombre"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Date</th>*/
/*                         <th>Fourchette de prix</th>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <td><input type="date" placeholder="Choisissez une date"></td>*/
/*                         <td><input type="number" placeholder="Choisissez une fourchette"></td>*/
/*                     </tr>*/
/* */
/*                 </table>*/
/*                 <button class="searchButton"> Rechercher</button>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* {% endblock %}*/

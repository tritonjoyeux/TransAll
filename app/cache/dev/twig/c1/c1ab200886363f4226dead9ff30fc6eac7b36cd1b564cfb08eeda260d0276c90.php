<?php

/* Cook4usBundle:Default:index.html.twig */
class __TwigTemplate_95fe6cb869a38e00b579389331a44db3513b751ed1a48d311538b360c6d647e0 extends Twig_Template
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
        $__internal_fd535b55633b6a14dbe37e2d723fa3d9f62735d85933da03b11d8d2897158db1 = $this->env->getExtension("native_profiler");
        $__internal_fd535b55633b6a14dbe37e2d723fa3d9f62735d85933da03b11d8d2897158db1->enter($__internal_fd535b55633b6a14dbe37e2d723fa3d9f62735d85933da03b11d8d2897158db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_fd535b55633b6a14dbe37e2d723fa3d9f62735d85933da03b11d8d2897158db1->leave($__internal_fd535b55633b6a14dbe37e2d723fa3d9f62735d85933da03b11d8d2897158db1_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd3f6aab2036fa0d3e70048a1fdca231da22f7a55e36318ced235cda709b1f71 = $this->env->getExtension("native_profiler");
        $__internal_bd3f6aab2036fa0d3e70048a1fdca231da22f7a55e36318ced235cda709b1f71->enter($__internal_bd3f6aab2036fa0d3e70048a1fdca231da22f7a55e36318ced235cda709b1f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
</head>

";
        
        $__internal_bd3f6aab2036fa0d3e70048a1fdca231da22f7a55e36318ced235cda709b1f71->leave($__internal_bd3f6aab2036fa0d3e70048a1fdca231da22f7a55e36318ced235cda709b1f71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dc23d8ff763bb96ebfc0832576a6408ad11ccbd322bf8a0ce9c797bfa3ba16e = $this->env->getExtension("native_profiler");
        $__internal_8dc23d8ff763bb96ebfc0832576a6408ad11ccbd322bf8a0ce9c797bfa3ba16e->enter($__internal_8dc23d8ff763bb96ebfc0832576a6408ad11ccbd322bf8a0ce9c797bfa3ba16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_8dc23d8ff763bb96ebfc0832576a6408ad11ccbd322bf8a0ce9c797bfa3ba16e->leave($__internal_8dc23d8ff763bb96ebfc0832576a6408ad11ccbd322bf8a0ce9c797bfa3ba16e_prof);

    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        $__internal_fb6f341ce47d580cea6f56359b1d4de4b8817276b8bfe00161d63bdcea88edfa = $this->env->getExtension("native_profiler");
        $__internal_fb6f341ce47d580cea6f56359b1d4de4b8817276b8bfe00161d63bdcea88edfa->enter($__internal_fb6f341ce47d580cea6f56359b1d4de4b8817276b8bfe00161d63bdcea88edfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 21
        echo "<section class=\"top\">

    <section class=\"menuTablet\">
        <ul>
            <li>COMMENT ÇA MARCHE ?</li>
            <li>NOTRE ÉQUIPE</li>
            <li><img src=\"";
        // line 27
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
        // line 41
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
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_81.png"), "html", null, true);
        echo "\"><p class=\"chooseTab\">CHOISISSEZ VOTRE TYPE DE CUISINE</p></li>
        <li class=\"tab2\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_80.png"), "html", null, true);
        echo "\"><p class=\"chooseTab2\">CHERCHEZ LE COOKIST ADAPTÉ</p></li>
        <li class=\"tab3\"> <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_09.png"), "html", null, true);
        echo "\"><p class=\"chooseTab3\">IL CUISINE POUR VOUS</p></li>
        <li> <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_82.png"), "html", null, true);
        echo "\"><p class=\"chooseTab4\">PAIEMENT VIA LE SITE OU L'APPLI</p></li>
    </ul>

    <div class=\"gallery js-flickity\">
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND </p>
            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_81.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">CHOISISSEZ VOTRE TYPE DE CUISINE</p>
        </div>
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_80.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">CHERCHEZ LE COOKIST ADAPTÉ</p>
        </div>
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
            <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/cook4us-tablette_09.png"), "html", null, true);
        echo "\">
            <p class=\"choose\">IL CUISINE POUR VOUS</p>
        </div>
        <div class=\"gallery-cell\">
            <p class=\"find\"> TROUVEZ LE COOKIST QUI VOUS CORRESPOND</p>
            <img src=\"";
        // line 81
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
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People1.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Japan style</p>
            <p class=\"pMenu\">8 menus disponibles</p>
        </article>

        <article class=\"imgPeople2\">
            <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People2.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Le plaisir français</p>
            <p class=\"pMenu\">5 menus disponibles</p>
        </article>

        <article class=\"imgPeople3\">
            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/People3.png"), "html", null, true);
        echo "\">
            <p class=\"pStyle\">Pas qu'un sandwich</p>
            <p class=\"pMenu\">6 menus disponibles</p>

        </article>

        <article class=\"imgPeople4\">
            <img src=\"";
        // line 110
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
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/RamenTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Michael</p>
                <img  class=\"michael\" src=\"";
        // line 126
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
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/SandwichTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Antoine</p>
                <img  class=\"michael\" src=\"";
        // line 139
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
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/SaladeTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Emilie</p>
                <img  class=\"michael\" src=\"";
        // line 152
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
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/HamburgerTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Kate</p>
                <img  class=\"michael\" src=\"";
        // line 165
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
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ViandeTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Jordan</p>
                <img  class=\"michael\" src=\"";
        // line 178
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/OeufTablette.png"), "html", null, true);
        echo "\">
                <p class=\"nameChief\">Kanye</p>
                <img  class=\"michael\" src=\"";
        // line 191
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
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1.png"), "html", null, true);
        echo "\" alt=\"1\">
            <img class=\"cloud9-item\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2.png"), "html", null, true);
        echo "\" alt=\"2\">
            <img class=\"cloud9-item\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3.png"), "html", null, true);
        echo "\" alt=\"3\">
            <img class=\"cloud9-item\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4.png"), "html", null, true);
        echo "\" alt=\"4\">
            <img class=\"cloud9-item\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/5.png"), "html", null, true);
        echo "\" alt=\"5\">
            <img class=\"cloud9-item\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/6.png"), "html", null, true);
        echo "\" alt=\"6\">
            <img class=\"cloud9-item\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/7.png"), "html", null, true);
        echo "\" alt=\"7\">
        </div>
    </div>

    <div class=\"carouselTablette\">
        <ul>
            <li><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/4Tablette.png"), "html", null, true);
        echo "\" alt=\"1\"></li>
            <li><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/2Tablette.png"), "html", null, true);
        echo "\" alt=\"2\"></li>
            <li><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/3Tablette.png"), "html", null, true);
        echo "\" alt=\"3\"></li>
            <li><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/1Tablette.png"), "html", null, true);
        echo "\" alt=\"4\"></li>
            <li><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/5Tablette.png"), "html", null, true);
        echo "\" alt=\"5\"></li>
            <li><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/6Tablette.png"), "html", null, true);
        echo "\" alt=\"6\"></li>
            <li><img src=\"";
        // line 230
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
        // line 250
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
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/app.png"), "html", null, true);
        echo "\">
        <div class=\"appliText\">
            <p class=\"certifiedTitle\"> VOUS N'ÊTES PAS TOUJOURS CHEZ VOUS </p>
            <p class=\"cookistCertified\"> Notre <span>application Cook4us</span>, vous suit n'importe où dans la journée !<br>
                Téléchargez-la et contactez nos cookists où que vous soyiez. <br> Prévoyez un dîner entre amis seulement 3h
                à l'avance et tout sera prêt.<br> Vous pouvez vous détendre</p>
            <p class=\"trust\"> Nous n'attendons plus que vous !
                <img class=\"googleplay\" src=\"";
        // line 269
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
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Certification.png"), "html", null, true);
        echo "\">
    </div>

</section>

<section class=\"contactChief\">
    <img class=\"contactImg\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "\">
    <div class=\"contactText\">
        <p class=\"contactTitle\"> RECHERCHEZ LE COOKIST IDÉAL </p>
        <p class=\"contactCertified\"> Trouvez le cookist idéal et épatez vos amis !<br>
            Choisissez votre type de cuisine, le nombre de personne,<br>
            votre fourchette de prix et la date de votre choix.</p>
    </div>

    <div class=\"select\">

    </div>
</section>


";
        
        $__internal_fb6f341ce47d580cea6f56359b1d4de4b8817276b8bfe00161d63bdcea88edfa->leave($__internal_fb6f341ce47d580cea6f56359b1d4de4b8817276b8bfe00161d63bdcea88edfa_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  510 => 287,  501 => 281,  484 => 269,  474 => 262,  459 => 250,  436 => 230,  432 => 229,  428 => 228,  424 => 227,  420 => 226,  416 => 225,  412 => 224,  403 => 218,  399 => 217,  395 => 216,  391 => 215,  387 => 214,  383 => 213,  379 => 212,  355 => 191,  350 => 189,  336 => 178,  331 => 176,  317 => 165,  312 => 163,  298 => 152,  293 => 150,  279 => 139,  274 => 137,  260 => 126,  255 => 124,  238 => 110,  228 => 103,  219 => 97,  210 => 91,  197 => 81,  189 => 76,  181 => 71,  173 => 66,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  133 => 41,  116 => 27,  108 => 21,  102 => 20,  90 => 7,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  43 => 2,  37 => 1,  30 => 20,  27 => 19,  25 => 1,);
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
/* </head>*/
/* */
/* {% endblock %}*/
/* */
/* {% block container %}*/
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
/*     <img class="contactImg" src="{{ asset('') }}">*/
/*     <div class="contactText">*/
/*         <p class="contactTitle"> RECHERCHEZ LE COOKIST IDÉAL </p>*/
/*         <p class="contactCertified"> Trouvez le cookist idéal et épatez vos amis !<br>*/
/*             Choisissez votre type de cuisine, le nombre de personne,<br>*/
/*             votre fourchette de prix et la date de votre choix.</p>*/
/*     </div>*/
/* */
/*     <div class="select">*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* */
/* {% endblock %}*/

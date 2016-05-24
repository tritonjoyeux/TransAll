<?php

/* Cook4usBundle:Working:index.html.twig */
class __TwigTemplate_493334798eceb8fb69991939426e82bfc4c26f9ff5828a3813e7253be906e26a extends Twig_Template
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
        $__internal_ec8087061594fe033ec9c6ace58ee21d4d69ca328d4b13c0fdd9689e3fd803e5 = $this->env->getExtension("native_profiler");
        $__internal_ec8087061594fe033ec9c6ace58ee21d4d69ca328d4b13c0fdd9689e3fd803e5->enter($__internal_ec8087061594fe033ec9c6ace58ee21d4d69ca328d4b13c0fdd9689e3fd803e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Working:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('container', $context, $blocks);
        // line 121
        echo "</html>";
        
        $__internal_ec8087061594fe033ec9c6ace58ee21d4d69ca328d4b13c0fdd9689e3fd803e5->leave($__internal_ec8087061594fe033ec9c6ace58ee21d4d69ca328d4b13c0fdd9689e3fd803e5_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_61304cccf1ad66cb3ec93319fb4de8537b166cda571c1692de612ded4b21ea34 = $this->env->getExtension("native_profiler");
        $__internal_61304cccf1ad66cb3ec93319fb4de8537b166cda571c1692de612ded4b21ea34->enter($__internal_61304cccf1ad66cb3ec93319fb4de8537b166cda571c1692de612ded4b21ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/working.css"), "html", null, true);
        echo "\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/burger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/working.js"), "html", null, true);
        echo "\"></script>
</head>


";
        
        $__internal_61304cccf1ad66cb3ec93319fb4de8537b166cda571c1692de612ded4b21ea34->leave($__internal_61304cccf1ad66cb3ec93319fb4de8537b166cda571c1692de612ded4b21ea34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25fca28e752dc246e3aa21e0750a9d32b72b31ca7fe66dfad2bf3b7daf8f84a2 = $this->env->getExtension("native_profiler");
        $__internal_25fca28e752dc246e3aa21e0750a9d32b72b31ca7fe66dfad2bf3b7daf8f84a2->enter($__internal_25fca28e752dc246e3aa21e0750a9d32b72b31ca7fe66dfad2bf3b7daf8f84a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_25fca28e752dc246e3aa21e0750a9d32b72b31ca7fe66dfad2bf3b7daf8f84a2->leave($__internal_25fca28e752dc246e3aa21e0750a9d32b72b31ca7fe66dfad2bf3b7daf8f84a2_prof);

    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
        $__internal_e70f4feccc208b0e50dc44df0799d48c8086b295fd82e1a79621eae8482189cf = $this->env->getExtension("native_profiler");
        $__internal_e70f4feccc208b0e50dc44df0799d48c8086b295fd82e1a79621eae8482189cf->enter($__internal_e70f4feccc208b0e50dc44df0799d48c8086b295fd82e1a79621eae8482189cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 19
        echo "    <body>
    <header>
        <a href=\"/\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo\"></a>

        <div class=\"burger\">
            <hr class=\"croix1\">
            <hr class=\"croix2\">
            <hr class=\"croix3\">
        </div>
        <nav class=\"nav1\">
            <ul>
                <li>
                    <button class='download'>TELECHERGER L'APPLI</button>
                </li>
                <li>
                    <button class='become'>DEVENIR CHEF</button>
                </li>
                <li><a href=\"/login\">CONNEXION</a></li>
                <li><a href=\"/working\">COMMENT CA MARCHE ?</a></li>
                <li><a href=\"/hygiene\">HYGIENE</a></li>
            </ul>
        </nav>
        <nav class=\"nav2\">
            <ul>
                <li><a href=\"/login\">CONNEXION</a></li>
                <li><a href=\"/working\">COMMENT CA MARCHE ?</a></li>
                <li><a href=\"/hygiene\">HYGIENE</a></li>
            </ul>
        </nav>
    </header>

    <div class='container'>
        <div class=\"titre\">
            <span class='big_title'>COMMENT CA MARCHE ?</span>
            <span class='small_title'>On vous explique tout</span>

        </div>
        <div class=\"all\">
            <span class=\"cote cote_client\">CÔTE CLIENT</span>
            <span class=\"cote cote_cookist\">CÔTE COOKIST</span>

            <div class='content client'>
                <ul>
                    <li>Trouvez le cookist qui vous correspond</li>
                    <li>Choisissez votre plat parmi son menu votre date, le nombre de personne et le prix qui vous
                        correspond
                    </li>
                    <li>Echangez avec le cookist afin de vous mettre au clai, en ce qui concerne les horaires, les
                        différents ingrédients ou encore la possibilité d'allergies
                    </li>
                    <li>Paiement en ligne via notre site ou notre appli avant la prestation du cookist</li>
                    <li>Le cookist vient chez vous cuisiner pour vous et vos amis : régalez-vous sans le moindre effort
                        !
                    </li>
                    <li>Notez ensuite le cookist et ajoutez un commentaire pour augmenter sa popularité sur le site</li>
                    <li>Le remboursement en cas de prestation non-satisfaite : après la prestation vous avez 48h pour
                        nous contacter en cas de souci ou de litige. Nous ne remérons le cookist qu'après cette période
                    </li>
                </ul>
            </div>
            <div class='content cookist'>
                <ul>
                    <li>Créez et mettez en ligne votre annonce (photo prix nm de personne etc)</li>
                    <li>Échangez avec le client pour voir si tout est okai pour les 2 et validez sa commande pour le
                        paiement
                    </li>
                    <li>Cuisinez chez le client pour lui et ses convives</li>
                    <li>Recevez votre argent. Cook4us prend 10% de votre recette afin de continuer de vous proposer de
                        nombreux clients.
                    </li>
                    <li>Chaque Cookist est soumis aux avis de ses convives : lorsque les Cookists s'inscrivent, ils
                        acceptent d'être soumis aux avis de leurs convives. Ceux-ci leur attribuent directement des
                        notes et des commentaires. Ainsi, nous invitons vivement chaque convive à découvrir ces précieux
                        avis avant de commande un de nos Cookists.
                    </li>
                </ul>
            </div>
        </div>
        <div class='questions'>
            <span class='question'>Des questions ?</span>
            <span class='bold'>N'hésitez pas à nous contacter</span>
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Illustration.png"), "html", null, true);
        echo "\">
        </div>
        <footer>
            <div class='img_footer'></div>
            <span class=\"link\">DEVENIR CHEF - HYGIENE - CONTACT - MENTIONS LEGALES</span>
            <hr class=\"separa\">
            <span class=\"reseaux\">
                <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Facebook.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Twitter.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Google.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Instagram.png"), "html", null, true);
        echo "\">
            </span>
            <span class=\"text_footer\">Copyright © Cook 4 us 2016. Tous droits réservés.</span>
        </footer>

    </div>
    <div class='sombre'></div>
    </body>


";
        
        $__internal_e70f4feccc208b0e50dc44df0799d48c8086b295fd82e1a79621eae8482189cf->leave($__internal_e70f4feccc208b0e50dc44df0799d48c8086b295fd82e1a79621eae8482189cf_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Working:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 110,  200 => 109,  196 => 108,  192 => 107,  182 => 100,  100 => 21,  96 => 19,  90 => 18,  78 => 7,  66 => 12,  62 => 11,  57 => 9,  52 => 7,  45 => 2,  39 => 1,  32 => 121,  30 => 18,  27 => 17,  25 => 1,);
    }
}
/* {% block head %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Accueil{% endblock %}</title>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/working.css') }}">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="{{ asset('js/burger.js') }}"></script>*/
/*     <script src="{{ asset('js/working.js') }}"></script>*/
/* </head>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/*     <body>*/
/*     <header>*/
/*         <a href="/"><img src="{{ asset("img/logo.png") }}" class="logo" alt="logo"></a>*/
/* */
/*         <div class="burger">*/
/*             <hr class="croix1">*/
/*             <hr class="croix2">*/
/*             <hr class="croix3">*/
/*         </div>*/
/*         <nav class="nav1">*/
/*             <ul>*/
/*                 <li>*/
/*                     <button class='download'>TELECHERGER L'APPLI</button>*/
/*                 </li>*/
/*                 <li>*/
/*                     <button class='become'>DEVENIR CHEF</button>*/
/*                 </li>*/
/*                 <li><a href="/login">CONNEXION</a></li>*/
/*                 <li><a href="/working">COMMENT CA MARCHE ?</a></li>*/
/*                 <li><a href="/hygiene">HYGIENE</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*         <nav class="nav2">*/
/*             <ul>*/
/*                 <li><a href="/login">CONNEXION</a></li>*/
/*                 <li><a href="/working">COMMENT CA MARCHE ?</a></li>*/
/*                 <li><a href="/hygiene">HYGIENE</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*     </header>*/
/* */
/*     <div class='container'>*/
/*         <div class="titre">*/
/*             <span class='big_title'>COMMENT CA MARCHE ?</span>*/
/*             <span class='small_title'>On vous explique tout</span>*/
/* */
/*         </div>*/
/*         <div class="all">*/
/*             <span class="cote cote_client">CÔTE CLIENT</span>*/
/*             <span class="cote cote_cookist">CÔTE COOKIST</span>*/
/* */
/*             <div class='content client'>*/
/*                 <ul>*/
/*                     <li>Trouvez le cookist qui vous correspond</li>*/
/*                     <li>Choisissez votre plat parmi son menu votre date, le nombre de personne et le prix qui vous*/
/*                         correspond*/
/*                     </li>*/
/*                     <li>Echangez avec le cookist afin de vous mettre au clai, en ce qui concerne les horaires, les*/
/*                         différents ingrédients ou encore la possibilité d'allergies*/
/*                     </li>*/
/*                     <li>Paiement en ligne via notre site ou notre appli avant la prestation du cookist</li>*/
/*                     <li>Le cookist vient chez vous cuisiner pour vous et vos amis : régalez-vous sans le moindre effort*/
/*                         !*/
/*                     </li>*/
/*                     <li>Notez ensuite le cookist et ajoutez un commentaire pour augmenter sa popularité sur le site</li>*/
/*                     <li>Le remboursement en cas de prestation non-satisfaite : après la prestation vous avez 48h pour*/
/*                         nous contacter en cas de souci ou de litige. Nous ne remérons le cookist qu'après cette période*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class='content cookist'>*/
/*                 <ul>*/
/*                     <li>Créez et mettez en ligne votre annonce (photo prix nm de personne etc)</li>*/
/*                     <li>Échangez avec le client pour voir si tout est okai pour les 2 et validez sa commande pour le*/
/*                         paiement*/
/*                     </li>*/
/*                     <li>Cuisinez chez le client pour lui et ses convives</li>*/
/*                     <li>Recevez votre argent. Cook4us prend 10% de votre recette afin de continuer de vous proposer de*/
/*                         nombreux clients.*/
/*                     </li>*/
/*                     <li>Chaque Cookist est soumis aux avis de ses convives : lorsque les Cookists s'inscrivent, ils*/
/*                         acceptent d'être soumis aux avis de leurs convives. Ceux-ci leur attribuent directement des*/
/*                         notes et des commentaires. Ainsi, nous invitons vivement chaque convive à découvrir ces précieux*/
/*                         avis avant de commande un de nos Cookists.*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class='questions'>*/
/*             <span class='question'>Des questions ?</span>*/
/*             <span class='bold'>N'hésitez pas à nous contacter</span>*/
/*             <img src="{{ asset('img/Illustration.png') }}">*/
/*         </div>*/
/*         <footer>*/
/*             <div class='img_footer'></div>*/
/*             <span class="link">DEVENIR CHEF - HYGIENE - CONTACT - MENTIONS LEGALES</span>*/
/*             <hr class="separa">*/
/*             <span class="reseaux">*/
/*                 <img src="{{ asset('img/Facebook.png') }}">*/
/*                 <img src="{{ asset('img/Twitter.png') }}">*/
/*                 <img src="{{ asset('img/Google.png') }}">*/
/*                 <img src="{{ asset('img/Instagram.png') }}">*/
/*             </span>*/
/*             <span class="text_footer">Copyright © Cook 4 us 2016. Tous droits réservés.</span>*/
/*         </footer>*/
/* */
/*     </div>*/
/*     <div class='sombre'></div>*/
/*     </body>*/
/* */
/* */
/* {% endblock %}*/
/* </html>*/

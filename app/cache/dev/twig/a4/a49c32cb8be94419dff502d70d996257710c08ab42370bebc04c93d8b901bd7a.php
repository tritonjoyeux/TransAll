<?php

/* Cook4usBundle:Hygiene:index.html.twig */
class __TwigTemplate_d75b1ac3045ae3b3f6e94302c3eda1a33d0da6771d23faf3cf917a936567234f extends Twig_Template
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
        $__internal_b1d0633f5595afcb166e62e458005485bed0d39cc87f8c48e505bdb315b87b4a = $this->env->getExtension("native_profiler");
        $__internal_b1d0633f5595afcb166e62e458005485bed0d39cc87f8c48e505bdb315b87b4a->enter($__internal_b1d0633f5595afcb166e62e458005485bed0d39cc87f8c48e505bdb315b87b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Hygiene:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_b1d0633f5595afcb166e62e458005485bed0d39cc87f8c48e505bdb315b87b4a->leave($__internal_b1d0633f5595afcb166e62e458005485bed0d39cc87f8c48e505bdb315b87b4a_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_c07baca321093962f151f98710b4749c8db4f8be641d052d52323aacef5318e6 = $this->env->getExtension("native_profiler");
        $__internal_c07baca321093962f151f98710b4749c8db4f8be641d052d52323aacef5318e6->enter($__internal_c07baca321093962f151f98710b4749c8db4f8be641d052d52323aacef5318e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c07baca321093962f151f98710b4749c8db4f8be641d052d52323aacef5318e6->leave($__internal_c07baca321093962f151f98710b4749c8db4f8be641d052d52323aacef5318e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_930474721fb05df8a650bda7c86749f66f239b22583584f5a5e3c0ae79efba5b = $this->env->getExtension("native_profiler");
        $__internal_930474721fb05df8a650bda7c86749f66f239b22583584f5a5e3c0ae79efba5b->enter($__internal_930474721fb05df8a650bda7c86749f66f239b22583584f5a5e3c0ae79efba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_930474721fb05df8a650bda7c86749f66f239b22583584f5a5e3c0ae79efba5b->leave($__internal_930474721fb05df8a650bda7c86749f66f239b22583584f5a5e3c0ae79efba5b_prof);

    }

    // line 22
    public function block_container($context, array $blocks = array())
    {
        $__internal_56ee5bd7c0149286f4e7c2b91e51610f6ec0b9919d0da4e24773c57dc48c062e = $this->env->getExtension("native_profiler");
        $__internal_56ee5bd7c0149286f4e7c2b91e51610f6ec0b9919d0da4e24773c57dc48c062e->enter($__internal_56ee5bd7c0149286f4e7c2b91e51610f6ec0b9919d0da4e24773c57dc48c062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 23
        echo "
<header>
    <aside class=\"menuAside\">
        <ul class=\"ulClose\">
            <li class=\"close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></li>
            <li class=\"menuLogo\"><a href=\"/\"><img src=\"";
        // line 28
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
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></div>
</header>

<div class=\"hygiene\">
    <p class=\"titreHygiene\">HYGIÈNE</p>
    <p class=\"titreHygiene2\">Votre sécurité est une priorité</p>

    <div class=\"hygienebloc\">
        <p>Lors de son inscription <span>le cookist s'engage à respecter tous les règlements en vigueur
            pour assurer l'hygiène garante d'une alimentation saine</span>, conformément à l'Arrêté du 9 mai 1995.
            Chaque cookist reçoit alors un <span>guide d'Hygiène lors de son inscription sur Cook4us</span>. Nous faisons
            ensuite personnellement <span>connaissance avec chacun d'entre eux  lors de réunion d'information</span> à laquelle
            sont conviés tous nos cookists !
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Illustration2.png"), "html", null, true);
        echo "\"></div>

</div>

";
        
        $__internal_56ee5bd7c0149286f4e7c2b91e51610f6ec0b9919d0da4e24773c57dc48c062e->leave($__internal_56ee5bd7c0149286f4e7c2b91e51610f6ec0b9919d0da4e24773c57dc48c062e_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Hygiene:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 80,  145 => 47,  123 => 28,  116 => 23,  110 => 22,  98 => 7,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  43 => 2,  37 => 1,  30 => 22,  27 => 21,  25 => 1,);
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
/* <div class="hygiene">*/
/*     <p class="titreHygiene">HYGIÈNE</p>*/
/*     <p class="titreHygiene2">Votre sécurité est une priorité</p>*/
/* */
/*     <div class="hygienebloc">*/
/*         <p>Lors de son inscription <span>le cookist s'engage à respecter tous les règlements en vigueur*/
/*             pour assurer l'hygiène garante d'une alimentation saine</span>, conformément à l'Arrêté du 9 mai 1995.*/
/*             Chaque cookist reçoit alors un <span>guide d'Hygiène lors de son inscription sur Cook4us</span>. Nous faisons*/
/*             ensuite personnellement <span>connaissance avec chacun d'entre eux  lors de réunion d'information</span> à laquelle*/
/*             sont conviés tous nos cookists !*/
/*         </p>*/
/*     </div>*/
/* */
/*     <div class="hygienebloc">*/
/*         <p> De plus, pour prévenir de certaines allergies, <span>le cookists sont tenus de préciser les ingrédients*/
/*                 principaux de chacun de leur plat.</span> Ainsi les convives peuvent demander le changement d'un ingrédient.*/
/*         </p>*/
/*     </div>*/
/* */
/*     <div class="hygienebloc">*/
/*         <p> <span>En cas de gros dommage causé involontairement à un convive</span> (allergie, réaction à la nourriture, etc.),*/
/*             votre assurance de responsabilité civile consiste à se substituer au responsable pour indemniser la*/
/*             victime. <span>Les assureurs incluent systématiquement une garantie de responsabilité civile vie privée</span>*/
/*             dans les contrats multirisques habitation. Ainsi <span>Cookists et Convives sont protégés par la loi.</span>*/
/*         </p>*/
/*     </div>*/
/* */
/*     <p class="titreHygiene3">Votre santé nous préoccupe </p>*/
/*     <p class="titreHygiene4">L'hygiène est donc au coeur de nos priorité</p>*/
/* */
/*     <div class="imageHygiene"><img src="{{ asset('img/Illustration2.png') }}"></div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/

<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_27d83edb33bff6f63ef48f51132062b9f2a7245f3b6549ea732955cd0062aad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a0a6f1fc1a5375e0d8e98515325b1fe46967bd945e149874004bc599fe59d9 = $this->env->getExtension("native_profiler");
        $__internal_96a0a6f1fc1a5375e0d8e98515325b1fe46967bd945e149874004bc599fe59d9->enter($__internal_96a0a6f1fc1a5375e0d8e98515325b1fe46967bd945e149874004bc599fe59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
<body>
<header>
    <a href=\"/\"><img src=\"";
        // line 28
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
            <li><a href=\"/working\">COMMENT CA MARCHE ?</a></li>
            <li><a href=\"/hygiene\">HYGIENE</a></li>
        </ul>
    </nav>
    <nav class=\"nav2\">
        <ul>
            <li><a href=\"/working\">COMMENT CA MARCHE ?</a></li>
            <li><a href=\"/hygiene\">HYGIENE</a></li>
        </ul>
    </nav>
</header>
<div class=\"container\">
    ";
        // line 56
        echo "
    <div class=\"fos_user_user_show\">
        <img src=\"/images/profile/";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imageName", array()), "html", null, true);
        echo "\">
        <p>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>
        <p><a href=\"/profile/edit\">Modifier le profil</a></p>
    </div>
    <div id=\"messagerie\"><div class=\"messages\"></div>
        <form method=\"post\" id=\"form_new\">
            Nouveau message:<br>
            <input type=\"text\" name=\"destinataire\" placeholder=\"destinataire\"><br>
            <input type=\"text\" name=\"body\" placeholder=\"Contenu\"><br>
            <input type=\"submit=\" value=\"send\" name=\"send\">
        </form>
    </div>
    <div class=\"messagerie2\">
        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/warning-!.png"), "html", null, true);
        echo "\" alt=\"warning\" class=\"warning\"><br>
        <div class=\"title\">Messagerie</div>
        <div class=\"message_messagerie2\">La messagerie n'est pas disponible sur la version mobile du site. Vous pouvez y
            avoir accès en téléchargeant notre application disponible sur Apple Store, Play Store et Windows Store ou
            sur la version pc.
        </div>
    </div>
    
    <div class='sombre'></div>
    <footer>
            <div class='img_footer'></div>
            <span class=\"link\">DEVENIR CHEF - HYGIENE - CONTACT - MENTIONS LEGALES</span>
            <hr class=\"separa\">
            <span class=\"reseaux\">
                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Facebook.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Twitter.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Google.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Instagram.png"), "html", null, true);
        echo "\">
            </span>
            <span class=\"text_footer\">Copyright © Cook 4 us 2016. Tous droits réservés.</span>
        </footer>
</div>
    
</body>

";
        
        $__internal_96a0a6f1fc1a5375e0d8e98515325b1fe46967bd945e149874004bc599fe59d9->leave($__internal_96a0a6f1fc1a5375e0d8e98515325b1fe46967bd945e149874004bc599fe59d9_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_5648453b540ad2b496c39b3a1c0b21dca9d44f9147fb3ac13846ad2996f8082d = $this->env->getExtension("native_profiler");
        $__internal_5648453b540ad2b496c39b3a1c0b21dca9d44f9147fb3ac13846ad2996f8082d->enter($__internal_5648453b540ad2b496c39b3a1c0b21dca9d44f9147fb3ac13846ad2996f8082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
        <!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/burger.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/messages.js"), "html", null, true);
        echo "\"></script>   
</head>

";
        
        $__internal_5648453b540ad2b496c39b3a1c0b21dca9d44f9147fb3ac13846ad2996f8082d->leave($__internal_5648453b540ad2b496c39b3a1c0b21dca9d44f9147fb3ac13846ad2996f8082d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_738aaeb633a26d01545bcb700893d765d93e877472bd78b7bebcd120b7b3ace0 = $this->env->getExtension("native_profiler");
        $__internal_738aaeb633a26d01545bcb700893d765d93e877472bd78b7bebcd120b7b3ace0->enter($__internal_738aaeb633a26d01545bcb700893d765d93e877472bd78b7bebcd120b7b3ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_738aaeb633a26d01545bcb700893d765d93e877472bd78b7bebcd120b7b3ace0->leave($__internal_738aaeb633a26d01545bcb700893d765d93e877472bd78b7bebcd120b7b3ace0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 7,  169 => 21,  164 => 19,  151 => 9,  146 => 7,  139 => 2,  133 => 1,  117 => 89,  113 => 88,  109 => 87,  105 => 86,  88 => 72,  73 => 60,  69 => 59,  65 => 58,  61 => 56,  31 => 28,  26 => 25,  24 => 1,);
    }
}
/* {% block head %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Profile{% endblock %}</title>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/profile.css') }}">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*         <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* <!-- Latest compiled and minified JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     <script src="{{ asset('js/burger.js') }}"></script>*/
/* */
/*     <script src="{{ asset("script/messages.js") }}"></script>   */
/* </head>*/
/* */
/* {% endblock %}*/
/* */
/* <body>*/
/* <header>*/
/*     <a href="/"><img src="{{ asset("img/logo.png") }}" class="logo" alt="logo"></a>*/
/* */
/*     <div class="burger">*/
/*         <hr class="croix1">*/
/*         <hr class="croix2">*/
/*         <hr class="croix3">*/
/*     </div>*/
/*     <nav class="nav1">*/
/*         <ul>*/
/*             <li>*/
/*                 <button class='download'>TELECHERGER L'APPLI</button>*/
/*             </li>*/
/*             <li>*/
/*                 <button class='become'>DEVENIR CHEF</button>*/
/*             </li>*/
/*             <li><a href="/working">COMMENT CA MARCHE ?</a></li>*/
/*             <li><a href="/hygiene">HYGIENE</a></li>*/
/*         </ul>*/
/*     </nav>*/
/*     <nav class="nav2">*/
/*         <ul>*/
/*             <li><a href="/working">COMMENT CA MARCHE ?</a></li>*/
/*             <li><a href="/hygiene">HYGIENE</a></li>*/
/*         </ul>*/
/*     </nav>*/
/* </header>*/
/* <div class="container">*/
/*     {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     <div class="fos_user_user_show">*/
/*         <img src="/images/profile/{{ user.imageName }}">*/
/*         <p>{{ user.username }}</p>*/
/*         <p>{{ user.adresse }}</p>*/
/*         <p><a href="/profile/edit">Modifier le profil</a></p>*/
/*     </div>*/
/*     <div id="messagerie"><div class="messages"></div>*/
/*         <form method="post" id="form_new">*/
/*             Nouveau message:<br>*/
/*             <input type="text" name="destinataire" placeholder="destinataire"><br>*/
/*             <input type="text" name="body" placeholder="Contenu"><br>*/
/*             <input type="submit=" value="send" name="send">*/
/*         </form>*/
/*     </div>*/
/*     <div class="messagerie2">*/
/*         <img src="{{ asset('img/warning-!.png') }}" alt="warning" class="warning"><br>*/
/*         <div class="title">Messagerie</div>*/
/*         <div class="message_messagerie2">La messagerie n'est pas disponible sur la version mobile du site. Vous pouvez y*/
/*             avoir accès en téléchargeant notre application disponible sur Apple Store, Play Store et Windows Store ou*/
/*             sur la version pc.*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div class='sombre'></div>*/
/*     <footer>*/
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
/* </div>*/
/*     */
/* </body>*/
/* */
/* */

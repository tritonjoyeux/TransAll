<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_370027405c57776f6531c02c3a921280674cb2328f354586cf45381c3fd32d5f extends Twig_Template
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
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
<body>
<header>
    <a href=\"/\"><img src=\"";
        // line 20
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
<div class=\"container\">
    ";
        // line 50
        echo "
    <div class=\"fos_user_user_show\">
        <img src=\"/images/profile/";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "imageName", array()), "html", null, true);
        echo "\">
        <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "adresse", array()), "html", null, true);
        echo "</p>
        <p><a href=\"/profile/edit\">Modifier l profil</a></p>
    </div>
    <div id=\"messagerie\">
        <form method=\"post\" id=\"form_new\">
            <input type=\"text\" name=\"destinataire\" placeholder=\"destinataire\"><br>
            <input type=\"text\" name=\"body\" placeholder=\"body\"><br>
            <input type=\"submit\" value=\"send\" name=\"send\">
        </form>
    </div>
    <div class=\"messagerie2\">
        <div class=\"title\">Messagerie</div>
        <div class=\"message_messagerie2\">La messagerie n'est pas disponible sur la version mobile du site. Vous pouvez y
            avoir accès en téléchargeant notre application disponible sur Apple Store, Play Store et Windows Store ou
            sur la version pc.
        </div>
    </div>
    <div class='sombre'></div>
</div>
</body>

";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
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
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/burger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/working.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/messages.js"), "html", null, true);
        echo "\"></script>
</head>

";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Profile";
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
        return array (  134 => 7,  126 => 13,  122 => 12,  118 => 11,  113 => 9,  108 => 7,  101 => 2,  98 => 1,  72 => 54,  68 => 53,  64 => 52,  60 => 50,  28 => 20,  23 => 17,  21 => 1,);
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
/*     <script src="{{ asset('js/burger.js') }}"></script>*/
/*     <script src="{{ asset('js/working.js') }}"></script>*/
/*     <script src="{{ asset("script/messages.js") }}"></script>*/
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
/*             <li><a href="/login">CONNEXION</a></li>*/
/*             <li><a href="/working">COMMENT CA MARCHE ?</a></li>*/
/*             <li><a href="/hygiene">HYGIENE</a></li>*/
/*         </ul>*/
/*     </nav>*/
/*     <nav class="nav2">*/
/*         <ul>*/
/*             <li><a href="/login">CONNEXION</a></li>*/
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
/*         <p><a href="/profile/edit">Modifier l profil</a></p>*/
/*     </div>*/
/*     <div id="messagerie">*/
/*         <form method="post" id="form_new">*/
/*             <input type="text" name="destinataire" placeholder="destinataire"><br>*/
/*             <input type="text" name="body" placeholder="body"><br>*/
/*             <input type="submit" value="send" name="send">*/
/*         </form>*/
/*     </div>*/
/*     <div class="messagerie2">*/
/*         <div class="title">Messagerie</div>*/
/*         <div class="message_messagerie2">La messagerie n'est pas disponible sur la version mobile du site. Vous pouvez y*/
/*             avoir accès en téléchargeant notre application disponible sur Apple Store, Play Store et Windows Store ou*/
/*             sur la version pc.*/
/*         </div>*/
/*     </div>*/
/*     <div class='sombre'></div>*/
/* </div>*/
/* </body>*/
/* */
/* */

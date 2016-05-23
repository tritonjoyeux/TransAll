<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c24750f6a865f7e32fc647758ddbfe84aa27e605577787ade55d726b89196567 extends Twig_Template
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
        $__internal_269934789415b9a7600f4c41adc6994b9a922e666c08ad96b8548256ba2640cd = $this->env->getExtension("native_profiler");
        $__internal_269934789415b9a7600f4c41adc6994b9a922e666c08ad96b8548256ba2640cd->enter($__internal_269934789415b9a7600f4c41adc6994b9a922e666c08ad96b8548256ba2640cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imageName", array()), "html", null, true);
        echo "\">
        <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>
        <p><a href=\"/profile/edit\">Modifier le profil</a></p>
    </div>
    <div id=\"messagerie\">
        <form method=\"post\" id=\"form_new\">
            Nouveau message:<br>
            <input type=\"text\" name=\"destinataire\" placeholder=\"destinataire\"><br>
            <input type=\"text\" name=\"body\" placeholder=\"body\"><br>
            <input type=\"submit=\" value=\"send\" name=\"send\">
        </form>
    </div>
    <div class=\"messagerie2\">
        <img src=\"";
        // line 66
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Facebook.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Twitter.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Google.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Instagram.png"), "html", null, true);
        echo "\">
            </span>
            <span class=\"text_footer\">Copyright © Cook 4 us 2016. Tous droits réservés.</span>
        </footer>
</div>
    
</body>

";
        
        $__internal_269934789415b9a7600f4c41adc6994b9a922e666c08ad96b8548256ba2640cd->leave($__internal_269934789415b9a7600f4c41adc6994b9a922e666c08ad96b8548256ba2640cd_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_db8828c5291ce955ba4501c7965a8e42adaf3807155463a01bbdc28a68229206 = $this->env->getExtension("native_profiler");
        $__internal_db8828c5291ce955ba4501c7965a8e42adaf3807155463a01bbdc28a68229206->enter($__internal_db8828c5291ce955ba4501c7965a8e42adaf3807155463a01bbdc28a68229206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_db8828c5291ce955ba4501c7965a8e42adaf3807155463a01bbdc28a68229206->leave($__internal_db8828c5291ce955ba4501c7965a8e42adaf3807155463a01bbdc28a68229206_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_394681990f04ca2ad25d9420206a7506942d8c7a16c6d78d53555035f37617d5 = $this->env->getExtension("native_profiler");
        $__internal_394681990f04ca2ad25d9420206a7506942d8c7a16c6d78d53555035f37617d5->enter($__internal_394681990f04ca2ad25d9420206a7506942d8c7a16c6d78d53555035f37617d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_394681990f04ca2ad25d9420206a7506942d8c7a16c6d78d53555035f37617d5->leave($__internal_394681990f04ca2ad25d9420206a7506942d8c7a16c6d78d53555035f37617d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 7,  166 => 13,  162 => 12,  158 => 11,  153 => 9,  148 => 7,  141 => 2,  135 => 1,  119 => 83,  115 => 82,  111 => 81,  107 => 80,  90 => 66,  75 => 54,  71 => 53,  67 => 52,  63 => 50,  31 => 20,  26 => 17,  24 => 1,);
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
/*         <p><a href="/profile/edit">Modifier le profil</a></p>*/
/*     </div>*/
/*     <div id="messagerie">*/
/*         <form method="post" id="form_new">*/
/*             Nouveau message:<br>*/
/*             <input type="text" name="destinataire" placeholder="destinataire"><br>*/
/*             <input type="text" name="body" placeholder="body"><br>*/
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

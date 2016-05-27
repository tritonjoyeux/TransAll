<?php

/* Cook4usBundle:Base:menu.html.twig */
class __TwigTemplate_05d49ad3c21a935ea84972b1dcebb178cf195938a8885ed2cee5d5478a0ed0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56a1679f81f410605887aa5f707aefbad88fccacb4cff09e5dd9b90ca916498d = $this->env->getExtension("native_profiler");
        $__internal_56a1679f81f410605887aa5f707aefbad88fccacb4cff09e5dd9b90ca916498d->enter($__internal_56a1679f81f410605887aa5f707aefbad88fccacb4cff09e5dd9b90ca916498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Base:menu.html.twig"));

        // line 1
        echo "<header>
    <aside class=\"menuAside\">
        <ul class=\"ulClose\">
            <li class=\"close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></li>
            <li class=\"menuLogo\"><a href=\"/\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></a></li>
        </ul>

        <ul class=\"menuApp\">
            <li><button class=\"download\">TÉLÉCHARGER L'APPLI</button></li>
            <li><button class=\"become\">DEVENIR CHEF</button></li>
            <li class=\"connexion\" id=\"logIn\">CONNEXION</li>
            <li class=\"connexion\" id=\"register\"></li>
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoTablette.png"), "html", null, true);
        echo "\"></div>

</header>";
        
        $__internal_56a1679f81f410605887aa5f707aefbad88fccacb4cff09e5dd9b90ca916498d->leave($__internal_56a1679f81f410605887aa5f707aefbad88fccacb4cff09e5dd9b90ca916498d_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Base:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 25,  28 => 5,  22 => 1,);
    }
}
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
/*             <li class="connexion" id="logIn">CONNEXION</li>*/
/*             <li class="connexion" id="register"></li>*/
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
/* */
/* </header>*/

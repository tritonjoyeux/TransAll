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
        $__internal_c9dba5c93a6c890033969826f31a23ce4b2ba302d50521f9acb511a3f30347c5 = $this->env->getExtension("native_profiler");
        $__internal_c9dba5c93a6c890033969826f31a23ce4b2ba302d50521f9acb511a3f30347c5->enter($__internal_c9dba5c93a6c890033969826f31a23ce4b2ba302d50521f9acb511a3f30347c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Base:menu.html.twig"));

        // line 1
        echo "<header>
    <a href=\"/\"><img src=\"";
        // line 2
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
                <button class='download'>TELECHARGER L'APPLI</button>
            </li>
            <li>
                <button class='become'>DEVENIR CHEF</button>
            </li>
            <li><a href=\"/connexion\">CONNEXION</a></li>
            <li><a href=\"/working\">COMMENT CA MARCHE ?</a></li>
            <li><a href=\"/hygiene\">HYGIENE</a></li>
        </ul>
    </nav>
</header>";
        
        $__internal_c9dba5c93a6c890033969826f31a23ce4b2ba302d50521f9acb511a3f30347c5->leave($__internal_c9dba5c93a6c890033969826f31a23ce4b2ba302d50521f9acb511a3f30347c5_prof);

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
        return array (  25 => 2,  22 => 1,);
    }
}
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
/*                 <button class='download'>TELECHARGER L'APPLI</button>*/
/*             </li>*/
/*             <li>*/
/*                 <button class='become'>DEVENIR CHEF</button>*/
/*             </li>*/
/*             <li><a href="/connexion">CONNEXION</a></li>*/
/*             <li><a href="/working">COMMENT CA MARCHE ?</a></li>*/
/*             <li><a href="/hygiene">HYGIENE</a></li>*/
/*         </ul>*/
/*     </nav>*/
/* </header>*/

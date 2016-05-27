<?php

/* Cook4usBundle:ConnexionMobile:index.html.twig */
class __TwigTemplate_1e4bd178f61a839b3ea76b281e131b184b55afa9063a2a71a4ce5832b3db42f4 extends Twig_Template
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
        $__internal_e51fbc3a23fd10b5177df333262d7215ceacfc7ff96b3d19170f846e25d91e7c = $this->env->getExtension("native_profiler");
        $__internal_e51fbc3a23fd10b5177df333262d7215ceacfc7ff96b3d19170f846e25d91e7c->enter($__internal_e51fbc3a23fd10b5177df333262d7215ceacfc7ff96b3d19170f846e25d91e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:ConnexionMobile:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('container', $context, $blocks);
        // line 42
        echo "</html>";
        
        $__internal_e51fbc3a23fd10b5177df333262d7215ceacfc7ff96b3d19170f846e25d91e7c->leave($__internal_e51fbc3a23fd10b5177df333262d7215ceacfc7ff96b3d19170f846e25d91e7c_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_675b30dae0a392d55ac22995b7031ac4552b6edbbfcbc7a29261f50b52987224 = $this->env->getExtension("native_profiler");
        $__internal_675b30dae0a392d55ac22995b7031ac4552b6edbbfcbc7a29261f50b52987224->enter($__internal_675b30dae0a392d55ac22995b7031ac4552b6edbbfcbc7a29261f50b52987224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/connexion.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/burger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/connexionmobile.js"), "html", null, true);
        echo "\"></script>

</head>
";
        
        $__internal_675b30dae0a392d55ac22995b7031ac4552b6edbbfcbc7a29261f50b52987224->leave($__internal_675b30dae0a392d55ac22995b7031ac4552b6edbbfcbc7a29261f50b52987224_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f7d876dda82a94dfdaccf36294888cd7e12d669d616284c6f32f07701b68d9 = $this->env->getExtension("native_profiler");
        $__internal_77f7d876dda82a94dfdaccf36294888cd7e12d669d616284c6f32f07701b68d9->enter($__internal_77f7d876dda82a94dfdaccf36294888cd7e12d669d616284c6f32f07701b68d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_77f7d876dda82a94dfdaccf36294888cd7e12d669d616284c6f32f07701b68d9->leave($__internal_77f7d876dda82a94dfdaccf36294888cd7e12d669d616284c6f32f07701b68d9_prof);

    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
        $__internal_cb085ef7fe37a665a1db9d836999983397d4cbaabf1775145ac7719bdad6b918 = $this->env->getExtension("native_profiler");
        $__internal_cb085ef7fe37a665a1db9d836999983397d4cbaabf1775145ac7719bdad6b918->enter($__internal_cb085ef7fe37a665a1db9d836999983397d4cbaabf1775145ac7719bdad6b918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 19
        echo "    <body>
    ";
        // line 20
        $this->loadTemplate("Cook4usBundle:Base:menu.html.twig", "Cook4usBundle:ConnexionMobile:index.html.twig", 20)->display($context);
        // line 21
        echo "    <div class='container'>
        <div class=\"all\">
            <span class=\"cote cote_client\">CONNEXION</span>
            <span class=\"cote cote_cookist\">S' INSCRIRE</span>

            <div class='content client'>
                ";
        // line 27
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 28
        echo "            </div>
            <div class='content cookist'>
                ";
        // line 30
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 31
        echo "            </div>
        </div>
    </div>
    <div class='sombre'></div>
    <footer>

    </footer>
    </body>


";
        
        $__internal_cb085ef7fe37a665a1db9d836999983397d4cbaabf1775145ac7719bdad6b918->leave($__internal_cb085ef7fe37a665a1db9d836999983397d4cbaabf1775145ac7719bdad6b918_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:ConnexionMobile:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  118 => 30,  114 => 28,  112 => 27,  104 => 21,  102 => 20,  99 => 19,  93 => 18,  81 => 7,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  52 => 7,  45 => 2,  39 => 1,  32 => 42,  30 => 18,  27 => 17,  25 => 1,);
    }
}
/* {% block head %}*/
/*     <!DOCTYPE html>*/
/*     <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Accueil{% endblock %}</title>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/menu.css') }}">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="{{ asset('js/burger.js') }}"></script>*/
/*     <script src="{{ asset('js/connexionmobile.js') }}"></script>*/
/* */
/* </head>*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/*     <body>*/
/*     {% include 'Cook4usBundle:Base:menu.html.twig' %}*/
/*     <div class='container'>*/
/*         <div class="all">*/
/*             <span class="cote cote_client">CONNEXION</span>*/
/*             <span class="cote cote_cookist">S' INSCRIRE</span>*/
/* */
/*             <div class='content client'>*/
/*                 {% render url('fos_user_security_login') %}*/
/*             </div>*/
/*             <div class='content cookist'>*/
/*                 {% render url('fos_user_registration_register') %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class='sombre'></div>*/
/*     <footer>*/
/* */
/*     </footer>*/
/*     </body>*/
/* */
/* */
/* {% endblock %}*/
/* </html>*/

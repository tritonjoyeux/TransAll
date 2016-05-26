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
        $__internal_82f0e8c7cf27a84510da482194feddaed764a887eff876612aee241b39df2409 = $this->env->getExtension("native_profiler");
        $__internal_82f0e8c7cf27a84510da482194feddaed764a887eff876612aee241b39df2409->enter($__internal_82f0e8c7cf27a84510da482194feddaed764a887eff876612aee241b39df2409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:ConnexionMobile:index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('container', $context, $blocks);
        // line 44
        echo "</html>";
        
        $__internal_82f0e8c7cf27a84510da482194feddaed764a887eff876612aee241b39df2409->leave($__internal_82f0e8c7cf27a84510da482194feddaed764a887eff876612aee241b39df2409_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_6276eefe6c3c141a37e954fb9b49cc26a700d5aff2b77bf79cc72b9e36e8625f = $this->env->getExtension("native_profiler");
        $__internal_6276eefe6c3c141a37e954fb9b49cc26a700d5aff2b77bf79cc72b9e36e8625f->enter($__internal_6276eefe6c3c141a37e954fb9b49cc26a700d5aff2b77bf79cc72b9e36e8625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6276eefe6c3c141a37e954fb9b49cc26a700d5aff2b77bf79cc72b9e36e8625f->leave($__internal_6276eefe6c3c141a37e954fb9b49cc26a700d5aff2b77bf79cc72b9e36e8625f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b167531fa5a2a35edeff60f9336145c9de90017d54cd627de96a06361c645f77 = $this->env->getExtension("native_profiler");
        $__internal_b167531fa5a2a35edeff60f9336145c9de90017d54cd627de96a06361c645f77->enter($__internal_b167531fa5a2a35edeff60f9336145c9de90017d54cd627de96a06361c645f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_b167531fa5a2a35edeff60f9336145c9de90017d54cd627de96a06361c645f77->leave($__internal_b167531fa5a2a35edeff60f9336145c9de90017d54cd627de96a06361c645f77_prof);

    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        $__internal_b66d94d5f7b6d6296558c83ad8deba3ba7cdeb55c3c59915c1c6b1db07ebf8b7 = $this->env->getExtension("native_profiler");
        $__internal_b66d94d5f7b6d6296558c83ad8deba3ba7cdeb55c3c59915c1c6b1db07ebf8b7->enter($__internal_b66d94d5f7b6d6296558c83ad8deba3ba7cdeb55c3c59915c1c6b1db07ebf8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 21
        echo "    <body>
    ";
        // line 22
        $this->loadTemplate("Cook4usBundle:Base:menu.html.twig", "Cook4usBundle:ConnexionMobile:index.html.twig", 22)->display($context);
        // line 23
        echo "    <div class='container'>
        <div class=\"all\">
            <span class=\"cote cote_client\">CONNEXION</span>
            <span class=\"cote cote_cookist\">S' INSCRIRE</span>

            <div class='content client'>
                ";
        // line 29
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 30
        echo "            </div>
            <div class='content cookist'>
                ";
        // line 32
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 33
        echo "            </div>
        </div>
    </div>
    <div class='sombre'></div>
    <footer>

    </footer>
    </body>


";
        
        $__internal_b66d94d5f7b6d6296558c83ad8deba3ba7cdeb55c3c59915c1c6b1db07ebf8b7->leave($__internal_b66d94d5f7b6d6296558c83ad8deba3ba7cdeb55c3c59915c1c6b1db07ebf8b7_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:ConnexionMobile:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  120 => 32,  116 => 30,  114 => 29,  106 => 23,  104 => 22,  101 => 21,  95 => 20,  83 => 7,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  52 => 7,  45 => 2,  39 => 1,  32 => 44,  30 => 20,  27 => 19,  25 => 1,);
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
/* */
/* */
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

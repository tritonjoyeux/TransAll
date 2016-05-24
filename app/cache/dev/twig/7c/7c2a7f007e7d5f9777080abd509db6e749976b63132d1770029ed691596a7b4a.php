<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_97c73605d03bf2dc35a5e04ae593107915a7df65e04b40f80219268c53c70d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55d8a2b72e6e453bc35122290087241982bf6ca9fc2404dad4ccb419e1a0682e = $this->env->getExtension("native_profiler");
        $__internal_55d8a2b72e6e453bc35122290087241982bf6ca9fc2404dad4ccb419e1a0682e->enter($__internal_55d8a2b72e6e453bc35122290087241982bf6ca9fc2404dad4ccb419e1a0682e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_55d8a2b72e6e453bc35122290087241982bf6ca9fc2404dad4ccb419e1a0682e->leave($__internal_55d8a2b72e6e453bc35122290087241982bf6ca9fc2404dad4ccb419e1a0682e_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7cce4cd2023b896ba40e8ccb5048fbe8d6414636b1b651813af5e9533fb7f8c = $this->env->getExtension("native_profiler");
        $__internal_c7cce4cd2023b896ba40e8ccb5048fbe8d6414636b1b651813af5e9533fb7f8c->enter($__internal_c7cce4cd2023b896ba40e8ccb5048fbe8d6414636b1b651813af5e9533fb7f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_c7cce4cd2023b896ba40e8ccb5048fbe8d6414636b1b651813af5e9533fb7f8c->leave($__internal_c7cce4cd2023b896ba40e8ccb5048fbe8d6414636b1b651813af5e9533fb7f8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */

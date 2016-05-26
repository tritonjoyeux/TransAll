<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f4e6d7d8e1b95778f25fe0b36a35d6b4b8d331f1307a4bcfd431884f5e5e451c extends Twig_Template
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
        $__internal_f7fb049e5a32a7db74f9d221c76e58708e5aa768445548c766425bd5a7fc692a = $this->env->getExtension("native_profiler");
        $__internal_f7fb049e5a32a7db74f9d221c76e58708e5aa768445548c766425bd5a7fc692a->enter($__internal_f7fb049e5a32a7db74f9d221c76e58708e5aa768445548c766425bd5a7fc692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_f7fb049e5a32a7db74f9d221c76e58708e5aa768445548c766425bd5a7fc692a->leave($__internal_f7fb049e5a32a7db74f9d221c76e58708e5aa768445548c766425bd5a7fc692a_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7aced49230c45e42312c03541754a2793f16953ca9a7054521c536d03e5a956 = $this->env->getExtension("native_profiler");
        $__internal_a7aced49230c45e42312c03541754a2793f16953ca9a7054521c536d03e5a956->enter($__internal_a7aced49230c45e42312c03541754a2793f16953ca9a7054521c536d03e5a956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_a7aced49230c45e42312c03541754a2793f16953ca9a7054521c536d03e5a956->leave($__internal_a7aced49230c45e42312c03541754a2793f16953ca9a7054521c536d03e5a956_prof);

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

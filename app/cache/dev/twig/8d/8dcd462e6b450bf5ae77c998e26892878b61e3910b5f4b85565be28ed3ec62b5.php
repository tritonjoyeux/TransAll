<?php

/* @User/layout.html.twig */
class __TwigTemplate_d49d94d520c292c2421d09992a3680a180169a518cfa2e908a9f3651de6e6017 extends Twig_Template
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
        $__internal_96f40d2c636b738d71881131c90e345d1b431752157b38d82eaf5a754e13872f = $this->env->getExtension("native_profiler");
        $__internal_96f40d2c636b738d71881131c90e345d1b431752157b38d82eaf5a754e13872f->enter($__internal_96f40d2c636b738d71881131c90e345d1b431752157b38d82eaf5a754e13872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

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
        
        $__internal_96f40d2c636b738d71881131c90e345d1b431752157b38d82eaf5a754e13872f->leave($__internal_96f40d2c636b738d71881131c90e345d1b431752157b38d82eaf5a754e13872f_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_753c71dfd0476b2841f900e4746fa07ee8a33c42599b9f2b668ab1a99df700b7 = $this->env->getExtension("native_profiler");
        $__internal_753c71dfd0476b2841f900e4746fa07ee8a33c42599b9f2b668ab1a99df700b7->enter($__internal_753c71dfd0476b2841f900e4746fa07ee8a33c42599b9f2b668ab1a99df700b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_753c71dfd0476b2841f900e4746fa07ee8a33c42599b9f2b668ab1a99df700b7->leave($__internal_753c71dfd0476b2841f900e4746fa07ee8a33c42599b9f2b668ab1a99df700b7_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
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

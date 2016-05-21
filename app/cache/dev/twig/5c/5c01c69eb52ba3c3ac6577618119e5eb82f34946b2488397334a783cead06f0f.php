<?php

/* @User/layout.html.twig */
class __TwigTemplate_1cff1d7b0151f06be8351f94ce19e2d9eba665354ac0ccae952d188072eeee81 extends Twig_Template
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
        $__internal_fc1d24979253b16c636bde18fc063acdc1777f61d77d4cd751018c0c650de2cf = $this->env->getExtension("native_profiler");
        $__internal_fc1d24979253b16c636bde18fc063acdc1777f61d77d4cd751018c0c650de2cf->enter($__internal_fc1d24979253b16c636bde18fc063acdc1777f61d77d4cd751018c0c650de2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

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
        
        $__internal_fc1d24979253b16c636bde18fc063acdc1777f61d77d4cd751018c0c650de2cf->leave($__internal_fc1d24979253b16c636bde18fc063acdc1777f61d77d4cd751018c0c650de2cf_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_095533971423c1bebc06adedd0ef0505feda208325c5fcac2f20262b537f19d9 = $this->env->getExtension("native_profiler");
        $__internal_095533971423c1bebc06adedd0ef0505feda208325c5fcac2f20262b537f19d9->enter($__internal_095533971423c1bebc06adedd0ef0505feda208325c5fcac2f20262b537f19d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_095533971423c1bebc06adedd0ef0505feda208325c5fcac2f20262b537f19d9->leave($__internal_095533971423c1bebc06adedd0ef0505feda208325c5fcac2f20262b537f19d9_prof);

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

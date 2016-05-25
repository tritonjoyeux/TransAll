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
        $__internal_5f46f4523d0017b59306a2830ce2e55590a771d1b76d373d14a5bac1e40ed0c9 = $this->env->getExtension("native_profiler");
        $__internal_5f46f4523d0017b59306a2830ce2e55590a771d1b76d373d14a5bac1e40ed0c9->enter($__internal_5f46f4523d0017b59306a2830ce2e55590a771d1b76d373d14a5bac1e40ed0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_5f46f4523d0017b59306a2830ce2e55590a771d1b76d373d14a5bac1e40ed0c9->leave($__internal_5f46f4523d0017b59306a2830ce2e55590a771d1b76d373d14a5bac1e40ed0c9_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c32f8788fdbcfc883d5e14d3be9c43421499d706cd9c8953cc0b33ec17982179 = $this->env->getExtension("native_profiler");
        $__internal_c32f8788fdbcfc883d5e14d3be9c43421499d706cd9c8953cc0b33ec17982179->enter($__internal_c32f8788fdbcfc883d5e14d3be9c43421499d706cd9c8953cc0b33ec17982179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_c32f8788fdbcfc883d5e14d3be9c43421499d706cd9c8953cc0b33ec17982179->leave($__internal_c32f8788fdbcfc883d5e14d3be9c43421499d706cd9c8953cc0b33ec17982179_prof);

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

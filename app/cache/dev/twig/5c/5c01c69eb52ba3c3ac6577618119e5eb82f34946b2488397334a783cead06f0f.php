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
        $__internal_6b083e7b2a88815be202c7f6c24e9688b164d3398432267b46884b13310eed75 = $this->env->getExtension("native_profiler");
        $__internal_6b083e7b2a88815be202c7f6c24e9688b164d3398432267b46884b13310eed75->enter($__internal_6b083e7b2a88815be202c7f6c24e9688b164d3398432267b46884b13310eed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

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
        
        $__internal_6b083e7b2a88815be202c7f6c24e9688b164d3398432267b46884b13310eed75->leave($__internal_6b083e7b2a88815be202c7f6c24e9688b164d3398432267b46884b13310eed75_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_730bb7d3ce508c1c89cf9e133632b9b055b8840b369a6ab8769db0422de87842 = $this->env->getExtension("native_profiler");
        $__internal_730bb7d3ce508c1c89cf9e133632b9b055b8840b369a6ab8769db0422de87842->enter($__internal_730bb7d3ce508c1c89cf9e133632b9b055b8840b369a6ab8769db0422de87842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_730bb7d3ce508c1c89cf9e133632b9b055b8840b369a6ab8769db0422de87842->leave($__internal_730bb7d3ce508c1c89cf9e133632b9b055b8840b369a6ab8769db0422de87842_prof);

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

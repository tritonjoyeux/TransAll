<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_02621ebc84581e83f975e88053854ec57226c8c1547d85c0fa7c57944f6bdc0f extends Twig_Template
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
        $__internal_64240c785d4847c32a442d4d3fef6a377dcb206868362cb80ff7166e12c40b7f = $this->env->getExtension("native_profiler");
        $__internal_64240c785d4847c32a442d4d3fef6a377dcb206868362cb80ff7166e12c40b7f->enter($__internal_64240c785d4847c32a442d4d3fef6a377dcb206868362cb80ff7166e12c40b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_64240c785d4847c32a442d4d3fef6a377dcb206868362cb80ff7166e12c40b7f->leave($__internal_64240c785d4847c32a442d4d3fef6a377dcb206868362cb80ff7166e12c40b7f_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56803f21c1aa9f94683aa53639b3fe14595317c62c373670f3c93fb4a3c4c764 = $this->env->getExtension("native_profiler");
        $__internal_56803f21c1aa9f94683aa53639b3fe14595317c62c373670f3c93fb4a3c4c764->enter($__internal_56803f21c1aa9f94683aa53639b3fe14595317c62c373670f3c93fb4a3c4c764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_56803f21c1aa9f94683aa53639b3fe14595317c62c373670f3c93fb4a3c4c764->leave($__internal_56803f21c1aa9f94683aa53639b3fe14595317c62c373670f3c93fb4a3c4c764_prof);

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

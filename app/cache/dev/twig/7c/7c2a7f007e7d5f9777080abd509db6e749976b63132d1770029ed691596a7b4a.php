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
        $__internal_d0a41466e3e1de30bde4639795d989ea8082f22e4bd4f35143e84828b08f1da2 = $this->env->getExtension("native_profiler");
        $__internal_d0a41466e3e1de30bde4639795d989ea8082f22e4bd4f35143e84828b08f1da2->enter($__internal_d0a41466e3e1de30bde4639795d989ea8082f22e4bd4f35143e84828b08f1da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_d0a41466e3e1de30bde4639795d989ea8082f22e4bd4f35143e84828b08f1da2->leave($__internal_d0a41466e3e1de30bde4639795d989ea8082f22e4bd4f35143e84828b08f1da2_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_925e4c7c59e3e2674fbbe29bd0398a7a3e5c3c88c2a8ab8d6eb51fa404a4569b = $this->env->getExtension("native_profiler");
        $__internal_925e4c7c59e3e2674fbbe29bd0398a7a3e5c3c88c2a8ab8d6eb51fa404a4569b->enter($__internal_925e4c7c59e3e2674fbbe29bd0398a7a3e5c3c88c2a8ab8d6eb51fa404a4569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_925e4c7c59e3e2674fbbe29bd0398a7a3e5c3c88c2a8ab8d6eb51fa404a4569b->leave($__internal_925e4c7c59e3e2674fbbe29bd0398a7a3e5c3c88c2a8ab8d6eb51fa404a4569b_prof);

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

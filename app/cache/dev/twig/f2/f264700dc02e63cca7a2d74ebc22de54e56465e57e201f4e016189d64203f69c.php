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
        $__internal_6e01e924ddb476ac18bd5c75aff3e4e99ffa77b9f440d23455016eee32203197 = $this->env->getExtension("native_profiler");
        $__internal_6e01e924ddb476ac18bd5c75aff3e4e99ffa77b9f440d23455016eee32203197->enter($__internal_6e01e924ddb476ac18bd5c75aff3e4e99ffa77b9f440d23455016eee32203197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_6e01e924ddb476ac18bd5c75aff3e4e99ffa77b9f440d23455016eee32203197->leave($__internal_6e01e924ddb476ac18bd5c75aff3e4e99ffa77b9f440d23455016eee32203197_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87a24b717046b193c5bdde6721e15a5a816cc314fbb8eaca6d638a2c54afad1d = $this->env->getExtension("native_profiler");
        $__internal_87a24b717046b193c5bdde6721e15a5a816cc314fbb8eaca6d638a2c54afad1d->enter($__internal_87a24b717046b193c5bdde6721e15a5a816cc314fbb8eaca6d638a2c54afad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "            ";
        
        $__internal_87a24b717046b193c5bdde6721e15a5a816cc314fbb8eaca6d638a2c54afad1d->leave($__internal_87a24b717046b193c5bdde6721e15a5a816cc314fbb8eaca6d638a2c54afad1d_prof);

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

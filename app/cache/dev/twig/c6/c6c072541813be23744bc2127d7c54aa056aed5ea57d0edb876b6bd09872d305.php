<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e6a8b1ccaaebb058900bf01d49a10e17d0ff96ed6446c68d5c08eaee9ce6f368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_195b619c81d68f7f8be32018bcac1ee6e24229b8cf35c54196e52a91794c4c7c = $this->env->getExtension("native_profiler");
        $__internal_195b619c81d68f7f8be32018bcac1ee6e24229b8cf35c54196e52a91794c4c7c->enter($__internal_195b619c81d68f7f8be32018bcac1ee6e24229b8cf35c54196e52a91794c4c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_195b619c81d68f7f8be32018bcac1ee6e24229b8cf35c54196e52a91794c4c7c->leave($__internal_195b619c81d68f7f8be32018bcac1ee6e24229b8cf35c54196e52a91794c4c7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

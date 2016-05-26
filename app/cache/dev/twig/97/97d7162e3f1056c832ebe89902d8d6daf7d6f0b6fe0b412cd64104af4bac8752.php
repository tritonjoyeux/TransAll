<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_318926c1898c119dcd98ea60048a126464ca2d541aa1eb8889c3a3f8a7337ec1 extends Twig_Template
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
        $__internal_b7d4ba82b1607b0308bf3c6710157d10a43403ec5f412b23e5945242f0c1cfbc = $this->env->getExtension("native_profiler");
        $__internal_b7d4ba82b1607b0308bf3c6710157d10a43403ec5f412b23e5945242f0c1cfbc->enter($__internal_b7d4ba82b1607b0308bf3c6710157d10a43403ec5f412b23e5945242f0c1cfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b7d4ba82b1607b0308bf3c6710157d10a43403ec5f412b23e5945242f0c1cfbc->leave($__internal_b7d4ba82b1607b0308bf3c6710157d10a43403ec5f412b23e5945242f0c1cfbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

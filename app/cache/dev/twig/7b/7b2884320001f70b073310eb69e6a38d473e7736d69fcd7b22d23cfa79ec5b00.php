<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8323656c04e7eefaa1b49c877c59c1099da2caab231ef4f11a3555dd2851cdb8 extends Twig_Template
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
        $__internal_ac09961e826082c6d57acdf4a336981e902504654265ebfe75f5dbbe556183a3 = $this->env->getExtension("native_profiler");
        $__internal_ac09961e826082c6d57acdf4a336981e902504654265ebfe75f5dbbe556183a3->enter($__internal_ac09961e826082c6d57acdf4a336981e902504654265ebfe75f5dbbe556183a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ac09961e826082c6d57acdf4a336981e902504654265ebfe75f5dbbe556183a3->leave($__internal_ac09961e826082c6d57acdf4a336981e902504654265ebfe75f5dbbe556183a3_prof);

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

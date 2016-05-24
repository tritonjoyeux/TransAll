<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_51191f940c521cfd763a4f0b58946710c6e74d947a5d6e79cb21a70c7177cb04 extends Twig_Template
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
        $__internal_0ccf9784323a7fd26e61ffced6b331465c4e08c493d0342a1340960291eee1e5 = $this->env->getExtension("native_profiler");
        $__internal_0ccf9784323a7fd26e61ffced6b331465c4e08c493d0342a1340960291eee1e5->enter($__internal_0ccf9784323a7fd26e61ffced6b331465c4e08c493d0342a1340960291eee1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0ccf9784323a7fd26e61ffced6b331465c4e08c493d0342a1340960291eee1e5->leave($__internal_0ccf9784323a7fd26e61ffced6b331465c4e08c493d0342a1340960291eee1e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

<?php

/* @Twig/Exception/exception.xml.twig */
class __TwigTemplate_9ecf2caa38ad4043b62631216f6455227a8f2fe7b267010f270b6e6f9c77d1d5 extends Twig_Template
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
        $__internal_b41d57358d375eeb728d54fed75a121e0bfc6db89005a596644d5dbe9cdd3abe = $this->env->getExtension("native_profiler");
        $__internal_b41d57358d375eeb728d54fed75a121e0bfc6db89005a596644d5dbe9cdd3abe->enter($__internal_b41d57358d375eeb728d54fed75a121e0bfc6db89005a596644d5dbe9cdd3abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            $this->loadTemplate("@Twig/Exception/traces.xml.twig", "@Twig/Exception/exception.xml.twig", 6)->display(array("exception" => $context["e"]));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_b41d57358d375eeb728d54fed75a121e0bfc6db89005a596644d5dbe9cdd3abe->leave($__internal_b41d57358d375eeb728d54fed75a121e0bfc6db89005a596644d5dbe9cdd3abe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  47 => 7,  45 => 6,  38 => 5,  34 => 4,  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}">*/
/* {% for e in exception.toarray %}*/
/*     <exception class="{{ e.class }}" message="{{ e.message }}">*/
/* {% include '@Twig/Exception/traces.xml.twig' with { 'exception': e } only %}*/
/*     </exception>*/
/* {% endfor %}*/
/* </error>*/
/* */

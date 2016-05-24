<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_89ac74071e8677f3671f98d00a1a830abd180e1b56a7df88c61607f267e18bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b34ae80dff3c082f0857be171828c04d6415494cbc9749a15dd50521fe02116 = $this->env->getExtension("native_profiler");
        $__internal_0b34ae80dff3c082f0857be171828c04d6415494cbc9749a15dd50521fe02116->enter($__internal_0b34ae80dff3c082f0857be171828c04d6415494cbc9749a15dd50521fe02116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b34ae80dff3c082f0857be171828c04d6415494cbc9749a15dd50521fe02116->leave($__internal_0b34ae80dff3c082f0857be171828c04d6415494cbc9749a15dd50521fe02116_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bad8941bbe63bad68582e15463a61a5e16fdf49fb413ea764dbc4bb15b934d19 = $this->env->getExtension("native_profiler");
        $__internal_bad8941bbe63bad68582e15463a61a5e16fdf49fb413ea764dbc4bb15b934d19->enter($__internal_bad8941bbe63bad68582e15463a61a5e16fdf49fb413ea764dbc4bb15b934d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bad8941bbe63bad68582e15463a61a5e16fdf49fb413ea764dbc4bb15b934d19->leave($__internal_bad8941bbe63bad68582e15463a61a5e16fdf49fb413ea764dbc4bb15b934d19_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f58007e65c90707bb7c47306c5996434dcede10258b4d3adc79c12de992ba6a = $this->env->getExtension("native_profiler");
        $__internal_4f58007e65c90707bb7c47306c5996434dcede10258b4d3adc79c12de992ba6a->enter($__internal_4f58007e65c90707bb7c47306c5996434dcede10258b4d3adc79c12de992ba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f58007e65c90707bb7c47306c5996434dcede10258b4d3adc79c12de992ba6a->leave($__internal_4f58007e65c90707bb7c47306c5996434dcede10258b4d3adc79c12de992ba6a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a0f40571d59c5888ff6d469fb2317fde7949ee42ae6eeac69154f8cb73fb1096 = $this->env->getExtension("native_profiler");
        $__internal_a0f40571d59c5888ff6d469fb2317fde7949ee42ae6eeac69154f8cb73fb1096->enter($__internal_a0f40571d59c5888ff6d469fb2317fde7949ee42ae6eeac69154f8cb73fb1096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a0f40571d59c5888ff6d469fb2317fde7949ee42ae6eeac69154f8cb73fb1096->leave($__internal_a0f40571d59c5888ff6d469fb2317fde7949ee42ae6eeac69154f8cb73fb1096_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

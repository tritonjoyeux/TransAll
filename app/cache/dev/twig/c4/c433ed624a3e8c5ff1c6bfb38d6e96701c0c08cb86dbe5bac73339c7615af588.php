<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8653fa5242ccbd4abd78d81cb0694554a0af6a91aa9d55675b16a955c855388a extends Twig_Template
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
        $__internal_d172184e7cd10eba948ee58052b3fbf57f079000e1ebeb54b9d4aa5c56c04892 = $this->env->getExtension("native_profiler");
        $__internal_d172184e7cd10eba948ee58052b3fbf57f079000e1ebeb54b9d4aa5c56c04892->enter($__internal_d172184e7cd10eba948ee58052b3fbf57f079000e1ebeb54b9d4aa5c56c04892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d172184e7cd10eba948ee58052b3fbf57f079000e1ebeb54b9d4aa5c56c04892->leave($__internal_d172184e7cd10eba948ee58052b3fbf57f079000e1ebeb54b9d4aa5c56c04892_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7dee5d4909ad018807a27335d2ea06395f9db3cbf508e64fc72f8c61cc5cdf24 = $this->env->getExtension("native_profiler");
        $__internal_7dee5d4909ad018807a27335d2ea06395f9db3cbf508e64fc72f8c61cc5cdf24->enter($__internal_7dee5d4909ad018807a27335d2ea06395f9db3cbf508e64fc72f8c61cc5cdf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7dee5d4909ad018807a27335d2ea06395f9db3cbf508e64fc72f8c61cc5cdf24->leave($__internal_7dee5d4909ad018807a27335d2ea06395f9db3cbf508e64fc72f8c61cc5cdf24_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fe937bbfcd6242d42eb381a872ca70ead151c6c84bd24ebeacb8c55f29209432 = $this->env->getExtension("native_profiler");
        $__internal_fe937bbfcd6242d42eb381a872ca70ead151c6c84bd24ebeacb8c55f29209432->enter($__internal_fe937bbfcd6242d42eb381a872ca70ead151c6c84bd24ebeacb8c55f29209432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fe937bbfcd6242d42eb381a872ca70ead151c6c84bd24ebeacb8c55f29209432->leave($__internal_fe937bbfcd6242d42eb381a872ca70ead151c6c84bd24ebeacb8c55f29209432_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_146d45c7e8720b406a97cf027c48b3a86c17dc44c01fb216c0acdbaa775a8639 = $this->env->getExtension("native_profiler");
        $__internal_146d45c7e8720b406a97cf027c48b3a86c17dc44c01fb216c0acdbaa775a8639->enter($__internal_146d45c7e8720b406a97cf027c48b3a86c17dc44c01fb216c0acdbaa775a8639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_146d45c7e8720b406a97cf027c48b3a86c17dc44c01fb216c0acdbaa775a8639->leave($__internal_146d45c7e8720b406a97cf027c48b3a86c17dc44c01fb216c0acdbaa775a8639_prof);

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

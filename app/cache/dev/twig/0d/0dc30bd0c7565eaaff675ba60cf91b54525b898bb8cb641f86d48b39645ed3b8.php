<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7e114d4d58f32cf16021b1d9aa6053c66e79293c8df33c18225ba6c688d5ef27 extends Twig_Template
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
        $__internal_7d69de820301536548f565423933a40939e405ed8532d985d961df4fa871e561 = $this->env->getExtension("native_profiler");
        $__internal_7d69de820301536548f565423933a40939e405ed8532d985d961df4fa871e561->enter($__internal_7d69de820301536548f565423933a40939e405ed8532d985d961df4fa871e561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d69de820301536548f565423933a40939e405ed8532d985d961df4fa871e561->leave($__internal_7d69de820301536548f565423933a40939e405ed8532d985d961df4fa871e561_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8ece3addc6fc71edf2b722e5e294a6ed7daf6d02f753adc5ada59c6ece35f20c = $this->env->getExtension("native_profiler");
        $__internal_8ece3addc6fc71edf2b722e5e294a6ed7daf6d02f753adc5ada59c6ece35f20c->enter($__internal_8ece3addc6fc71edf2b722e5e294a6ed7daf6d02f753adc5ada59c6ece35f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8ece3addc6fc71edf2b722e5e294a6ed7daf6d02f753adc5ada59c6ece35f20c->leave($__internal_8ece3addc6fc71edf2b722e5e294a6ed7daf6d02f753adc5ada59c6ece35f20c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_205298ffee92f2e9b92514583fc8f7f400eddf673c7a7df264a3a9a2510e018a = $this->env->getExtension("native_profiler");
        $__internal_205298ffee92f2e9b92514583fc8f7f400eddf673c7a7df264a3a9a2510e018a->enter($__internal_205298ffee92f2e9b92514583fc8f7f400eddf673c7a7df264a3a9a2510e018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_205298ffee92f2e9b92514583fc8f7f400eddf673c7a7df264a3a9a2510e018a->leave($__internal_205298ffee92f2e9b92514583fc8f7f400eddf673c7a7df264a3a9a2510e018a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_80bcafe1ae4b1e0d31f3c7e8a1dd3d68527869adbe90237981ce640d2be69d89 = $this->env->getExtension("native_profiler");
        $__internal_80bcafe1ae4b1e0d31f3c7e8a1dd3d68527869adbe90237981ce640d2be69d89->enter($__internal_80bcafe1ae4b1e0d31f3c7e8a1dd3d68527869adbe90237981ce640d2be69d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_80bcafe1ae4b1e0d31f3c7e8a1dd3d68527869adbe90237981ce640d2be69d89->leave($__internal_80bcafe1ae4b1e0d31f3c7e8a1dd3d68527869adbe90237981ce640d2be69d89_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

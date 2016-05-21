<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_766d2364281c1d51084e39bbe57dcf2ac1d3b807ddd541c244bccb26762cacc8 extends Twig_Template
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
        $__internal_bb14b8b4cb971e26c4d32b1259a87d61403a3e50ae5253b6a2671445eb2f9c0c = $this->env->getExtension("native_profiler");
        $__internal_bb14b8b4cb971e26c4d32b1259a87d61403a3e50ae5253b6a2671445eb2f9c0c->enter($__internal_bb14b8b4cb971e26c4d32b1259a87d61403a3e50ae5253b6a2671445eb2f9c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bb14b8b4cb971e26c4d32b1259a87d61403a3e50ae5253b6a2671445eb2f9c0c->leave($__internal_bb14b8b4cb971e26c4d32b1259a87d61403a3e50ae5253b6a2671445eb2f9c0c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dac2418c2a2e73d9ca855cf29c1beccfd1910cec87ab65f72ca23800d63f7261 = $this->env->getExtension("native_profiler");
        $__internal_dac2418c2a2e73d9ca855cf29c1beccfd1910cec87ab65f72ca23800d63f7261->enter($__internal_dac2418c2a2e73d9ca855cf29c1beccfd1910cec87ab65f72ca23800d63f7261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dac2418c2a2e73d9ca855cf29c1beccfd1910cec87ab65f72ca23800d63f7261->leave($__internal_dac2418c2a2e73d9ca855cf29c1beccfd1910cec87ab65f72ca23800d63f7261_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_50eaf0d48848d8359f32f2933808266f8694f565ee424a70ba23566b12c1147e = $this->env->getExtension("native_profiler");
        $__internal_50eaf0d48848d8359f32f2933808266f8694f565ee424a70ba23566b12c1147e->enter($__internal_50eaf0d48848d8359f32f2933808266f8694f565ee424a70ba23566b12c1147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_50eaf0d48848d8359f32f2933808266f8694f565ee424a70ba23566b12c1147e->leave($__internal_50eaf0d48848d8359f32f2933808266f8694f565ee424a70ba23566b12c1147e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1af6783ac49734bec072f0bbc1a5993b3a75112e8dfb9ca410e612368e2dc58f = $this->env->getExtension("native_profiler");
        $__internal_1af6783ac49734bec072f0bbc1a5993b3a75112e8dfb9ca410e612368e2dc58f->enter($__internal_1af6783ac49734bec072f0bbc1a5993b3a75112e8dfb9ca410e612368e2dc58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1af6783ac49734bec072f0bbc1a5993b3a75112e8dfb9ca410e612368e2dc58f->leave($__internal_1af6783ac49734bec072f0bbc1a5993b3a75112e8dfb9ca410e612368e2dc58f_prof);

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

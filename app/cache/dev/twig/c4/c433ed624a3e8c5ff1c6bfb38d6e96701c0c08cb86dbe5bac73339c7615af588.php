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
        $__internal_c2e9718138f49cf517eff0c3c351a0e1df57fb3deb6512050f41bffb036b3a7c = $this->env->getExtension("native_profiler");
        $__internal_c2e9718138f49cf517eff0c3c351a0e1df57fb3deb6512050f41bffb036b3a7c->enter($__internal_c2e9718138f49cf517eff0c3c351a0e1df57fb3deb6512050f41bffb036b3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c2e9718138f49cf517eff0c3c351a0e1df57fb3deb6512050f41bffb036b3a7c->leave($__internal_c2e9718138f49cf517eff0c3c351a0e1df57fb3deb6512050f41bffb036b3a7c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2848f6224d71265e9aeadf4cdb9b5af636f0797a04816a6513ffe7b3ec58c790 = $this->env->getExtension("native_profiler");
        $__internal_2848f6224d71265e9aeadf4cdb9b5af636f0797a04816a6513ffe7b3ec58c790->enter($__internal_2848f6224d71265e9aeadf4cdb9b5af636f0797a04816a6513ffe7b3ec58c790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2848f6224d71265e9aeadf4cdb9b5af636f0797a04816a6513ffe7b3ec58c790->leave($__internal_2848f6224d71265e9aeadf4cdb9b5af636f0797a04816a6513ffe7b3ec58c790_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_05b91facaca162bca0728c474c5b3c4146fd46b16dae26693fececad9bcf95fd = $this->env->getExtension("native_profiler");
        $__internal_05b91facaca162bca0728c474c5b3c4146fd46b16dae26693fececad9bcf95fd->enter($__internal_05b91facaca162bca0728c474c5b3c4146fd46b16dae26693fececad9bcf95fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_05b91facaca162bca0728c474c5b3c4146fd46b16dae26693fececad9bcf95fd->leave($__internal_05b91facaca162bca0728c474c5b3c4146fd46b16dae26693fececad9bcf95fd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f086edba2d27417cf0e0bfa1e298492e382073c93e92d5453bdfceca48895ba8 = $this->env->getExtension("native_profiler");
        $__internal_f086edba2d27417cf0e0bfa1e298492e382073c93e92d5453bdfceca48895ba8->enter($__internal_f086edba2d27417cf0e0bfa1e298492e382073c93e92d5453bdfceca48895ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f086edba2d27417cf0e0bfa1e298492e382073c93e92d5453bdfceca48895ba8->leave($__internal_f086edba2d27417cf0e0bfa1e298492e382073c93e92d5453bdfceca48895ba8_prof);

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

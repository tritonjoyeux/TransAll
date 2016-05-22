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
        $__internal_d5daf4c10b129e71017502ec419c1083f73815f3c4e4e55b6637d33ba6fe9d12 = $this->env->getExtension("native_profiler");
        $__internal_d5daf4c10b129e71017502ec419c1083f73815f3c4e4e55b6637d33ba6fe9d12->enter($__internal_d5daf4c10b129e71017502ec419c1083f73815f3c4e4e55b6637d33ba6fe9d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d5daf4c10b129e71017502ec419c1083f73815f3c4e4e55b6637d33ba6fe9d12->leave($__internal_d5daf4c10b129e71017502ec419c1083f73815f3c4e4e55b6637d33ba6fe9d12_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d07d0e32730a9081ea1195f0f984d51f63483c43f728c92dcd16b60b58da0c3 = $this->env->getExtension("native_profiler");
        $__internal_3d07d0e32730a9081ea1195f0f984d51f63483c43f728c92dcd16b60b58da0c3->enter($__internal_3d07d0e32730a9081ea1195f0f984d51f63483c43f728c92dcd16b60b58da0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d07d0e32730a9081ea1195f0f984d51f63483c43f728c92dcd16b60b58da0c3->leave($__internal_3d07d0e32730a9081ea1195f0f984d51f63483c43f728c92dcd16b60b58da0c3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_92242303d7e3451a77106b9d711c960413f2b320386a92080316375dec3b4740 = $this->env->getExtension("native_profiler");
        $__internal_92242303d7e3451a77106b9d711c960413f2b320386a92080316375dec3b4740->enter($__internal_92242303d7e3451a77106b9d711c960413f2b320386a92080316375dec3b4740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_92242303d7e3451a77106b9d711c960413f2b320386a92080316375dec3b4740->leave($__internal_92242303d7e3451a77106b9d711c960413f2b320386a92080316375dec3b4740_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e25664677ea208ec825769b28a01ddfa1c6d269478622c69c759053ff6a3bd32 = $this->env->getExtension("native_profiler");
        $__internal_e25664677ea208ec825769b28a01ddfa1c6d269478622c69c759053ff6a3bd32->enter($__internal_e25664677ea208ec825769b28a01ddfa1c6d269478622c69c759053ff6a3bd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e25664677ea208ec825769b28a01ddfa1c6d269478622c69c759053ff6a3bd32->leave($__internal_e25664677ea208ec825769b28a01ddfa1c6d269478622c69c759053ff6a3bd32_prof);

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

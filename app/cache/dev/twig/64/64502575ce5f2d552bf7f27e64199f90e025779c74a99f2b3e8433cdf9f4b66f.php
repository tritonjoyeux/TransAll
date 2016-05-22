<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_7020dcfa7e50910df053e77a39d61d0be2a6ddbd67efee0f6164dd2368e12781 extends Twig_Template
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
        $__internal_8200162400e2d95983e9aea19555a295fea54b2ad3b979e925e99fbf6d215ea0 = $this->env->getExtension("native_profiler");
        $__internal_8200162400e2d95983e9aea19555a295fea54b2ad3b979e925e99fbf6d215ea0->enter($__internal_8200162400e2d95983e9aea19555a295fea54b2ad3b979e925e99fbf6d215ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8200162400e2d95983e9aea19555a295fea54b2ad3b979e925e99fbf6d215ea0->leave($__internal_8200162400e2d95983e9aea19555a295fea54b2ad3b979e925e99fbf6d215ea0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_41a1dde9112f52a559b861e2ecafc92e79b28d3f48f719d12fbfb92c33441759 = $this->env->getExtension("native_profiler");
        $__internal_41a1dde9112f52a559b861e2ecafc92e79b28d3f48f719d12fbfb92c33441759->enter($__internal_41a1dde9112f52a559b861e2ecafc92e79b28d3f48f719d12fbfb92c33441759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_41a1dde9112f52a559b861e2ecafc92e79b28d3f48f719d12fbfb92c33441759->leave($__internal_41a1dde9112f52a559b861e2ecafc92e79b28d3f48f719d12fbfb92c33441759_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4d627aa1000b8c3c570088b2291717f7ed8597f402fa0f7d56069e9550086cbf = $this->env->getExtension("native_profiler");
        $__internal_4d627aa1000b8c3c570088b2291717f7ed8597f402fa0f7d56069e9550086cbf->enter($__internal_4d627aa1000b8c3c570088b2291717f7ed8597f402fa0f7d56069e9550086cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4d627aa1000b8c3c570088b2291717f7ed8597f402fa0f7d56069e9550086cbf->leave($__internal_4d627aa1000b8c3c570088b2291717f7ed8597f402fa0f7d56069e9550086cbf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e1331a6b244709f3e08849e6ae60c8ce9a333d4ad08b0078443c0f769579dea9 = $this->env->getExtension("native_profiler");
        $__internal_e1331a6b244709f3e08849e6ae60c8ce9a333d4ad08b0078443c0f769579dea9->enter($__internal_e1331a6b244709f3e08849e6ae60c8ce9a333d4ad08b0078443c0f769579dea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e1331a6b244709f3e08849e6ae60c8ce9a333d4ad08b0078443c0f769579dea9->leave($__internal_e1331a6b244709f3e08849e6ae60c8ce9a333d4ad08b0078443c0f769579dea9_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
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

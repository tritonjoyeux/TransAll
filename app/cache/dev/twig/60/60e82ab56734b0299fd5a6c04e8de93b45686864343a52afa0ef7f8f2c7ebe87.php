<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ee744f05ecbc49864b82d21fc28f65008d10b2c3e291ad858446b1a84be6b902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9d7c5e8779126fb94bf255b2368f2b3ae068a974c597644ee9656a4e2722287 = $this->env->getExtension("native_profiler");
        $__internal_e9d7c5e8779126fb94bf255b2368f2b3ae068a974c597644ee9656a4e2722287->enter($__internal_e9d7c5e8779126fb94bf255b2368f2b3ae068a974c597644ee9656a4e2722287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9d7c5e8779126fb94bf255b2368f2b3ae068a974c597644ee9656a4e2722287->leave($__internal_e9d7c5e8779126fb94bf255b2368f2b3ae068a974c597644ee9656a4e2722287_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3e08005fc8cff14ebb72781f1e563b0e1a4bbf10760c4440168dc332292758d = $this->env->getExtension("native_profiler");
        $__internal_b3e08005fc8cff14ebb72781f1e563b0e1a4bbf10760c4440168dc332292758d->enter($__internal_b3e08005fc8cff14ebb72781f1e563b0e1a4bbf10760c4440168dc332292758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b3e08005fc8cff14ebb72781f1e563b0e1a4bbf10760c4440168dc332292758d->leave($__internal_b3e08005fc8cff14ebb72781f1e563b0e1a4bbf10760c4440168dc332292758d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

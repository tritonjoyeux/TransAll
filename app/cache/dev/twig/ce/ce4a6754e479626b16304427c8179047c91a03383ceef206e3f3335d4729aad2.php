<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_44268406478a618cdc4b8ee219d376d008e0eccc9b861201290d537852e3a293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_78fc0c91a61a6d429cffa589880e0a729e7b75c7085df868fd1d2d0e4cf27435 = $this->env->getExtension("native_profiler");
        $__internal_78fc0c91a61a6d429cffa589880e0a729e7b75c7085df868fd1d2d0e4cf27435->enter($__internal_78fc0c91a61a6d429cffa589880e0a729e7b75c7085df868fd1d2d0e4cf27435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fc0c91a61a6d429cffa589880e0a729e7b75c7085df868fd1d2d0e4cf27435->leave($__internal_78fc0c91a61a6d429cffa589880e0a729e7b75c7085df868fd1d2d0e4cf27435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6160096c5b1f58c06cd4e1cd4192fb108367bbd8a1d571510f4e8069a10a30ba = $this->env->getExtension("native_profiler");
        $__internal_6160096c5b1f58c06cd4e1cd4192fb108367bbd8a1d571510f4e8069a10a30ba->enter($__internal_6160096c5b1f58c06cd4e1cd4192fb108367bbd8a1d571510f4e8069a10a30ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6160096c5b1f58c06cd4e1cd4192fb108367bbd8a1d571510f4e8069a10a30ba->leave($__internal_6160096c5b1f58c06cd4e1cd4192fb108367bbd8a1d571510f4e8069a10a30ba_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

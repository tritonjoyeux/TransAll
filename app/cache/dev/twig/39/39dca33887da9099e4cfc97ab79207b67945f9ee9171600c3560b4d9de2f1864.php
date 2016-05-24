<?php

/* @User/Resetting/reset_content.html.twig */
class __TwigTemplate_03b749720282d7cff725e6ebd4b3268fc7ffc8746d2c6ffec525fe84506cb258 extends Twig_Template
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
        $__internal_88dc4f0b22b11adb5bfb82c3e851a4aab93f04c1f2dd8dfc0227e01774e5cdd2 = $this->env->getExtension("native_profiler");
        $__internal_88dc4f0b22b11adb5bfb82c3e851a4aab93f04c1f2dd8dfc0227e01774e5cdd2->enter($__internal_88dc4f0b22b11adb5bfb82c3e851a4aab93f04c1f2dd8dfc0227e01774e5cdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_88dc4f0b22b11adb5bfb82c3e851a4aab93f04c1f2dd8dfc0227e01774e5cdd2->leave($__internal_88dc4f0b22b11adb5bfb82c3e851a4aab93f04c1f2dd8dfc0227e01774e5cdd2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */

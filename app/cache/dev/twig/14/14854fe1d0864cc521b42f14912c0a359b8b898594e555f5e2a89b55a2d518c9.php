<?php

/* @User/Profile/edit_content.html.twig */
class __TwigTemplate_fb9c99965ccd4bf273afcf088b9d34e1f2380fc62dbb37b2a5565d84fbef901e extends Twig_Template
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
        $__internal_d1a6baebec9b9c15c9a744cd5b36f37ea9381083964fdd33eedceee51a2fee8a = $this->env->getExtension("native_profiler");
        $__internal_d1a6baebec9b9c15c9a744cd5b36f37ea9381083964fdd33eedceee51a2fee8a->enter($__internal_d1a6baebec9b9c15c9a744cd5b36f37ea9381083964fdd33eedceee51a2fee8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d1a6baebec9b9c15c9a744cd5b36f37ea9381083964fdd33eedceee51a2fee8a->leave($__internal_d1a6baebec9b9c15c9a744cd5b36f37ea9381083964fdd33eedceee51a2fee8a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit_content.html.twig";
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
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */

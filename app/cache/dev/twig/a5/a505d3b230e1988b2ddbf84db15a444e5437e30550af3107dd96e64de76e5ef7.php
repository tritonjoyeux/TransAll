<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f47302f72a6d3900ccfe280f375a7b2799c71a8ee19b27e59a97cd42cb61edd2 extends Twig_Template
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
        $__internal_6f527ca8bff2214c1e605d8b5f15be5f7e5993b3f70e0437c30d08c8523d065f = $this->env->getExtension("native_profiler");
        $__internal_6f527ca8bff2214c1e605d8b5f15be5f7e5993b3f70e0437c30d08c8523d065f->enter($__internal_6f527ca8bff2214c1e605d8b5f15be5f7e5993b3f70e0437c30d08c8523d065f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Nom utitilsateur")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
<br>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "adresse")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
<br>
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse du domicile")));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
<br>
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe")));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
<br>

    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Vérification")));
        echo "
<br>
<div>
    <label for=\"fos_user_registration_form_roleUser\">Cookist ?</label>
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleUser", array()), 'widget');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleUser", array()), 'errors');
        echo "
    <br>
    <input type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6f527ca8bff2214c1e605d8b5f15be5f7e5993b3f70e0437c30d08c8523d065f->leave($__internal_6f527ca8bff2214c1e605d8b5f15be5f7e5993b3f70e0437c30d08c8523d065f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  83 => 25,  78 => 23,  74 => 22,  67 => 18,  61 => 15,  57 => 14,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  34 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*     {{ form_widget(form.username,{'attr': {'placeholder':'Nom utitilsateur'}}) }}*/
/*     {{ form_errors(form.username) }}*/
/* <br>*/
/*     {{ form_widget(form.email, {'attr': {'placeholder':'Email', 'class': 'adresse'}}) }}*/
/*     {{ form_errors(form.email) }}*/
/* <br>*/
/*     {{ form_widget(form.adresse, {'attr': {'placeholder':'Adresse du domicile'}}) }}*/
/*     {{ form_errors(form.adresse) }}*/
/* <br>*/
/*     {{ form_widget(form.plainPassword.first, {'attr': {'placeholder':'Mot de passe'}}) }}*/
/*     {{ form_errors(form.plainPassword.first) }}*/
/* <br>*/
/* */
/*     {{ form_widget(form.plainPassword.second, {'attr': {'placeholder':'Vérification'}}) }}*/
/* <br>*/
/* <div>*/
/*     <label for="fos_user_registration_form_roleUser">Cookist ?</label>*/
/*     {{ form_widget(form.roleUser) }}*/
/*     {{ form_errors(form.roleUser) }}*/
/*     <br>*/
/*     <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */

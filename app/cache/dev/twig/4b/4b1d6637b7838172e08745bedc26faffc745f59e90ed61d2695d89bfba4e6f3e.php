<?php

/* @User/Profile/show_content.html.twig */
class __TwigTemplate_33714548dd69602005e72d29d979952f020b997f80eb529480e008a23be35ebc extends Twig_Template
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
        $__internal_c20ef59c965f5bef16a098d4ede27bde5b8189195a82314781ec780a35bd684a = $this->env->getExtension("native_profiler");
        $__internal_c20ef59c965f5bef16a098d4ede27bde5b8189195a82314781ec780a35bd684a->enter($__internal_c20ef59c965f5bef16a098d4ede27bde5b8189195a82314781ec780a35bd684a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        // line 2
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/messages.js"), "html", null, true);
        echo "\"></script>

<div class=\"fos_user_user_show\">
    <img src=\"/images/profile/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "imageName", array()), "html", null, true);
        echo "\">
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
<div id=\"messagerie\">
    <form method=\"post\" id=\"form_new\">
        <input type=\"text\" name=\"destinataire\" placeholder=\"destinataire\"><br>
        <input type=\"text\" name=\"body\" placeholder=\"body\"><br>
        <input type=\"submit\" value=\"send\" name=\"send\">
    </form>
</div>

";
        
        $__internal_c20ef59c965f5bef16a098d4ede27bde5b8189195a82314781ec780a35bd684a->leave($__internal_c20ef59c965f5bef16a098d4ede27bde5b8189195a82314781ec780a35bd684a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 7,  31 => 6,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* <script src="{{ asset("script/messages.js") }}"></script>*/
/* */
/* <div class="fos_user_user_show">*/
/*     <img src="/images/profile/{{ user.imageName }}">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* <div id="messagerie">*/
/*     <form method="post" id="form_new">*/
/*         <input type="text" name="destinataire" placeholder="destinataire"><br>*/
/*         <input type="text" name="body" placeholder="body"><br>*/
/*         <input type="submit" value="send" name="send">*/
/*     </form>*/
/* </div>*/
/* */
/* */

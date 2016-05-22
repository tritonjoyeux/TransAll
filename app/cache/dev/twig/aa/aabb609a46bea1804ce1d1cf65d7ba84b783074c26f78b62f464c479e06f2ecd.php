<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_12a96b58426d2318c2f02a0c10881247b8672d649749dd065046ae6dad1e2230 extends Twig_Template
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
        $__internal_4fee933b90bfcb652d8f2614037eb42a510a19b173d52a9b9b0a15e1b36a276b = $this->env->getExtension("native_profiler");
        $__internal_4fee933b90bfcb652d8f2614037eb42a510a19b173d52a9b9b0a15e1b36a276b->enter($__internal_4fee933b90bfcb652d8f2614037eb42a510a19b173d52a9b9b0a15e1b36a276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_4fee933b90bfcb652d8f2614037eb42a510a19b173d52a9b9b0a15e1b36a276b->leave($__internal_4fee933b90bfcb652d8f2614037eb42a510a19b173d52a9b9b0a15e1b36a276b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
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

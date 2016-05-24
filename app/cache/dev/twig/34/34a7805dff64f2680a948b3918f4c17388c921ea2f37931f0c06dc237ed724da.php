<?php

/* @Message/Default/index.html.twig */
class __TwigTemplate_66b13d2a680e48071911955976a8ee56cad799c0ff5d8667434b8f64a6d450ac extends Twig_Template
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
        $__internal_f7bca1c4dcb74f7a180766d9f20b400f64d8c95ca574e8498ba887ecb0d4e6d2 = $this->env->getExtension("native_profiler");
        $__internal_f7bca1c4dcb74f7a180766d9f20b400f64d8c95ca574e8498ba887ecb0d4e6d2->enter($__internal_f7bca1c4dcb74f7a180766d9f20b400f64d8c95ca574e8498ba887ecb0d4e6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Message/Default/index.html.twig"));

        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/messages.js"), "html", null, true);
        echo "\"></script>
";
        // line 3
        $context["foo"] = 0;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allConv"]) ? $context["allConv"] : $this->getContext($context, "allConv")));
        foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
            // line 5
            echo "    ";
            echo $context["conv"];
            echo "
    <form method=\"post\" class=\"send\">
        <input type=\"hidden\" name=\"destinataire\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), array(), "array"), "html", null, true);
            echo "\"><br>
        ";
            // line 8
            $context["foo"] = ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) + 1);
            // line 9
            echo "        <input type=\"text\" name=\"body\" placeholder=\"body\"><br>
        <input type=\"submit\" value=\"send\" name=\"send\">
    </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
<form method=\"post\" id=\"form_new\">
    <input type=\"text\" name=\"destinataire\" placeholder=\"destinataire\"><br>
    <input type=\"text\" name=\"body\" placeholder=\"body\"><br>
    <input type=\"submit\" value=\"send\" name=\"send\">
</form>

";
        
        $__internal_f7bca1c4dcb74f7a180766d9f20b400f64d8c95ca574e8498ba887ecb0d4e6d2->leave($__internal_f7bca1c4dcb74f7a180766d9f20b400f64d8c95ca574e8498ba887ecb0d4e6d2_prof);

    }

    public function getTemplateName()
    {
        return "@Message/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  47 => 9,  45 => 8,  41 => 7,  35 => 5,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* <script src="{{ asset("script/messages.js") }}"></script>*/
/* {% set foo = 0 %}*/
/* {% for conv in allConv %}*/
/*     {{ conv|raw }}*/
/*     <form method="post" class="send">*/
/*         <input type="hidden" name="destinataire" value="{{ user[foo] }}"><br>*/
/*         {% set foo=foo+1 %}*/
/*         <input type="text" name="body" placeholder="body"><br>*/
/*         <input type="submit" value="send" name="send">*/
/*     </form>*/
/* {% endfor %}*/
/* */
/* <form method="post" id="form_new">*/
/*     <input type="text" name="destinataire" placeholder="destinataire"><br>*/
/*     <input type="text" name="body" placeholder="body"><br>*/
/*     <input type="submit" value="send" name="send">*/
/* </form>*/
/* */
/* */

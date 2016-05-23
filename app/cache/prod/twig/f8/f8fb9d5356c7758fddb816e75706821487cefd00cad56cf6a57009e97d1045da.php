<?php

/* @Message/Default/index.html.twig */
class __TwigTemplate_c27638f4d2f50e8ac5806a10bf5052a6c63bf6656b86ffa13366720af991630d extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["allConv"]) ? $context["allConv"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["conv"]) {
            // line 5
            echo "    ";
            echo $context["conv"];
            echo "
    <form method=\"post\" class=\"send\">
        <input type=\"hidden\" name=\"destinataire\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), (isset($context["foo"]) ? $context["foo"] : null), array(), "array"), "html", null, true);
            echo "\"><br>
        ";
            // line 8
            $context["foo"] = ((isset($context["foo"]) ? $context["foo"] : null) + 1);
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
        return array (  53 => 13,  44 => 9,  42 => 8,  38 => 7,  32 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
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

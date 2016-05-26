<?php

/* Cook4usBundle:Base:footer.html.twig */
class __TwigTemplate_5bddb5be7e488bd00335335a54de638fc07201dc168c82f2c10968b9f80a6acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85269de0760cbf4aa2ca99ea7e9ab7f899746c5beb215d3456c18156efc8a70a = $this->env->getExtension("native_profiler");
        $__internal_85269de0760cbf4aa2ca99ea7e9ab7f899746c5beb215d3456c18156efc8a70a->enter($__internal_85269de0760cbf4aa2ca99ea7e9ab7f899746c5beb215d3456c18156efc8a70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Base:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_85269de0760cbf4aa2ca99ea7e9ab7f899746c5beb215d3456c18156efc8a70a->leave($__internal_85269de0760cbf4aa2ca99ea7e9ab7f899746c5beb215d3456c18156efc8a70a_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_bfaa1c22e3530dcd8fced4325753bd2f01414eb6bb7b381490cad07916bc783d = $this->env->getExtension("native_profiler");
        $__internal_bfaa1c22e3530dcd8fced4325753bd2f01414eb6bb7b381490cad07916bc783d->enter($__internal_bfaa1c22e3530dcd8fced4325753bd2f01414eb6bb7b381490cad07916bc783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <footer>
        <div class=\"footer\">
            <ul clas==\"menuFooter\">
                <li>Devenir chef - </li>
                <li>Hygiène - </li>
                <li>Contact - </li>
                <li>Mentions légales</li>
            </ul>
            <div class=\"border\"></div>
            <ul class=\"menuSocial\">
                <li><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/iconFacebook.png"), "html", null, true);
        echo "\"></li>
                <li><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/iconTwitter.png"), "html", null, true);
        echo "\"></li>
                <li><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/iconGoogle.png"), "html", null, true);
        echo "\"></li>
                <li><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/iconInsta.png"), "html", null, true);
        echo "\"></li>
            </ul>
            <p>Copyright Cook 4 us 2016. Tous droits réservés.</p>
        </div>
    </footer>
";
        
        $__internal_bfaa1c22e3530dcd8fced4325753bd2f01414eb6bb7b381490cad07916bc783d->leave($__internal_bfaa1c22e3530dcd8fced4325753bd2f01414eb6bb7b381490cad07916bc783d_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Base:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  51 => 13,  47 => 12,  35 => 2,  23 => 1,);
    }
}
/* {% block footer %}*/
/*     <footer>*/
/*         <div class="footer">*/
/*             <ul clas=="menuFooter">*/
/*                 <li>Devenir chef - </li>*/
/*                 <li>Hygiène - </li>*/
/*                 <li>Contact - </li>*/
/*                 <li>Mentions légales</li>*/
/*             </ul>*/
/*             <div class="border"></div>*/
/*             <ul class="menuSocial">*/
/*                 <li><img src="{{ asset('img/iconFacebook.png') }}"></li>*/
/*                 <li><img src="{{ asset('img/iconTwitter.png') }}"></li>*/
/*                 <li><img src="{{ asset('img/iconGoogle.png') }}"></li>*/
/*                 <li><img src="{{ asset('img/iconInsta.png') }}"></li>*/
/*             </ul>*/
/*             <p>Copyright Cook 4 us 2016. Tous droits réservés.</p>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/

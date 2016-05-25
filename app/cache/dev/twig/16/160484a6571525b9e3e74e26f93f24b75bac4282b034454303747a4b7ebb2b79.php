<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d5a0fc30e191c2383465e5229e7933cbb4baab73b6e1ff0e8eee884b950b872e extends Twig_Template
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
        $__internal_8f8b61d95a3b5280113e3ff24c196ce6894da6267b08207b84d53395168cae20 = $this->env->getExtension("native_profiler");
        $__internal_8f8b61d95a3b5280113e3ff24c196ce6894da6267b08207b84d53395168cae20->enter($__internal_8f8b61d95a3b5280113e3ff24c196ce6894da6267b08207b84d53395168cae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8f8b61d95a3b5280113e3ff24c196ce6894da6267b08207b84d53395168cae20->leave($__internal_8f8b61d95a3b5280113e3ff24c196ce6894da6267b08207b84d53395168cae20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

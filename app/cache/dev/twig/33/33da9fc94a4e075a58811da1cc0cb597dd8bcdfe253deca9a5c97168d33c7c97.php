<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3f3d1d94c4fefb2777f2b3f332fd4459f6631a667f814fc60e892c587b623144 extends Twig_Template
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
        $__internal_2719ba7dd51cc4515f42ac2cf548de8862a00e33760c93f75f9d6344e5ea3e1f = $this->env->getExtension("native_profiler");
        $__internal_2719ba7dd51cc4515f42ac2cf548de8862a00e33760c93f75f9d6344e5ea3e1f->enter($__internal_2719ba7dd51cc4515f42ac2cf548de8862a00e33760c93f75f9d6344e5ea3e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2719ba7dd51cc4515f42ac2cf548de8862a00e33760c93f75f9d6344e5ea3e1f->leave($__internal_2719ba7dd51cc4515f42ac2cf548de8862a00e33760c93f75f9d6344e5ea3e1f_prof);

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

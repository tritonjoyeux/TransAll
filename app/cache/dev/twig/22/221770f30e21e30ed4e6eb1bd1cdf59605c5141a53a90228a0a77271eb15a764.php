<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b8b845847a324db98182dfbda70988726f38990a224dbc80a4d95b6cdccb135 extends Twig_Template
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
        $__internal_d215353ef2d117c16af7063c78d2e840ff51c6e77cc95267a5ae7b9303275086 = $this->env->getExtension("native_profiler");
        $__internal_d215353ef2d117c16af7063c78d2e840ff51c6e77cc95267a5ae7b9303275086->enter($__internal_d215353ef2d117c16af7063c78d2e840ff51c6e77cc95267a5ae7b9303275086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d215353ef2d117c16af7063c78d2e840ff51c6e77cc95267a5ae7b9303275086->leave($__internal_d215353ef2d117c16af7063c78d2e840ff51c6e77cc95267a5ae7b9303275086_prof);

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

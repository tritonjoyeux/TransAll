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
        $__internal_663e7ebfba619e304280bf2fa2ecfd760276eaf9f9ba845893740332462ae819 = $this->env->getExtension("native_profiler");
        $__internal_663e7ebfba619e304280bf2fa2ecfd760276eaf9f9ba845893740332462ae819->enter($__internal_663e7ebfba619e304280bf2fa2ecfd760276eaf9f9ba845893740332462ae819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_663e7ebfba619e304280bf2fa2ecfd760276eaf9f9ba845893740332462ae819->leave($__internal_663e7ebfba619e304280bf2fa2ecfd760276eaf9f9ba845893740332462ae819_prof);

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

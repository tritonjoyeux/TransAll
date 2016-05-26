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
        $__internal_65808819f9ccc91011af853b89ad90dd4f3d7f44d8e8898f9bb1af17cf496f1c = $this->env->getExtension("native_profiler");
        $__internal_65808819f9ccc91011af853b89ad90dd4f3d7f44d8e8898f9bb1af17cf496f1c->enter($__internal_65808819f9ccc91011af853b89ad90dd4f3d7f44d8e8898f9bb1af17cf496f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_65808819f9ccc91011af853b89ad90dd4f3d7f44d8e8898f9bb1af17cf496f1c->leave($__internal_65808819f9ccc91011af853b89ad90dd4f3d7f44d8e8898f9bb1af17cf496f1c_prof);

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

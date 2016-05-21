<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9861c6e3457de0e2d6b49f766d750301ee0ebf64f65d94f40fab0b79d087bb94 extends Twig_Template
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
        $__internal_a4bc94ed2016d553fe255826bd09c5a05c89f67edc4322dbe6b55a6300dd08e2 = $this->env->getExtension("native_profiler");
        $__internal_a4bc94ed2016d553fe255826bd09c5a05c89f67edc4322dbe6b55a6300dd08e2->enter($__internal_a4bc94ed2016d553fe255826bd09c5a05c89f67edc4322dbe6b55a6300dd08e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a4bc94ed2016d553fe255826bd09c5a05c89f67edc4322dbe6b55a6300dd08e2->leave($__internal_a4bc94ed2016d553fe255826bd09c5a05c89f67edc4322dbe6b55a6300dd08e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

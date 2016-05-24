<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7db73c47d754724229d7af6518c01dbcaddbb1eeceb5442d045c2d7ae7aed4ec extends Twig_Template
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
        $__internal_368f9985c87d3fec428623ac19beccbef463eb4963e8dd09fcdb961c3bddce5f = $this->env->getExtension("native_profiler");
        $__internal_368f9985c87d3fec428623ac19beccbef463eb4963e8dd09fcdb961c3bddce5f->enter($__internal_368f9985c87d3fec428623ac19beccbef463eb4963e8dd09fcdb961c3bddce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_368f9985c87d3fec428623ac19beccbef463eb4963e8dd09fcdb961c3bddce5f->leave($__internal_368f9985c87d3fec428623ac19beccbef463eb4963e8dd09fcdb961c3bddce5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

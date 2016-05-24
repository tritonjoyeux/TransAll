<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9e73efb3a853b536cd82cfb41f4a774055fb3c9c3c8a7712a8f82ac12a797163 extends Twig_Template
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
        $__internal_9b5b3c4a289fd3229051a41fe9fe7bf60dbb152f7a1f4bf8fdee130c8d3158bd = $this->env->getExtension("native_profiler");
        $__internal_9b5b3c4a289fd3229051a41fe9fe7bf60dbb152f7a1f4bf8fdee130c8d3158bd->enter($__internal_9b5b3c4a289fd3229051a41fe9fe7bf60dbb152f7a1f4bf8fdee130c8d3158bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9b5b3c4a289fd3229051a41fe9fe7bf60dbb152f7a1f4bf8fdee130c8d3158bd->leave($__internal_9b5b3c4a289fd3229051a41fe9fe7bf60dbb152f7a1f4bf8fdee130c8d3158bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

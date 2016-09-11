<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d959da4bd3641e5104dd681e61c5b72c12fa91445887deea44f577baa9cb8164 extends Twig_Template
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
        $__internal_5c7006d50fb73c569221a8a7400bca713578554933fd3e2486c77ab7f7352c9e = $this->env->getExtension("native_profiler");
        $__internal_5c7006d50fb73c569221a8a7400bca713578554933fd3e2486c77ab7f7352c9e->enter($__internal_5c7006d50fb73c569221a8a7400bca713578554933fd3e2486c77ab7f7352c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5c7006d50fb73c569221a8a7400bca713578554933fd3e2486c77ab7f7352c9e->leave($__internal_5c7006d50fb73c569221a8a7400bca713578554933fd3e2486c77ab7f7352c9e_prof);

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

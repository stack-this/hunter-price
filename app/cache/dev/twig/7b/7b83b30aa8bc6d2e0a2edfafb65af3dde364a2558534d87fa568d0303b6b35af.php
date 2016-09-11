<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e1d9b57d213a5c548b979f5d37c089e19dae403673de80a9e970e3c05088f4b5 extends Twig_Template
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
        $__internal_76e7f62c4d597785e5b15b17e92dcf3e561ae556f2d0f488e222a8f73e5451f2 = $this->env->getExtension("native_profiler");
        $__internal_76e7f62c4d597785e5b15b17e92dcf3e561ae556f2d0f488e222a8f73e5451f2->enter($__internal_76e7f62c4d597785e5b15b17e92dcf3e561ae556f2d0f488e222a8f73e5451f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_76e7f62c4d597785e5b15b17e92dcf3e561ae556f2d0f488e222a8f73e5451f2->leave($__internal_76e7f62c4d597785e5b15b17e92dcf3e561ae556f2d0f488e222a8f73e5451f2_prof);

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

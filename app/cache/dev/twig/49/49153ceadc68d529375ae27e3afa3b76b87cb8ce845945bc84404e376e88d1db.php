<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_be520ebbc5b72d87d2855e488f217d201d1a95cccc28d447e0c2f22e0eb0c0d8 extends Twig_Template
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
        $__internal_f41997b159888868064012a44ac437ecc880c148b424aa5ea20db1ce1da614c7 = $this->env->getExtension("native_profiler");
        $__internal_f41997b159888868064012a44ac437ecc880c148b424aa5ea20db1ce1da614c7->enter($__internal_f41997b159888868064012a44ac437ecc880c148b424aa5ea20db1ce1da614c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f41997b159888868064012a44ac437ecc880c148b424aa5ea20db1ce1da614c7->leave($__internal_f41997b159888868064012a44ac437ecc880c148b424aa5ea20db1ce1da614c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

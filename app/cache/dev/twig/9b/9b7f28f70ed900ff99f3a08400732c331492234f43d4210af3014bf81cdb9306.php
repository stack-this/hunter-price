<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fa296e2c18de345404848e42d1f6d78752b49e786cf88bda095216d6b7a2ffb5 extends Twig_Template
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
        $__internal_db0b1996e8996c5d7aa42286e4c718a78bf2c4e59e15c13333c6e67261048876 = $this->env->getExtension("native_profiler");
        $__internal_db0b1996e8996c5d7aa42286e4c718a78bf2c4e59e15c13333c6e67261048876->enter($__internal_db0b1996e8996c5d7aa42286e4c718a78bf2c4e59e15c13333c6e67261048876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_db0b1996e8996c5d7aa42286e4c718a78bf2c4e59e15c13333c6e67261048876->leave($__internal_db0b1996e8996c5d7aa42286e4c718a78bf2c4e59e15c13333c6e67261048876_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_04d60296ef6ef8c0b763b4c4928934015624ba4ecdfd1efed6e331c64a541020 extends Twig_Template
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
        $__internal_84a2063770741520c20aab493514c34203e521a8e4c9fcbd58d65e16bcd32d88 = $this->env->getExtension("native_profiler");
        $__internal_84a2063770741520c20aab493514c34203e521a8e4c9fcbd58d65e16bcd32d88->enter($__internal_84a2063770741520c20aab493514c34203e521a8e4c9fcbd58d65e16bcd32d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84a2063770741520c20aab493514c34203e521a8e4c9fcbd58d65e16bcd32d88->leave($__internal_84a2063770741520c20aab493514c34203e521a8e4c9fcbd58d65e16bcd32d88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

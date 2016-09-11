<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_064fa8d8109622bdd9d89b64686995ab7985c92b2c0e77950539d38461ad8baa extends Twig_Template
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
        $__internal_0a63a79f7107e897cbb95333dcebe006aa6d844442ca3c533b0f9087696f3de0 = $this->env->getExtension("native_profiler");
        $__internal_0a63a79f7107e897cbb95333dcebe006aa6d844442ca3c533b0f9087696f3de0->enter($__internal_0a63a79f7107e897cbb95333dcebe006aa6d844442ca3c533b0f9087696f3de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0a63a79f7107e897cbb95333dcebe006aa6d844442ca3c533b0f9087696f3de0->leave($__internal_0a63a79f7107e897cbb95333dcebe006aa6d844442ca3c533b0f9087696f3de0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

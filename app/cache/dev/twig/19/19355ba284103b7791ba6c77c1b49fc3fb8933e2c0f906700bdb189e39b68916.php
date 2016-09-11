<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d9d35163fe9ecf3d9afaa00e9c85269c91dc4dff37d65331b4876b3a954d7b23 extends Twig_Template
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
        $__internal_9b0a4e4c0cbcd7603eb0542f00ccd130bc59dbbc47e236a9601ebf9fb6183059 = $this->env->getExtension("native_profiler");
        $__internal_9b0a4e4c0cbcd7603eb0542f00ccd130bc59dbbc47e236a9601ebf9fb6183059->enter($__internal_9b0a4e4c0cbcd7603eb0542f00ccd130bc59dbbc47e236a9601ebf9fb6183059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9b0a4e4c0cbcd7603eb0542f00ccd130bc59dbbc47e236a9601ebf9fb6183059->leave($__internal_9b0a4e4c0cbcd7603eb0542f00ccd130bc59dbbc47e236a9601ebf9fb6183059_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

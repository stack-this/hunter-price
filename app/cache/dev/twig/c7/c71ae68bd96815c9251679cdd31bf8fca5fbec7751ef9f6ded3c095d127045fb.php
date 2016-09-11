<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2ccc7369e060e2d5b9c2dcee27be9ca998abccf5fe14c6a0531e9827cc37cc5f extends Twig_Template
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
        $__internal_a28776dbc402cadeafd2a0b679df271ac5472e2edeed270ef5779a5a304e09e2 = $this->env->getExtension("native_profiler");
        $__internal_a28776dbc402cadeafd2a0b679df271ac5472e2edeed270ef5779a5a304e09e2->enter($__internal_a28776dbc402cadeafd2a0b679df271ac5472e2edeed270ef5779a5a304e09e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a28776dbc402cadeafd2a0b679df271ac5472e2edeed270ef5779a5a304e09e2->leave($__internal_a28776dbc402cadeafd2a0b679df271ac5472e2edeed270ef5779a5a304e09e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

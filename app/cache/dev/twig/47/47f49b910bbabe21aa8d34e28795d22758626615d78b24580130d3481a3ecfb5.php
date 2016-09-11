<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fdaeac4b133a329392d3f79dd9b9bd72ef3e42ee544d042136388903ae17d3be extends Twig_Template
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
        $__internal_b6d44155131feeed2c0d2e3866496c9bcb6a6fcd1f38b675f1afb4b1f3924c65 = $this->env->getExtension("native_profiler");
        $__internal_b6d44155131feeed2c0d2e3866496c9bcb6a6fcd1f38b675f1afb4b1f3924c65->enter($__internal_b6d44155131feeed2c0d2e3866496c9bcb6a6fcd1f38b675f1afb4b1f3924c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b6d44155131feeed2c0d2e3866496c9bcb6a6fcd1f38b675f1afb4b1f3924c65->leave($__internal_b6d44155131feeed2c0d2e3866496c9bcb6a6fcd1f38b675f1afb4b1f3924c65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6d31abb2968275affb8f5adc60a1d2f599a324ed9fbc805833b94f19e182bed5 extends Twig_Template
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
        $__internal_09536b7a111c78467764381485da923faf0385d87adf3d2a418eae2041202144 = $this->env->getExtension("native_profiler");
        $__internal_09536b7a111c78467764381485da923faf0385d87adf3d2a418eae2041202144->enter($__internal_09536b7a111c78467764381485da923faf0385d87adf3d2a418eae2041202144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_09536b7a111c78467764381485da923faf0385d87adf3d2a418eae2041202144->leave($__internal_09536b7a111c78467764381485da923faf0385d87adf3d2a418eae2041202144_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

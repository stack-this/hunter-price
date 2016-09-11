<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7eb59c5932542be70ef063436739dc42b075379523c3b11518bc3750c6419d79 extends Twig_Template
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
        $__internal_1410ed046b0c50cca8f3d33f2f6266b80856268009939e87ceffc4e3b75e1991 = $this->env->getExtension("native_profiler");
        $__internal_1410ed046b0c50cca8f3d33f2f6266b80856268009939e87ceffc4e3b75e1991->enter($__internal_1410ed046b0c50cca8f3d33f2f6266b80856268009939e87ceffc4e3b75e1991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1410ed046b0c50cca8f3d33f2f6266b80856268009939e87ceffc4e3b75e1991->leave($__internal_1410ed046b0c50cca8f3d33f2f6266b80856268009939e87ceffc4e3b75e1991_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

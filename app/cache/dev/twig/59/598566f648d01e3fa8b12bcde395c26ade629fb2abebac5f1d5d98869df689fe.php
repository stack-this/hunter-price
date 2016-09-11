<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6fbae8b2b760c3a74ec8c889a26dac030f499c3a0875db5e1d0058e843a7a4f4 extends Twig_Template
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
        $__internal_c756874139c48a7e4b8a55eb800dd1433879a779b084576f288cede70b40e451 = $this->env->getExtension("native_profiler");
        $__internal_c756874139c48a7e4b8a55eb800dd1433879a779b084576f288cede70b40e451->enter($__internal_c756874139c48a7e4b8a55eb800dd1433879a779b084576f288cede70b40e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c756874139c48a7e4b8a55eb800dd1433879a779b084576f288cede70b40e451->leave($__internal_c756874139c48a7e4b8a55eb800dd1433879a779b084576f288cede70b40e451_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

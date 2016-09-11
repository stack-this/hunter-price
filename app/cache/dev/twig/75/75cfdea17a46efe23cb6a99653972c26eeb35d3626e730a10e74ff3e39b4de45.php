<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3445d2e738f59e3f918380cf19d140bac5aeab23e64e4f16983b17a1107cca73 extends Twig_Template
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
        $__internal_6d0dbc1798694a45b2ca0e4fa60e578acf6ff3fc3efe8d852fce8fa68b795557 = $this->env->getExtension("native_profiler");
        $__internal_6d0dbc1798694a45b2ca0e4fa60e578acf6ff3fc3efe8d852fce8fa68b795557->enter($__internal_6d0dbc1798694a45b2ca0e4fa60e578acf6ff3fc3efe8d852fce8fa68b795557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6d0dbc1798694a45b2ca0e4fa60e578acf6ff3fc3efe8d852fce8fa68b795557->leave($__internal_6d0dbc1798694a45b2ca0e4fa60e578acf6ff3fc3efe8d852fce8fa68b795557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

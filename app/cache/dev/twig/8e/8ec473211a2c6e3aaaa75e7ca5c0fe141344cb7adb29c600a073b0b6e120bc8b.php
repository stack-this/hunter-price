<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4b810e4fc0e14e863ec9ecfd2bdadc00384e1ccf5cc5139a7dd74b7d7a49ae30 extends Twig_Template
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
        $__internal_d734759417c1e59cf01122cf9e835642199eb62355f7546e62d5428c1308a4ba = $this->env->getExtension("native_profiler");
        $__internal_d734759417c1e59cf01122cf9e835642199eb62355f7546e62d5428c1308a4ba->enter($__internal_d734759417c1e59cf01122cf9e835642199eb62355f7546e62d5428c1308a4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d734759417c1e59cf01122cf9e835642199eb62355f7546e62d5428c1308a4ba->leave($__internal_d734759417c1e59cf01122cf9e835642199eb62355f7546e62d5428c1308a4ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

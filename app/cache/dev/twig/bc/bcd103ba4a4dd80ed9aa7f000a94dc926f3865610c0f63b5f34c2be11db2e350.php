<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3fa8202da5e10ae5e24b0da749e21c19a9f799fa65d6a1a5b941b2d3cd77a66f extends Twig_Template
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
        $__internal_cfde816f1017da7a43dd5be30c8ca7ed1092f299bb829a8c6e3a6eaaf99a9b0c = $this->env->getExtension("native_profiler");
        $__internal_cfde816f1017da7a43dd5be30c8ca7ed1092f299bb829a8c6e3a6eaaf99a9b0c->enter($__internal_cfde816f1017da7a43dd5be30c8ca7ed1092f299bb829a8c6e3a6eaaf99a9b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cfde816f1017da7a43dd5be30c8ca7ed1092f299bb829a8c6e3a6eaaf99a9b0c->leave($__internal_cfde816f1017da7a43dd5be30c8ca7ed1092f299bb829a8c6e3a6eaaf99a9b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

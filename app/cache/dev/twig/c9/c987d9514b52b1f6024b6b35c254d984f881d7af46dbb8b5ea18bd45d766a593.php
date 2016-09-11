<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dea6bc28c1deac4e394fa9b54b9651e33c25181c9592643f2011d5b6eb95ea63 extends Twig_Template
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
        $__internal_0e3e122423f59385852280f198eeaac36322df671ee8e1111525aaee7ce6225a = $this->env->getExtension("native_profiler");
        $__internal_0e3e122423f59385852280f198eeaac36322df671ee8e1111525aaee7ce6225a->enter($__internal_0e3e122423f59385852280f198eeaac36322df671ee8e1111525aaee7ce6225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0e3e122423f59385852280f198eeaac36322df671ee8e1111525aaee7ce6225a->leave($__internal_0e3e122423f59385852280f198eeaac36322df671ee8e1111525aaee7ce6225a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

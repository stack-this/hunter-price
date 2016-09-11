<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3576f9bb8ac3a8fa59dd6b94f7b8661afa9894098a7b8528143cc3060756b510 extends Twig_Template
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
        $__internal_05cf163a52e32093752cbd739ea097d846ab286193d9c1a370290c2e1e260d2c = $this->env->getExtension("native_profiler");
        $__internal_05cf163a52e32093752cbd739ea097d846ab286193d9c1a370290c2e1e260d2c->enter($__internal_05cf163a52e32093752cbd739ea097d846ab286193d9c1a370290c2e1e260d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_05cf163a52e32093752cbd739ea097d846ab286193d9c1a370290c2e1e260d2c->leave($__internal_05cf163a52e32093752cbd739ea097d846ab286193d9c1a370290c2e1e260d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

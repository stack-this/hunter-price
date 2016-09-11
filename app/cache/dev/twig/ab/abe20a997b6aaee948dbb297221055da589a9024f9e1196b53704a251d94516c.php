<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5815afaf973c403bb3bc363e164edf661f10329a1cdfa056c7adcb32b3e2880d extends Twig_Template
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
        $__internal_a6c744480ed2061a34010a62aec12c215f3c0a11325309978013ceca9505c0dd = $this->env->getExtension("native_profiler");
        $__internal_a6c744480ed2061a34010a62aec12c215f3c0a11325309978013ceca9505c0dd->enter($__internal_a6c744480ed2061a34010a62aec12c215f3c0a11325309978013ceca9505c0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a6c744480ed2061a34010a62aec12c215f3c0a11325309978013ceca9505c0dd->leave($__internal_a6c744480ed2061a34010a62aec12c215f3c0a11325309978013ceca9505c0dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

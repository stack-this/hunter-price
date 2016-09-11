<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ca6d583cccefcc7cabd677605a312b3347e0e5c51d234960994177a58c051e18 extends Twig_Template
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
        $__internal_902dbc8b06b0ab04a10e82b2c2fcfba4c09a7eec7d3aca0752a2c24e85ffce54 = $this->env->getExtension("native_profiler");
        $__internal_902dbc8b06b0ab04a10e82b2c2fcfba4c09a7eec7d3aca0752a2c24e85ffce54->enter($__internal_902dbc8b06b0ab04a10e82b2c2fcfba4c09a7eec7d3aca0752a2c24e85ffce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_902dbc8b06b0ab04a10e82b2c2fcfba4c09a7eec7d3aca0752a2c24e85ffce54->leave($__internal_902dbc8b06b0ab04a10e82b2c2fcfba4c09a7eec7d3aca0752a2c24e85ffce54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_23fa95d1a49c29b8b5c8e32f2b5b59fc5cecff436e6433d7ef4def4f761fe550 extends Twig_Template
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
        $__internal_3f7b47da9d238eb273a1695303af1af34874e995e4791c1198856e2d97a9690a = $this->env->getExtension("native_profiler");
        $__internal_3f7b47da9d238eb273a1695303af1af34874e995e4791c1198856e2d97a9690a->enter($__internal_3f7b47da9d238eb273a1695303af1af34874e995e4791c1198856e2d97a9690a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3f7b47da9d238eb273a1695303af1af34874e995e4791c1198856e2d97a9690a->leave($__internal_3f7b47da9d238eb273a1695303af1af34874e995e4791c1198856e2d97a9690a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

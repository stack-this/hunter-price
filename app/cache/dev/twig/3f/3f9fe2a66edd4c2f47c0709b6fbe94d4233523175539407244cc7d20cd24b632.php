<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_478e653fcd83aef600c0b79764011dff629ebb3aed0ac2079605c66080351f6a extends Twig_Template
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
        $__internal_deda7231358188353999648f8eafdbc05109a9fbde6de1c831ca035f7164f0b3 = $this->env->getExtension("native_profiler");
        $__internal_deda7231358188353999648f8eafdbc05109a9fbde6de1c831ca035f7164f0b3->enter($__internal_deda7231358188353999648f8eafdbc05109a9fbde6de1c831ca035f7164f0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_deda7231358188353999648f8eafdbc05109a9fbde6de1c831ca035f7164f0b3->leave($__internal_deda7231358188353999648f8eafdbc05109a9fbde6de1c831ca035f7164f0b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

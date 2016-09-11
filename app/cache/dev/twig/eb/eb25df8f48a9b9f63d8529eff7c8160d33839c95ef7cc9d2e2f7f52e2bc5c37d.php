<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0e10fd42e52ab6f63f0cdab327d95f01eae011073fae624b8ea2818d250179b5 extends Twig_Template
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
        $__internal_fef3f6a1e0a815db8dbfc200aba7693f5a32da30ffca5e3ae4141857a2613ad7 = $this->env->getExtension("native_profiler");
        $__internal_fef3f6a1e0a815db8dbfc200aba7693f5a32da30ffca5e3ae4141857a2613ad7->enter($__internal_fef3f6a1e0a815db8dbfc200aba7693f5a32da30ffca5e3ae4141857a2613ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fef3f6a1e0a815db8dbfc200aba7693f5a32da30ffca5e3ae4141857a2613ad7->leave($__internal_fef3f6a1e0a815db8dbfc200aba7693f5a32da30ffca5e3ae4141857a2613ad7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

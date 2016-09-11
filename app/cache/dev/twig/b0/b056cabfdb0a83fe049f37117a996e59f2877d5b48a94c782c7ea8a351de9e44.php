<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9f570772ec9b8f2e92b56bc96866b8c699e8785f6b4a6a05ff377046a34c665d extends Twig_Template
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
        $__internal_e830acd44e26b7509c23217288dfd5d18648a57b3d71cd7fc2bb564583c7d9d3 = $this->env->getExtension("native_profiler");
        $__internal_e830acd44e26b7509c23217288dfd5d18648a57b3d71cd7fc2bb564583c7d9d3->enter($__internal_e830acd44e26b7509c23217288dfd5d18648a57b3d71cd7fc2bb564583c7d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e830acd44e26b7509c23217288dfd5d18648a57b3d71cd7fc2bb564583c7d9d3->leave($__internal_e830acd44e26b7509c23217288dfd5d18648a57b3d71cd7fc2bb564583c7d9d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

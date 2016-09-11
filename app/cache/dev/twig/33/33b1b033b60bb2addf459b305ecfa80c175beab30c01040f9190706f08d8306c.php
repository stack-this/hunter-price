<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4d8c32247755299ed323e856cbc34bdf0bf47887037967e5b5d78c4d46119292 extends Twig_Template
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
        $__internal_8efb1a7a07e415ea9a1f963c3762149ac432d3026d753394bce998a5dd1cbc64 = $this->env->getExtension("native_profiler");
        $__internal_8efb1a7a07e415ea9a1f963c3762149ac432d3026d753394bce998a5dd1cbc64->enter($__internal_8efb1a7a07e415ea9a1f963c3762149ac432d3026d753394bce998a5dd1cbc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8efb1a7a07e415ea9a1f963c3762149ac432d3026d753394bce998a5dd1cbc64->leave($__internal_8efb1a7a07e415ea9a1f963c3762149ac432d3026d753394bce998a5dd1cbc64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

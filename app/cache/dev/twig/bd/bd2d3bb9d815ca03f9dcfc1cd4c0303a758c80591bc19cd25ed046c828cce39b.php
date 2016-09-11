<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a0f05580fac59b8eb628413a71077df9177fa940ded3798c1b0af926bad004c9 extends Twig_Template
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
        $__internal_98f403c7f13eb10b4e1ba99cbce2f353b9a164dda349091c05b514d94dc67f94 = $this->env->getExtension("native_profiler");
        $__internal_98f403c7f13eb10b4e1ba99cbce2f353b9a164dda349091c05b514d94dc67f94->enter($__internal_98f403c7f13eb10b4e1ba99cbce2f353b9a164dda349091c05b514d94dc67f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_98f403c7f13eb10b4e1ba99cbce2f353b9a164dda349091c05b514d94dc67f94->leave($__internal_98f403c7f13eb10b4e1ba99cbce2f353b9a164dda349091c05b514d94dc67f94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_afed8cb55d67c9ae24fa427349d6c608c7f44be1230c628f2ee9b857aad478c2 extends Twig_Template
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
        $__internal_89e0af2e983c1938629cc2c71cf8db06ed7f4270c5829043408e54198a049d14 = $this->env->getExtension("native_profiler");
        $__internal_89e0af2e983c1938629cc2c71cf8db06ed7f4270c5829043408e54198a049d14->enter($__internal_89e0af2e983c1938629cc2c71cf8db06ed7f4270c5829043408e54198a049d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_89e0af2e983c1938629cc2c71cf8db06ed7f4270c5829043408e54198a049d14->leave($__internal_89e0af2e983c1938629cc2c71cf8db06ed7f4270c5829043408e54198a049d14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

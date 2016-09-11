<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1361dd57162ca747df77d06723efa58c9d55ead281502941b5c9697a0b1659e5 extends Twig_Template
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
        $__internal_7209b990d8f82ab335445e2b3a2df13b773e8eabc05e511295b9960f2288beba = $this->env->getExtension("native_profiler");
        $__internal_7209b990d8f82ab335445e2b3a2df13b773e8eabc05e511295b9960f2288beba->enter($__internal_7209b990d8f82ab335445e2b3a2df13b773e8eabc05e511295b9960f2288beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7209b990d8f82ab335445e2b3a2df13b773e8eabc05e511295b9960f2288beba->leave($__internal_7209b990d8f82ab335445e2b3a2df13b773e8eabc05e511295b9960f2288beba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

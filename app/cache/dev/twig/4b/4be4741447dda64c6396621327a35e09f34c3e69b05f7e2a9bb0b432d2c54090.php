<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_45ec185abf8c68846fd6dc6b74996acb18a37e3f3baf2f4c56fe2ade5bbb589a extends Twig_Template
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
        $__internal_0b3e5eda14dc757a990ed4825cf3de5719d42c22683c60b89771f8dfd7865532 = $this->env->getExtension("native_profiler");
        $__internal_0b3e5eda14dc757a990ed4825cf3de5719d42c22683c60b89771f8dfd7865532->enter($__internal_0b3e5eda14dc757a990ed4825cf3de5719d42c22683c60b89771f8dfd7865532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0b3e5eda14dc757a990ed4825cf3de5719d42c22683c60b89771f8dfd7865532->leave($__internal_0b3e5eda14dc757a990ed4825cf3de5719d42c22683c60b89771f8dfd7865532_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

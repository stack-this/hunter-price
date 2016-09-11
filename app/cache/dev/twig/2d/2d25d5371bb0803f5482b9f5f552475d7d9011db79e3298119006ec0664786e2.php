<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_77e6bc5b9d6969c70095be08426c0814ade2717f96807da214ea0beb864ddcf8 extends Twig_Template
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
        $__internal_1042d39c4b78063067df578a9cc957643e8cc7ed02118062f55fe61a7ac51f39 = $this->env->getExtension("native_profiler");
        $__internal_1042d39c4b78063067df578a9cc957643e8cc7ed02118062f55fe61a7ac51f39->enter($__internal_1042d39c4b78063067df578a9cc957643e8cc7ed02118062f55fe61a7ac51f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1042d39c4b78063067df578a9cc957643e8cc7ed02118062f55fe61a7ac51f39->leave($__internal_1042d39c4b78063067df578a9cc957643e8cc7ed02118062f55fe61a7ac51f39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

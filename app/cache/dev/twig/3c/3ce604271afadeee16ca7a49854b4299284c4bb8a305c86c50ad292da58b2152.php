<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_796454d59bb839d91ca732d37a1c39eb6069907733491c3c8c5be05184a07c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a43f0c2b83538a698154f3bf57eacbcdf540e51828eeb2f632094c0c755b84ea = $this->env->getExtension("native_profiler");
        $__internal_a43f0c2b83538a698154f3bf57eacbcdf540e51828eeb2f632094c0c755b84ea->enter($__internal_a43f0c2b83538a698154f3bf57eacbcdf540e51828eeb2f632094c0c755b84ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a43f0c2b83538a698154f3bf57eacbcdf540e51828eeb2f632094c0c755b84ea->leave($__internal_a43f0c2b83538a698154f3bf57eacbcdf540e51828eeb2f632094c0c755b84ea_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6130efcce841ac146d3597fbc192e9ff6a9c057e98190c27f79d968e7cdce06a = $this->env->getExtension("native_profiler");
        $__internal_6130efcce841ac146d3597fbc192e9ff6a9c057e98190c27f79d968e7cdce06a->enter($__internal_6130efcce841ac146d3597fbc192e9ff6a9c057e98190c27f79d968e7cdce06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6130efcce841ac146d3597fbc192e9ff6a9c057e98190c27f79d968e7cdce06a->leave($__internal_6130efcce841ac146d3597fbc192e9ff6a9c057e98190c27f79d968e7cdce06a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

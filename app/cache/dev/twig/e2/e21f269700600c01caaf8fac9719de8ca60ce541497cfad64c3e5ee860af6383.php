<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0632faf90793fce1fee565b1a4eb46b7b732c259935ace85156558c72c3eab5b extends Twig_Template
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
        $__internal_c4ce57a88eaed40b353646c674ee0921b3be1a1e3ce924338698f687eec5ab9f = $this->env->getExtension("native_profiler");
        $__internal_c4ce57a88eaed40b353646c674ee0921b3be1a1e3ce924338698f687eec5ab9f->enter($__internal_c4ce57a88eaed40b353646c674ee0921b3be1a1e3ce924338698f687eec5ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c4ce57a88eaed40b353646c674ee0921b3be1a1e3ce924338698f687eec5ab9f->leave($__internal_c4ce57a88eaed40b353646c674ee0921b3be1a1e3ce924338698f687eec5ab9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

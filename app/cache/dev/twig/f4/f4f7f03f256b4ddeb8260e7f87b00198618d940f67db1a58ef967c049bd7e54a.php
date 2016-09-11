<?php

/* :category:new.html.twig */
class __TwigTemplate_96464077854cac9493406f27ddd14b5e2d61dfda483e3509a0d18a6063d67a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b616d8a9c40611abff3ad5c2d276da6f64624bd1466f176d4ce87403e8b12ec9 = $this->env->getExtension("native_profiler");
        $__internal_b616d8a9c40611abff3ad5c2d276da6f64624bd1466f176d4ce87403e8b12ec9->enter($__internal_b616d8a9c40611abff3ad5c2d276da6f64624bd1466f176d4ce87403e8b12ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b616d8a9c40611abff3ad5c2d276da6f64624bd1466f176d4ce87403e8b12ec9->leave($__internal_b616d8a9c40611abff3ad5c2d276da6f64624bd1466f176d4ce87403e8b12ec9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e57568b6e2f9e5ce7647683a8cfc2cbb800768790c5db7591849660b39000eb0 = $this->env->getExtension("native_profiler");
        $__internal_e57568b6e2f9e5ce7647683a8cfc2cbb800768790c5db7591849660b39000eb0->enter($__internal_e57568b6e2f9e5ce7647683a8cfc2cbb800768790c5db7591849660b39000eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e57568b6e2f9e5ce7647683a8cfc2cbb800768790c5db7591849660b39000eb0->leave($__internal_e57568b6e2f9e5ce7647683a8cfc2cbb800768790c5db7591849660b39000eb0_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('category_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

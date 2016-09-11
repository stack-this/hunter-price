<?php

/* :lists:new.html.twig */
class __TwigTemplate_f4e4ff3118100a93f48558cc08d7f187b6229791827932ea9b286e983677019e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lists:new.html.twig", 1);
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
        $__internal_537ad2118d559a225e077e209146873c8d6ddefbe60ec7795f9cfaa6b6fd1c2f = $this->env->getExtension("native_profiler");
        $__internal_537ad2118d559a225e077e209146873c8d6ddefbe60ec7795f9cfaa6b6fd1c2f->enter($__internal_537ad2118d559a225e077e209146873c8d6ddefbe60ec7795f9cfaa6b6fd1c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lists:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537ad2118d559a225e077e209146873c8d6ddefbe60ec7795f9cfaa6b6fd1c2f->leave($__internal_537ad2118d559a225e077e209146873c8d6ddefbe60ec7795f9cfaa6b6fd1c2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a18a716add0378a9f82b22934c0575c4d240bd1e5404fee80416f01d944fd9b5 = $this->env->getExtension("native_profiler");
        $__internal_a18a716add0378a9f82b22934c0575c4d240bd1e5404fee80416f01d944fd9b5->enter($__internal_a18a716add0378a9f82b22934c0575c4d240bd1e5404fee80416f01d944fd9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lists creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("lists_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a18a716add0378a9f82b22934c0575c4d240bd1e5404fee80416f01d944fd9b5->leave($__internal_a18a716add0378a9f82b22934c0575c4d240bd1e5404fee80416f01d944fd9b5_prof);

    }

    public function getTemplateName()
    {
        return ":lists:new.html.twig";
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
/*     <h1>Lists creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('lists_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

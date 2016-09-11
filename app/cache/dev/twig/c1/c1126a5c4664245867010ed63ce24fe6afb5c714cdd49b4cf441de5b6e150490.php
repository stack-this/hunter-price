<?php

/* :society:edit.html.twig */
class __TwigTemplate_c52834c45f0d8b64f1d1732b09d5e5eb37d16357b2d14e7046022b9698a47402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":society:edit.html.twig", 1);
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
        $__internal_562a150a747f7c10b8ea156030e50fe6ddfe43fa44b1d3188110531a50b74129 = $this->env->getExtension("native_profiler");
        $__internal_562a150a747f7c10b8ea156030e50fe6ddfe43fa44b1d3188110531a50b74129->enter($__internal_562a150a747f7c10b8ea156030e50fe6ddfe43fa44b1d3188110531a50b74129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":society:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562a150a747f7c10b8ea156030e50fe6ddfe43fa44b1d3188110531a50b74129->leave($__internal_562a150a747f7c10b8ea156030e50fe6ddfe43fa44b1d3188110531a50b74129_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fbc6e379fb23c5bffe98e1d7114e02f15ce6421a12aa7083974a90c33854c56 = $this->env->getExtension("native_profiler");
        $__internal_8fbc6e379fb23c5bffe98e1d7114e02f15ce6421a12aa7083974a90c33854c56->enter($__internal_8fbc6e379fb23c5bffe98e1d7114e02f15ce6421a12aa7083974a90c33854c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Society edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("society_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8fbc6e379fb23c5bffe98e1d7114e02f15ce6421a12aa7083974a90c33854c56->leave($__internal_8fbc6e379fb23c5bffe98e1d7114e02f15ce6421a12aa7083974a90c33854c56_prof);

    }

    public function getTemplateName()
    {
        return ":society:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Society edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('society_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

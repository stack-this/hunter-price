<?php

/* :product:edit.html.twig */
class __TwigTemplate_bfa02fd44748d2339e7800f4b5929c391e00ecf5286bc625131752762d5ba63d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:edit.html.twig", 1);
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
        $__internal_5f37c3cf2568660e03c0727e34123e841179cb5c9f29ba08b40e35cd4877b409 = $this->env->getExtension("native_profiler");
        $__internal_5f37c3cf2568660e03c0727e34123e841179cb5c9f29ba08b40e35cd4877b409->enter($__internal_5f37c3cf2568660e03c0727e34123e841179cb5c9f29ba08b40e35cd4877b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f37c3cf2568660e03c0727e34123e841179cb5c9f29ba08b40e35cd4877b409->leave($__internal_5f37c3cf2568660e03c0727e34123e841179cb5c9f29ba08b40e35cd4877b409_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_850ac56a53baca2edc0acd54c1451a320d0f25bff7b439b17b53cc30ddd96d58 = $this->env->getExtension("native_profiler");
        $__internal_850ac56a53baca2edc0acd54c1451a320d0f25bff7b439b17b53cc30ddd96d58->enter($__internal_850ac56a53baca2edc0acd54c1451a320d0f25bff7b439b17b53cc30ddd96d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("product_index");
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
        
        $__internal_850ac56a53baca2edc0acd54c1451a320d0f25bff7b439b17b53cc30ddd96d58->leave($__internal_850ac56a53baca2edc0acd54c1451a320d0f25bff7b439b17b53cc30ddd96d58_prof);

    }

    public function getTemplateName()
    {
        return ":product:edit.html.twig";
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
/*     <h1>Product edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('product_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

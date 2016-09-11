<?php

/* :listsproduct:edit.html.twig */
class __TwigTemplate_fec34ab1142bce8191956eecd1b72e40b34ecb40ef03a1cd87a2d9670e0d501d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":listsproduct:edit.html.twig", 1);
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
        $__internal_a9cc1eb3dd2c8185d98d2a9cf1cf632aa8ed4e6dd29acdd62b851564f5cdd6a0 = $this->env->getExtension("native_profiler");
        $__internal_a9cc1eb3dd2c8185d98d2a9cf1cf632aa8ed4e6dd29acdd62b851564f5cdd6a0->enter($__internal_a9cc1eb3dd2c8185d98d2a9cf1cf632aa8ed4e6dd29acdd62b851564f5cdd6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":listsproduct:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9cc1eb3dd2c8185d98d2a9cf1cf632aa8ed4e6dd29acdd62b851564f5cdd6a0->leave($__internal_a9cc1eb3dd2c8185d98d2a9cf1cf632aa8ed4e6dd29acdd62b851564f5cdd6a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaa34469127d81b471147f5f056c6cfea38b7a0d07366c4008e47f1d3d28629c = $this->env->getExtension("native_profiler");
        $__internal_eaa34469127d81b471147f5f056c6cfea38b7a0d07366c4008e47f1d3d28629c->enter($__internal_eaa34469127d81b471147f5f056c6cfea38b7a0d07366c4008e47f1d3d28629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ListsProduct edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("listsproduct_index");
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
        
        $__internal_eaa34469127d81b471147f5f056c6cfea38b7a0d07366c4008e47f1d3d28629c->leave($__internal_eaa34469127d81b471147f5f056c6cfea38b7a0d07366c4008e47f1d3d28629c_prof);

    }

    public function getTemplateName()
    {
        return ":listsproduct:edit.html.twig";
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
/*     <h1>ListsProduct edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('listsproduct_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

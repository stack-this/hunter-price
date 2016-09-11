<?php

/* :lists:edit.html.twig */
class __TwigTemplate_f282a7b35cef9599f44bbb99fbed4afd033ea434eff47dbd04dd147f0997d36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lists:edit.html.twig", 1);
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
        $__internal_c3205146d2b543000a5381b28ec7f7419586fe58b29150fb527db2c8fcf2db55 = $this->env->getExtension("native_profiler");
        $__internal_c3205146d2b543000a5381b28ec7f7419586fe58b29150fb527db2c8fcf2db55->enter($__internal_c3205146d2b543000a5381b28ec7f7419586fe58b29150fb527db2c8fcf2db55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lists:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3205146d2b543000a5381b28ec7f7419586fe58b29150fb527db2c8fcf2db55->leave($__internal_c3205146d2b543000a5381b28ec7f7419586fe58b29150fb527db2c8fcf2db55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_221f76cf1998aa960f1b88d2594b38f58fde357ef1a17b133ad5f787d1b5f9e2 = $this->env->getExtension("native_profiler");
        $__internal_221f76cf1998aa960f1b88d2594b38f58fde357ef1a17b133ad5f787d1b5f9e2->enter($__internal_221f76cf1998aa960f1b88d2594b38f58fde357ef1a17b133ad5f787d1b5f9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lists edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("lists_index");
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
        
        $__internal_221f76cf1998aa960f1b88d2594b38f58fde357ef1a17b133ad5f787d1b5f9e2->leave($__internal_221f76cf1998aa960f1b88d2594b38f58fde357ef1a17b133ad5f787d1b5f9e2_prof);

    }

    public function getTemplateName()
    {
        return ":lists:edit.html.twig";
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
/*     <h1>Lists edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('lists_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* :store:edit.html.twig */
class __TwigTemplate_7f5f443559d0d55246bdb219db26200f1177d2cb840dfe7dbcb0c084fedb475d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":store:edit.html.twig", 1);
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
        $__internal_f06d3382ea07cfbf08a6df99490482831f8af48b2a773cbc2424660129cc3333 = $this->env->getExtension("native_profiler");
        $__internal_f06d3382ea07cfbf08a6df99490482831f8af48b2a773cbc2424660129cc3333->enter($__internal_f06d3382ea07cfbf08a6df99490482831f8af48b2a773cbc2424660129cc3333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":store:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06d3382ea07cfbf08a6df99490482831f8af48b2a773cbc2424660129cc3333->leave($__internal_f06d3382ea07cfbf08a6df99490482831f8af48b2a773cbc2424660129cc3333_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b8ac37e040d2e44267397cb85ab8b8191797d15307b9745cb729fb56a29e1e = $this->env->getExtension("native_profiler");
        $__internal_45b8ac37e040d2e44267397cb85ab8b8191797d15307b9745cb729fb56a29e1e->enter($__internal_45b8ac37e040d2e44267397cb85ab8b8191797d15307b9745cb729fb56a29e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Store edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("store_index");
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
        
        $__internal_45b8ac37e040d2e44267397cb85ab8b8191797d15307b9745cb729fb56a29e1e->leave($__internal_45b8ac37e040d2e44267397cb85ab8b8191797d15307b9745cb729fb56a29e1e_prof);

    }

    public function getTemplateName()
    {
        return ":store:edit.html.twig";
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
/*     <h1>Store edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('store_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

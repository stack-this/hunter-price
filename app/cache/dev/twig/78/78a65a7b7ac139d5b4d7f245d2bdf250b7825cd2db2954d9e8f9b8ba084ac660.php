<?php

/* :listsproduct:new.html.twig */
class __TwigTemplate_a88d2886612f1745d9919c3138aa74a32d1b75643eb25048f3818776749ed7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":listsproduct:new.html.twig", 1);
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
        $__internal_064d132caeda59763f9058854f606e3044e76ee50bbf61ab3c3b292463d2f2b9 = $this->env->getExtension("native_profiler");
        $__internal_064d132caeda59763f9058854f606e3044e76ee50bbf61ab3c3b292463d2f2b9->enter($__internal_064d132caeda59763f9058854f606e3044e76ee50bbf61ab3c3b292463d2f2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":listsproduct:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_064d132caeda59763f9058854f606e3044e76ee50bbf61ab3c3b292463d2f2b9->leave($__internal_064d132caeda59763f9058854f606e3044e76ee50bbf61ab3c3b292463d2f2b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e048892d20b9b227e13695d5a9410461e41d4760595734d9d7c0ec659ba2200a = $this->env->getExtension("native_profiler");
        $__internal_e048892d20b9b227e13695d5a9410461e41d4760595734d9d7c0ec659ba2200a->enter($__internal_e048892d20b9b227e13695d5a9410461e41d4760595734d9d7c0ec659ba2200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ListsProduct creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("listsproduct_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e048892d20b9b227e13695d5a9410461e41d4760595734d9d7c0ec659ba2200a->leave($__internal_e048892d20b9b227e13695d5a9410461e41d4760595734d9d7c0ec659ba2200a_prof);

    }

    public function getTemplateName()
    {
        return ":listsproduct:new.html.twig";
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
/*     <h1>ListsProduct creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('listsproduct_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

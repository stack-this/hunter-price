<?php

/* :storeproduct:new.html.twig */
class __TwigTemplate_02cb18097f012d9869f00385b6d0e7baf4dff11617974acc4d07cd0d6759705b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":storeproduct:new.html.twig", 1);
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
        $__internal_82ef79ac3ce1d68aa18a9a3fbe1300d3df38b422522f0e18476a058f4481424f = $this->env->getExtension("native_profiler");
        $__internal_82ef79ac3ce1d68aa18a9a3fbe1300d3df38b422522f0e18476a058f4481424f->enter($__internal_82ef79ac3ce1d68aa18a9a3fbe1300d3df38b422522f0e18476a058f4481424f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":storeproduct:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ef79ac3ce1d68aa18a9a3fbe1300d3df38b422522f0e18476a058f4481424f->leave($__internal_82ef79ac3ce1d68aa18a9a3fbe1300d3df38b422522f0e18476a058f4481424f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32021b68dbf746dfcc15de4d11cf2160ec4c660894c492f035c03759ec3da9c6 = $this->env->getExtension("native_profiler");
        $__internal_32021b68dbf746dfcc15de4d11cf2160ec4c660894c492f035c03759ec3da9c6->enter($__internal_32021b68dbf746dfcc15de4d11cf2160ec4c660894c492f035c03759ec3da9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>StoreProduct creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("storeproduct_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_32021b68dbf746dfcc15de4d11cf2160ec4c660894c492f035c03759ec3da9c6->leave($__internal_32021b68dbf746dfcc15de4d11cf2160ec4c660894c492f035c03759ec3da9c6_prof);

    }

    public function getTemplateName()
    {
        return ":storeproduct:new.html.twig";
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
/*     <h1>StoreProduct creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('storeproduct_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* :storeproduct:edit.html.twig */
class __TwigTemplate_3e430ec505d57ab0c1d09f6bec2937fedf004850c8154611045ea80a19c54d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":storeproduct:edit.html.twig", 1);
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
        $__internal_27e3975c57b7c11bf7865924a6c4e09ade9790335df5b301163d13c52e8d7e53 = $this->env->getExtension("native_profiler");
        $__internal_27e3975c57b7c11bf7865924a6c4e09ade9790335df5b301163d13c52e8d7e53->enter($__internal_27e3975c57b7c11bf7865924a6c4e09ade9790335df5b301163d13c52e8d7e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":storeproduct:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e3975c57b7c11bf7865924a6c4e09ade9790335df5b301163d13c52e8d7e53->leave($__internal_27e3975c57b7c11bf7865924a6c4e09ade9790335df5b301163d13c52e8d7e53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18fbc4514bc5e0205ab5413598af613b2ec754c043d2ae4fe28c82c3e1df0543 = $this->env->getExtension("native_profiler");
        $__internal_18fbc4514bc5e0205ab5413598af613b2ec754c043d2ae4fe28c82c3e1df0543->enter($__internal_18fbc4514bc5e0205ab5413598af613b2ec754c043d2ae4fe28c82c3e1df0543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>StoreProduct edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("storeproduct_index");
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
        
        $__internal_18fbc4514bc5e0205ab5413598af613b2ec754c043d2ae4fe28c82c3e1df0543->leave($__internal_18fbc4514bc5e0205ab5413598af613b2ec754c043d2ae4fe28c82c3e1df0543_prof);

    }

    public function getTemplateName()
    {
        return ":storeproduct:edit.html.twig";
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
/*     <h1>StoreProduct edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('storeproduct_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

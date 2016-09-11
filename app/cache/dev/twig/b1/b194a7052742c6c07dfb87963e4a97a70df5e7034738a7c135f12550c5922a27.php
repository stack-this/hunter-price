<?php

/* :users:edit.html.twig */
class __TwigTemplate_3bf7d39cdf5e5f631aa8889a396f9ddc42b80c19084845ac8dd8304729231b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:edit.html.twig", 1);
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
        $__internal_816e89af2240635dc731aa830c9e3021109c6bcfb6b76882b9a534c19086536e = $this->env->getExtension("native_profiler");
        $__internal_816e89af2240635dc731aa830c9e3021109c6bcfb6b76882b9a534c19086536e->enter($__internal_816e89af2240635dc731aa830c9e3021109c6bcfb6b76882b9a534c19086536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_816e89af2240635dc731aa830c9e3021109c6bcfb6b76882b9a534c19086536e->leave($__internal_816e89af2240635dc731aa830c9e3021109c6bcfb6b76882b9a534c19086536e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_214a3be614b612ac33483ce5183a12c12104cf6ce23093ef8096f5e7d389729d = $this->env->getExtension("native_profiler");
        $__internal_214a3be614b612ac33483ce5183a12c12104cf6ce23093ef8096f5e7d389729d->enter($__internal_214a3be614b612ac33483ce5183a12c12104cf6ce23093ef8096f5e7d389729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("users_index");
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
        
        $__internal_214a3be614b612ac33483ce5183a12c12104cf6ce23093ef8096f5e7d389729d->leave($__internal_214a3be614b612ac33483ce5183a12c12104cf6ce23093ef8096f5e7d389729d_prof);

    }

    public function getTemplateName()
    {
        return ":users:edit.html.twig";
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
/*     <h1>Users edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('users_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

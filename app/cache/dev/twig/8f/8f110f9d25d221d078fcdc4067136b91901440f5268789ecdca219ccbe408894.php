<?php

/* :society:new.html.twig */
class __TwigTemplate_93f5268bb2c0a74272c5d7cab8bacd697b52c3186e2f84d312fd79831c1ec85e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":society:new.html.twig", 1);
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
        $__internal_a823adb361a6670e6dcbcc80f479823ff74d762ea74223b8442a34a3e2d0961c = $this->env->getExtension("native_profiler");
        $__internal_a823adb361a6670e6dcbcc80f479823ff74d762ea74223b8442a34a3e2d0961c->enter($__internal_a823adb361a6670e6dcbcc80f479823ff74d762ea74223b8442a34a3e2d0961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":society:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a823adb361a6670e6dcbcc80f479823ff74d762ea74223b8442a34a3e2d0961c->leave($__internal_a823adb361a6670e6dcbcc80f479823ff74d762ea74223b8442a34a3e2d0961c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9431f8de29514f3053bb138d3e1279354c6122e6a14f70d6a2d74addf5b65c7c = $this->env->getExtension("native_profiler");
        $__internal_9431f8de29514f3053bb138d3e1279354c6122e6a14f70d6a2d74addf5b65c7c->enter($__internal_9431f8de29514f3053bb138d3e1279354c6122e6a14f70d6a2d74addf5b65c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Society creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("society_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9431f8de29514f3053bb138d3e1279354c6122e6a14f70d6a2d74addf5b65c7c->leave($__internal_9431f8de29514f3053bb138d3e1279354c6122e6a14f70d6a2d74addf5b65c7c_prof);

    }

    public function getTemplateName()
    {
        return ":society:new.html.twig";
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
/*     <h1>Society creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('society_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

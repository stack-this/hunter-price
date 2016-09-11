<?php

/* :store:new.html.twig */
class __TwigTemplate_f16106075fd5dc2c14f41773e6e9b83409006803114c1f47b73bb268fa84f8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":store:new.html.twig", 1);
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
        $__internal_44225e542c27b820c8c7182f921165eb624480289db82ba8b42a882c81ee264d = $this->env->getExtension("native_profiler");
        $__internal_44225e542c27b820c8c7182f921165eb624480289db82ba8b42a882c81ee264d->enter($__internal_44225e542c27b820c8c7182f921165eb624480289db82ba8b42a882c81ee264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":store:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44225e542c27b820c8c7182f921165eb624480289db82ba8b42a882c81ee264d->leave($__internal_44225e542c27b820c8c7182f921165eb624480289db82ba8b42a882c81ee264d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd0be19962b549ed3856ab5d5d87dfac859a55b7bdd9937824bf76a0af83f743 = $this->env->getExtension("native_profiler");
        $__internal_cd0be19962b549ed3856ab5d5d87dfac859a55b7bdd9937824bf76a0af83f743->enter($__internal_cd0be19962b549ed3856ab5d5d87dfac859a55b7bdd9937824bf76a0af83f743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Store creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("store_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cd0be19962b549ed3856ab5d5d87dfac859a55b7bdd9937824bf76a0af83f743->leave($__internal_cd0be19962b549ed3856ab5d5d87dfac859a55b7bdd9937824bf76a0af83f743_prof);

    }

    public function getTemplateName()
    {
        return ":store:new.html.twig";
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
/*     <h1>Store creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('store_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

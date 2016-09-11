<?php

/* :society:show.html.twig */
class __TwigTemplate_5a8e2ba528a0f9a2ad9a40da5cf58fa1e6f98d12111af8a87056934a794e66d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":society:show.html.twig", 1);
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
        $__internal_898dd7add284c67cd012cae4eda45631f5cac667a290108c579b50680edd4873 = $this->env->getExtension("native_profiler");
        $__internal_898dd7add284c67cd012cae4eda45631f5cac667a290108c579b50680edd4873->enter($__internal_898dd7add284c67cd012cae4eda45631f5cac667a290108c579b50680edd4873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":society:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898dd7add284c67cd012cae4eda45631f5cac667a290108c579b50680edd4873->leave($__internal_898dd7add284c67cd012cae4eda45631f5cac667a290108c579b50680edd4873_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9074d2391e9ba1b95d02f15fad8f0cd147a68cb3537dda619663a10cb2c0a3ad = $this->env->getExtension("native_profiler");
        $__internal_9074d2391e9ba1b95d02f15fad8f0cd147a68cb3537dda619663a10cb2c0a3ad->enter($__internal_9074d2391e9ba1b95d02f15fad8f0cd147a68cb3537dda619663a10cb2c0a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Society</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["society"]) ? $context["society"] : $this->getContext($context, "society")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("society_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("society_edit", array("id" => $this->getAttribute((isset($context["society"]) ? $context["society"] : $this->getContext($context, "society")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9074d2391e9ba1b95d02f15fad8f0cd147a68cb3537dda619663a10cb2c0a3ad->leave($__internal_9074d2391e9ba1b95d02f15fad8f0cd147a68cb3537dda619663a10cb2c0a3ad_prof);

    }

    public function getTemplateName()
    {
        return ":society:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Society</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ society.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('society_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('society_edit', { 'id': society.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

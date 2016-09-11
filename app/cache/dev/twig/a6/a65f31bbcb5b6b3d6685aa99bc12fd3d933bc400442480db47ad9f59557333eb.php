<?php

/* :society:index.html.twig */
class __TwigTemplate_2301476e91c52e08208b078aa7583e4f38908c2062dcf14557d8ed0ff44bc322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":society:index.html.twig", 1);
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
        $__internal_5f0bb69506319579f1ac27f7486872d6beca3f3561311797f87b620524de4998 = $this->env->getExtension("native_profiler");
        $__internal_5f0bb69506319579f1ac27f7486872d6beca3f3561311797f87b620524de4998->enter($__internal_5f0bb69506319579f1ac27f7486872d6beca3f3561311797f87b620524de4998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":society:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0bb69506319579f1ac27f7486872d6beca3f3561311797f87b620524de4998->leave($__internal_5f0bb69506319579f1ac27f7486872d6beca3f3561311797f87b620524de4998_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d578a8307c497da1673585d2b6ba8ec18f7e7a4204ddc6416e840a1bf9b50f = $this->env->getExtension("native_profiler");
        $__internal_65d578a8307c497da1673585d2b6ba8ec18f7e7a4204ddc6416e840a1bf9b50f->enter($__internal_65d578a8307c497da1673585d2b6ba8ec18f7e7a4204ddc6416e840a1bf9b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Society list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["societies"]) ? $context["societies"] : $this->getContext($context, "societies")));
        foreach ($context['_seq'] as $context["_key"] => $context["society"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("society_show", array("id" => $this->getAttribute($context["society"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["society"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("society_show", array("id" => $this->getAttribute($context["society"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("society_edit", array("id" => $this->getAttribute($context["society"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['society'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("society_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_65d578a8307c497da1673585d2b6ba8ec18f7e7a4204ddc6416e840a1bf9b50f->leave($__internal_65d578a8307c497da1673585d2b6ba8ec18f7e7a4204ddc6416e840a1bf9b50f_prof);

    }

    public function getTemplateName()
    {
        return ":society:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Society list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for society in societies %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('society_show', { 'id': society.id }) }}">{{ society.id }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('society_show', { 'id': society.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('society_edit', { 'id': society.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('society_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

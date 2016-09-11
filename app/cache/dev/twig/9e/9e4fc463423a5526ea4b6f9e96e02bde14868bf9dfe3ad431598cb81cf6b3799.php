<?php

/* :lists:show.html.twig */
class __TwigTemplate_568050ab3b6a8732250d30543ce56e1c191072b3a8deedf7630172d31d7ba310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lists:show.html.twig", 1);
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
        $__internal_1fc4295e32308d699af091b364eb4362433c5ab29d63829f64d40384bc85d2d0 = $this->env->getExtension("native_profiler");
        $__internal_1fc4295e32308d699af091b364eb4362433c5ab29d63829f64d40384bc85d2d0->enter($__internal_1fc4295e32308d699af091b364eb4362433c5ab29d63829f64d40384bc85d2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lists:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc4295e32308d699af091b364eb4362433c5ab29d63829f64d40384bc85d2d0->leave($__internal_1fc4295e32308d699af091b364eb4362433c5ab29d63829f64d40384bc85d2d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8f297f149bff60021b8e3119071a92828c21cf73d606b34fb01c346cc676614 = $this->env->getExtension("native_profiler");
        $__internal_c8f297f149bff60021b8e3119071a92828c21cf73d606b34fb01c346cc676614->enter($__internal_c8f297f149bff60021b8e3119071a92828c21cf73d606b34fb01c346cc676614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lists</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("lists_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lists_edit", array("id" => $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c8f297f149bff60021b8e3119071a92828c21cf73d606b34fb01c346cc676614->leave($__internal_c8f297f149bff60021b8e3119071a92828c21cf73d606b34fb01c346cc676614_prof);

    }

    public function getTemplateName()
    {
        return ":lists:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lists</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ list.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ list.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <td>{% if list.date %}{{ list.date|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('lists_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('lists_edit', { 'id': list.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

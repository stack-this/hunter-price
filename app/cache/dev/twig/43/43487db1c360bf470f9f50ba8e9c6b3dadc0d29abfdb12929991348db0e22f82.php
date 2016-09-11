<?php

/* :listsproduct:index.html.twig */
class __TwigTemplate_abd92aecb85ee83a97cf99c17debd0d6b0569705ce3e5921eb17efb4cf7f176f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":listsproduct:index.html.twig", 1);
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
        $__internal_b8e6d0474128590d5141b0d51d3176ff77bbfaf32e940ac73fc0f2aedc8a0bd9 = $this->env->getExtension("native_profiler");
        $__internal_b8e6d0474128590d5141b0d51d3176ff77bbfaf32e940ac73fc0f2aedc8a0bd9->enter($__internal_b8e6d0474128590d5141b0d51d3176ff77bbfaf32e940ac73fc0f2aedc8a0bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":listsproduct:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e6d0474128590d5141b0d51d3176ff77bbfaf32e940ac73fc0f2aedc8a0bd9->leave($__internal_b8e6d0474128590d5141b0d51d3176ff77bbfaf32e940ac73fc0f2aedc8a0bd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0def61d920713fd8ce2e013dfe6dba763ce40520ae33494a3e543e52c33778f = $this->env->getExtension("native_profiler");
        $__internal_f0def61d920713fd8ce2e013dfe6dba763ce40520ae33494a3e543e52c33778f->enter($__internal_f0def61d920713fd8ce2e013dfe6dba763ce40520ae33494a3e543e52c33778f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ListsProduct list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listsProducts"]) ? $context["listsProducts"] : $this->getContext($context, "listsProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["listsProduct"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listsproduct_show", array("id" => $this->getAttribute($context["listsProduct"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listsProduct"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["listsProduct"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["listsProduct"], "quantity", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listsproduct_show", array("id" => $this->getAttribute($context["listsProduct"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listsproduct_edit", array("id" => $this->getAttribute($context["listsProduct"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listsProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("listsproduct_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f0def61d920713fd8ce2e013dfe6dba763ce40520ae33494a3e543e52c33778f->leave($__internal_f0def61d920713fd8ce2e013dfe6dba763ce40520ae33494a3e543e52c33778f_prof);

    }

    public function getTemplateName()
    {
        return ":listsproduct:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ListsProduct list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Price</th>*/
/*                 <th>Quantity</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for listsProduct in listsProducts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('listsproduct_show', { 'id': listsProduct.id }) }}">{{ listsProduct.id }}</a></td>*/
/*                 <td>{{ listsProduct.price }}</td>*/
/*                 <td>{{ listsProduct.quantity }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('listsproduct_show', { 'id': listsProduct.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('listsproduct_edit', { 'id': listsProduct.id }) }}">edit</a>*/
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
/*             <a href="{{ path('listsproduct_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* :product:index.html.twig */
class __TwigTemplate_cafbe9ba8061af0000fdb64f8aa5cff604e82c842bfdb6d33c368d7018adcddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:index.html.twig", 1);
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
        $__internal_ebcaff0936bcc69fc1102e4606a86c73c36ec50cea86e7f9b6cc9b2d44593140 = $this->env->getExtension("native_profiler");
        $__internal_ebcaff0936bcc69fc1102e4606a86c73c36ec50cea86e7f9b6cc9b2d44593140->enter($__internal_ebcaff0936bcc69fc1102e4606a86c73c36ec50cea86e7f9b6cc9b2d44593140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebcaff0936bcc69fc1102e4606a86c73c36ec50cea86e7f9b6cc9b2d44593140->leave($__internal_ebcaff0936bcc69fc1102e4606a86c73c36ec50cea86e7f9b6cc9b2d44593140_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c134e781aeb9a7a4d0f14538338d6ffc2b113e4aaa9df7e2100007ceefc31be = $this->env->getExtension("native_profiler");
        $__internal_6c134e781aeb9a7a4d0f14538338d6ffc2b113e4aaa9df7e2100007ceefc31be->enter($__internal_6c134e781aeb9a7a4d0f14538338d6ffc2b113e4aaa9df7e2100007ceefc31be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Lowerprice</th>
                <th>Higherprice</th>
                <th>Lastupdate</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "lowerPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "higherPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["product"], "lastUpdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "lastUpdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "unit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("product_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6c134e781aeb9a7a4d0f14538338d6ffc2b113e4aaa9df7e2100007ceefc31be->leave($__internal_6c134e781aeb9a7a4d0f14538338d6ffc2b113e4aaa9df7e2100007ceefc31be_prof);

    }

    public function getTemplateName()
    {
        return ":product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  118 => 41,  106 => 35,  100 => 32,  93 => 28,  89 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Product list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Lowerprice</th>*/
/*                 <th>Higherprice</th>*/
/*                 <th>Lastupdate</th>*/
/*                 <th>Quantity</th>*/
/*                 <th>Unit</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for product in products %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('product_show', { 'id': product.id }) }}">{{ product.id }}</a></td>*/
/*                 <td>{{ product.name }}</td>*/
/*                 <td>{{ product.lowerPrice }}</td>*/
/*                 <td>{{ product.higherPrice }}</td>*/
/*                 <td>{% if product.lastUpdate %}{{ product.lastUpdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ product.quantity }}</td>*/
/*                 <td>{{ product.unit }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('product_show', { 'id': product.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('product_edit', { 'id': product.id }) }}">edit</a>*/
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
/*             <a href="{{ path('product_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

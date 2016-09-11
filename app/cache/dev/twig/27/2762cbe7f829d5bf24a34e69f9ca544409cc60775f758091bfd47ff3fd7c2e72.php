<?php

/* :product:show.html.twig */
class __TwigTemplate_e0e2e25aaef5d63db298acd9c17ea0c3a515347e897d4a1f6d13f4c5b120b8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:show.html.twig", 1);
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
        $__internal_a449412bb7dd8558b49bef1af2558b4b19630485088389d8f1a9df796f0685ad = $this->env->getExtension("native_profiler");
        $__internal_a449412bb7dd8558b49bef1af2558b4b19630485088389d8f1a9df796f0685ad->enter($__internal_a449412bb7dd8558b49bef1af2558b4b19630485088389d8f1a9df796f0685ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a449412bb7dd8558b49bef1af2558b4b19630485088389d8f1a9df796f0685ad->leave($__internal_a449412bb7dd8558b49bef1af2558b4b19630485088389d8f1a9df796f0685ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2ae00827ce5a91e77e843e0999c5143e52ebb7e1b5f73adcbb07cc83fab8c0e = $this->env->getExtension("native_profiler");
        $__internal_c2ae00827ce5a91e77e843e0999c5143e52ebb7e1b5f73adcbb07cc83fab8c0e->enter($__internal_c2ae00827ce5a91e77e843e0999c5143e52ebb7e1b5f73adcbb07cc83fab8c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lowerprice</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "lowerPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Higherprice</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "higherPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastupdate</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "lastUpdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "lastUpdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Unit</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "unit", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c2ae00827ce5a91e77e843e0999c5143e52ebb7e1b5f73adcbb07cc83fab8c0e->leave($__internal_c2ae00827ce5a91e77e843e0999c5143e52ebb7e1b5f73adcbb07cc83fab8c0e_prof);

    }

    public function getTemplateName()
    {
        return ":product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 47,  108 => 44,  102 => 41,  92 => 34,  85 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Product</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ product.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ product.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lowerprice</th>*/
/*                 <td>{{ product.lowerPrice }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Higherprice</th>*/
/*                 <td>{{ product.higherPrice }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastupdate</th>*/
/*                 <td>{% if product.lastUpdate %}{{ product.lastUpdate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Quantity</th>*/
/*                 <td>{{ product.quantity }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Unit</th>*/
/*                 <td>{{ product.unit }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('product_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('product_edit', { 'id': product.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

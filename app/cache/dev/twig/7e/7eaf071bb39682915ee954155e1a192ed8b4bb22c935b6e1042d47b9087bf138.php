<?php

/* :storeproduct:index.html.twig */
class __TwigTemplate_1c2e34568e14e87b3dc21fd5ef3adeaead5ee4a6486650cf6360e1e5d16d65fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":storeproduct:index.html.twig", 1);
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
        $__internal_aac2259b623f4f9c32014cd941018bc6ad61acc9c70d3fe4499e315ea8f5f3fe = $this->env->getExtension("native_profiler");
        $__internal_aac2259b623f4f9c32014cd941018bc6ad61acc9c70d3fe4499e315ea8f5f3fe->enter($__internal_aac2259b623f4f9c32014cd941018bc6ad61acc9c70d3fe4499e315ea8f5f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":storeproduct:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac2259b623f4f9c32014cd941018bc6ad61acc9c70d3fe4499e315ea8f5f3fe->leave($__internal_aac2259b623f4f9c32014cd941018bc6ad61acc9c70d3fe4499e315ea8f5f3fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2869bacc23e8ac8c8652f567db6709f0acc374f43e41c6d756ca7172e60b837 = $this->env->getExtension("native_profiler");
        $__internal_a2869bacc23e8ac8c8652f567db6709f0acc374f43e41c6d756ca7172e60b837->enter($__internal_a2869bacc23e8ac8c8652f567db6709f0acc374f43e41c6d756ca7172e60b837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>StoreProduct list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["storeProducts"]) ? $context["storeProducts"] : $this->getContext($context, "storeProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["storeProduct"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storeproduct_show", array("id" => $this->getAttribute($context["storeProduct"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["storeProduct"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["storeProduct"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storeproduct_show", array("id" => $this->getAttribute($context["storeProduct"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storeproduct_edit", array("id" => $this->getAttribute($context["storeProduct"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storeProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("storeproduct_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a2869bacc23e8ac8c8652f567db6709f0acc374f43e41c6d756ca7172e60b837->leave($__internal_a2869bacc23e8ac8c8652f567db6709f0acc374f43e41c6d756ca7172e60b837_prof);

    }

    public function getTemplateName()
    {
        return ":storeproduct:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>StoreProduct list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Price</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for storeProduct in storeProducts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('storeproduct_show', { 'id': storeProduct.id }) }}">{{ storeProduct.id }}</a></td>*/
/*                 <td>{{ storeProduct.price }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('storeproduct_show', { 'id': storeProduct.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('storeproduct_edit', { 'id': storeProduct.id }) }}">edit</a>*/
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
/*             <a href="{{ path('storeproduct_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

<?php

/* :listsproduct:show.html.twig */
class __TwigTemplate_49586f5e419ee02d92e821ee1de3fb147f36b9ab5259651c0dd11750e6db1a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":listsproduct:show.html.twig", 1);
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
        $__internal_f7d2b26542216213d5c3bc1451856235da74bd8f7fbeb4c0f1929935efb39f55 = $this->env->getExtension("native_profiler");
        $__internal_f7d2b26542216213d5c3bc1451856235da74bd8f7fbeb4c0f1929935efb39f55->enter($__internal_f7d2b26542216213d5c3bc1451856235da74bd8f7fbeb4c0f1929935efb39f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":listsproduct:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d2b26542216213d5c3bc1451856235da74bd8f7fbeb4c0f1929935efb39f55->leave($__internal_f7d2b26542216213d5c3bc1451856235da74bd8f7fbeb4c0f1929935efb39f55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23aea2a7e6dad2a032ebed019ab833317bf08c94ec1106541a30d0600c72a3bd = $this->env->getExtension("native_profiler");
        $__internal_23aea2a7e6dad2a032ebed019ab833317bf08c94ec1106541a30d0600c72a3bd->enter($__internal_23aea2a7e6dad2a032ebed019ab833317bf08c94ec1106541a30d0600c72a3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ListsProduct</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listsProduct"]) ? $context["listsProduct"] : $this->getContext($context, "listsProduct")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listsProduct"]) ? $context["listsProduct"] : $this->getContext($context, "listsProduct")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listsProduct"]) ? $context["listsProduct"] : $this->getContext($context, "listsProduct")), "quantity", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("listsproduct_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listsproduct_edit", array("id" => $this->getAttribute((isset($context["listsProduct"]) ? $context["listsProduct"] : $this->getContext($context, "listsProduct")), "id", array()))), "html", null, true);
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
        
        $__internal_23aea2a7e6dad2a032ebed019ab833317bf08c94ec1106541a30d0600c72a3bd->leave($__internal_23aea2a7e6dad2a032ebed019ab833317bf08c94ec1106541a30d0600c72a3bd_prof);

    }

    public function getTemplateName()
    {
        return ":listsproduct:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ListsProduct</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ listsProduct.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Price</th>*/
/*                 <td>{{ listsProduct.price }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Quantity</th>*/
/*                 <td>{{ listsProduct.quantity }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('listsproduct_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('listsproduct_edit', { 'id': listsProduct.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

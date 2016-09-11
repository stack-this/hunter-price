<?php

/* :storeproduct:show.html.twig */
class __TwigTemplate_54ebb53b2ac4ff1448ac8536d0fafe126263dd0f9656bc7063b968857e73389d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":storeproduct:show.html.twig", 1);
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
        $__internal_c31784dc9ad0ed9eee46f25c5c1ac47a845356352ed49c8a1cf5a1bd0c3c10b3 = $this->env->getExtension("native_profiler");
        $__internal_c31784dc9ad0ed9eee46f25c5c1ac47a845356352ed49c8a1cf5a1bd0c3c10b3->enter($__internal_c31784dc9ad0ed9eee46f25c5c1ac47a845356352ed49c8a1cf5a1bd0c3c10b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":storeproduct:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31784dc9ad0ed9eee46f25c5c1ac47a845356352ed49c8a1cf5a1bd0c3c10b3->leave($__internal_c31784dc9ad0ed9eee46f25c5c1ac47a845356352ed49c8a1cf5a1bd0c3c10b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a27f2f641dcc87c1b7753966d2a13ed69a2689ebfbe4483efc160145a678e2d = $this->env->getExtension("native_profiler");
        $__internal_0a27f2f641dcc87c1b7753966d2a13ed69a2689ebfbe4483efc160145a678e2d->enter($__internal_0a27f2f641dcc87c1b7753966d2a13ed69a2689ebfbe4483efc160145a678e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>StoreProduct</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storeProduct"]) ? $context["storeProduct"] : $this->getContext($context, "storeProduct")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storeProduct"]) ? $context["storeProduct"] : $this->getContext($context, "storeProduct")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("storeproduct_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storeproduct_edit", array("id" => $this->getAttribute((isset($context["storeProduct"]) ? $context["storeProduct"] : $this->getContext($context, "storeProduct")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0a27f2f641dcc87c1b7753966d2a13ed69a2689ebfbe4483efc160145a678e2d->leave($__internal_0a27f2f641dcc87c1b7753966d2a13ed69a2689ebfbe4483efc160145a678e2d_prof);

    }

    public function getTemplateName()
    {
        return ":storeproduct:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>StoreProduct</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ storeProduct.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Price</th>*/
/*                 <td>{{ storeProduct.price }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('storeproduct_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('storeproduct_edit', { 'id': storeProduct.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

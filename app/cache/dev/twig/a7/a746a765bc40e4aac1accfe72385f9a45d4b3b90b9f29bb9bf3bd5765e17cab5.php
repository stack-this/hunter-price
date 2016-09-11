<?php

/* :store:show.html.twig */
class __TwigTemplate_b87ed7bf3e18c45519ce7e5652a9d418f8085b9b85da832f25d3a64c45f44fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":store:show.html.twig", 1);
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
        $__internal_0d31e70fb45a147ba1623e1e4cd7cb3207694718e021a956f969bae5e10704df = $this->env->getExtension("native_profiler");
        $__internal_0d31e70fb45a147ba1623e1e4cd7cb3207694718e021a956f969bae5e10704df->enter($__internal_0d31e70fb45a147ba1623e1e4cd7cb3207694718e021a956f969bae5e10704df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":store:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d31e70fb45a147ba1623e1e4cd7cb3207694718e021a956f969bae5e10704df->leave($__internal_0d31e70fb45a147ba1623e1e4cd7cb3207694718e021a956f969bae5e10704df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf12851bd59def2a494696b0b60dce5aa8a7786e44d3c9a636c479ce2ea3a44 = $this->env->getExtension("native_profiler");
        $__internal_fcf12851bd59def2a494696b0b60dce5aa8a7786e44d3c9a636c479ce2ea3a44->enter($__internal_fcf12851bd59def2a494696b0b60dce5aa8a7786e44d3c9a636c479ce2ea3a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Store</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("store_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_edit", array("id" => $this->getAttribute((isset($context["store"]) ? $context["store"] : $this->getContext($context, "store")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fcf12851bd59def2a494696b0b60dce5aa8a7786e44d3c9a636c479ce2ea3a44->leave($__internal_fcf12851bd59def2a494696b0b60dce5aa8a7786e44d3c9a636c479ce2ea3a44_prof);

    }

    public function getTemplateName()
    {
        return ":store:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Store</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ store.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/*                 <td>{{ store.location }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Address</th>*/
/*                 <td>{{ store.address }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phone</th>*/
/*                 <td>{{ store.phone }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('store_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('store_edit', { 'id': store.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

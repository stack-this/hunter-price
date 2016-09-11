<?php

/* :store:index.html.twig */
class __TwigTemplate_b316c32523c997893c0091bf12f38f07468b2ae92d93c2c6378ecfa4c5b08560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":store:index.html.twig", 1);
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
        $__internal_e40b7c0a045d90694f90d84e38d257a0c6bfe4ef9182dbc84584fe071c2854f3 = $this->env->getExtension("native_profiler");
        $__internal_e40b7c0a045d90694f90d84e38d257a0c6bfe4ef9182dbc84584fe071c2854f3->enter($__internal_e40b7c0a045d90694f90d84e38d257a0c6bfe4ef9182dbc84584fe071c2854f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":store:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40b7c0a045d90694f90d84e38d257a0c6bfe4ef9182dbc84584fe071c2854f3->leave($__internal_e40b7c0a045d90694f90d84e38d257a0c6bfe4ef9182dbc84584fe071c2854f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d999ed64e2fe3787511da16d27a7f08ea77fa23b561ecfcf54ae11a1fd71f8 = $this->env->getExtension("native_profiler");
        $__internal_a2d999ed64e2fe3787511da16d27a7f08ea77fa23b561ecfcf54ae11a1fd71f8->enter($__internal_a2d999ed64e2fe3787511da16d27a7f08ea77fa23b561ecfcf54ae11a1fd71f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Store list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Location</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : $this->getContext($context, "stores")));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_show", array("id" => $this->getAttribute($context["store"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "phone", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_show", array("id" => $this->getAttribute($context["store"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_edit", array("id" => $this->getAttribute($context["store"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("store_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a2d999ed64e2fe3787511da16d27a7f08ea77fa23b561ecfcf54ae11a1fd71f8->leave($__internal_a2d999ed64e2fe3787511da16d27a7f08ea77fa23b561ecfcf54ae11a1fd71f8_prof);

    }

    public function getTemplateName()
    {
        return ":store:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Store list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Location</th>*/
/*                 <th>Address</th>*/
/*                 <th>Phone</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for store in stores %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('store_show', { 'id': store.id }) }}">{{ store.id }}</a></td>*/
/*                 <td>{{ store.location }}</td>*/
/*                 <td>{{ store.address }}</td>*/
/*                 <td>{{ store.phone }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('store_show', { 'id': store.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('store_edit', { 'id': store.id }) }}">edit</a>*/
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
/*             <a href="{{ path('store_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

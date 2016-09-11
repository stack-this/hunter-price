<?php

/* :users:index.html.twig */
class __TwigTemplate_b8dde4d786381ce8048511e3728c6f3004e99546db92f6d8e9612313b52c22a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:index.html.twig", 1);
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
        $__internal_f67ff7c2031cbf94f196e0fc358d96337fa35bba2a3719881656902a4dd334cb = $this->env->getExtension("native_profiler");
        $__internal_f67ff7c2031cbf94f196e0fc358d96337fa35bba2a3719881656902a4dd334cb->enter($__internal_f67ff7c2031cbf94f196e0fc358d96337fa35bba2a3719881656902a4dd334cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67ff7c2031cbf94f196e0fc358d96337fa35bba2a3719881656902a4dd334cb->leave($__internal_f67ff7c2031cbf94f196e0fc358d96337fa35bba2a3719881656902a4dd334cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_424ceb403f9886da45e42c0c8f41dbc5a342b54a8a4545f07848e047be713bfd = $this->env->getExtension("native_profiler");
        $__internal_424ceb403f9886da45e42c0c8f41dbc5a342b54a8a4545f07848e047be713bfd->enter($__internal_424ceb403f9886da45e42c0c8f41dbc5a342b54a8a4545f07848e047be713bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nickname</th>
                <th>Password</th>
                <th>Email</th>
                <th>Range</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "range", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("users_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_424ceb403f9886da45e42c0c8f41dbc5a342b54a8a4545f07848e047be713bfd->leave($__internal_424ceb403f9886da45e42c0c8f41dbc5a342b54a8a4545f07848e047be713bfd_prof);

    }

    public function getTemplateName()
    {
        return ":users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Users list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nickname</th>*/
/*                 <th>Password</th>*/
/*                 <th>Email</th>*/
/*                 <th>Range</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('users_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{{ user.nickname }}</td>*/
/*                 <td>{{ user.password }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.range }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('users_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('users_edit', { 'id': user.id }) }}">edit</a>*/
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
/*             <a href="{{ path('users_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

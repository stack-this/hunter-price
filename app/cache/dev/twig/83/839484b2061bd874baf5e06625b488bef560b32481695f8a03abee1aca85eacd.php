<?php

/* :lists:index.html.twig */
class __TwigTemplate_2aa213ce03b6ed97ad9440f6a5d0c25e113831be2bb3270353b685827f402b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lists:index.html.twig", 1);
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
        $__internal_540b3447c0908882ebc09d093ac86955520107862b495158ffc76627c8ffa0c4 = $this->env->getExtension("native_profiler");
        $__internal_540b3447c0908882ebc09d093ac86955520107862b495158ffc76627c8ffa0c4->enter($__internal_540b3447c0908882ebc09d093ac86955520107862b495158ffc76627c8ffa0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lists:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540b3447c0908882ebc09d093ac86955520107862b495158ffc76627c8ffa0c4->leave($__internal_540b3447c0908882ebc09d093ac86955520107862b495158ffc76627c8ffa0c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97dcc87604ca24c4c1bafac6a03ebb266060b95856da8537df35db3697e79f27 = $this->env->getExtension("native_profiler");
        $__internal_97dcc87604ca24c4c1bafac6a03ebb266060b95856da8537df35db3697e79f27->enter($__internal_97dcc87604ca24c4c1bafac6a03ebb266060b95856da8537df35db3697e79f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lists list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lists_show", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["list"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lists_show", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lists_edit", array("id" => $this->getAttribute($context["list"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("lists_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_97dcc87604ca24c4c1bafac6a03ebb266060b95856da8537df35db3697e79f27->leave($__internal_97dcc87604ca24c4c1bafac6a03ebb266060b95856da8537df35db3697e79f27_prof);

    }

    public function getTemplateName()
    {
        return ":lists:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lists list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for list in lists %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('lists_show', { 'id': list.id }) }}">{{ list.id }}</a></td>*/
/*                 <td>{{ list.name }}</td>*/
/*                 <td>{% if list.date %}{{ list.date|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('lists_show', { 'id': list.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('lists_edit', { 'id': list.id }) }}">edit</a>*/
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
/*             <a href="{{ path('lists_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

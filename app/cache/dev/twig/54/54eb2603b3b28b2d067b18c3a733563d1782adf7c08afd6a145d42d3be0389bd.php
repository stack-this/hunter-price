<?php

/* :users:new.html.twig */
class __TwigTemplate_ddb1c6a6f6443c4ece543a3553e1b49b4b98bbda117e071ab017fe16d2b52388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:new.html.twig", 1);
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
        $__internal_dc1de4931b356b3afef2efe7386e42753ea5a61c8eaa17a010712d05b3dd25bf = $this->env->getExtension("native_profiler");
        $__internal_dc1de4931b356b3afef2efe7386e42753ea5a61c8eaa17a010712d05b3dd25bf->enter($__internal_dc1de4931b356b3afef2efe7386e42753ea5a61c8eaa17a010712d05b3dd25bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc1de4931b356b3afef2efe7386e42753ea5a61c8eaa17a010712d05b3dd25bf->leave($__internal_dc1de4931b356b3afef2efe7386e42753ea5a61c8eaa17a010712d05b3dd25bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d597217027e68651d8e59bd686da37d6d34cd0382e33fcae96dafd9557997f08 = $this->env->getExtension("native_profiler");
        $__internal_d597217027e68651d8e59bd686da37d6d34cd0382e33fcae96dafd9557997f08->enter($__internal_d597217027e68651d8e59bd686da37d6d34cd0382e33fcae96dafd9557997f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("users_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d597217027e68651d8e59bd686da37d6d34cd0382e33fcae96dafd9557997f08->leave($__internal_d597217027e68651d8e59bd686da37d6d34cd0382e33fcae96dafd9557997f08_prof);

    }

    public function getTemplateName()
    {
        return ":users:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Users creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('users_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

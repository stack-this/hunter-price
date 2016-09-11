<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_98ffb44da872a3da95cb1ce4650a696a86a9a565298337abd20a4fbb6ef452f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f570bc6bce9589a605916b9c3a5d8999d58938408bef8b620daf1a822110005 = $this->env->getExtension("native_profiler");
        $__internal_1f570bc6bce9589a605916b9c3a5d8999d58938408bef8b620daf1a822110005->enter($__internal_1f570bc6bce9589a605916b9c3a5d8999d58938408bef8b620daf1a822110005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f570bc6bce9589a605916b9c3a5d8999d58938408bef8b620daf1a822110005->leave($__internal_1f570bc6bce9589a605916b9c3a5d8999d58938408bef8b620daf1a822110005_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bcd57ad245437c4c95f498fee0bb1309892ff2b9f8414530fe28edf7cdfc6464 = $this->env->getExtension("native_profiler");
        $__internal_bcd57ad245437c4c95f498fee0bb1309892ff2b9f8414530fe28edf7cdfc6464->enter($__internal_bcd57ad245437c4c95f498fee0bb1309892ff2b9f8414530fe28edf7cdfc6464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bcd57ad245437c4c95f498fee0bb1309892ff2b9f8414530fe28edf7cdfc6464->leave($__internal_bcd57ad245437c4c95f498fee0bb1309892ff2b9f8414530fe28edf7cdfc6464_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a435bc4ceaa7468c72f042d4cad85261dd08117c8d8a4a74246e88735988c12 = $this->env->getExtension("native_profiler");
        $__internal_0a435bc4ceaa7468c72f042d4cad85261dd08117c8d8a4a74246e88735988c12->enter($__internal_0a435bc4ceaa7468c72f042d4cad85261dd08117c8d8a4a74246e88735988c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a435bc4ceaa7468c72f042d4cad85261dd08117c8d8a4a74246e88735988c12->leave($__internal_0a435bc4ceaa7468c72f042d4cad85261dd08117c8d8a4a74246e88735988c12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd7394152ad40e1c65b9a5604567dfe74609473cfc773e61816372f07534aa3a = $this->env->getExtension("native_profiler");
        $__internal_dd7394152ad40e1c65b9a5604567dfe74609473cfc773e61816372f07534aa3a->enter($__internal_dd7394152ad40e1c65b9a5604567dfe74609473cfc773e61816372f07534aa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd7394152ad40e1c65b9a5604567dfe74609473cfc773e61816372f07534aa3a->leave($__internal_dd7394152ad40e1c65b9a5604567dfe74609473cfc773e61816372f07534aa3a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

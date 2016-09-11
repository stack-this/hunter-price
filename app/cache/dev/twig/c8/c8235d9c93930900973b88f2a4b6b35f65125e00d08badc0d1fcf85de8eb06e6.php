<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_29fd2fd2471dc6f3fd70c37815783fca1337f102807a77ee55297d6685bb7612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_440b4cc15036b5d93ee82c375b82157c2bd28ded38d104e134d41200c733323d = $this->env->getExtension("native_profiler");
        $__internal_440b4cc15036b5d93ee82c375b82157c2bd28ded38d104e134d41200c733323d->enter($__internal_440b4cc15036b5d93ee82c375b82157c2bd28ded38d104e134d41200c733323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440b4cc15036b5d93ee82c375b82157c2bd28ded38d104e134d41200c733323d->leave($__internal_440b4cc15036b5d93ee82c375b82157c2bd28ded38d104e134d41200c733323d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a79fec4937290e610d724d3a507a0c724d7b2d577996447ed12a95ff5d70433 = $this->env->getExtension("native_profiler");
        $__internal_7a79fec4937290e610d724d3a507a0c724d7b2d577996447ed12a95ff5d70433->enter($__internal_7a79fec4937290e610d724d3a507a0c724d7b2d577996447ed12a95ff5d70433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a79fec4937290e610d724d3a507a0c724d7b2d577996447ed12a95ff5d70433->leave($__internal_7a79fec4937290e610d724d3a507a0c724d7b2d577996447ed12a95ff5d70433_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6e81440fa5d75d3103f75a808a34f4611e7194be470b636cc638900fd26b0bc = $this->env->getExtension("native_profiler");
        $__internal_e6e81440fa5d75d3103f75a808a34f4611e7194be470b636cc638900fd26b0bc->enter($__internal_e6e81440fa5d75d3103f75a808a34f4611e7194be470b636cc638900fd26b0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e6e81440fa5d75d3103f75a808a34f4611e7194be470b636cc638900fd26b0bc->leave($__internal_e6e81440fa5d75d3103f75a808a34f4611e7194be470b636cc638900fd26b0bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

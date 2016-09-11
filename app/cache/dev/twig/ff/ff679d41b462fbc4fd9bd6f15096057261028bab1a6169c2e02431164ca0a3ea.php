<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6e7d65aa1cd6b9f27f5bacf46e027a733696f4c2dabf0ca977a7efb1d39baee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_11393faf5cfbdc8d5704d7d0b039b69d64ec5c9bf319a9cccf48d402ad9cdb6f = $this->env->getExtension("native_profiler");
        $__internal_11393faf5cfbdc8d5704d7d0b039b69d64ec5c9bf319a9cccf48d402ad9cdb6f->enter($__internal_11393faf5cfbdc8d5704d7d0b039b69d64ec5c9bf319a9cccf48d402ad9cdb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11393faf5cfbdc8d5704d7d0b039b69d64ec5c9bf319a9cccf48d402ad9cdb6f->leave($__internal_11393faf5cfbdc8d5704d7d0b039b69d64ec5c9bf319a9cccf48d402ad9cdb6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06abc255851bde838ef715299110a9e6d2b3429946ae8266b3a8d2a3a3087b49 = $this->env->getExtension("native_profiler");
        $__internal_06abc255851bde838ef715299110a9e6d2b3429946ae8266b3a8d2a3a3087b49->enter($__internal_06abc255851bde838ef715299110a9e6d2b3429946ae8266b3a8d2a3a3087b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06abc255851bde838ef715299110a9e6d2b3429946ae8266b3a8d2a3a3087b49->leave($__internal_06abc255851bde838ef715299110a9e6d2b3429946ae8266b3a8d2a3a3087b49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c4fead1010844aba9ddb92252d358d1de49c1925acf8afed2a3314386fb9a45 = $this->env->getExtension("native_profiler");
        $__internal_7c4fead1010844aba9ddb92252d358d1de49c1925acf8afed2a3314386fb9a45->enter($__internal_7c4fead1010844aba9ddb92252d358d1de49c1925acf8afed2a3314386fb9a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c4fead1010844aba9ddb92252d358d1de49c1925acf8afed2a3314386fb9a45->leave($__internal_7c4fead1010844aba9ddb92252d358d1de49c1925acf8afed2a3314386fb9a45_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1068f007d391d363fde2eaa8d5355dbc9f29c5d0a6c9877ad739dd25d827c9c4 = $this->env->getExtension("native_profiler");
        $__internal_1068f007d391d363fde2eaa8d5355dbc9f29c5d0a6c9877ad739dd25d827c9c4->enter($__internal_1068f007d391d363fde2eaa8d5355dbc9f29c5d0a6c9877ad739dd25d827c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1068f007d391d363fde2eaa8d5355dbc9f29c5d0a6c9877ad739dd25d827c9c4->leave($__internal_1068f007d391d363fde2eaa8d5355dbc9f29c5d0a6c9877ad739dd25d827c9c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

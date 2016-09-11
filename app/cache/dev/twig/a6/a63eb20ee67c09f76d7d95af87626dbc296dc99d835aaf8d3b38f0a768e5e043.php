<?php

/* base.html.twig */
class __TwigTemplate_26bf57895f21865b9ffdd5347edb97a85052bfe0b6594c3ad444c9190f458aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39f228041b7d6379aad775ad7b972737f16088d755377ec7b3a7101eb1aeb6a1 = $this->env->getExtension("native_profiler");
        $__internal_39f228041b7d6379aad775ad7b972737f16088d755377ec7b3a7101eb1aeb6a1->enter($__internal_39f228041b7d6379aad775ad7b972737f16088d755377ec7b3a7101eb1aeb6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <!-- <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script> -->
</head>
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_39f228041b7d6379aad775ad7b972737f16088d755377ec7b3a7101eb1aeb6a1->leave($__internal_39f228041b7d6379aad775ad7b972737f16088d755377ec7b3a7101eb1aeb6a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_955be48f3c5c89be76c7308c911c644d2b6c362b863a7ce18e00e197f7ca244e = $this->env->getExtension("native_profiler");
        $__internal_955be48f3c5c89be76c7308c911c644d2b6c362b863a7ce18e00e197f7ca244e->enter($__internal_955be48f3c5c89be76c7308c911c644d2b6c362b863a7ce18e00e197f7ca244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_955be48f3c5c89be76c7308c911c644d2b6c362b863a7ce18e00e197f7ca244e->leave($__internal_955be48f3c5c89be76c7308c911c644d2b6c362b863a7ce18e00e197f7ca244e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a342ea6c896e5ad85ef0dc5a3e31ac5a81a764482366c149a3b1ff68c45483e = $this->env->getExtension("native_profiler");
        $__internal_9a342ea6c896e5ad85ef0dc5a3e31ac5a81a764482366c149a3b1ff68c45483e->enter($__internal_9a342ea6c896e5ad85ef0dc5a3e31ac5a81a764482366c149a3b1ff68c45483e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a342ea6c896e5ad85ef0dc5a3e31ac5a81a764482366c149a3b1ff68c45483e->leave($__internal_9a342ea6c896e5ad85ef0dc5a3e31ac5a81a764482366c149a3b1ff68c45483e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7890cc3f7128a9b732229402ccbc024f13015412f1d1a8c698f393af9304edb9 = $this->env->getExtension("native_profiler");
        $__internal_7890cc3f7128a9b732229402ccbc024f13015412f1d1a8c698f393af9304edb9->enter($__internal_7890cc3f7128a9b732229402ccbc024f13015412f1d1a8c698f393af9304edb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7890cc3f7128a9b732229402ccbc024f13015412f1d1a8c698f393af9304edb9->leave($__internal_7890cc3f7128a9b732229402ccbc024f13015412f1d1a8c698f393af9304edb9_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_472002983cecdc6bb27d2bd6d507f2c191d1ceece0584ed126cc546da4cede84 = $this->env->getExtension("native_profiler");
        $__internal_472002983cecdc6bb27d2bd6d507f2c191d1ceece0584ed126cc546da4cede84->enter($__internal_472002983cecdc6bb27d2bd6d507f2c191d1ceece0584ed126cc546da4cede84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <!-- Include all JavaScripts, compiled by Assetic -->
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_472002983cecdc6bb27d2bd6d507f2c191d1ceece0584ed126cc546da4cede84->leave($__internal_472002983cecdc6bb27d2bd6d507f2c191d1ceece0584ed126cc546da4cede84_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  110 => 18,  107 => 17,  101 => 16,  90 => 15,  79 => 6,  67 => 5,  58 => 22,  55 => 16,  53 => 15,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" media="screen">*/
/*         <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/*         <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->*/
/* </head>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->*/
/*             <script src="{{ asset('js/jquery.js') }}"></script>*/
/*             <!-- Include all JavaScripts, compiled by Assetic -->*/
/*             <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

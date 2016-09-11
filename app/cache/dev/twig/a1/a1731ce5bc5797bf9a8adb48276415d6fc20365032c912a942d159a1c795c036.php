<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_76c4d0fd8f3e2e7b01d2653c0d426e4d58bddcbdc56a081ed9c9f0575386d6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73dc7cdd5a6f9db68113944ade78201d261acd2cd463171fc7aec6a223e43980 = $this->env->getExtension("native_profiler");
        $__internal_73dc7cdd5a6f9db68113944ade78201d261acd2cd463171fc7aec6a223e43980->enter($__internal_73dc7cdd5a6f9db68113944ade78201d261acd2cd463171fc7aec6a223e43980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
</head>

<body>

";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>
";
        
        $__internal_73dc7cdd5a6f9db68113944ade78201d261acd2cd463171fc7aec6a223e43980->leave($__internal_73dc7cdd5a6f9db68113944ade78201d261acd2cd463171fc7aec6a223e43980_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c3655c90a59e9eef34f3825c4b24e73e98e2a892c0cec9c7cd746e283ee4f33 = $this->env->getExtension("native_profiler");
        $__internal_4c3655c90a59e9eef34f3825c4b24e73e98e2a892c0cec9c7cd746e283ee4f33->enter($__internal_4c3655c90a59e9eef34f3825c4b24e73e98e2a892c0cec9c7cd746e283ee4f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_4c3655c90a59e9eef34f3825c4b24e73e98e2a892c0cec9c7cd746e283ee4f33->leave($__internal_4c3655c90a59e9eef34f3825c4b24e73e98e2a892c0cec9c7cd746e283ee4f33_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_31ca77e0be50c5f5817fba113ce8335313ec5e925169874395592fa81e563cdb = $this->env->getExtension("native_profiler");
        $__internal_31ca77e0be50c5f5817fba113ce8335313ec5e925169874395592fa81e563cdb->enter($__internal_31ca77e0be50c5f5817fba113ce8335313ec5e925169874395592fa81e563cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_31ca77e0be50c5f5817fba113ce8335313ec5e925169874395592fa81e563cdb->leave($__internal_31ca77e0be50c5f5817fba113ce8335313ec5e925169874395592fa81e563cdb_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_50951a814474e9f7e4b03e5b10f22946214785551c87d8306a2b1b135a4739ec = $this->env->getExtension("native_profiler");
        $__internal_50951a814474e9f7e4b03e5b10f22946214785551c87d8306a2b1b135a4739ec->enter($__internal_50951a814474e9f7e4b03e5b10f22946214785551c87d8306a2b1b135a4739ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50951a814474e9f7e4b03e5b10f22946214785551c87d8306a2b1b135a4739ec->leave($__internal_50951a814474e9f7e4b03e5b10f22946214785551c87d8306a2b1b135a4739ec_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  88 => 12,  76 => 6,  61 => 23,  55 => 19,  53 => 18,  46 => 13,  44 => 12,  39 => 10,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/* <title>{% block title %}BraincraftedBootstrapBundle by Florian Eckerstorfer{% endblock title %}</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/* <!-- Bootstrap -->*/
/* <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" media="screen">*/
/* */
/* {% block head %}{% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {% block body %}{% endblock body %}*/
/* */
/* <!-- JavaScript plugins (requires jQuery) -->*/
/* <script src="//code.jquery.com/jquery.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/* */
/* <!-- Optionally enable responsive features in IE8 -->*/
/* <script src="js/respond.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */

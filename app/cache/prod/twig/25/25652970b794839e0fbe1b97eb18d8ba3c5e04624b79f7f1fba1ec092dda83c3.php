<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_8e36df8bff20b079c812881c870ed35ef8520077e4f3e85637584a5629d8f3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_root($context, array $blocks = array())
    {
        // line 24
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("currentDepth" => 0));
        // line 25
        if ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array(), "any", true, true)) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array()) == "current"))) {
            // line 26
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("currentClass" => "active"));
            // line 27
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("ancestorClass" => "active"));
        }
        // line 29
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array());
        // line 30
        $this->displayBlock("list", $context, $blocks);
    }

    // line 33
    public function block_list($context, array $blocks = array())
    {
        // line 34
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 35
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")))));
            // line 36
            echo "
    ";
            // line 37
            $context["listClass"] = "";
            // line 38
            echo "    ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "stacked-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "justified-tabs"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 44
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 46
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "justified-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "stacked-pills"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 50
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "list"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 52
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "navbar"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 54
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "navbar-right"))) {
                // line 55
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 56
                echo "    ";
            }
            // line 57
            echo "
    ";
            // line 58
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array()) == "right"))) {
                // line 59
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : null), "")) : ("")) . " pull-right"));
                // line 60
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array()) == "left"))) {
                // line 61
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : null), "")) : ("")) . "pull-left"));
                // line 62
                echo "    ";
            }
            // line 63
            echo "    
    ";
            // line 64
            $context["listClass"] = ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) == 0)) ? (((isset($context["listClass"]) ? $context["listClass"] : null) . " nav")) : ((isset($context["listClass"]) ? $context["listClass"] : null)));
            // line 65
            echo "
    ";
            // line 66
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim((((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["listClass"]) ? $context["listClass"] : null)))));
            // line 67
            echo "
    <ul";
            // line 68
            echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 69
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 74
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true))))) {
            // line 77
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array()), "")) : ("")) . " dropdown-menu"))));
            // line 78
            echo "        <ul";
            echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 79
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 85
    public function block_listList($context, array $blocks = array())
    {
        // line 86
        ob_start();
        // line 87
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 88
            echo "        <ul";
            echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 89
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_children($context, array $blocks = array())
    {
        // line 97
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 98
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 100
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()))) {
            // line 101
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth", array()) - 1)));
        }
        // line 103
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("currentDepth" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) + 1)));
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 109
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 112
    public function block_item($context, array $blocks = array())
    {
        // line 113
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array())) {
            // line 115
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 116
            if (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array())))) {
                // line 117
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array())));
            } elseif (((            // line 118
array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array())), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array())))) {
                // line 119
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", array())));
            }
            // line 121
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", array())) {
                // line 122
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", array())));
            }
            // line 124
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", array())) {
                // line 125
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", array())));
            }
            // line 127
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "list")) ||  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)))) {
                // line 128
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "nav-header"));
            } elseif (((($this->getAttribute(            // line 129
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true))))) {
                // line 130
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "dropdown"));
            }
            // line 133
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", array());
            // line 135
            if ((((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "navbar")) && $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array()))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1))) {
                // line 136
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute(            // line 137
(isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array())))) {
                // line 138
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "divider"));
            }
            // line 141
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 142
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 145
            echo "    <li";
            echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 146
            if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array())))) {
            } elseif ((((($this->getAttribute(            // line 147
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)) && (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()) === true))))) {
                // line 148
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute(            // line 149
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)) && (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "dropdown", array()) === false)) || $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array(0 => false), "method")))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 151
(isset($context["item"]) ? $context["item"] : null), "uri", array())) && ((array_key_exists("matcher", $context) &&  !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
                // line 152
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 153
(isset($context["item"]) ? $context["item"] : null), "uri", array())) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array())) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
                // line 154
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 156
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 159
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 160
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()))));
            // line 161
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 162
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()) == "list") ||  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentDepth", array()) === 1)))) {
                // line 163
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute(            // line 164
(isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 165
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 167
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 169
            echo "    </li>
";
        }
    }

    // line 173
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 175
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 176
        ob_start();
        // line 177
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array());
        // line 178
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), array("class" => trim(((($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array()), "")) : ("")) . " dropdown-toggle"))));
        // line 179
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), array("data-toggle" => "dropdown"));
        // line 180
        echo "    <a href=\"#\"";
        echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 184
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 185
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 189
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $context["__internal_1a68a2f210233a3732ae0d5eb551e8884ac700e251a798308280f7e398ce1dd1"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 191
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")));
        } else {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")), "html", null, true));
        }
    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 6,  476 => 5,  472 => 4,  460 => 3,  450 => 191,  440 => 189,  435 => 185,  432 => 184,  422 => 180,  419 => 179,  416 => 178,  413 => 177,  411 => 176,  408 => 175,  396 => 173,  390 => 169,  386 => 167,  382 => 165,  380 => 164,  377 => 163,  375 => 162,  373 => 161,  371 => 160,  369 => 159,  365 => 156,  361 => 154,  359 => 153,  356 => 152,  354 => 151,  351 => 150,  349 => 149,  346 => 148,  344 => 147,  342 => 146,  338 => 145,  335 => 142,  333 => 141,  330 => 138,  328 => 137,  326 => 136,  324 => 135,  322 => 133,  319 => 130,  317 => 129,  315 => 128,  313 => 127,  310 => 125,  308 => 124,  305 => 122,  303 => 121,  300 => 119,  298 => 118,  296 => 117,  294 => 116,  292 => 115,  290 => 113,  287 => 112,  283 => 109,  281 => 108,  264 => 105,  247 => 104,  245 => 103,  242 => 101,  240 => 100,  238 => 98,  236 => 97,  233 => 95,  224 => 89,  219 => 88,  216 => 87,  214 => 86,  211 => 85,  202 => 79,  197 => 78,  194 => 77,  191 => 76,  189 => 75,  186 => 74,  178 => 69,  174 => 68,  171 => 67,  169 => 66,  166 => 65,  164 => 64,  161 => 63,  158 => 62,  155 => 61,  152 => 60,  149 => 59,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  135 => 54,  132 => 53,  129 => 52,  126 => 51,  123 => 50,  120 => 49,  117 => 48,  114 => 47,  111 => 46,  108 => 45,  105 => 44,  102 => 43,  99 => 42,  96 => 41,  93 => 40,  90 => 39,  87 => 38,  85 => 37,  82 => 36,  79 => 35,  77 => 34,  74 => 33,  70 => 30,  68 => 29,  64 => 27,  61 => 26,  59 => 25,  57 => 24,  54 => 19,  47 => 15,  45 => 14,  42 => 13,  38 => 1,  36 => 11,  11 => 1,);
    }
}
/* {% extends 'knp_menu_base.html.twig' %}*/
/* */
/* {% macro attributes(attributes) %}*/
/* {% for name, value in attributes %}*/
/*     {%- if value is not none and value is not same as (false) -%}*/
/*         {{- ' %s="%s"'|format(name, value is same as (true) ? name|e : value|e)|raw -}}*/
/*     {%- endif -%}*/
/* {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% from _self import attributes as attributes %}*/
/* */
/* {% block compressed_root %}*/
/* {% spaceless %}*/
/* {{ block('root') }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block root %}*/
/* {#*/
/*     Twitter Bootstrap uses the CSS class "active" to indicate*/
/*     the current item, so lets change that.*/
/* #}*/
/* {% set options = options|merge({'currentDepth': 0}) %}*/
/* {% if options.style is defined and options.currentClass is defined and options.currentClass == 'current' %}*/
/*     {% set options = options|merge({'currentClass': 'active'}) %}*/
/*     {% set options = options|merge({'ancestorClass': 'active'}) %}*/
/* {% endif %}*/
/* {% set listAttributes = item.childrenAttributes %}*/
/* {{ block('list') -}}*/
/* {% endblock %}*/
/* */
/* {% block list %}*/
/* {% if item.hasChildren and options.depth is not same as (0) and item.displayChildren %}*/
/*     {% set listAttributes = listAttributes|merge({'class': listAttributes.class|default('')|trim}) %}*/
/* */
/*     {% set listClass = '' %}*/
/*     {% if options.style is defined and options.style == 'tabs' %}*/
/*         {% set listClass = 'nav-tabs' %}*/
/*     {% elseif options.style is defined and options.style == 'stacked-tabs' %}*/
/*         {% set listClass = 'nav-tabs nav-stacked' %}*/
/*     {% elseif options.style is defined and options.style == 'justified-tabs' %}*/
/*         {% set listClass = 'nav-tabs nav-justified' %}*/
/*     {% elseif options.style is defined and options.style == 'pills' %}*/
/*         {% set listClass = 'nav-pills' %}*/
/*     {% elseif options.style is defined and options.style == 'justified-pills' %}*/
/*         {% set listClass = 'nav-pills nav-justified' %}*/
/*     {% elseif options.style is defined and options.style == 'stacked-pills' %}*/
/*         {% set listClass = 'nav-pills nav-stacked' %}*/
/*     {% elseif options.style is defined and options.style == 'list' %}*/
/*         {% set listClass = 'nav-list' %}*/
/*     {% elseif options.style is defined and options.style == 'navbar' %}*/
/*         {% set listClass = 'navbar-nav' %}*/
/*     {% elseif options.style is defined and options.style == 'navbar-right' %}*/
/*         {% set listClass = 'navbar-nav navbar-right' %}*/
/*     {% endif %}*/
/* */
/*     {% if options.pull is defined and options.pull == 'right' %}*/
/*         {% set listClass = (listClass|default('') ~ ' pull-right')|trim %}*/
/*     {% elseif options.pull is defined and options.pull == 'left' %}*/
/*         {% set listClass = (listClass|default('') ~ 'pull-left')|trim %}*/
/*     {% endif %}*/
/*     */
/*     {% set listClass = (options.currentDepth == 0) ? listClass ~ ' nav' : listClass %}*/
/* */
/*     {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' ' ~ listClass)|trim}) %}*/
/* */
/*     <ul{{ attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block dropdownList %}*/
/* {% spaceless %}*/
/*     {% if item.hasChildren and options.depth is not same as (0) and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}*/
/*         {% set listAttributes = listAttributes|merge({'class': (listAttributes.class|default('') ~ ' dropdown-menu')|trim}) %}*/
/*         <ul{{ attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock dropdownList %}*/
/* */
/* {% block listList %}*/
/* {% spaceless %}*/
/*     {% if item.hasChildren and options.depth is not same as (0) and item.displayChildren %}*/
/*         <ul{{ attributes(listAttributes) }}>*/
/*             {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock listList %}*/
/* */
/* {% block children %}*/
/* {# save current variables #}*/
/* {% set currentOptions = options %}*/
/* {% set currentItem = item %}*/
/* {# update the depth for children #}*/
/* {% if options.depth is not none %}*/
/* {% set options = currentOptions|merge({'depth': currentOptions.depth - 1}) %}*/
/* {% endif %}*/
/* {% set options = options|merge({'currentDepth': options.currentDepth + 1}) %}*/
/* {% for item in currentItem.children %}*/
/*     {{ block('item') }}*/
/* {% endfor %}*/
/* {# restore current variables #}*/
/* {% set item = currentItem %}*/
/* {% set options = currentOptions %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/* {% if item.displayed %}*/
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*     {%- if (matcher is defined and matcher.isCurrent(item)) or (item.current is defined and item.current) %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*     {%- elseif (matcher is defined and matcher.isAncestor(item, options.depth)) or (item.currentAncestor is defined and item.currentAncestor) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.hasChildren and ((options.style is defined and options.style == 'list') or options.currentDepth is not same as (1)) %}*/
/*         {%- set classes = classes|merge(['nav-header']) %}*/
/*     {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*     {%- endif %}*/
/* */
/*     {%- set attributes = item.attributes %}*/
/* */
/*     {%- if options.style is defined and options.style == 'navbar' and attributes.divider is defined and attributes.divider is not empty and options.currentDepth is same as (1) %}*/
/*         {%- set classes = classes|merge(['divider-vertical']) %}*/
/*     {%- elseif attributes.divider is defined and attributes.divider is not empty %}*/
/*         {%- set classes = classes|merge(['divider']) %}*/
/*     {%- endif %}*/
/* */
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/* {# displaying the item #}*/
/*     <li{{ attributes(attributes) }}>*/
/*         {%- if attributes.divider is defined and attributes.divider is not empty %}*/
/*         {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and options.currentDepth is same as (1) and ((item.extras.dropdown is not defined and item.displayChildren is same as (true) or item.extras.dropdown is defined and item.extras.dropdown is same as (true) and item.displayChildren is same as (true))) %}*/
/*             {{ block('dropdownElement') }}*/
/*         {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] and options.currentDepth is same as (1) and ((item.extras.dropdown is defined and item.extras.dropdown is same as (false) or item.displayChildren(false) )) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- elseif item.uri is not empty and ((matcher is defined and not matcher.isCurrent(item)) or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- elseif item.uri is not empty and ((item.current is defined and not item.current) or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- else %}*/
/*             {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {%- if item.hasChildren and options.style is defined and (options.style == 'list' or options.currentDepth is not same as (1)) %}*/
/*             {{ block('listList') }}*/
/*         {%- elseif item.hasChildren and options.style is defined and options.style in ['tabs', 'justified-tabs', 'pills', 'justified-pills', 'navbar', 'navbar-right', 'navbar_justified'] %}*/
/*             {{ block('dropdownList') }}*/
/*         {%- else %}*/
/*             {{ block('list') }}*/
/*         {%- endif %}*/
/*     </li>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}<a href="{{ item.uri }}"{{ attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}*/
/* */
/* {% block dropdownElement %}*/
/* {% spaceless %}*/
/*     {% set labelAttributes = item.labelAttributes %}*/
/*     {% set labelAttributes = labelAttributes|merge({'class': (labelAttributes.class|default('') ~ ' dropdown-toggle')|trim}) %}*/
/*     {% set labelAttributes = labelAttributes|merge({'data-toggle': 'dropdown'}) %}*/
/*     <a href="#"{{ attributes(labelAttributes) }}>{{ block('label') }} <b class="caret"></b></a>*/
/* {% endspaceless %}*/
/* {% endblock dropdownElement %}*/
/* */
/* {% block dividerElement %}*/
/* {% spaceless %}*/
/* {% endspaceless %}*/
/* {% endblock dividerElement %}*/
/* */
/* {% block spanElement %}<span{{ attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}*/
/* */
/* {% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'messages'))|raw|parse_icons }}{% else %}{{ item.label|trans(item.getExtra('translation_params', {}), item.getExtra('translation_domain', 'messages'))|parse_icons }}{% endif %}{% endblock %}*/

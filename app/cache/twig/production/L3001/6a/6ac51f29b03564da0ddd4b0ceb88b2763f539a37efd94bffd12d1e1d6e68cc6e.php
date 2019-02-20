<?php

/* default_frame.twig */
class __TwigTemplate_ac5c495430c8de88ac1033a421098ccae2420b7682ad455085bb9c43e7202beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty(($context["subtitle"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty(($context["title"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        echo "</title>
";
        // line 28
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "author", array()))) {
            // line 29
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 31
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "description", array()))) {
            // line 32
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 34
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "keyword", array()))) {
            // line 35
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 37
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "meta_robots", array()))) {
            // line 38
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 40
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 41
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "meta_tags", array()))) {
            // line 42
            echo "        ";
            echo $this->getAttribute(($context["PageLayout"] ?? null), "meta_tags", array());
            echo "
    ";
        }
        // line 44
        echo "    ";
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 45
        echo "<link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">

   <!-- 必要なメタタグ -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<!-- for original theme CSS -->
";
        // line 56
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 57
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>

";
        // line 62
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Head", array())) {
            // line 63
            echo "    ";
            // line 64
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Head", array())));
            echo "
    ";
        }
        // line 68
        echo "
</head>
<body id=\"page_";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\" style=\"padding-top:50px\">
  <!-- オプションのJavaScript -->
  <!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM crossorigin=\"anonymous\"></script>
    
    <header id=\"header\">
        <div class=\"container-fluid inner\">
            <div class=\"row\">
            ";
        // line 81
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Header", array())) {
            // line 82
            echo "                ";
            // line 83
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Header", array())));
            echo "
                ";
            // line 85
            echo "            ";
        }
        // line 86
        echo "            ";
        // line 87
        echo "            <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
        </div>
        </div>
    </header>

    <div id=\"contents\" class=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "theme", array()), "html", null, true);
        echo "\">

        <div id=\"contents_top\">
            ";
        // line 96
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "ContentsTop", array())) {
            // line 97
            echo "                ";
            // line 98
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "ContentsTop", array())));
            echo "
                ";
            // line 100
            echo "            ";
        }
        // line 101
        echo "            ";
        // line 102
        echo "        </div>

        <div class=\"container-fluid inner\">
            ";
        // line 106
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "SideLeft", array())) {
            // line 107
            echo "                <div id=\"side_left\" class=\"side\">
                    ";
            // line 109
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "SideLeft", array())));
            echo "
                    ";
            // line 111
            echo "                </div>
            ";
        }
        // line 113
        echo "            ";
        // line 114
        echo "
            <div id=\"main\">
                ";
        // line 117
        echo "                ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "MainTop", array())) {
            // line 118
            echo "                    <div id=\"main_top\">
                        ";
            // line 119
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 122
        echo "                ";
        // line 123
        echo "
                <div id=\"main_middle\">
                    ";
        // line 125
        $this->displayBlock('main', $context, $blocks);
        // line 126
        echo "                </div>

                ";
        // line 129
        echo "                ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "MainBottom", array())) {
            // line 130
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 131
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 134
        echo "                ";
        // line 135
        echo "            </div>

            ";
        // line 138
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "SideRight", array())) {
            // line 139
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 141
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "SideRight", array())));
            echo "
                    ";
            // line 143
            echo "                </div>
            ";
        }
        // line 145
        echo "            ";
        // line 146
        echo "
            ";
        // line 148
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "ContentsBottom", array())) {
            // line 149
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 151
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "ContentsBottom", array())));
            echo "
                    ";
            // line 153
            echo "                </div>
            ";
        }
        // line 155
        echo "            ";
        // line 156
        echo "
        </div>

        <footer id=\"footer\">
            ";
        // line 161
        echo "            ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Footer", array())) {
            // line 162
            echo "                ";
            // line 163
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Footer", array())));
            echo "
                ";
            // line 165
            echo "            ";
        }
        // line 166
        echo "            ";
        // line 167
        echo "
        </footer>

    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>

</div>

<div class=\"overlay\"></div>

<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 196
        $this->displayBlock('javascript', $context, $blocks);
        // line 197
        echo "</body>
</html>
";
    }

    // line 44
    public function block_meta_tags($context, array $blocks = array())
    {
    }

    // line 56
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 125
    public function block_main($context, array $blocks = array())
    {
    }

    // line 196
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 196,  402 => 125,  397 => 56,  392 => 44,  386 => 197,  384 => 196,  372 => 187,  362 => 182,  356 => 181,  350 => 180,  344 => 179,  330 => 167,  328 => 166,  325 => 165,  320 => 163,  318 => 162,  315 => 161,  309 => 156,  307 => 155,  303 => 153,  298 => 151,  295 => 149,  292 => 148,  289 => 146,  287 => 145,  283 => 143,  278 => 141,  275 => 139,  272 => 138,  268 => 135,  266 => 134,  260 => 131,  257 => 130,  254 => 129,  250 => 126,  248 => 125,  244 => 123,  242 => 122,  236 => 119,  233 => 118,  230 => 117,  226 => 114,  224 => 113,  220 => 111,  215 => 109,  212 => 107,  209 => 106,  204 => 102,  202 => 101,  199 => 100,  194 => 98,  192 => 97,  189 => 96,  183 => 92,  176 => 87,  174 => 86,  171 => 85,  166 => 83,  164 => 82,  161 => 81,  146 => 70,  142 => 68,  136 => 64,  134 => 63,  132 => 62,  125 => 59,  121 => 57,  119 => 56,  106 => 48,  100 => 47,  94 => 46,  89 => 45,  86 => 44,  80 => 42,  78 => 41,  75 => 40,  69 => 38,  67 => 37,  61 => 35,  59 => 34,  53 => 32,  51 => 31,  45 => 29,  43 => 28,  32 => 27,  26 => 23,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default_frame.twig", "/var/www/ec_trial/app/template/L3001/default_frame.twig");
    }
}

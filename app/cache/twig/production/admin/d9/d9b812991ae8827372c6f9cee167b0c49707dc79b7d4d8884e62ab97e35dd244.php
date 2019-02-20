<?php

/* nav.twig */
class __TwigTemplate_ccdc4b1fbf5e6ec414e5492bdf03c341341a252b1e2640088be6bc1e515062da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 22
        echo "
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "nav", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            if (!twig_in_filter((((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "baseUrl", array()) . "/") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_route", array())) . "/") . $this->getAttribute($context["level1"], "id", array())), ($context["AuthorityRoles"] ?? null))) {
                // line 24
                echo "    <li class=\"";
                if (($this->getAttribute($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getActiveMenus(($context["menus"] ?? null)), 0, array(), "array") == $this->getAttribute($context["level1"], "id", array()))) {
                    echo "active";
                }
                echo "\">
        ";
                // line 25
                if (($this->getAttribute($context["level1"], "has_child", array(), "any", true, true) && ($this->getAttribute($context["level1"], "has_child", array()) == true))) {
                    // line 26
                    echo "            <a class=\"toggle\">
                <svg class=\"cb ";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "icon", array()), "html", null, true);
                    echo "\"> <use xlink:href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "icon", array()), "html", null, true);
                    echo "\" /></svg>
                ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                    echo "
                <svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
            </a>
            <ul ";
                    // line 31
                    if (($this->getAttribute($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getActiveMenus(($context["menus"] ?? null)), 0, array(), "array") == $this->getAttribute($context["level1"], "id", array()))) {
                        echo "class=\"active\" style=\"display: block;\"";
                    }
                    echo ">
                ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level1"], "child", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        if (!twig_in_filter((((((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "baseUrl", array()) . "/") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_route", array())) . "/") . $this->getAttribute($context["level1"], "id", array())) . "/") . $this->getAttribute($context["level2"], "id", array())), ($context["AuthorityRoles"] ?? null))) {
                            // line 33
                            echo "                    ";
                            if (($this->getAttribute($context["level2"], "url", array(), "any", true, true) && twig_in_filter($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($context["level2"], "url", array())), ($context["AuthorityRoles"] ?? null)))) {
                                // line 34
                                echo "                    ";
                            } else {
                                // line 35
                                echo "                    <li class=\"";
                                if (($this->getAttribute($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getActiveMenus(($context["menus"] ?? null)), 1, array(), "array") == $this->getAttribute($context["level2"], "id", array()))) {
                                    echo "active";
                                }
                                echo "\">
                        ";
                                // line 36
                                if (($this->getAttribute($context["level2"], "has_child", array(), "any", true, true) && ($this->getAttribute($context["level2"], "has_child", array()) == true))) {
                                    // line 37
                                    echo "                            <a class=\"toggle\">
                                ";
                                    // line 38
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                                    echo "
                                <svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg>
                            </a>
                            <ul ";
                                    // line 41
                                    if (($this->getAttribute($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getActiveMenus(($context["menus"] ?? null)), 1, array(), "array") == $this->getAttribute($context["level2"], "id", array()))) {
                                        echo "class=\"active\" style=\"display: block;\"";
                                    }
                                    echo ">
                                ";
                                    // line 42
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["level2"], "child", array()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                        // line 43
                                        echo "                                    ";
                                        if (($this->getAttribute($context["level3"], "url", array(), "any", true, true) && twig_in_filter($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath($this->getAttribute($context["level3"], "url", array())), ($context["AuthorityRoles"] ?? null)))) {
                                            // line 44
                                            echo "                                    ";
                                        } else {
                                            // line 45
                                            echo "                                    <li class=\"";
                                            if (($this->getAttribute($this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getActiveMenus(($context["menus"] ?? null)), 2, array(), "array") == $this->getAttribute($context["level3"], "id", array()))) {
                                                echo "active";
                                            }
                                            echo "\">
                                        <a href=\"";
                                            // line 46
                                            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl($this->getAttribute($context["level3"], "url", array()));
                                            echo "\">
                                            ";
                                            // line 47
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["level3"], "name", array()), "html", null, true);
                                            echo "
                                        </a>
                                    </li>
                                    ";
                                        }
                                        // line 51
                                        echo "                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level3'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 52
                                    echo "                            </ul>
                        ";
                                } else {
                                    // line 54
                                    echo "                            ";
                                    if (($this->getAttribute($context["level2"], "id", array()) == "customer_exemption_clear")) {
                                        // line 55
                                        echo "                                <a data-toggle=\"modal\" data-target=\"#exemptionConfirmModal\">
                                ";
                                        // line 56
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                                        echo "
                                </a>
                            ";
                                    } else {
                                        // line 59
                                        echo "                            <a href=\"";
                                        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl($this->getAttribute($context["level2"], "url", array()));
                                        echo "\">
                                ";
                                        // line 60
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["level2"], "name", array()), "html", null, true);
                                        echo "
                            </a>
                            ";
                                    }
                                    // line 63
                                    echo "                        ";
                                }
                                // line 64
                                echo "                    </li>
                   ";
                            }
                            // line 66
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "            </ul>
        ";
                } else {
                    // line 69
                    echo "            ";
                    if ($this->getAttribute($context["level1"], "url", array(), "any", true, true)) {
                        // line 70
                        echo "                <a href=\"";
                        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl($this->getAttribute($context["level1"], "url", array()));
                        echo "\">
                    ";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                        echo "
                </a>
            ";
                    } else {
                        // line 74
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level1"], "name", array()), "html", null, true);
                        echo "
            ";
                    }
                    // line 76
                    echo "        ";
                }
                // line 77
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 77,  191 => 76,  185 => 74,  179 => 71,  174 => 70,  171 => 69,  167 => 67,  160 => 66,  156 => 64,  153 => 63,  147 => 60,  142 => 59,  136 => 56,  133 => 55,  130 => 54,  126 => 52,  120 => 51,  113 => 47,  109 => 46,  102 => 45,  99 => 44,  96 => 43,  92 => 42,  86 => 41,  80 => 38,  77 => 37,  75 => 36,  68 => 35,  65 => 34,  62 => 33,  57 => 32,  51 => 31,  45 => 28,  39 => 27,  36 => 26,  34 => 25,  27 => 24,  22 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nav.twig", "/var/www/ec_trial/src/Eccube/Resource/template/admin/nav.twig");
    }
}

<?php

/* __string_template__bc7b37e1dc32cacfd51cbbef93c910ef25e04d32d515556c0941494c692240d8 */
class __TwigTemplate_6b6e731505ecec6066ec55906eea8593c5bf5440f67476fdd89b15b4322ea89d extends Twig_Template
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
        echo "<div class=\"col-xs-12\">
<div id=\"cart_area\">
    <p class=\"cart-trigger\"><a href=\"#cart\">
";
        // line 27
        echo "          </svg>
                 <img class=\"card-img-top\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/shopping_cart.png\">
            <span class=\"badge\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "total_quantity", array()), "html", null, true);
        echo "</span>
";
        // line 32
        echo "           </svg>
                 <img class=\"card-img-top\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/shopping_cart.png\">
        </a>
 ";
        // line 35
        echo " 
    </p>　
    <div id=\"cart\" class=\"cart\">
        <div class=\"inner\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 40
            echo "                <div class=\"message\">
                    <p class=\"errormsg bg-danger\">
                        <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 42
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Cart"] ?? null), "CartItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
            // line 47
            echo "                ";
            $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
            // line 48
            echo "                ";
            $context["Product"] = $this->getAttribute(($context["ProductClass"] ?? null), "Product", array());
            // line 49
            echo "                <div class=\"item_box\">
                    <div class=\"item_photo\"><img
                                src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute(($context["Product"] ?? null), "MainListImage", array())), "html", null, true);
            echo "\"
                                alt=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
            echo "\"></div>
                    <dl class=\"item_detail\">
                        <dt class=\"item_name\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
            echo "</dt>
                        <dd class=\"item_pattern small\">";
            // line 56
            if ($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array())) {
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "html", null, true);
                // line 58
                if ($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array())) {
                    // line 59
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "html", null, true);
                }
            }
            // line 62
            echo "</dd>
                        <dd class=\"item_price\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
            echo "<span class=\"small\">税込</span></dd>
                        <dd class=\"item_quantity form-group form-inline\">数量：";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array()), "html", null, true);
            echo "</dd>
                    </dl>
                </div><!--/item_box-->
                <p class=\"cart_price sp\">合計 <span class=\"price\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Cart"] ?? null), "total_price", array())), "html", null, true);
            echo "</span></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "CartItems", array())) > 0)) {
            // line 70
            echo "
                <div class=\"btn_area\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 74
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart");
            echo "\" class=\"btn btn-success\">カートへ進む</a>
                        </li>
                        <li>
                            <button type=\"button\" class=\"btn btn-default btn-sm cart-trigger\">キャンセル</button>
                        </li>
                    </ul>
                </div>
            ";
        } else {
            // line 82
            echo "                <div class=\"btn_area\">
                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\" style=\"margin-bottom: 20px;\">
                            現在カート内に<br>商品はございません。
                        </p>
                    </div>
                </div>
            ";
        }
        // line 90
        echo "        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__bc7b37e1dc32cacfd51cbbef93c910ef25e04d32d515556c0941494c692240d8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 90,  153 => 82,  142 => 74,  136 => 70,  133 => 69,  125 => 67,  119 => 64,  115 => 63,  112 => 62,  105 => 59,  103 => 58,  99 => 57,  97 => 56,  93 => 54,  88 => 52,  82 => 51,  78 => 49,  75 => 48,  72 => 47,  67 => 46,  57 => 42,  53 => 40,  49 => 39,  43 => 35,  38 => 33,  35 => 32,  31 => 29,  27 => 28,  24 => 27,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bc7b37e1dc32cacfd51cbbef93c910ef25e04d32d515556c0941494c692240d8", "");
    }
}

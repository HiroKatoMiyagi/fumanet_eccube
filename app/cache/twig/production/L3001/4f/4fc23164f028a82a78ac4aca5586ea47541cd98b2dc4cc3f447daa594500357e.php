<?php

/* __string_template__1b13ec19aba513fb6ddddeeb98a66cb4879082b0bdc2f8dca9b913795bec88b1 */
class __TwigTemplate_bdb8524d0846a0cb06d36b53e65c50ed1076019107f69823b27c371899476ab7 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 26
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage");
            echo "\" title=\"マイページ\">マイページ</a>
            </li>
            ";
            // line 28
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 29
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\" title=\"お気に入り\">お気に入り</a></li>
            ";
            }
            // line 31
            echo "            <li>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("logout");
            echo "\" title=\"ログアウト\">ログアウト</a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 37
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 40
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
            echo "\" title=\"新規会員登録\">新規会員登録</a>
            </li>
            ";
            // line 42
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 43
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\" title=\"お気に入り\">お気に入り</a></li>
            ";
            }
            // line 45
            echo "            <li>
                <a href=\"";
            // line 46
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_login");
            echo "\" title=\"ログイン\">ログイン</a>
            </li>
        </ul>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__1b13ec19aba513fb6ddddeeb98a66cb4879082b0bdc2f8dca9b913795bec88b1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 46,  68 => 45,  62 => 43,  60 => 42,  55 => 40,  50 => 37,  42 => 32,  39 => 31,  33 => 29,  31 => 28,  26 => 26,  21 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1b13ec19aba513fb6ddddeeb98a66cb4879082b0bdc2f8dca9b913795bec88b1", "");
    }
}

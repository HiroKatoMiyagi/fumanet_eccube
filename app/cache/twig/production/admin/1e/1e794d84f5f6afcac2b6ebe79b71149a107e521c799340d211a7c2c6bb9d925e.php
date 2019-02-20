<?php

/* __string_template__77227254c1e5e209d75eb463ce8a71fe67453b44e778a39291b692839d85d14d */
class __TwigTemplate_b3799454b347105300a47ab90b4dea24592efaa3bfb36541a88bcec4900953fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__77227254c1e5e209d75eb463ce8a71fe67453b44e778a39291b692839d85d14d", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "member");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "メンバー管理";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "    <script>
        function changeAction(action) {
            document.form1.action = action;
        }
    </script>
";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"row\">
        <div id=\"member_wrap\" class=\"col-md-12\">
            <div id=\"member_list_box\" class=\"box\">
                <div id=\"member_list_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">メンバー管理</h3>
                </div><!-- /.box-header -->
                <div id=\"member_list_box__body\" class=\"box-body\">
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
                        <div id=\"member_list__body\" class=\"table_list\">
                            <div id=\"member_list__body_inner\" class=\"table-responsive with-border\">
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr id=\"member_list__list_header\">
                                        <th id=\"member_list__header_name\">名前</th>
                                        <th id=\"member_list__header_department\">所属</th>
                                        <th id=\"member_list__header_authority_name\">権限</th>
                                        <th id=\"member_list__header_work_name\">稼働</th>
                                        <th id=\"member_list__header_menu_box\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Members"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Member"]) {
            // line 62
            echo "                                    <tr id=\"member_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\">
                                        <td id=\"member_list__name--";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "name", array()), "html", null, true);
            echo "</td>
                                        <td id=\"member_list__department--";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "department", array()), "html", null, true);
            echo "</td>
                                        <td id=\"member_list__authority_name--";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Member"], "Authority", array()), "name", array()), "html", null, true);
            echo "</td>
                                        <td id=\"member_list__work_name--";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Member"], "Work", array()), "name", array()), "html", null, true);
            echo "</td>
                                        <td id=\"member_list__menu_box--";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit\">
                                            <div id=\"member_list__menu_box_toggle--";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle--";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"member_list__menu--";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["Member"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_member_edit", array("id" => $this->getAttribute($context["Member"], "id", array()))), "html", null, true);
            echo "\" >編集</a></li>
                                                    ";
            // line 72
            if (($this->getAttribute($context["Member"], "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
                // line 73
                echo "                                                        <li>
                                                            <a>削除</a>
                                                        </li>
                                                    ";
            } else {
                // line 77
                echo "                                                        <li>
                                                            <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_member_delete", array("id" => $this->getAttribute($context["Member"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">削除</a>
                                                        </li>
                                                    ";
            }
            // line 81
            echo "                                                    ";
            if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                // line 82
                echo "                                                        <li>
                                                            <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_member_up", array("id" => $this->getAttribute($context["Member"], "id", array()))), "html", null, true);
                echo "\"  ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">上へ</a>
                                                        </li>
                                                    ";
            }
            // line 86
            echo "                                                    ";
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 87
                echo "                                                        <li>
                                                            <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_member_down", array("id" => $this->getAttribute($context["Member"], "id", array()))), "html", null, true);
                echo "\"  ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">下へ</a>
                                                        </li>
                                                    ";
            }
            // line 91
            echo "
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
            <div id=\"member_list__footer\" class=\"row\">
                <div id=\"member_list__insert_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <a href=\"";
        // line 106
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_member_new");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">
                            新規登録
                    </a>
                </div>
            </div>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__77227254c1e5e209d75eb463ce8a71fe67453b44e778a39291b692839d85d14d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 106,  218 => 97,  199 => 91,  191 => 88,  188 => 87,  185 => 86,  177 => 83,  174 => 82,  171 => 81,  163 => 78,  160 => 77,  154 => 73,  152 => 72,  148 => 71,  144 => 70,  140 => 69,  136 => 68,  132 => 67,  126 => 66,  120 => 65,  114 => 64,  108 => 63,  103 => 62,  86 => 61,  63 => 40,  60 => 39,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__77227254c1e5e209d75eb463ce8a71fe67453b44e778a39291b692839d85d14d", "");
    }
}

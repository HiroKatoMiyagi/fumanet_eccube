<?php

/* __string_template__01227ca68a3977df1886ca50f2b8e496977766c6416610e3ab34249fdfe14917 */
class __TwigTemplate_e39c5ba5239c75dc998162344a5bf6c6c9a2a43a6c4971dd6231379f49da8890 extends Twig_Template
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
        // line 2
        if (($context["formlist"] ?? null)) {
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["formlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "\t            <tr >
\t                <td  data-id=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"plg_formdb_form_list\" >
\t\t\t\t\t<a class=\"btn btn-default\" href=\"#\" role=\"button\" style=\"width:100%;\"  onclick='plg_formDb_select(";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo ")'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_name", array()), "html", null, true);
                echo "</a>
\t                </td>
\t                <td data-id=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" style=\"text-align:right;\">
\t\t\t\t\t<a class=\"btn btn-default\" href=\"#\" role=\"button\"  onclick='plg_formDb_delete(";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo ")'><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>
\t                </td>
\t            </tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 14
            echo "    <tr >
        <td   >
\t\t\t登録された検索条件はありません。
        </td>
        <td >
        </td>
    </tr>
    
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__01227ca68a3977df1886ca50f2b8e496977766c6416610e3ab34249fdfe14917";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  44 => 9,  40 => 8,  33 => 6,  29 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__01227ca68a3977df1886ca50f2b8e496977766c6416610e3ab34249fdfe14917", "");
    }
}

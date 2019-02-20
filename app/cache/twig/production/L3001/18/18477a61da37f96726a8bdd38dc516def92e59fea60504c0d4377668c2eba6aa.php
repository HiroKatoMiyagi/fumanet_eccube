<?php

/* Block/paypalexpress_paypal_block.twig */
class __TwigTemplate_c53ddb39ede7034c7fb06da652c0283d03d4616b275fc6dfc83f6ac6ed13fb0a extends Twig_Template
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
        // line 1
        echo "<table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" align=\"center\"><tr><td align=\"center\"></td></tr><tr><td align=\"center\">
";
        // line 2
        echo twig_include($this->env, $context, "PayPalExpress/Resource/template/Block/paypal_logo.twig");
        echo "
</td></tr></table>
";
    }

    public function getTemplateName()
    {
        return "Block/paypalexpress_paypal_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/paypalexpress_paypal_block.twig", "/var/www/ec_trial/app/template/L3001/Block/paypalexpress_paypal_block.twig");
    }
}

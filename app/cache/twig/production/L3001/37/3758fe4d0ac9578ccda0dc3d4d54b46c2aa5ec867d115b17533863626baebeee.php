<?php

/* PayPalExpress/Resource/template/Block/paypal_logo.twig */
class __TwigTemplate_b225507d0349e838856b3c01408878858f7f1ae33926f3e09459c556ebb4c7ef extends Twig_Template
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
        echo "<a href=\"#paypal-logo\" id=\"paypal-logo\" onclick=\"javascript:window.open('https://www.paypal.jp/jp/contents/popup/logo/SG_mc_vs_am_jcb_JP/','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=900, height=700');\"><img src=\"https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/jp/developer/Logo_319_110.png\" border=\"0\" alt=\"その他のオプション\"></a>";
    }

    public function getTemplateName()
    {
        return "PayPalExpress/Resource/template/Block/paypal_logo.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PayPalExpress/Resource/template/Block/paypal_logo.twig", "/var/www/ec_trial/app/Plugin/PayPalExpress/Resource/template/Block/paypal_logo.twig");
    }
}

<?php

/* Block/logo.twig */
class __TwigTemplate_c40439f086976ecfcb70364a6779e9418adfaf1281a9230bf1594f9b746e08cd extends Twig_Template
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
        // line 32
        echo "<div class=\"container my-5\">
    <div class=\"header_logo_area\">
   <a href=\"";
        // line 34
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\">
      <h1 class=\"mb-5\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        echo "</h1>
   </a>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 35,  23 => 34,  19 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/logo.twig", "/var/www/ec_trial/app/template/L3001/Block/logo.twig");
    }
}

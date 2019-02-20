<?php

/* __string_template__3e17c66617d8f3b61e2c432ac0ae082d905b95a2d3cea616a14d11a1422867ed */
class __TwigTemplate_4c7065bc022ee3c9b2a79e760e64cceaf009ea4fcf99c501dafe1c9318ecd54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__3e17c66617d8f3b61e2c432ac0ae082d905b95a2d3cea616a14d11a1422867ed", 22);
        $this->blocks = array(
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
        $context["body_class"] = "front_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "        <script>
            \$(function(){
                \$('.main_visual').slick({
                    dots: true,
                    arrows: false,
                    autoplay: true,
                    speed: 300
                });
            });
        </script>
    ";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
        // line 40
        echo "        <div class=\"row\">
            <div class=\"main_visual col-xs-12\">
                <div class=\"item\">
                  <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_img/top-sc1.gif\">
              </div>
              <div class=\"item\">
                  <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_img/top-sc2.gif\">
              </div>
                <div class=\"item\">
                  <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_img/top-sc3.gif\">
              </div>
              <div class=\"item\">
                  <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_img/top-sc4.gif\">
              </div>
              <div class=\"item\">
                  <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_img/top-sc5.gif\">
              </div>
          </div>
      </div>
  ";
    }

    public function getTemplateName()
    {
        return "__string_template__3e17c66617d8f3b61e2c432ac0ae082d905b95a2d3cea616a14d11a1422867ed";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 55,  75 => 52,  69 => 49,  63 => 46,  57 => 43,  52 => 40,  49 => 39,  35 => 27,  32 => 26,  28 => 22,  26 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3e17c66617d8f3b61e2c432ac0ae082d905b95a2d3cea616a14d11a1422867ed", "");
    }
}

<?php

/* Block/garally.twig */
class __TwigTemplate_7c1e9be5ca2c90a37e0b3e62ee288846d03068f0acee844d39850bcd1561c96e extends Twig_Template
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
<div class=\"row\">
    <div class=\"category_header col-xs-12\">
        <h2 class=\"heading01\">目的別メニュー</h2>
    </div>
</div><!--row-->

<style type=\"text/css\">
.card-deck {
    display:-ms-flexbox; display:flex; -ms-flex-direction:column; flex-direction:column
 }
 .card-deck .card {
    margin-bottom:15px
 }
@media (min-width:576px) {
    .card-deck {
        -ms-flex-flow:row wrap; flex-flow:row wrap; margin-right:-15px; margin-left:-15px
    }
    .card-deck .card {
        display:-ms-flexbox; display:flex; -ms-flex:1 0 0%; flex:1 0 0%; -ms-flex-direction:column; flex-direction:column; margin-right:15px; margin-bottom:0;margin-left:15px
    }
}
</style>

<!-- カードグループ１ -->
<div class=\"container\">
  <!-- カードグループ：card-group -->
  <div class=\"card-deck\" >
    <!-- サポーター -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat1\"><img class=\"card-img-top\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">サポーター</h4>
        <p class=\"card-text\">サポーターとして活動するための参考動画やお役立ち情報が参照できます。</p>
      </div>
    </div>
    <!-- インストラクター -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat2\"><img class=\"card-img-top\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">インストラクター</h4>
        <p class=\"card-text\">インストラクターとして活動するための参考動画やお役立ち情報が参照できます。</p>
      </div>
    </div>
  </div>
</div>
<!-- / カードグループ -->

<!-- カードグループ２ -->
<div class=\"container\">
  <!-- カードグループ：card-group -->
  <div class=\"card-deck\" >
    <!-- 地域でとりくむ -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat3\"><img class=\"card-img-top\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">地域で取り組む</h4>
        <p class=\"card-text\">地域で活用するための参考動画やお役立ち情報が参照できます。</p>
      </div>
    </div>
    <!-- 家庭でとりくむ -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat4\"><img class=\"card-img-top\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">家庭でとりくむ</h4>
        <p class=\"card-text\">家庭で活用するための参考動画やお役立ち情報が参照できます。</p>
      </div>
    </div>
    <!-- 施設・病院でとりくむ -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat5\"><img class=\"card-img-top\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">病院や施設</h4>
        <p class=\"card-text\">施設や病院で活用するための参考動画やお役立ち情報が参照できます。</p>
      </div>
    </div>
  </div>
</div>
<!-- / カードグループ -->

<!-- カードグループ３ -->
<div class=\"container\">
  <div class=\"card-deck\" >
    <!-- 研修会・講習会を受講する -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat6\"><img class=\"card-img-top\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">研修会・講習会を受講する</h4>
        <p class=\"card-text\">開催予定の研修会・講習会情報です。</p>
      </div>
    </div>
    <!-- 寄付・年会費・入会 -->
    <div class=\"card\">
      <a href=\"http://fumanet.com/user_data/user_cat7\"><img class=\"card-img-top\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/top_cat/cat5.gif\"></a>
      <div class=\"card-body\">
        <h4 class=\"card-title\">寄付・年会費・入会</h4>
        <p class=\"card-text\">寄付・年会費・入会に関するご案内です。</p>
      </div>
    </div>
  </div>
</div>
<!-- / カードグループ -->";
    }

    public function getTemplateName()
    {
        return "Block/garally.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 115,  121 => 107,  103 => 92,  92 => 84,  81 => 76,  62 => 60,  51 => 52,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/garally.twig", "/var/www/ec_trial/app/template/L3001/Block/garally.twig");
    }
}

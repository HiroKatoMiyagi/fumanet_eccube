<?php

/* __string_template__3bd4dfdff9c10aa9576d3da9255fe55a3860c4d93b3d14fd367308e684182a7e */
class __TwigTemplate_3afea104d9d756fddd668d3faa14f8aba8f08383bd7181beea7a780ee5412980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__3bd4dfdff9c10aa9576d3da9255fe55a3860c4d93b3d14fd367308e684182a7e", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        $context["menus"] = array(0 => "order", 1 => "order_master", 2 => "order_list");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["searchForm"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "受注管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "受注マスタ";
    }

    // line 31
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap-datetimepicker.min.css\">
";
    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment.min.js\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/moment-ja.js\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap-datetimepicker.min.js\"></script>
<script>
  \$(function() {

    var inputDate = document.createElement('input');
    inputDate.setAttribute('type', 'date');
    if (inputDate.type !== 'date') {
      \$('input[id\$=_date_start]').datetimepicker({
        locale: 'ja',
        format: 'YYYY-MM-DD',
        useCurrent: false,
        showTodayButton: true
      });

      \$('input[id\$=_date_end]').datetimepicker({
        locale: 'ja',
        format: 'YYYY-MM-DD',
        useCurrent: false,
        showTodayButton: true
      });
    }


    // 登録チェックボックス
    \$('#check-all').click(function() {
      var checkall = \$('#check-all').prop('checked');
      if (checkall) {
        \$('input[id^=check-]').prop('checked', true);
        } else {
        \$('input[id^=check-]').prop('checked', false);
      }
    });

    \$('#dropmenu ul a').click(function(event) {
      event.preventDefault();
      var href = \$(this).attr('href');
      var isChecked = false;
      \$('input[id^=check-]').each(function() {
        var check = \$(this).prop('checked');
        if (check) {
          isChecked = true;
        }
      });
      if (!isChecked) {
        alert(\"チェックボックスが選択されていません\");
        return false;
      }
      \$('#dropdown-form').attr('action', href).submit();
        return false;
    });

    // フォーム値を確認し、アコーディオンを制御
    // 値あり : 開く / 値なし : 閉じる
    (function(\$, f) {
        //フォームがないページは処理キャンセル
        var \$ac = \$(\".accpanel\");
        if (!\$ac) {
            return false
        }

        //フォーム内全項目取得
        var c = f();
        if (c.formState()) {
            if (\$ac.css(\"display\") == \"none\") {
                \$ac.siblings('.toggle').addClass(\"active\");
                \$ac.slideDown(0);
            }
        } else {
            \$ac.siblings('.toggle').removeClass(\"active\");
            \$ac.slideUp(0);
        }
    })(\$, formPropStateSubscriber);
});
</script>
";
    }

    // line 114
    public function block_main($context, array $blocks = array())
    {
        // line 115
        echo "<!--検索条件設定テーブルここから-->
<div id=\"search_wrap\" class=\"search-box\">
  <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"";
        // line 117
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order");
        echo "\">
    ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "_token", array()), 'widget');
        echo "
    <div id=\"search_box_main\" class=\"row\">
      <div id=\"search_box_main__body\" class=\"col-md-12 accordion\">
        ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "multi", array()), 'widget', array("attr" => array("placeholder" => "受注ID・注文者名・注文者会社名", "class" => "input_search")));
        echo "

        <a href=\"#\" class=\"toggle";
        // line 123
        if (($context["active"] ?? null)) {
            echo " active";
        }
        echo "\">
          <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg> <svg class=\"cb cb-minus\"> <use xlink:href=\"#cb-minus\"/></svg>
        </a>
        <div id=\"search_box_main__body_toggle\" class=\"search-box-inner accpanel\" ";
        // line 126
        if (($context["active"] ?? null)) {
            echo " style=\"display: block;\"";
        }
        echo ">
          <div class=\"row\">
            <div id=\"search_box_main__body_inner\" class=\"col-sm-12 col-lg-10 col-lg-offset-1 search\">

              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div id=\"search_box_main__multi_status\" class=\"form-group\">
                    <label>対応状況</label>
                    <div>
                      ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "multi_status", array()), 'widget');
        echo "
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__name\" class=\"form-group\">
                    <label>お名前</label>
                    ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "name", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__kana\" class=\"form-group\">
                    <label>お名前(フリガナ)</label>
                    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "kana", array()), 'widget');
        echo "
                    ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "kana", array()), 'errors');
        echo "
                  </div>
                </div>
              </div><!-- /.row -->
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div id=\"search_box_main__tel\" class=\"form-group\">
                    <label>電話番号</label>
                    ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "tel", array()), 'widget');
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "tel", array()), 'errors');
        echo "
                  </div>
                </div>
                <div id=\"search_box_main__email\" class=\"col-sm-6\">
                  <label>メールアドレス</label>
                  <div class=\"form-group\">
                    ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "email", array()), 'widget');
        echo "
                    ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "email", array()), 'errors');
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div class=\"col-xs-12\">
                  <div id=\"search_box_main__sex\" class=\"form-group\">
                    <label>性別</label>
                    ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "sex", array()), 'widget');
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div id=\"search_box_main__payment\" class=\"form-group\">
                    <label>支払方法</label>
                    <div>
                      ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "payment", array()), 'widget');
        echo "
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div id=\"search_box_main__order_date\" class=\"col-sm-6\">
                  <label>受注日</label>
                  <div class=\"form-group range\">
                    ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "order_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "order_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
                <div id=\"search_box_main__payment_date\" class=\"col-sm-6\">
                  <label>入金日</label>
                  <div class=\"form-group range\">
                    ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "payment_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "payment_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div id=\"search_box_main__commit_date\" class=\"col-sm-6\">
                  <label>発送日</label>
                  <div class=\"form-group range\">
                    ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "commit_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "commit_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
                <div id=\"search_box_main__update_date\" class=\"col-sm-6\">
                  <label>更新日</label>
                  <div class=\"form-group range\">
                    ";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "update_date_start", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo " ～ ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "update_date_end", array()), 'widget', array("attr" => array("class" => "input_cal")));
        echo "
                  </div>
                </div>
              </div><!-- /.row -->

              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div id=\"search_box_main__payment_total\" class=\"form-group range\">
                    <label>購入金額</label>
                    ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "payment_total_start", array()), 'widget');
        echo " ～ ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "payment_total_end", array()), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div id=\"search_box_main__buy_product_name\" class=\"form-group\">
                    <label>購入商品名</label>
                    ";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["searchForm"] ?? null), "buy_product_name", array()), 'widget');
        echo "
                  </div>
                </div>
                  <div class=\"extra-form col-md-12\">
                      ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["searchForm"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 237
            echo "                          ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 238
                echo "                            <div class=\"form-group\">
                              ";
                // line 239
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                              ";
                // line 240
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                              ";
                // line 241
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                            </div>
                          ";
            }
            // line 244
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                  </div>

              </div><!-- /.row -->
              <div id=\"search_box_main__clear\" class=\"row\">
                <div class=\"col-sm-12\">
                  <p class=\"text-center\"><a href=\"#\" class=\"search-clear\">検索条件をクリア</a></p>
                </div>
              </div><!-- /.row -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <div id=\"search_box_footer\" class=\"row btn_area\">
      <div id=\"search_box_footer__button_area\" class=\"col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 text-center\">
        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">
          検索する <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
        </button>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
<!--検索条件設定テーブルここまで--><style>
.plg_formdb_form_list{

}
.plg_formdb_form_delete{

}
</style>

<div  class=\"row\">
    <div class=\"col-md-8\">
    </div>
    <div class=\"col-md-2\">
  <button type=\"button\" title=\"検索条件の呼び出し\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#collapseFormDb\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
   <span class=\"glyphicon glyphicon-paperclip\"  aria-hidden=\"true\"></span>
  </button>
    </div>
    <div class=\"col-md-2\">
    </div>
</div>
<p></p>

<div class=\"collapse\" id=\"collapseFormDb\"   >
    <div class=\"well\">
    <div class=\"center-block\" style=\"width: 60%; text-align: center; background-color: #f0eff0; border: 1px solid #efe0d0;\" >
        MY検索
    </div>




<div class=\"table-responsive  table-hover\">
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr id=\"result_list_main__header\">
                <th id=\"result_list_main__header_name\">名称</th>
                <th id=\"result_list_main__header_menu_box\">&nbsp;</th>
            </tr>
        </thead>
        <tbody id=\"plg_fomdb_list\">
        </tbody>
    </table>
</div>
    
        <div  class=\"row\">
            <div class=\"col-md-3\">
            </div>
            <div class=\"col-md-6\">
            <div id=\"formInfomationLIST\"></div>
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>


        <div  class=\"row\">
            <div class=\"col-md-3\">
            </div>

            <div class=\"col-md-6\">
                <div class=\"input-group\">
                <input type=\"text\" id=\"form_save_name\" class=\"form-control\" placeholder=\"検索条件を保存する名前\">
                <span class=\"input-group-addon\" id=\"basic-addon2\">  <button type=\"button\" id=\"plg_formDb_save\" class=\"btn-sm btn-primary\">保存する</button></span>
                </div>
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>



    </div>
</div>


<script>

</script>

<script>




/**
 * Modules in this bundle
 * @license
 *
 * form-storage:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: appleple
 *   version: 1.2.1
 *
 * decode-uri-component:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: Sam Verschueren <sam.verschueren@gmail.com>
 *   version: 0.2.0
 *
 * form-serialize:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: Roman Shtylman <shtylman@gmail.com>
 *   version: 0.7.2
 *
 * object-assign:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: Sindre Sorhus <sindresorhus@gmail.com>
 *   version: 4.1.1
 *
 * query-string:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: Sindre Sorhus <sindresorhus@gmail.com>
 *   version: 5.0.1
 *
 * strict-uri-encode:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: Kevin Mårtensson <kevinmartensson@gmail.com>
 *   version: 1.1.0
 *
 * This header is generated by licensify (https://github.com/twada/licensify)
 */
(function(f){if(typeof exports===\"object\"&&typeof module!==\"undefined\"){module.exports=f()}else if(typeof define===\"function\"&&define.amd){define([],f)}else{var g;if(typeof window!==\"undefined\"){g=window}else if(typeof global!==\"undefined\"){g=global}else if(typeof self!==\"undefined\"){g=self}else{g=this}g.FormStorage = f()}})(function(){var define,module,exports;return (function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require==\"function\"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error(\"Cannot find module '\"+o+\"'\");throw f.code=\"MODULE_NOT_FOUND\",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require==\"function\"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';
var token = '%[a-f0-9]{2}';
var singleMatcher = new RegExp(token, 'gi');
var multiMatcher = new RegExp('(' + token + ')+', 'gi');

function decodeComponents(components, split) {
    try {
        // Try to decode the entire string first
        return decodeURIComponent(components.join(''));
    } catch (err) {
        // Do nothing
    }

    if (components.length === 1) {
        return components;
    }

    split = split || 1;

    // Split the array in 2 parts
    var left = components.slice(0, split);
    var right = components.slice(split);

    return Array.prototype.concat.call([], decodeComponents(left), decodeComponents(right));
}

function decode(input) {
    try {
        return decodeURIComponent(input);
    } catch (err) {
        var tokens = input.match(singleMatcher);

        for (var i = 1; i < tokens.length; i++) {
            input = decodeComponents(tokens, i).join('');

            tokens = input.match(singleMatcher);
        }

        return input;
    }
}

function customDecodeURIComponent(input) {
    // Keep track of all the replacements and prefill the map with the `BOM`
    var replaceMap = {
        '%FE%FF': '\\uFFFD\\uFFFD',
        '%FF%FE': '\\uFFFD\\uFFFD'
    };

    var match = multiMatcher.exec(input);
    while (match) {
        try {
            // Decode as big chunks as possible
            replaceMap[match[0]] = decodeURIComponent(match[0]);
        } catch (err) {
            var result = decode(match[0]);

            if (result !== match[0]) {
                replaceMap[match[0]] = result;
            }
        }

        match = multiMatcher.exec(input);
    }

    // Add `%C2` at the end of the map to make sure it does not replace the combinator before everything else
    replaceMap['%C2'] = '\\uFFFD';

    var entries = Object.keys(replaceMap);

    for (var i = 0; i < entries.length; i++) {
        // Replace all decoded components
        var key = entries[i];
        input = input.replace(new RegExp(key, 'g'), replaceMap[key]);
    }

    return input;
}

module.exports = function (encodedURI) {
    if (typeof encodedURI !== 'string') {
        throw new TypeError('Expected `encodedURI` to be of type `string`, got `' + typeof encodedURI + '`');
    }

    try {
        encodedURI = encodedURI.replace(/\\+/g, ' ');

        // Try the built in decoder first
        return decodeURIComponent(encodedURI);
    } catch (err) {
        // Fallback to a more advanced decoder
        return customDecodeURIComponent(encodedURI);
    }
};

},{}],2:[function(require,module,exports){
// get successful control from form and assemble into object
// http://www.w3.org/TR/html401/interact/forms.html#h-17.13.2

// types which indicate a submit action and are not successful controls
// these will be ignored
var k_r_submitter = /^(?:submit|button|image|reset|file)\$/i;

// node names which could be successful controls
var k_r_success_contrls = /^(?:input|select|textarea|keygen)/i;

// Matches bracket notation.
var brackets = /(\\[[^\\[\\]]*\\])/g;

// serializes form fields
// @param form MUST be an HTMLForm element
// @param options is an optional argument to configure the serialization. Default output
// with no options specified is a url encoded string
//    - hash: [true | false] Configure the output type. If true, the output will
//    be a js object.
//    - serializer: [function] Optional serializer function to override the default one.
//    The function takes 3 arguments (result, key, value) and should return new result
//    hash and url encoded str serializers are provided with this module
//    - disabled: [true | false]. If true serialize disabled fields.
//    - empty: [true | false]. If true serialize empty fields
function serialize(form, options) {
    if (typeof options != 'object') {
        options = { hash: !!options };
    }
    else if (options.hash === undefined) {
        options.hash = true;
    }

    var result = (options.hash) ? {} : '';
    var serializer = options.serializer || ((options.hash) ? hash_serializer : str_serialize);

    var elements = form && form.elements ? form.elements : [];

    //Object store each radio and set if it's empty or not
    var radio_store = Object.create(null);

    for (var i=0 ; i<elements.length ; ++i) {
        var element = elements[i];

        // ingore disabled fields
        if ((!options.disabled && element.disabled) || !element.name) {
            continue;
        }
        // ignore anyhting that is not considered a success field
        if (!k_r_success_contrls.test(element.nodeName) ||
            k_r_submitter.test(element.type)) {
            continue;
        }

        var key = element.name;
        var val = element.value;

        // we can't just use element.value for checkboxes cause some browsers lie to us
        // they say \"on\" for value when the box isn't checked
        if ((element.type === 'checkbox' || element.type === 'radio') && !element.checked) {
            val = undefined;
        }

        // If we want empty elements
        if (options.empty) {
            // for checkbox
            if (element.type === 'checkbox' && !element.checked) {
                val = '';
            }

            // for radio
            if (element.type === 'radio') {
                if (!radio_store[element.name] && !element.checked) {
                    radio_store[element.name] = false;
                }
                else if (element.checked) {
                    radio_store[element.name] = true;
                }
            }

            // if options empty is true, continue only if its radio
            if (val == undefined && element.type == 'radio') {
                continue;
            }
        }
        else {
            // value-less fields are ignored unless options.empty is true
            if (!val) {
                continue;
            }
        }

        // multi select boxes
        if (element.type === 'select-multiple') {
            val = [];

            var selectOptions = element.options;
            var isSelectedOptions = false;
            for (var j=0 ; j<selectOptions.length ; ++j) {
                var option = selectOptions[j];
                var allowedEmpty = options.empty && !option.value;
                var hasValue = (option.value || allowedEmpty);
                if (option.selected && hasValue) {
                    isSelectedOptions = true;

                    // If using a hash serializer be sure to add the
                    // correct notation for an array in the multi-select
                    // context. Here the name attribute on the select element
                    // might be missing the trailing bracket pair. Both names
                    // \"foo\" and \"foo[]\" should be arrays.
                    if (options.hash && key.slice(key.length - 2) !== '[]') {
                        result = serializer(result, key + '[]', option.value);
                    }
                    else {
                        result = serializer(result, key, option.value);
                    }
                }
            }

            // Serialize if no selected options and options.empty is true
            if (!isSelectedOptions && options.empty) {
                result = serializer(result, key, '');
            }

            continue;
        }

        result = serializer(result, key, val);
    }

    // Check for all empty radio buttons and serialize them with key=\"\"
    if (options.empty) {
        for (var key in radio_store) {
            if (!radio_store[key]) {
                result = serializer(result, key, '');
            }
        }
    }

    return result;
}

function parse_keys(string) {
    var keys = [];
    var prefix = /^([^\\[\\]]*)/;
    var children = new RegExp(brackets);
    var match = prefix.exec(string);

    if (match[1]) {
        keys.push(match[1]);
    }

    while ((match = children.exec(string)) !== null) {
        keys.push(match[1]);
    }

    return keys;
}

function hash_assign(result, keys, value) {
    if (keys.length === 0) {
        result = value;
        return result;
    }

    var key = keys.shift();
    var between = key.match(/^\\[(.+?)\\]\$/);

    if (key === '[]') {
        result = result || [];

        if (Array.isArray(result)) {
            result.push(hash_assign(null, keys, value));
        }
        else {
            // This might be the result of bad name attributes like \"[][foo]\",
            // in this case the original `result` object will already be
            // assigned to an object literal. Rather than coerce the object to
            // an array, or cause an exception the attribute \"_values\" is
            // assigned as an array.
            result._values = result._values || [];
            result._values.push(hash_assign(null, keys, value));
        }

        return result;
    }

    // Key is an attribute name and can be assigned directly.
    if (!between) {
        result[key] = hash_assign(result[key], keys, value);
    }
    else {
        var string = between[1];
        // +var converts the variable into a number
        // better than parseInt because it doesn't truncate away trailing
        // letters and actually fails if whole thing is not a number
        var index = +string;

        // If the characters between the brackets is not a number it is an
        // attribute name and can be assigned directly.
        if (isNaN(index)) {
            result = result || {};
            result[string] = hash_assign(result[string], keys, value);
        }
        else {
            result = result || [];
            result[index] = hash_assign(result[index], keys, value);
        }
    }

    return result;
}

// Object/hash encoding serializer.
function hash_serializer(result, key, value) {
    var matches = key.match(brackets);

    // Has brackets? Use the recursive assignment function to walk the keys,
    // construct any missing objects in the result tree and make the assignment
    // at the end of the chain.
    if (matches) {
        var keys = parse_keys(key);
        hash_assign(result, keys, value);
    }
    else {
        // Non bracket notation can make assignments directly.
        var existing = result[key];

        // If the value has been assigned already (for instance when a radio and
        // a checkbox have the same name attribute) convert the previous value
        // into an array before pushing into it.
        //
        // NOTE: If this requirement were removed all hash creation and
        // assignment could go through `hash_assign`.
        if (existing) {
            if (!Array.isArray(existing)) {
                result[key] = [ existing ];
            }

            result[key].push(value);
        }
        else {
            result[key] = value;
        }
    }

    return result;
}

// urlform encoding serializer
function str_serialize(result, key, value) {
    // encode newlines as \\r\\n cause the html spec says so
    value = value.replace(/(\\r)?\\n/g, '\\r\\n');
    value = encodeURIComponent(value);

    // spaces should be '+' rather than '%20'.
    value = value.replace(/%20/g, '+');
    return result + (result ? '&' : '') + encodeURIComponent(key) + '=' + value;
}

module.exports = serialize;

},{}],3:[function(require,module,exports){
/*
object-assign
(c) Sindre Sorhus
@license MIT
*/

'use strict';
/* eslint-disable no-unused-vars */
var getOwnPropertySymbols = Object.getOwnPropertySymbols;
var hasOwnProperty = Object.prototype.hasOwnProperty;
var propIsEnumerable = Object.prototype.propertyIsEnumerable;

function toObject(val) {
    if (val === null || val === undefined) {
        throw new TypeError('Object.assign cannot be called with null or undefined');
    }

    return Object(val);
}

function shouldUseNative() {
    try {
        if (!Object.assign) {
            return false;
        }

        // Detect buggy property enumeration order in older V8 versions.

        // https://bugs.chromium.org/p/v8/issues/detail?id=4118
        var test1 = new String('abc');  // eslint-disable-line no-new-wrappers
        test1[5] = 'de';
        if (Object.getOwnPropertyNames(test1)[0] === '5') {
            return false;
        }

        // https://bugs.chromium.org/p/v8/issues/detail?id=3056
        var test2 = {};
        for (var i = 0; i < 10; i++) {
            test2['_' + String.fromCharCode(i)] = i;
        }
        var order2 = Object.getOwnPropertyNames(test2).map(function (n) {
            return test2[n];
        });
        if (order2.join('') !== '0123456789') {
            return false;
        }

        // https://bugs.chromium.org/p/v8/issues/detail?id=3056
        var test3 = {};
        'abcdefghijklmnopqrst'.split('').forEach(function (letter) {
            test3[letter] = letter;
        });
        if (Object.keys(Object.assign({}, test3)).join('') !==
                'abcdefghijklmnopqrst') {
            return false;
        }

        return true;
    } catch (err) {
        // We don't expect any of the above to throw, but better to be safe.
        return false;
    }
}

module.exports = shouldUseNative() ? Object.assign : function (target, source) {
    var from;
    var to = toObject(target);
    var symbols;

    for (var s = 1; s < arguments.length; s++) {
        from = Object(arguments[s]);

        for (var key in from) {
            if (hasOwnProperty.call(from, key)) {
                to[key] = from[key];
            }
        }

        if (getOwnPropertySymbols) {
            symbols = getOwnPropertySymbols(from);
            for (var i = 0; i < symbols.length; i++) {
                if (propIsEnumerable.call(from, symbols[i])) {
                    to[symbols[i]] = from[symbols[i]];
                }
            }
        }
    }

    return to;
};

},{}],4:[function(require,module,exports){
'use strict';
var strictUriEncode = require('strict-uri-encode');
var objectAssign = require('object-assign');
var decodeComponent = require('decode-uri-component');

function encoderForArrayFormat(opts) {
    switch (opts.arrayFormat) {
        case 'index':
            return function (key, value, index) {
                return value === null ? [
                    encode(key, opts),
                    '[',
                    index,
                    ']'
                ].join('') : [
                    encode(key, opts),
                    '[',
                    encode(index, opts),
                    ']=',
                    encode(value, opts)
                ].join('');
            };

        case 'bracket':
            return function (key, value) {
                return value === null ? encode(key, opts) : [
                    encode(key, opts),
                    '[]=',
                    encode(value, opts)
                ].join('');
            };

        default:
            return function (key, value) {
                return value === null ? encode(key, opts) : [
                    encode(key, opts),
                    '=',
                    encode(value, opts)
                ].join('');
            };
    }
}

function parserForArrayFormat(opts) {
    var result;

    switch (opts.arrayFormat) {
        case 'index':
            return function (key, value, accumulator) {
                result = /\\[(\\d*)\\]\$/.exec(key);

                key = key.replace(/\\[\\d*\\]\$/, '');

                if (!result) {
                    accumulator[key] = value;
                    return;
                }

                if (accumulator[key] === undefined) {
                    accumulator[key] = {};
                }

                accumulator[key][result[1]] = value;
            };

        case 'bracket':
            return function (key, value, accumulator) {
                result = /(\\[\\])\$/.exec(key);
                key = key.replace(/\\[\\]\$/, '');

                if (!result) {
                    accumulator[key] = value;
                    return;
                } else if (accumulator[key] === undefined) {
                    accumulator[key] = [value];
                    return;
                }

                accumulator[key] = [].concat(accumulator[key], value);
            };

        default:
            return function (key, value, accumulator) {
                if (accumulator[key] === undefined) {
                    accumulator[key] = value;
                    return;
                }

                accumulator[key] = [].concat(accumulator[key], value);
            };
    }
}

function encode(value, opts) {
    if (opts.encode) {
        return opts.strict ? strictUriEncode(value) : encodeURIComponent(value);
    }

    return value;
}

function keysSorter(input) {
    if (Array.isArray(input)) {
        return input.sort();
    } else if (typeof input === 'object') {
        return keysSorter(Object.keys(input)).sort(function (a, b) {
            return Number(a) - Number(b);
        }).map(function (key) {
            return input[key];
        });
    }

    return input;
}

exports.extract = function (str) {
    var queryStart = str.indexOf('?');
    if (queryStart === -1) {
        return '';
    }
    return str.slice(queryStart + 1);
};

exports.parse = function (str, opts) {
    opts = objectAssign({arrayFormat: 'none'}, opts);

    var formatter = parserForArrayFormat(opts);

    // Create an object with no prototype
    // https://github.com/sindresorhus/query-string/issues/47
    var ret = Object.create(null);

    if (typeof str !== 'string') {
        return ret;
    }

    str = str.trim().replace(/^[?#&]/, '');

    if (!str) {
        return ret;
    }

    str.split('&').forEach(function (param) {
        var parts = param.replace(/\\+/g, ' ').split('=');
        // Firefox (pre 40) decodes `%3D` to `=`
        // https://github.com/sindresorhus/query-string/pull/37
        var key = parts.shift();
        var val = parts.length > 0 ? parts.join('=') : undefined;

        // missing `=` should be `null`:
        // http://w3.org/TR/2012/WD-url-20120524/#collect-url-parameters
        val = val === undefined ? null : decodeComponent(val);

        formatter(decodeComponent(key), val, ret);
    });

    return Object.keys(ret).sort().reduce(function (result, key) {
        var val = ret[key];
        if (Boolean(val) && typeof val === 'object' && !Array.isArray(val)) {
            // Sort object keys, not values
            result[key] = keysSorter(val);
        } else {
            result[key] = val;
        }

        return result;
    }, Object.create(null));
};

exports.stringify = function (obj, opts) {
    var defaults = {
        encode: true,
        strict: true,
        arrayFormat: 'none'
    };

    opts = objectAssign(defaults, opts);

    var formatter = encoderForArrayFormat(opts);

    return obj ? Object.keys(obj).sort().map(function (key) {
        var val = obj[key];

        if (val === undefined) {
            return '';
        }

        if (val === null) {
            return encode(key, opts);
        }

        if (Array.isArray(val)) {
            var result = [];

            val.slice().forEach(function (val2) {
                if (val2 === undefined) {
                    return;
                }

                result.push(formatter(key, val2, result.length));
            });

            return result.join('&');
        }

        return encode(key, opts) + '=' + encode(val, opts);
    }).filter(function (x) {
        return x.length > 0;
    }).join('&') : '';
};

},{\"decode-uri-component\":1,\"object-assign\":3,\"strict-uri-encode\":5}],5:[function(require,module,exports){
'use strict';
module.exports = function (str) {
    return encodeURIComponent(str).replace(/[!'()*]/g, function (c) {
        return '%' + c.charCodeAt(0).toString(16).toUpperCase();
    });
};

},{}],6:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _formSerialize = require('form-serialize');

var _formSerialize2 = _interopRequireDefault(_formSerialize);

var _queryString = require('query-string');

var _queryString2 = _interopRequireDefault(_queryString);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var defaults = {
  name: 'form',
  ignores: [],
  includes: [],
  checkbox: null
};

var FormStorage = function () {
  function FormStorage(selector, opt) {
    _classCallCheck(this, FormStorage);

    this.ele = document.querySelector(selector);
    this.opt = Object.assign({}, defaults, opt);
    if (this.opt.checkbox) {
      this.checkbox = document.querySelector(this.opt.checkbox);
      this.setCheckbox();
      this.apply();
    }
  }

  _createClass(FormStorage, [
  {
// Serialized fome data
    key: 'getSerialize',
    value: function getSerialize() {
      var str = (0, _formSerialize2.default)(this.ele);
      return ( str);
    }
  }, {
    key: 'save',
    value: function save() {
      var str = (0, _formSerialize2.default)(this.ele);
      window.localStorage.setItem(this.opt.name, str);
    }
  }, {
    key: 'clear',
    value: function clear() {
      window.localStorage.removeItem(this.opt.name);
    }
  }, {
    key: 'setCheckbox',
    value: function setCheckbox() {
      var _this = this;

      this.ele.addEventListener('submit', function () {
        if (_this.checkbox.checked) {
          _this.save();
        } else {
          _this.clear();
        }
      });
    }
  }, {
    key: 'getState',
    value: function getState() {
      return (0, _formSerialize2.default)(this.ele);
    }
  }, {
    key: 'applyState',
    value: function applyState(str) {
      var _this2 = this;

      var _opt = this.opt,
          ignores = _opt.ignores,
          includes = _opt.includes;

      var obj = _queryString2.default.parse(str.replace(/^\"(.*)\"\$/, \"\$1\"));

      var _loop = function _loop(key) {
        var flag = false;
        var target = _this2.ele.querySelector('[name=\"' + key + '\"]');
        var targets = _this2.ele.querySelectorAll('[name=\"' + key + '\"]');

        if (!target) {
          return 'continue';
        }

        ignores.forEach(function (ignore) {
          if (target.matches(ignore)) {
            flag = true;
            return false;
          }
        });

        if (flag) {
          return 'continue';
        }

        if (includes.length > 0) {
          flag = true;
          includes.forEach(function (include) {
            if (target.matches(include)) {
              flag = false;
              return false;
            }
          });
          if (flag) {
            return 'continue';
          }
        }

        if (targets && targets.length > 1) {
          var arr = obj[key];
          [].forEach.call(targets, function (tar, index) {
            if (tar.type === 'checkbox') {
              if (arr.forEach) {
                arr.forEach(function (item) {
                  if (item === tar.value) {
                    tar.checked = true;
                  }
                });
              } else {
                if (arr === tar.value) {
                  tar.checked = true;
                }
              }
            } else if (tar.type === 'radio') {
              if (tar.value === arr) {
                tar.checked = true;
              }
            }
          });
          return 'continue';
        }

        if (target.type === 'radio' || target.type === 'checkbox') {
          if (obj[key] === target.value) {
            target.checked = true;
          }
        } else {
          target.value = obj[key];
        }
      };

      for (var key in obj) {
        var _ret = _loop(key);

        if (_ret === 'continue') continue;
      }
    }
  }, {
    key: 'apply',
    value: function apply() {
      var str = window.localStorage.getItem(this.opt.name);
      if (!str) {
        return;
      }
      this.applyState(str);
    }

  }, {
    key: 'load',
    value: function load(formdata) {
      var str =formdata;
      if (!str) {
        return;
      }

      this.applyState(str);
    }
  }]);

  return FormStorage;
}();

exports.default = FormStorage;
module.exports = exports['default'];

},{\"form-serialize\":2,\"query-string\":4}]},{},[6])(6)
});



function plg_formDb_select(id){
            console.log(\"plg_formDb_select\"+id);
            const formStorage = new FormStorage('#'+ document.forms[0].id, {
              name: 'form-basic', // you can decide local-storage name 
              ignores: [
              '[type=\"hidden\"]'
              ]
            });
            document.forms[0].reset();
            \$.ajax({
            type: 'POST',
            dataType: 'json',
            data: {  
                       'id' :id,
                       },
            url: '";
        // line 1268
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_FormDb_getform");
        echo "',
            success: function(data) {
            console.log(data);
            formStorage.load(data);

            \$('.collapse').collapse()

            },
            fail: function (e, data) {
                alert('通信に失敗しました。');
            }
        });
     }



function plg_formDb_delete(id){
            console.log(\"plg_formDb_deletet\"+id);
            \$.ajax({
            type: 'POST',
            dataType: 'html',
            data: {  
                       'id' :id,
                       },
            url: '";
        // line 1292
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_FormDb_deleteform");
        echo "',
            success: function(data) {
            console.log(data);
                    \$('#formInfomationLIST').html(data);
                    plg_formDb_list();
                    setTimeout(function() {
                        //一定時間後に消してトーストもどきにする
                        \$('#formInfomationLIST').empty();
                        plg_formDb_list();
                    }, 5000);
            },
            fail: function (e, data) {
                alert('通信に失敗しました。');
            }
        });
     }

function plg_formDb_list(){
    var url_str=location.pathname;
    url_str = url_str.replace(/\\/page\\/\\d/g, '');
    \$.ajax({
        type: 'POST',
        dataType: 'html',
        data: {  
                   'urlpath' :url_str,
                   },
        url: '";
        // line 1318
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_FormDb_getList");
        echo "',
        success: function(data) {
            \$('#plg_fomdb_list').html(data);
        
        },
        error: function(e) {
                    alert('通信エラー');
        }
    });
 }


function plg_formDb_save(val){
    const formStorage = new FormStorage('#'+ document.forms[0].id, {
      name: 'form-basic', // you can decide local-storage name 
      ignores: [
      '[type=\"hidden\"]'
      ]
    });
    var str_val=formStorage.getSerialize();
    var url_str=location.pathname;
    url_str = url_str.replace(/\\/page\\/\\d/g, '');

    console.log(\"#plg_formDb_save\");
// サーバに状態保存
            \$.ajax({
                type: 'POST',
                dataType: 'html',
                data: { 'save_name' : val, 
                           'urlpath' :url_str,
                           'formdata' :formStorage.getSerialize()
                           },
                url: '";
        // line 1350
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_FormDb_save");
        echo "',
                success: function(data) {
                    \$('#formInfomationLIST').html(data);
                    plg_formDb_list();
                    setTimeout(function() {
                        //一定時間後に消してトーストもどきにする
                        \$('#formInfomationLIST').empty();
                    }, 5000);
                    
                },
                error: function() {
                    alert('search customer failed.');
                }
            });
     }





\$(function() {


//初期化処理


const formStorage = new FormStorage('#'+ document.forms[0].id, {
  name: 'form-basic', // you can decide local-storage name 
  ignores: [
  '[type=\"hidden\"]'
  ]
});

 plg_formDb_list();






/*
 event　処理
*/




    // 条件選択
    \$(\".btn\").on('click', function() {
    console.log(\"plg_formdb_form_list\");
    });

    // 削除
    \$(\".plg_formdb_form_delete\").on('click', function() {
    console.log(\"plg_formdb_form_delete\");

    });


    // 会員検索保存
    \$('#plg_formDb_save').on('click', function() {
         plg_formDb_save(\$('#form_save_name').val() );

    });

});


</script>





";
        // line 1424
        if (($context["pagination"] ?? null)) {
            // line 1425
            echo "    <div id=\"result_list\" class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"result_list_main\" class=\"box\">
                ";
            // line 1428
            if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                // line 1429
                echo "                <div id=\"result_list_main__header\" class=\"box-header with-arrow\">
                    <h3 class=\"box-title\">検索結果 <span class=\"normal\"><strong>";
                // line 1430
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
                echo " 件</strong> が該当しました</span></h3>
                </div><!-- /.box-header -->
                <div id=\"result_list_main__body\" class=\"box-body\">
                    <div id=\"result_list_main__menu\" class=\"row\">
                        <div class=\"col-md-12\">
                            <ul class=\"sort-dd\">
                                <li id=\"result_list_main__pagemax_menu\" class=\"dropdown\">
                                    ";
                // line 1437
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) == ($context["page_count"] ?? null))) {
                        // line 1438
                        echo "                                        <a id=\"result_list_main__pagemax_menu_toggle\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                                        <ul class=\"dropdown-menu\">
                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1441
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                    if (($this->getAttribute($context["pageMax"], "name", array()) != ($context["page_count"] ?? null))) {
                        // line 1442
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath("admin_order_page", array("page_no" => 1, "page_count" => $this->getAttribute($context["pageMax"], "name", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pageMax"], "name", array()));
                        echo "件</a></li>
                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1444
                echo "                                        </ul>
                                </li>
                                <li id=\"result_list_main__csv_menu\" class=\"dropdown\">
                                    <a id=\"result_list_main__csv_menu_toggle\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">CSVダウンロード<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 1449
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_export_order");
                echo "\">受注CSVダウンロード</a></li>
                                        <li><a href=\"";
                // line 1450
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_export_shipping");
                echo "\">配送CSVダウンロード</a></li>
                                        <li><a href=\"";
                // line 1451
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_ORDER"))), "html", null, true);
                echo "\">受注CSV出力項目設定</a></li>
                                        <li><a href=\"";
                // line 1452
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_shop_csv", array("id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_SHIPPING"))), "html", null, true);
                echo "\">配送CSV出力項目設定</a></li>
                                    </ul>
                                </li>
                                <li id=\"dropmenu\" class=\"dropdown\">
                                    <a id=\"result_list_main__other_menu_toggle\"class=\"dropdown-toggle\" data-toggle=\"dropdown\">その他<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                // line 1458
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_mail_all");
                echo "\">メール一括通知</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form id=\"dropdown-form\">
                    <div id=\"result_list_main__list\" class=\"table_list\">
                        <div id=\"result_list_main__list_body\" class=\"table-responsive with-border\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr id=\"result_list_main__header\">
                                        <th class=\"text-center\"><input type=\"checkbox\" id=\"check-all\"></th>
                                        <th id=\"result_list_main__header_order_date\">受注日</th>
                                        <th id=\"result_list_main__header_id\">注文番号</th>
                                        <th id=\"result_list_main__header_name\">お名前</th>
                                        <th id=\"result_list_main__header_payment_method\">支払方法</th>
                                        <th id=\"result_list_main__header_payment_total\">購入金額(円)</th>
                                        <th id=\"result_list_main__header_commit_date\">発送日</th>
                                        <th id=\"result_list_main__header_order_status\">対応状況</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ";
                // line 1482
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                    // line 1483
                    echo "                                    <tr id=\"result_list_main__item--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">
                                        <td id=\"result_list_main__id_check--";
                    // line 1484
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"text-center\"><input type=\"checkbox\" id=\"check-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" name=\"ids";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\"></td>
                                        <td id=\"result_list_main__order_date--";
                    // line 1485
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["Order"], "order_date", array())), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__id--";
                    // line 1486
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_edit", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "</a></td>
                                        <td id=\"result_list_main__name--";
                    // line 1487
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "name01", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "name02", array()), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__payment_method--";
                    // line 1488
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "payment_method", array()), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__payment_total--";
                    // line 1489
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"text-right\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["Order"], "payment_total", array())), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__commit_date--";
                    // line 1490
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["Order"], "commit_date", array())), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__order_status--";
                    // line 1491
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "OrderStatus", array()), "html", null, true);
                    echo "</td>
                                        <td id=\"result_list_main__item_menu_box--";
                    // line 1492
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"icon_edit\">
                                            <div id=\"result_list_main__item_menu--";
                    // line 1493
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown\">
                                                <a id=\"result_list_main__item_menu_toggle--";
                    // line 1494
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"result_list_main_item_menu--";
                    // line 1495
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                <li><a href=\"";
                    // line 1496
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_edit", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\">編集</a></li>
                                                <li><a href=\"";
                    // line 1497
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_delete", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-message=\"この受注情報を削除してもよろしいですか？\">削除</a></li>
                                                <li><a href=\"";
                    // line 1498
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_order_mail", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                    echo "\">メール通知</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1504
                echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div><!-- /.box-body -->
                ";
                // line 1510
                if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                    // line 1511
                    echo "                    ";
                    $this->loadTemplate("pager.twig", "__string_template__3bd4dfdff9c10aa9576d3da9255fe55a3860c4d93b3d14fd367308e684182a7e", 1511)->display(array_merge($context, array("pages" => $this->getAttribute(($context["pagination"] ?? null), "paginationData", array()), "routes" => "admin_order_page")));
                    // line 1512
                    echo "                ";
                }
                // line 1513
                echo "                ";
            } else {
                // line 1514
                echo "                <div class=\"box-header with-arrow\">
                    <h3 class=\"box-title\">検索条件に該当するデータがありませんでした。</h3>
                </div><!-- /.box-header -->
                ";
            }
            // line 1518
            echo "            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>

";
        }
        // line 1523
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__3bd4dfdff9c10aa9576d3da9255fe55a3860c4d93b3d14fd367308e684182a7e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1822 => 1523,  1815 => 1518,  1809 => 1514,  1806 => 1513,  1803 => 1512,  1800 => 1511,  1798 => 1510,  1790 => 1504,  1778 => 1498,  1772 => 1497,  1768 => 1496,  1764 => 1495,  1760 => 1494,  1756 => 1493,  1752 => 1492,  1746 => 1491,  1740 => 1490,  1734 => 1489,  1728 => 1488,  1720 => 1487,  1712 => 1486,  1706 => 1485,  1696 => 1484,  1691 => 1483,  1687 => 1482,  1660 => 1458,  1651 => 1452,  1647 => 1451,  1643 => 1450,  1639 => 1449,  1632 => 1444,  1620 => 1442,  1614 => 1441,  1603 => 1438,  1598 => 1437,  1588 => 1430,  1585 => 1429,  1583 => 1428,  1578 => 1425,  1576 => 1424,  1499 => 1350,  1464 => 1318,  1435 => 1292,  1408 => 1268,  383 => 245,  377 => 244,  371 => 241,  367 => 240,  363 => 239,  360 => 238,  357 => 237,  353 => 236,  346 => 232,  335 => 226,  321 => 217,  310 => 211,  296 => 202,  285 => 196,  272 => 186,  259 => 176,  247 => 167,  243 => 166,  234 => 160,  230 => 159,  219 => 151,  215 => 150,  206 => 144,  194 => 135,  180 => 126,  172 => 123,  167 => 121,  161 => 118,  157 => 117,  153 => 115,  150 => 114,  71 => 38,  67 => 37,  62 => 36,  59 => 35,  52 => 32,  49 => 31,  43 => 27,  37 => 26,  33 => 22,  31 => 29,  29 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3bd4dfdff9c10aa9576d3da9255fe55a3860c4d93b3d14fd367308e684182a7e", "");
    }
}

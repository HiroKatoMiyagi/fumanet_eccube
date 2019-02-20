<?php return array (
  'FormDb' => 
  array (
    'config' => 
    array (
      'name' => 'フォームDB',
      'code' => 'FormDb',
      'version' => '0.1.0',
      'event' => 'FormDbEvent',
      'service' => 
      array (
        0 => 'FormDbServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.app.controller' => 
      array (
        0 => 
        array (
          0 => 'onAppController',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Product/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerIndexRender',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Order/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerIndexRender',
          1 => 'NORMAL',
        ),
      ),
      'Admin/Customer/group/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerIndexRender',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'PayPalExpress' => 
  array (
    'config' => 
    array (
      'name' => 'PayPalExpress',
      'code' => 'PayPalExpress',
      'version' => '1.0.7',
      'service' => 
      array (
        0 => 'PayPalExpressServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'event' => 'PayPalExpressEvent',
    ),
    'event' => 
    array (
      'eccube.event.render.cart.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderPayPalExpressCartBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_login.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderPayPalExpressShoppingLoginBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_nonmember.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderPayPalExpressShoppingNonmemberBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping_payment.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderPayPalExpressShoppingBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.shopping.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderPayPalExpressShoppingBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_setting_shop_payment_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderPayPalExpressAdminPaymentBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'ProductVideo' => 
  array (
    'config' => 
    array (
      'name' => 'ビデオ商品',
      'code' => 'ProductVideo',
      'version' => '0.1.1',
      'event' => 'ProductVideoEvent',
      'service' => 
      array (
        0 => 'ProductVideoServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.app.controller' => 
      array (
        0 => 
        array (
          0 => 'onAppController',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.request' => 
      array (
        0 => 
        array (
          0 => 'onAppRequest',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.response' => 
      array (
        0 => 
        array (
          0 => 'onAppResponse',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.exception' => 
      array (
        0 => 
        array (
          0 => 'onAppException',
          1 => 'NORMAL',
        ),
      ),
      'admin.customer.edit.index.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerEditIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.customer.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminCustomerEditIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditIndexInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductProductClassEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.update' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductProductClassEditUpdate',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.product.class.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductProductClassEditInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.order.edit.index.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminOrderEditIndexComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.mypage.mypage.history.initialize' => 
      array (
        0 => 
        array (
          0 => 'onFrontMypageMypageHistoryInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.cart.buystep.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontCartBuystepComplete',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_list.before' => 
      array (
        0 => 
        array (
          0 => 'onProductList',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'onProductDetail',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/index.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMyPageIndex',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/navi.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMyPageNavi',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/change.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_change_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/change_complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_change_complete_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/delivery.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_delivery_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/delivery_edit.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_delivery_edit_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/favorite.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_favorite_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/login.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_login_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/withdraw.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_withdraw_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/withdraw_complete.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_withdraw_complete_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/withdraw_confirm.twig' => 
      array (
        0 => 
        array (
          0 => 'onMypage_withdraw_confirm_twig',
          1 => 'NORMAL',
        ),
      ),
      'Mypage/history.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderMypageHistoryTwigIndexRender',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);
<?php

return [

    'register'                          => 'user/register',
    'login'                             => 'user/login',
    'logout'                            => 'user/logout',
    'my-account'                        => 'user/myAccount',

    'cart/add/([0-9]+)'                 => 'cart/add/$1',
    'cart/addajax/([0-9]+)'             => 'cart/addajax/$1',
    'cart/delete/([0-9]+)'              => 'cart/delete/$1',
    'cart/inc/([0-9]+)'                 => 'cart/inc/$1',
    'compare'                           => 'cart/compare',
    'checkout'                          => 'cart/checkout',
    'cart'                              => 'cart/index',
    'complete-order'                    => 'cart/completeOrder',
    'wishlist'                          => 'cart/wishlist',

    'blog/([0-9]+)'                     => 'about/singleBlog/$1',
    'blog-full'                         => 'about/blogFull',
    'blog-full-right'                   => 'about/blogFullRight',
    'blog-right'                        => 'about/blogRight',
    'single-blog-right'                 => 'about/singleBlogRight',
    'contact-us'                        => 'about/contact',
    'about-us'                          => 'about/index',
    'blog/page-([0-9]+)'                => 'about/blog/$1',
    'blog'                              => 'about/blog',


    'product/([0-9]+)'                  => 'shop/single/$1',
    'shop-list-right-sidebar'           => 'shop/listRightSidebar',
    'shop-list-sidebar'                 => 'shop/listSidebar',
    'shop-full-grid'                    => 'shop/fullGrid',
    'shop-full-list'                    => 'shop/fullList',
    'shop-list'                         => 'shop/list',
    'single-product'                    => 'shop/single',
    'shop/page-([0-9]+)'                => 'shop/index/$1',
    'shop'                              => 'shop/index',


    'admin/category/create'             => 'admin/createCat',
    'admin/category/update/([0-9]+)'    => 'admin/updateCat/$1',
    'admin/category/delete/([0-9]+)'    => 'admin/deleteCat/$1',
    'admin/category'                    => 'admin/category',
    'admin/order/view/([0-9]+)'         => 'admin/viewOr/$1',
    'admin/order/update/([0-9]+)'       => 'admin/updateOr/$1',
    'admin/order/delete/([0-9]+)'       => 'admin/deleteOr/$1',
    'admin/order'                       => 'admin/order',
    'admin/product/create'              => 'admin/createProd',
    'admin/product/update/([0-9]+)'     => 'admin/updateProd/$1',
    'admin/product/delete/([0-9]+)'     => 'admin/deleteProd/$1',
    'admin/product'                     => 'admin/product',
    'admin'                             => 'admin/index',

    'category/([0-9]+)/page-([0-9]+)'   => 'category/single/$1/$2',
    'category/([0-9]+)'                 => 'category/single/$1',
    'category/page-([0-9]+)'            => 'category/index/$1',
    'category'                          => 'category/index',

  //  'main/([0-9]+)'             => 'main/view/$1',
 //   'main'                      => 'main/index',

  //  '([0-9]+)'          => 'main/view/$1',           // actionView в ArticleController
    ''                  => 'main/index',             // actionIndex в ArticleController
    '([\w]+)?'    => 'main/404'
];
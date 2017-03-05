<?php

return [
    '([0-9]+)' => 'article/view/$1',
    '' => 'article/index',
    'article/([0-9]+)' => 'article/view/$1',        // actionView в ArticleController

    'article' => 'article/index',                   // actionIndex в ArticleController
//    'news' => 'news/index',                     // actionIndex в NewsController
//    'product' => 'product/list',                // actionList в ProductController
];
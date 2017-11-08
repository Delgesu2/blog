<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 08/11/17
 * Time: 21:35
 */
return [
    'homepage' => [
        'path'      => '/',
        'method'    => 'GET',
        'controller'=> \Framework\Controller\HomeController::class
    ],

    'article_list' => [
        'path'      =>'/post/list',
        'method'    => 'GET',
        'controller'=> \Framework\Controller\ArticleListController::class
    ],

    'article_details' => [
        'path'       => 'post/details/{id}',
        'method'     => 'GET',
        'controller' => \Framework\Controller\ArticleDetailsController::class
    ]
];

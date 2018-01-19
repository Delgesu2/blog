<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 08/11/17
 * Time: 21:35
 */

// tableau des routes du site

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
        'path'       => '/post/details/{id:\d+}',
        'method'     => 'GET',
        'controller' => \Framework\Controller\ArticleDetailsController::class
    ],

    'acces_admin' => [
        'path'       => '/admin',
        'method'     => 'POST',
        'controller' => \Framework\Controller\AccessAdminController::class
    ],

    'admin_list'    => [
        'path'         => '/admin/list',
        'method'       => 'GET',
        'controller'   => \Framework\Controller\ListAdminController::class
    ],

    'create_billet'  => [
        'path'         => '/admin/create',
        'method'       => 'POST',
        'controller'   => \Framework\Controller\CreateBilletController::class
    ],

    'write'          => [
        'path'         =>'/admin/write',
        'method'       => 'GET',
        'controller'   => \Framework\Controller\WriteController::class
    ],

    'delete_billet'  => [
        'path'         => '/admin/delete/{id:\d+}',
        'method'       => 'POST',
        'controller'   => \Framework\Controller\DeleteBilletController::class
    ],

    'update_billet' => [
        'path'         => '/admin/updatepost/{id:\d+}',
        'method'       => 'GET',
        'controller'   => \Framework\Controller\UpdateBilletController::class
    ],

    'update_user'   => [
        'path'         => '/admin/updateuser',
        'method'       => 'POST',
        'controller'   => \Framework\Controller\AdminChange::class
    ],

    'updateuser_action'   => [
        'path'         => '/admin/updateuser_action',
        'method'       => 'POST',
        'controller'   => \Framework\Controller\AdminChangeAction::class
    ],

    'exit_admin'    => [
        'path'         => '/admin/exit',
        'method'       => '',
        'controller'   => \Framework\Controller\AdminExit::class,
]
];

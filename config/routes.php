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
        'controller'=> \Framework\Controller\HomeController::class
    ],

    'article_list' => [
        'path'      =>'/post/list',
        'controller'=> \Framework\Controller\ArticleListController::class
    ],

    'article_details' => [
        'path'       => '/post/details/:id',
        'controller' => \Framework\Controller\ArticleDetailsController::class,
        'requirements' => '#/\d+$#'
    ],

    'contact' => [
        'path'       => '/contact',
        'controller' => \Framework\Controller\ContactController::class,
    ],

    'envoi' => [
        'path'      => '/contact/envoi',
        'controller'=> \Framework\Controller\ContactController::class
    ],

    'messagesent' => [
        'path'      => '/contact/sent',
        'controller'=> \Framework\Controller\MessageSentController::class
    ],

    'acces_admin' => [
        'path'       => '/admin',
        'controller' => \Framework\Controller\AccessAdminController::class
    ],

    'admin_list'    => [
        'path'         => '/admin/list',
        'controller'   => \Framework\Controller\ListAdminController::class
    ],

    'create_billet'  => [
        'path'         => '/admin/create',
        'controller'   => \Framework\Controller\CreateBilletController::class
    ],

    'write'          => [
        'path'         =>'/admin/write',
        'controller'   => \Framework\Controller\CreateBilletController::class
    ],

    'delete_billet'  => [
        'path'         => '/admin/delete/:id',
        'controller'   => \Framework\Controller\DeleteBilletController::class,
        'requirements' => '#/\d+$#'
    ],

    'update_billet' => [
        'path'         => '/admin/updatepost/:id',
        'controller'   => \Framework\Controller\UpdateBilletController::class,
        'requirements' => '#/\d+$#'
    ],

    'update_billet_action' => [
        'path'         => '/admin/updatepost_action',
        'controller'   => \Framework\Controller\UpdateBilletController::class,
    ],

    'update_user'   => [
        'path'         => '/admin/updateuser',
        'controller'   => \Framework\Controller\AdminChange::class
    ],

    'updateuser_action'   => [
        'path'         => '/admin/updateuser_action',
        'controller'   => \Framework\Controller\AdminChangeAction::class
    ],

    'exit_admin'    => [
        'path'         => '/admin/exit',
        'controller'   => \Framework\Controller\AdminExit::class,
]
];

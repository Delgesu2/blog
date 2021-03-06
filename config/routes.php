<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 08/11/17
 * Time: 21:35
 */

// Site's paths map

return [
    'homepage' => [
        'path'      => '/',
        'controller'=> \Framework\Controller\HomepageController::class
    ],

    '404' => [
        'path'      => '/404',
        'controller'=> \Framework\Controller\Error404Controller::class
    ],

    'article_list' => [
        'path'      =>'/post/list',
        'controller'=> \Framework\Controller\HomepageController::class
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

    'connexion_page' => [
        'path'       => '/connexion',
        'controller' =>\Framework\Controller\LoginPageController::class
    ],

    'acces_admin' => [
        'path'       => '/admin',
        'controller' => \Framework\Controller\AccessAdminController::class
    ],

    'admin_forget'  => [
        'path'         => '/admin/forget',
        'controller'   => \Framework\Controller\AccessAdminForgetController::class
    ],

    'admin_forget_check' => [
        'path'         => '/admin/forget/check',
        'controller'   => \Framework\Controller\AccessAdminForgetController::class
    ],

    'admin_forget_token' => [
        'path'         => '/admin/forget/token',
        'controller'   => \Framework\Controller\TokenController::class
    ],

    'password_reset' => [
        'path'         => '/pswrreset',
        'controller'   => \Framework\Controller\PasswordReset::class
    ],

    'password_reset_action' => [
        'path'          => '/pswrd_reset_action',
        'controller'    => \Framework\Controller\PasswordReset::class
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

<?php

use Lib\Auth\Authentication;

// Routes
$app->get('/', 'App\Controller\EventController:index');

$app->get('/eventos', 'App\Controller\EventController:index')->setName('eventos');

$app->get('/evento/{id}/inscrever', 'App\Controller\EventController:inscrever')->setName('eventos.inscrever');

// Authentication Routes
$app->get('/cadastrar', 'App\Controller\AuthController:signup')->setName('auth.signup')->add($authLogin);

$app->post('/cadastrar', 'App\Controller\AuthController:signupPost')->setName('auth.signup.post')->add($authLogin);

$app->get('/login', 'App\Controller\AuthController:login')->setName('auth.login')->add($authLogin);

$app->post('/login', 'App\Controller\AuthController:loginPost')->setName('auth.login.post')->add($authLogin);

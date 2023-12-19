<?php

use CodeIgniter\Router\RouteCollection;
use Config\Auth;
use App\Controllers\DashboardController;
use App\Controllers\DiagnosaController;

/**
 * @var RouteCollection $routes
 */

// Myth:Auth routes file.
$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});

// General Routes
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');

// Admin Routes
$routes->get('/admin', 'AdminController::index', ['filter' => 'role:admin']);

// User Routes
$routes->get('/user', 'UserController::index', ['filter' => 'role:user']);

// Routes Diagnosa
$routes->get('/diagnosa_form', 'DiagnosaController::index', ['filter' => 'role:user']); // Rute untuk menampilkan form diagnosa
$routes->post('/diagnosa_result', 'DiagnosaController::prosesDiagnosa', ['filter' => 'role:user']); // Rute untuk proses diagnosa

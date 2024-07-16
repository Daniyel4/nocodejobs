<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;

use App\Controllers\AuthController;

function registerRoutes(App $app){


    $app->get('/onboarding', [AuthController::class, 'onboarding']);


}
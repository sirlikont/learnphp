<?php

use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);
Router::get('/us', [PublicController::class, 'us']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/formanswer', [PublicController::class, 'answer']);
Router::get('/formanswer', [PublicController::class, 'getAnswer']);
<?php

use App\Controller\PagesController;
use Oak\Contracts\Http\Routing\RouterInterface;

$router = $app->get(RouterInterface::class);

$router->get('', PagesController::class, 'index')
    ->middleware(['default',])
;

$router->get('(?<slug>.*)/', PagesController::class, 'view')
    ->middleware(['default',])
;

$router->get('(?<slug>.*)', PagesController::class, 'view')
    ->middleware(['default',])
;
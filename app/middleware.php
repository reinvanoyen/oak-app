<?php

use Oak\Http\Middleware\TrailingSlashMiddleware;
use Oak\Http\Middleware\OakHeaderMiddleware;

$router->middleware('default', [
    \Oak\Session\Middleware\StartSession::class,
    \Oak\Session\Middleware\SessionGarbageLottery::class,
    TrailingSlashMiddleware::class,
    OakHeaderMiddleware::class,
]);
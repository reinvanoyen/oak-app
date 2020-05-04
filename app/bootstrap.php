<?php

use Oak\Application;

$app = new Application(
    __DIR__.'/../',
    __DIR__.'/../config/',
    __DIR__.'/../cache/'
);

require_once __DIR__.'/services.php';
require_once __DIR__.'/routes.php';
require_once __DIR__.'/middleware.php';

$app->bootstrap();

return $app;
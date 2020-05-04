<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../app/bootstrap.php';

$app->get(\Oak\Contracts\Http\KernelInterface::class)
    ->handle(
        $app->get(\Psr\Http\Message\ServerRequestInterface::class)
    );
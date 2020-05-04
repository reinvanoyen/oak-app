<?php

return [
    'name' => getenv('APP_NAME'),
    'max_lifetime' => 1000,
    'lottery' => 200,
    'handler' => \Oak\Session\FileSessionHandler::class,
    'path' => __DIR__.'/../cache/sessions',
];
<?php

$app->register([

    \Oak\Config\ConfigServiceProvider::class,
    \Oak\Console\ConsoleServiceProvider::class,
    \Oak\Filesystem\FilesystemServiceProvider::class,
    \Oak\Http\HttpServiceProvider::class,
    \Oak\Session\SessionServiceProvider::class,
    \Oak\Cookie\CookieServiceProvider::class,
    \Oak\Migration\MigrationServiceProvider::class,
    \Oak\Dispatcher\DispatcherServiceProvider::class,

    // Packages

    // Application
    \App\AppServiceProvider::class,
]);
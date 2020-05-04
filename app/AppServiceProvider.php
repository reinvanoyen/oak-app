<?php

namespace App;

use Oak\Contracts\Container\ContainerInterface;
use Oak\ServiceProvider;
use ReinVanOyen\Middlewares\HtmlMinifier\Contracts\HtmlMinifierInterface;
use ReinVanOyen\Middlewares\HtmlMinifier\HtmlMinifier;

class AppServiceProvider extends ServiceProvider
{
    public function boot(ContainerInterface $app)
    {
        //
    }

    public function register(ContainerInterface $app)
    {
        //
    }
}
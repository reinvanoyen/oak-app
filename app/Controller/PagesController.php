<?php

namespace App\Controller;

use Oak\Filesystem\Facade\Filesystem;
use Oak\Http\Controller\BaseController;
use Oak\Session\Facade\Session;

class PagesController extends BaseController
{
    public function index()
    {
        $query = $this->request->getQueryParams();

        if (isset($query['name'])) {
            Session::set('name', $query['name']);
            return '"'.$query['name'].'" set as name in the session';
        }

        return Filesystem::get(__DIR__.'/../View/index.php');
    }

    public function view($slug)
    {
        if (Session::has('name')) {
            return Session::get('name').' is now viewing the page with slug: '.$slug;
        }

        return 'You are now viewing the page with slug: '.$slug;
    }
}
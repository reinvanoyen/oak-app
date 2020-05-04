<?php

namespace App\Controller;

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

        return 'Welcome to your OAK application. Try adding a name query param to the request.';
    }

    public function view($slug)
    {
        if (Session::has('name')) {
            return Session::get('name').' is now viewing the page with slug: '.$slug;
        }

        return 'You are now viewing the page with slug: '.$slug;
    }
}
<?php

namespace App\Applications\Site\Http\Controllers;

use App\Domains\Users\UsersRepository;

class HomeController extends BaseController
{
    public function index(UsersRepository $users)
    {
        $users = $users->getAll(true, 3);
        return $this->view('home', compact('users'));
    }
}
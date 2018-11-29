<?php

namespace App\Applications\Api\Http\Controllers;

use App\Domains\Users\UsersRepository;

class UsersController extends BaseController
{
    /**
     * @var UsersRepository
     */
    private $users;

    public function __construct(UsersRepository $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return $this->users->getAll(true, 3);
    }
}
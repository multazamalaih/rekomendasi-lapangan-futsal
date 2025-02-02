<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index(): string
    {
        $dataUser = $this->user->findAll();
        $data = [
            'user' => $dataUser,
        ];
        return view('pages/home', $data);
    }
}

<?php

namespace App;

use App\Models;

class Pengguna
{
    public $username;
    public $password;
    protected $email;

    function __construct($user, $password, $email)
    {
        $this->username = $user;
        $this->password= $password;
        $this->email = $email;
    }

    public function login()
    {
        return $this->login;
    }

    public function register()
    {
        return $this->regis;
    }
}
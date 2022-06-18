<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\Migrations\BaseCommand;

class MainController
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}

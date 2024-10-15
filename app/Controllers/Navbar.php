<?php

namespace App\Controllers;

class Navbar extends BaseController
{
    public function index(): string
    {
        return view('navbar/navbar');
    }
}

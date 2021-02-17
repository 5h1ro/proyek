<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class UserController extends Controller
{
    public function admin()
    {
        return view('admin.pages.admin');
    }
}

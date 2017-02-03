<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return "Welcome to Admin page";
    }
}

<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $data = [];
        return view('dash.home.index', $data);
    }
}

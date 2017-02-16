<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index() {
        $data = array();
        return view('dash.menu.index', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends CrudController
{
    protected $resource = 'menus';
    
    public function __construct() {
        // $this->data['test'] = 'hello world';
    }


}

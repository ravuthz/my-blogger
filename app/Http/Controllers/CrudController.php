<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected $resource = 'home';

    public function index()
    {
        return view($this->resource . '.index');
    }

    public function create()
    {
        return view($this->resource . '.create');
    }

    public function show($id)
    {
        return view($this->resource . '.show');
    }

    public function edit($id)
    {
        return view($this->resource . '.edit');
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

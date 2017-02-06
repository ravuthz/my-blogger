<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected $data = [];

    public function index()
    {
        return view($this->resource . '.index', $this->data);
    }

    public function create()
    {
        return view($this->resource . '.create', $this->data);
    }

    public function show($id)
    {
        return view($this->resource . '.show', $this->data);
    }

    public function edit($id)
    {
        return view($this->resource . '.edit', $this->data);
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

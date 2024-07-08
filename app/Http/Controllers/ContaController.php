<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index(){
        return view('contas.index');
    }

    public function create(){
        return view('contas.create');
    }

    public function store(){
        dd('cadastrar');
    }

    public function show(){
        return view('contas.show');
    }

    public function edit(){
        return view('contas.edit');
    }

    public function update(){
        dd('editar');
    }

    public function destroy(){
        dd('apagar');
    }

}

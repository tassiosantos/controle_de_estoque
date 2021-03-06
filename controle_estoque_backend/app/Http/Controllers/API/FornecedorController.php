<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\Http\Requests\FornecedorRequests;
use App\Http\Controllers\Controller;

class FornecedorController extends Controller
{
    //Fornecedores:

    public function index()
    {
        $res = Fornecedor::all();
        return($res);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $input = $request -> all();
        Fornecedor::create($input);
        return redirect('fornecedores');
    }

    public function lista(){
        
        return Fornecedor::all();
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedor::find($id);
        $fornecedor->update($request->all());
        
        return redirect('fornecedores');
    }
}

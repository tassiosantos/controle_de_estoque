<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequests;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{

    public function index(){
        return view('welcome');
    }

  
    public function cadastrar(){
        
    }       

    public function editar($id){
        
        $cliente = Cliente::find($id);
        return $cliente;

    }

    public function ler(){
        $clientes = Cliente::all();
    }


    public function lista(){
        return Cliente::all(); ;

    }
} 
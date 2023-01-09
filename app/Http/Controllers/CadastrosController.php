<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    public function index()
    {
        
        $records = Cadastro::all();

        dd($records);

        //return view('acessos.index', ['acessos'=>$users]);
    }

    public function create()
    {

        //dd($users);

        return view('cadastros.create');
    }

    public function store(Request $request)
    {

        dd($request);

        User::create($request->all());
    }
}

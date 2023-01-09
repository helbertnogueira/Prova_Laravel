<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AcessosController extends Controller
{
    public function index()
    {
        
        $users = User::all();

        dd($users);

        //return view('acessos.index', ['acessos'=>$users]);
    }

    public function create()
    {

        //dd($users);

        return view('acessos.create');
    }

    public function store(Request $request)
    {

        dd($request);

        User::create($request->all());
    }

    public function edit($id)
    {

        $users = User::where('id', $id)->first(); 
        
        dd($users);

        
    }
}

@extends('layouts.app')

@section('title', 'Usuários Cadastrados')

@section('content')

<h1>Listagem de Usuários Cadastrados</h1>
<br>
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">email</th>
      <th scope="col">password</th>    
    </tr>
  </thead>
  <tbody class="tbody">
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <th scope="row">{{ $user->email }}</th>
      <th scope="row">{{ $user->password }}</th>
      <th>
      <button type="submit" value = "editar" class="button-cadastro-login">Editar</button>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
@extends('layouts.app')

@section('title', 'Clientes Cadastrados')

@section('content')
<h1>Listagem de Clientes Cadastrados</h1>
<br>
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">cpf_cnpj</th>
      <th scope="col">nome_razao_social</th>
      <th scope="col">rg</th>
      <th scope="col">ie</th>
      <th scope="col">rua_avenida</th>
      <th scope="col">numero</th>
      <th scope="col">bairro</th>
      <th scope="col">cep</th>
      <th scope="col">complemento</th>
      <th scope="col">cidade</th>
      <th scope="col">estado</th>
    </tr>
  </thead>
  <tbody class="tbody">
    @foreach($records as $cadastro)
    <tr>
      <th scope="row">{{ $cadastro->id }}</th>
      <th scope="row">{{ $cadastro->cpf_cnpj }}</th>
      <th scope="row">{{ $cadastro->nome_razao_social }}</th>
      <th scope="row">{{ $cadastro->rg }}</th>
      <th scope="row">{{ $cadastro->ie }}</th>
      <th scope="row">{{ $cadastro->rua_avenida }}</th>
      <th scope="row">{{ $cadastro->numero }}</th>
      <th scope="row">{{ $cadastro->bairro }}</th>
      <th scope="row">{{ $cadastro->cep }}</th>
      <th scope="row">{{ $cadastro->complemento }}</th>
      <th scope="row">{{ $cadastro->cidade }}</th>
      <th scope="row">{{ $cadastro->estado }}</th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection